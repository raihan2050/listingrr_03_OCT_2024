import {mkAjaxRequest} from "../../js/ajax"
import DataTable from 'datatables.net-dt';
import 'bootstrap-daterangepicker';

let table = new DataTable('#couponListTable', {
    responsive: true
});

$(document).ready(function() {
    // Showing modal effects
    $(".modaldCouponFormBtn").on('click', function(e) {
        e.preventDefault();
        var couponId = $(this).data('coupon_id');
        let effect = $(this).data('bs-effect');
        $("#modaldCouponForm").addClass(effect);
        loadCouponCreateEditForm(couponId);
    });

    // Hide modal effects
    $("#modaldCouponForm").on('hidden.bs.modal', function() {
        let removeClass = $(this).attr('class').match(/(^|\s)effect-\S+/g);
        if (removeClass) {
            removeClass = removeClass[0].trim();
            $(this).removeClass(removeClass);
        }
    });

    $('#couponValidateTill').daterangepicker({
        opens: 'left'
    }, function(start, end) {
        console.log("Selected date range: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});

function loadCouponCreateEditForm(couponId){
    $("#modalCouponSubmit").prop('disabled', true);
    var formDataObj = new FormData();
    formDataObj.append('action', 'load_coupon_create_edit_form');
    formDataObj.append('coupon_id', couponId);

    $("#modalCouponBody").html('<div class="text-center"><img src="../../build/assets/images/svgs/loader.svg" alt=""></div>');

    mkAjaxRequest('POST', window.commonAsset.ajax, formDataObj, function(error, response) {
        loadCouponEditCreateForm(error, response);
    });
}

function loadCouponEditCreateForm(error, response) {
    $("#modalCouponSubmit").prop('disabled', false);
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
        $("#modalCouponTitle").html(response.form_title);
        $("#modalCouponSubmit").html(response.form_btn);
        $("#modalCouponBody").html(response.form_body);
        destroyCouponDateRangePicker();
        initializeCouponDateRangePicker();
        return true;
    }
}
function destroyCouponDateRangePicker() {
    if ($('#couponValidateTill').data('daterangepicker')) {
        $('#couponValidateTill').data('daterangepicker').remove();
    }
}
function initializeCouponDateRangePicker() {
    $('#couponValidateTill').daterangepicker({
        opens: 'left'
    }, function(start, end) {
        console.log("Selected date range: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
}
