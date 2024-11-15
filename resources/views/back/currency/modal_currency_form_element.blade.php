<form action="" class="modalCurrencyForm" onsubmit="return false;">
    <div class="row gy-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencyCountry" class="form-label">@lang('super.payc_curr_country'):</label>
            <input type="text"
                    name="country"
                    class="form-control"
                    id="currencyCountry"
                    data-is_required="1"
                    @if($currency)
                        value="{{ $currency->country }}"
                    @endif
                    placeholder="@lang('super.payc_curr_country')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencyCurrency" class="form-label">@lang('super.payc_curr_currency_name'):</label>
            <input type="text"
                    name="currency"
                    class="form-control"
                    id="currencyCurrency"
                    data-is_required="1"
                    @if($currency)
                        value="{{ $currency->currency }}"
                    @endif
                    placeholder="@lang('super.payc_curr_currency_name')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencyCode" class="form-label">@lang('super.payc_curr_currency_code'):</label>
            <input type="text"
                    name="code"
                    class="form-control"
                    id="currencyCode"
                    data-is_required="1"
                    @if($currency)
                        value="{{ $currency->code }}"
                    @endif
                    placeholder="@lang('super.payc_curr_currency_code')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencySymbol" class="form-label">@lang('super.payc_curr_currency_sign'):</label>
            <input type="text"
                    name="symbol"
                    class="form-control"
                    id="currencySymbol"
                    data-is_required="1"
                    @if($currency)
                        value="{{ $currency->symbol }}"
                    @endif
                    placeholder="@lang('super.payc_curr_currency_sign')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencyThousandSeparator" class="form-label">@lang('super.payc_curr_thousand_separator'):</label>
            <input type="text"
                    name="thousand_separator"
                    class="form-control"
                    id="currencyThousandSeparator"
                    data-is_required="1"
                    @if($currency)
                        value="{{ $currency->thousand_separator }}"
                    @endif
                    placeholder="@lang('super.payc_curr_thousand_separator')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <label for="currencyDecimalSeparator" class="form-label">@lang('super.payc_curr_decimal_separator'):</label>
            <input type="text"
                    name="decimal_separator"
                    class="form-control"
                    id="currencyDecimalSeparator"
                    data-is_required="1"
                    @if($currency)
                        value="{{ $currency->decimal_separator }}"
                    @endif
                    placeholder="@lang('super.payc_curr_decimal_separator')">
            <span class="error-message" style="color: red; display: none;">This field is required</span>
        </div>
     </div>
     <input type="hidden"
            name="id"
            id="currencyID"
            @if($currency)
                value="{{ $currency->id }}"
            @else
                value="0"
            @endif
            >
</form>
