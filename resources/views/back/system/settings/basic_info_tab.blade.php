<form data-target_pulse="basicInfoPulse" class="basicInfoForm">
    <div class="row gy-4">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="appName">@lang('super.app_name')</label>
            <input type="text"
                    class="form-control"
                    name="title"
                    id="appName"
                    data-is_required="1"
                    autocomplete="off"
                    @isset($setting->title)
                        value="{{ $setting->title }}"
                    @endisset
                    placeholder="@lang('super.app_name')">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="appSlogan">@lang('super.app_slogan'):</label>
            <input type="text"
                    class="form-control"
                    name="slogan"
                    id="appSlogan"
                    data-is_required="1"
                    autocomplete="off"
                    @isset($setting->slogan)
                        value="{{ $setting->slogan }}"
                    @endisset
                    placeholder="@lang('super.app_slogan')">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
            <label class="primaryColourCode">@lang('super.primary_colour_code')</label>
            <input class="form-control form-input-color"
                    id="primaryColourCode"
                    type="color"
                    name="primary_color"
                    data-is_required="1"
                    @isset($setting->slogan)
                        value="{{ $setting->slogan }}"
                    @else
                        value="#136bd0"
                    @endisset
                    >
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
        @php
            $is_decimal = 0;
            $is_decimal_class = '';
            if(isset($setting->is_decimal)){
                $is_decimal = ($setting->is_decimal == 1)? 1 : 0;
                $is_decimal_class = ($setting->is_decimal == 1)? 'on' : '';
            }
        @endphp
        <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.decimal_separator'),
                    'name' => 'is_decimal',
                    'class' => 'decimalSeparator'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="decimalSeparator">@lang('super.decimal_separator'):</label>
            <select id="decimalSeparator"
                    name="decimal_separator"
                    data-is_required="1"
                    class="form-control">
                    <option value="," @isset($setting->decimal_separator) @if($setting->decimal_separator == ",") selected @endif @endisset>@lang('super.comma_symbol')</option>
                    <option value="." @isset($setting->decimal_separator) @if($setting->decimal_separator == ".") selected @endif @endisset>@lang('super.dot_symbol')</option>
            </select>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="currencyDirection">@lang('super.currency_direction'):</label>
            <select id="currencyDirection"
                    name="currency_direction"
                    data-is_required="1"
                    class="form-control">
                    <option value="1" @isset($setting->currency_direction) @if($setting->currency_direction == "1") selected @endif @endisset>@lang('super.left_100_d')</option>
                    <option value="2" @isset($setting->currency_direction) @if($setting->currency_direction == "2") selected @endif @endisset>@lang('super.right_100_d')</option>
            </select>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="decimalSeparator">@lang('super.thousand_separator')</label>
            <select id="decimalSeparator"
                    name="thousand_separator"
                    data-is_required="1"
                    class="form-control">
                    <option value="," @isset($setting->thousand_separator) @if($setting->thousand_separator == ",") selected @endif @endisset>@lang('super.comma_symbol')</option>
                    <option value="." @isset($setting->thousand_separator) @if($setting->thousand_separator == ".") selected @endif @endisset>@lang('super.dot_symbol')</option>
            </select>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mt-5 text-align-right">
            <button type="button"
                    class="btn btn-primary-gradient label-btn label-end mt-3 basicInfoPulse submitForm"
                    data-targetForm="basicInfoForm">
                @lang('super.save_basic_information')
                <span class="btnSubmitIcon">
                    <i class="ri-save-line label-btn-icon ms-2"></i>
                </span>
                <span class="label-btn-icon ms-2 btnSubmitLoader" style="display: none;">
                    <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span>
                </span>
            </button>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5"></div>
    </div>
</form>
