<div class="modal fade" id="modaldCouponForm" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title" id="modalCouponTitle">Please wait...</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-start" id="modalCouponBody">
                {{-- @include('back.coupons.modal_coupon_form_element') --}}
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="modalCouponSubmit">Wait</button>
                <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
