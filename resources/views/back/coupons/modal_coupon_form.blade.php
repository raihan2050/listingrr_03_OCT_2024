<div class="modal fade" id="modaldCouponForm" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title" id="modalCouponTitle">@lang('super.payc_please_wait')...</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-start" id="modalCouponBody">
                {{-- @include('back.coupons.modal_coupon_form_element') --}}
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="modalCouponSubmit">@lang('super.payc_please_wait')</button>
                <button class="btn btn-light" data-bs-dismiss="modal">@lang('super.payc_close')</button>
            </div>
        </div>
    </div>
</div>
