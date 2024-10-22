@php
$targetLeftTabPulse = "cookiesAlertPulse";
$pulseClass = 'cookiesAlertPulse';
$targetForm = 'cookiesAlertForm';
$btnDetails = [
    'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
    'targetForm' => $targetForm,
    'target_left_tab_pulse' => $targetLeftTabPulse,
    'lavel' => __('super.save_cookie_alert'),
];
@endphp
<form data-target_pulse="{{ $pulseClass }}"
        data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
        class="{{ $targetForm }}">
    <div class="row gy-4">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.cookie_alert'),
                    'name' => 'is_cookie',
                    'class' => 'isCookieStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="cookieText">@lang('super.cookie_text')</label>
            <input type="text"
                    class="form-control"
                    id="cookieText"
                    autocomplete="off"
                    name="cookie_text"
                    data-is_required="1"
                    @isset($setting->cookie_text)
                        value="{{ $setting->cookie_text }}"
                    @endisset
                    placeholder="@lang('super.cookies_text')">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mt-5 text-align-right">
            @include('back.system.settings.include.submig_button')
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5"></div>
    </div>
</form>

