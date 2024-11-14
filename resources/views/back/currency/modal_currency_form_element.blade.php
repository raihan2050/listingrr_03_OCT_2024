<form action="" class="modalCurrencyForm" onsubmit="return false;">
    <div class="row gy-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencyName" class="form-label">@lang('super.payc_curr_currency_name'):</label>
            <input type="text"
                    class="form-control"
                    id="currencyName"
                    data-is_required="1"
                    placeholder="@lang('super.payc_curr_currency_name')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencySign" class="form-label">@lang('super.payc_curr_currency_sign'):</label>
            <input type="text"
                    class="form-control"
                    id="currencySign"
                    data-is_required="1"
                    placeholder="@lang('super.payc_curr_currency_sign')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencyValue" class="form-label">@lang('super.payc_curr_currency_value'):</label>
            <input type="text"
                    class="form-control"
                    id="currencyValue"
                    data-is_required="1"
                    placeholder="@lang('super.payc_curr_currency_value')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
     </div>
</form>
