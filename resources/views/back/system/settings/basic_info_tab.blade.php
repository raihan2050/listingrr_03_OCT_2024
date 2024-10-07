<form>
    <div class="row gy-4">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <label for="appName">@lang('super.app_name')</label>
            <input type="text"
                    class="form-control"
                    id="appName"
                    placeholder="@lang('super.app_name')">
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <label for="appSlogan">@lang('super.app_slogan'):</label>
            <input type="text"
                    class="form-control"
                    id="appSlogan"
                    placeholder="@lang('super.app_slogan')">
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <label class="primaryColourCode">@lang('super.primary_colour_code')</label>
            <input class="form-control form-input-color"
                    id="primaryColourCode"
                    type="color"
                    value="#136bd0">
        </div>
        <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
            <label for="decimalSeparator">@lang('super.decimal_separator')</label>
            <div class="toggle mb-3 on"
                    id="decimalSeparator">
                <span></span>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <label for="decimalSeparator">@lang('super.decimal_separator'):</label>
            <select id="decimalSeparator"
                    class="form-control">
                    <option value=",">@lang('super.comma_symbol')</option>
                    <option value=".">@lang('super.dot_symbol')</option>
            </select>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <label for="currencyDirection">@lang('super.currency_direction'):</label>
            <select id="currencyDirection"
                    class="form-control">
                    <option value="1">@lang('super.left_100_d')</option>
                    <option value="2">@lang('super.right_100_d')</option>
            </select>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <label for="decimalSeparator">@lang('super.thousand_separator')</label>
            <select id="decimalSeparator"
                    class="form-control">
                    <option value=",">@lang('super.comma_symbol')</option>
                    <option value=".">@lang('super.dot_symbol')</option>
            </select>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">
            <button type="button" class="btn btn-success label-btn label-end mt-3">
                @lang('super.save_basic_information') <i class="ri-save-line label-btn-icon ms-2"></i>
            </button>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
</form>
