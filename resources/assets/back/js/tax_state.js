import {mkAjaxRequest} from "../../js/ajax"
import DataTable from 'datatables.net-dt';

let taxStateListTable = new DataTable('#taxStateListTable', {
    responsive: true
});

$(document).ready(function() {
    $(".modalTaxStateFormBtn").on('click', function(e) {
        e.preventDefault();
        var taxStateId = $(this).data('tax_state_id');
        let effect = $(this).data('bs-effect');
        $("#modalTaxStateForm").addClass(effect);
        loadTaxStateCreateEditForm(taxStateId);
    });

    $("#modalTaxStateForm").on('hidden.bs.modal', function() {
        let removeClass = $(this).attr('class').match(/(^|\s)effect-\S+/g);
        if (removeClass) {
            removeClass = removeClass[0].trim();
            $(this).removeClass(removeClass);
        }
    });
});

function loadTaxStateCreateEditForm(taxStateId){
    $("#modalTaxStateSubmit").prop('disabled', true);
    var formDataObj = new FormData();
    formDataObj.append('action', 'load_tax_state_create_edit_form');
    formDataObj.append('tax_state_id', taxStateId);

    $("#modalTaxStateBody").html('<div class="text-center"><img src="../../../build/assets/images/svgs/loader.svg" alt=""></div>');

    mkAjaxRequest('POST', window.commonAsset.ajax, formDataObj, function(error, response) {
        loadTaxStateEditCreateForm(error, response);
    });
}

function loadTaxStateEditCreateForm(error, response) {
    $("#modalTaxStateSubmit").prop('disabled', false);
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
        $("#modalTaxStateTitle").html(response.form_title);
        $("#modalTaxStateSubmit").html(response.form_btn);
        $("#modalTaxStateBody").html(response.form_body);
        return true;
    }
}
