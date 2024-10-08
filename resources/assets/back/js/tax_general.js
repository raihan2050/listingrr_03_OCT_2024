import {mkAjaxRequest} from "../../js/ajax"
import DataTable from 'datatables.net-dt';

let taxGeneralListTable = new DataTable('#taxGeneralListTable', {
    responsive: true
});

$(document).ready(function() {
    $(".modalTaxGeneralFormBtn").on('click', function(e) {
        e.preventDefault();
        var taxGeneralId = $(this).data('tax_general_id');
        let effect = $(this).data('bs-effect');
        $("#modalTaxGeneralForm").addClass(effect);
        loadTaxGeneralCreateEditForm(taxGeneralId);
    });

    $("#modalTaxGeneralForm").on('hidden.bs.modal', function() {
        let removeClass = $(this).attr('class').match(/(^|\s)effect-\S+/g);
        if (removeClass) {
            removeClass = removeClass[0].trim();
            $(this).removeClass(removeClass);
        }
    });
});

function loadTaxGeneralCreateEditForm(taxGeneralId){
    $("#modalTaxGeneralSubmit").prop('disabled', true);
    var formDataObj = new FormData();
    formDataObj.append('action', 'load_tax_general_create_edit_form');
    formDataObj.append('tax_general_id', taxGeneralId);

    $("#modalTaxGeneralBody").html('<div class="text-center"><img src="../../../build/assets/images/svgs/loader.svg" alt=""></div>');

    mkAjaxRequest('POST', window.commonAsset.ajax, formDataObj, function(error, response) {
        loadTaxGeneralEditCreateForm(error, response);
    });
}

function loadTaxGeneralEditCreateForm(error, response) {
    $("#modalTaxGeneralSubmit").prop('disabled', false);
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
        $("#modalTaxGeneralTitle").html(response.form_title);
        $("#modalTaxGeneralSubmit").html(response.form_btn);
        $("#modalTaxGeneralBody").html(response.form_body);
        return true;
    }
}
