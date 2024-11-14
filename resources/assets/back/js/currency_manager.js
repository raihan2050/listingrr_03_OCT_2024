import {showToast} from "../../js/show_toast"
import {mkAjaxRequest} from "../../js/ajax"
import DataTable from 'datatables.net-dt';

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
    "order": [[0, "desc"]],
    columns: [
        { data: 'curr_name' },
        { data: 'curr_sign' },
        { data: 'curr_value' },
        { data: 'curr_default' },
        { data: 'action' },
    ],
});

$(document).ready(function() {
    $(".modalCurrencyFormBtn").on('click', function(e) {
        e.preventDefault();
        var currencyId = $(this).data('currency_id');
        let effect = $(this).data('bs-effect');
        $("#modalCurrencyForm").addClass(effect);
        loadCurrencyCreateEditForm(currencyId);
    });
    $("#modalCurrencySubmit").on('click', function(e) {
        e.preventDefault();
        var currencyName = $("#currencyName").val();
        var currencySign = $("#currencySign").val();
        var currencyValue = $("#currencyValue").val();
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
        return false;
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
                removeFormChanged(formIndex, $button);

                if($("#"+$targetLeftTabPulse).length > 0){
                    removeFromTargetLeftTabPulse($targetLeftTabPulse, $targetPulse);
                    addClassFormChangedByLeftTabPulse($targetLeftTabPulse);
                }

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

function loadCurrencyCreateEditForm(currencyId){
    $("#modalCurrencySubmit").prop('disabled', true);
    var formDataObj = new FormData();
    formDataObj.append('action', 'load_currency_create_edit_form');
    formDataObj.append('currency_id', currencyId);

    $("#modalCurrencyBody").html('<div class="text-center"><img src="../../../build/assets/images/svgs/loader.svg" alt=""></div>');

    mkAjaxRequest('POST', window.commonAsset.ajax, formDataObj, function(error, response) {
        loadCurrencyEditCreateForm(error, response);
    });
}

function loadCurrencyEditCreateForm(error, response) {
    $("#modalCurrencySubmit").prop('disabled', false);
    if (error) {
        console.error('Error:', error);
    } else {
        if (response.type == 'error') {
            Swal.fire({
                icon: "error",
                title: response.msg
            });
            return false;
        }
        $("#modalCurrencyTitle").html(response.form_title);
        $("#modalCurrencySubmit").html(response.form_btn);
        $("#modalCurrencyBody").html(response.form_body);
        return true;
    }
}
