<div class="row gy-4">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponTitle" @if(in_array(getCurrentLang(), ['en'])) class="form-label" @endif>@lang('super.payc_coupon_title'):</label>
        <input type="text"
                class="form-control"
                id="couponTitle"
                placeholder="Coupon Title">
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponCode" @if(in_array(getCurrentLang(), ['en'])) class="form-label" @endif>@lang('super.payc_coupon_code'):</label>
        <input type="text"
                class="form-control"
                id="couponCode"
                placeholder="Coupon Code">
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponMaxTime" @if(in_array(getCurrentLang(), ['en'])) class="form-label" @endif>@lang('super.payc_coupon_number_of_times'):</label>
        <input type="number"
                class="form-control"
                id="couponMaxTime"
                placeholder="Number Of Times">
    </div>
    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
        <label for="couponMultiTime" @if(in_array(getCurrentLang(), ['en'])) class="form-label" @endif>@lang('super.payc_coupon_user_can_use_multiple_times'):</label>
        <select name="couponMultiTime" class="form-control">
            <option value="1" selected="">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponValidateTill" @if(in_array(getCurrentLang(), ['en'])) class="form-label" @endif>@lang('super.payc_coupon_validate_till'):</label>
        <input type="text"
                class="form-control"
                id="couponValidateTill"
                placeholder="Validate Till">
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div id="applicableForLavel">
            <div>@lang('super.payc_coupon_applicable_for_user_who_register_between'):</div>
            <div id="validateTillResult">03/20/2024 to 04/19/2024(31 Days)</div>
        </div>
        <select name="new_customer" id="applicableFor" class="form-control">
            <option value="1" selected="">@lang('super.payc_coupon_only_new_customer')</option>
            <option value="2">@lang('super.payc_coupon_all_customer')</option>
            <option value="3">@lang('super.payc_coupon_target_customer')</option>
        </select>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <label for="couponShortDescription" @if(in_array(getCurrentLang(), ['en'])) class="form-label" @endif>@lang('super.payc_coupon_short_description_about_this_coupon_code'):</label>
        <textarea id="couponShortDescription"
                    class="form-control"
                    rows="4"
                    placeholder="@lang('super.payc_coupon_short_description_about_this_coupon_code')"
                    aria-label="@lang('super.payc_coupon_short_description_about_this_coupon_code')"></textarea>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponDiscountAmount" @if(in_array(getCurrentLang(), ['en'])) class="form-label" @endif>@lang('super.payc_coupon_discount_amount'):</label>
        <div class="input-group mb-3">
            <select class="form-control" id="">
                <option value="">@lang('super.payc_coupon_percentage_(%)')</option>
                <option value="">@lang('super.payc_coupon_fixed_amount')</option>
            </select>
            <input type="number" class="form-control" aria-label="@lang('super.payc_coupon_discount_amount')">
        </div>
    </div>
 </div>
