import {mkAjaxRequest} from "../../js/ajax"
import DataTable from 'datatables.net-dt';

let currencyListTable = new DataTable('#currencyListTable', {
    responsive: true
});

$(document).ready(function() {
    $(".modalCurrencyFormBtn").on('click', function(e) {
        e.preventDefault();
        var currencyId = $(this).data('currency_id');
        let effect = $(this).data('bs-effect');
        $("#modalCurrencyForm").addClass(effect);
        loadCurrencyCreateEditForm(currencyId);
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
