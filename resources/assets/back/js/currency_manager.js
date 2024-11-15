import {showToast} from "../../js/show_toast"
import {mkAjaxRequest} from "../../js/ajax"
import DataTable from 'datatables.net-dt';
import Swal from 'sweetalert2';

let currencyListTable = new DataTable('#currencyListTable', {
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
        url: window.commonAsset.ajax,
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        },
        data: function(d) {
            d.action = 'load_currencies';
        }
    },
    // "order": [[0, "desc"]],
    "language": {
        "emptyTable": translations.super.no_currency_to_display
    },
    columns: [
        { data: 'curr_name' },
        { data: 'curr_sign' },
        { data: 'curr_value' },
        { data: 'curr_default' },
        { data: 'action' },
    ],
});
function reloadCurrencyTable() {
    currencyListTable.ajax.reload();
}

$(function(){
    $(document).on('click', ".currencyStatus", function(e) {
        e.preventDefault();
        var is_default = $(this).data('is_default');
        var currencyId = $(this).data('currency_id');
        updateCurrencyStatus(is_default, currencyId);
    });
    $(document).on('click', ".currencyDelete", function(e) {
        e.preventDefault();
        var currencyId = $(this).data('currency_id');
        deleteCurrencyStatus(currencyId);
    });
    $(document).on('click', ".modalCurrencyFormBtn", function(e) {
        e.preventDefault();
        var currencyId = $(this).data('currency_id');
        let effect = $(this).data('bs-effect');
        $("#modalCurrencyForm").addClass(effect);
        loadCurrencyCreateEditForm(currencyId);
    });
    $("#modalCurrencySubmit").on('click', function(e) {
        e.preventDefault();
        var isValid = true;

        var $submitFormBtn = $(this);
        var targetform = $submitFormBtn.data('targetform');
        var $form = $('.' + targetform);
        $form.find('[data-is_required="1"]').each(function() {
            if (!$(this).val()) {
                isValid = false;
                $(this).addClass('error');
                $(this).siblings('.error-message').text(translations.super.this_field_is_required).show();
            } else {
                $(this).removeClass('error');
                $(this).siblings('.error-message').hide();
            }
        });

        if (!isValid) {
            showToast(translations.super.please_fill_in_all_required_fields, 'warning');
            return false;
        }

        var formData = new FormData($form[0]);
        $('.' + targetform).find(':input').each(function() {
            var inputName = this.name;
            if (!formData.has(inputName)) {
                if ($(this).is(':checkbox')) {
                    formData.append(inputName, $(this).is(':checked') ? $(this).val() : 'no');
                }
                else if ($(this).is(':radio')) {
                    if ($(this).is(':checked')) {
                        formData.append(inputName, $(this).val());
                    }
                }
                else {
                    formData.append(inputName, $(this).val());
                }
            }
        });

        formData.append('action', 'save_update_data');
        formData.append('target_form', targetform);
        $submitFormBtn.addClass('loader');
        $submitFormBtn.prop('disabled', true);

        mkAjaxRequest('POST', window.commonAsset.ajax, formData, function(error, response) {
            $submitFormBtn.prop('disabled', false);
            $submitFormBtn.removeClass('loader');
            if (error) {
                console.error(error);
            } else {
                if(response.type == 'error'){
                    showToast(response.msg, response.type);
                    return false;
                }
                $("#modalCurrencyForm").modal('hide');
                reloadCurrencyTable();
                showToast(response.msg, response.type);
            }
        });
    });
    $("#modalCurrencyForm").on('hidden.bs.modal', function() {
        let removeClass = $(this).attr('class').match(/(^|\s)effect-\S+/g);
        if (removeClass) {
            removeClass = removeClass[0].trim();
            $(this).removeClass(removeClass);
        }
    });
});

function deleteCurrencyStatus(currencyId) {
    Swal.fire({
        title: translations.super.do_you_want_to_delete,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: translations.super.close,
        denyButtonText: translations.super.delete
    }).then((result) => {
        if (result.isConfirmed) {

        } else {
            $(".deleteCurrent_"+currencyId).html('<i class="fa fa-spinner fa-spin" style="font-size:17px"></i>');
            var formDataObj = new FormData();
            formDataObj.append('action', 'delete_currency_status');
            formDataObj.append('id', currencyId);
            mkAjaxRequest('POST', window.commonAsset.ajax, formDataObj, function(error, response) {
                $("#modalCurrencySubmit").prop('disabled', false);
                if (error) {
                    console.error('Error:', error);
                } else {
                    if (response.type == 'error') {
                        showToast(response.msg, 'warning');
                        return false;
                    }
                    reloadCurrencyTable();
                    showToast(response.msg, response.type);
                    return true;
                }
            });
        }
    });
}

function updateCurrencyStatus(is_default, currencyId) {
    $(".currencyCurrentStatus_"+currencyId).html(translations.super.please_wait);
    var formDataObj = new FormData();
    formDataObj.append('action', 'update_currency_status');
    formDataObj.append('id', currencyId);
    formDataObj.append('is_default', is_default);

    mkAjaxRequest('POST', window.commonAsset.ajax, formDataObj, function(error, response) {
        $("#modalCurrencySubmit").prop('disabled', false);
        if (error) {
            console.error('Error:', error);
        } else {
            if (response.type == 'error') {
                showToast(response.msg, 'warning');
                return false;
            }
            $(".currencyCurrentStatus_"+currencyId).html(response.current_status);
            $(".currencyCurrentStatus_"+currencyId).removeClass('btn-primary');
            $(".currencyCurrentStatus_"+currencyId).removeClass('btn-secondary');
            $(".currencyCurrentStatus_"+currencyId).addClass(response.class_name);
            return true;
        }
    });
}

function loadCurrencyCreateEditForm(currencyId){
    $("#modalCurrencySubmit").prop('disabled', true);
    var formDataObj = new FormData();
    formDataObj.append('action', 'load_currency_create_edit_form');
    formDataObj.append('currency_id', currencyId);

    $("#modalCurrencyBody").html('<div class="text-center"><img src="../../../build/assets/images/svgs/loader.svg" alt=""></div>');

    mkAjaxRequest('POST', window.commonAsset.ajax, formDataObj, function(error, response) {
        $("#modalCurrencySubmit").prop('disabled', false);
        if (error) {
            console.error('Error:', error);
        } else {
            if (response.type == 'error') {
                showToast(response.msg, 'warning');
                setTimeout(function() {
                    $("#modalCurrencyForm").modal('hide');
                }, 500);
                return false;
            }
            $("#modalCurrencyTitle").html(response.form_title);
            $("#modalCurrencySubmit").html(response.form_btn);
            $("#modalCurrencyBody").html(response.form_body);
            return true;
        }
    });
}
