<div>
    <div class="row gy-4">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.twilio_status'),
                    'name' => 'is_twilio',
                    'class' => 'twilioStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="twilioSid">@lang('super.twilio_sid')</label>
            <input type="text"
                    class="form-control"
                    id="twilioSid"
                    autocomplete="off"
                    name="twilio_sid"
                    data-is_required="1"
                    @isset($setting->twilio_sid)
                        value="{{ $setting->twilio_sid }}"
                    @endisset
                    placeholder="@lang('super.twilio_sid_help')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="twilioToken">@lang('super.twilio_token')</label>
            <input type="text"
                    class="form-control"
                    id="twilioToken"
                    autocomplete="off"
                    name="twilio_token"
                    data-is_required="1"
                    @isset($setting->twilio_token)
                        value="{{ $setting->twilio_token }}"
                    @endisset
                    placeholder="@lang('super.twilio_token_help')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="twilioFormNumber">@lang('super.twilio_form_number')</label>
            <input type="text"
                    class="form-control"
                    id="twilioFormNumber"
                    autocomplete="off"
                    name="twilio_form_number"
                    data-is_required="1"
                    @isset($setting->twilio_form_number)
                        value="{{ $setting->twilio_form_number }}"
                    @endisset
                    placeholder="@lang('super.twilio_form_number_help')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="twilioCountryCode">@lang('super.twilio_country_code')</label>
            <input type="text"
                    class="form-control"
                    id="twilioCountryCode"
                    autocomplete="off"
                    name="twilio_country_code"
                    data-is_required="1"
                    @isset($setting->twilio_country_code)
                        value="{{ $setting->twilio_country_code }}"
                    @endisset
                    placeholder="@lang('super.twilio_country_code_help')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label>@lang('super.twilio_help')</label>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"></div>
    </div>
</div>

