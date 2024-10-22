@php
$targetLeftTabPulse = "apiIntegrationPulse";
$pulseClass = 'apiIntegrationPulse';
$targetForm = 'apiIntegrationForm';
$btnDetails = [
    'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
    'targetForm' => $targetForm,
    'target_left_tab_pulse' => $targetLeftTabPulse,
    'lavel' => __('super.save_apis_information'),
];
@endphp
<form data-target_pulse="{{ $pulseClass }}"
        data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
        class="{{ $targetForm }}">
    <div class="row gy-1">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.enable_google_analytics'),
                    'name' => 'is_google_analytics',
                    'class' => 'isGoogleAnalyticsStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="googleAnalytics">@lang('super.google_analytics')</label>
            @php
                $val = isset($setting->google_analytics)? $setting->google_analytics : "";
            @endphp
            <textarea id="googleAnalytics"
                class="form-control"
                rows="4"
                placeholder="@lang('super.google_analytics')"
                name="google_analytics"
                data-is_required="1"
                aria-label="@lang('super.google_analytics')">{{ $val }}</textarea>
            <span class="error-message" style="color: red; display: none;"></span>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.enable_google_adsense_code'),
                    'name' => 'is_google_adsense',
                    'class' => 'isGoogleAdsenseStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="googleAdsenseCode">@lang('super.google_adsense_code')</label>
            @php
                $val = isset($setting->google_adsense)? $setting->google_adsense : "";
            @endphp
            <textarea id="googleAdsenseCode"
                class="form-control"
                rows="4"
                placeholder="@lang('super.google_adsense_code')"
                name="google_adsense"
                data-is_required="1"
                aria-label="@lang('super.google_adsense_code')">{{ $val }}</textarea>
            <span class="error-message" style="color: red; display: none;"></span>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.aisplay_google_recaptcha'),
                    'name' => 'is_recaptcha',
                    'class' => 'isRecaptchaStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div>
                <label for="googleRechaptchaSiteKey">@lang('super.google_rechaptcha_site_key')</label>
                <input type="text"
                        class="form-control"
                        id="googleRechaptchaSiteKey"
                        autocomplete="off"
                        name="google_recaptcha_site_key"
                        data-is_required="1"
                        @isset($setting->google_recaptcha_site_key)
                            value="{{ $setting->google_recaptcha_site_key }}"
                        @endisset
                        placeholder="@lang('super.google_rechaptcha_site_key')">
                <span class="error-message" style="color: red; display: none;"></span>
            </div>
            <div>
                <label for="googleRechaptchaSecretKey">@lang('super.google_rechaptcha_secret_key')</label>
                <input type="text"
                        class="form-control"
                        id="googleRechaptchaSecretKey"
                        autocomplete="off"
                        name="google_recaptcha_secret_key"
                        data-is_required="1"
                        @isset($setting->google_recaptcha_secret_key)
                            value="{{ $setting->google_recaptcha_secret_key }}"
                        @endisset
                        placeholder="@lang('super.google_rechaptcha_secret_key')">
                <span class="error-message" style="color: red; display: none;"></span>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.display_facebook_pixel'),
                    'name' => 'is_facebook_pixel',
                    'class' => 'isFacebookPixelStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="facebookPixel">@lang('super.facebook_pixel')</label>
            @php
                $val = isset($setting->facebook_pixel)? $setting->facebook_pixel : "";
            @endphp
            <textarea id="facebookPixel"
                class="form-control"
                rows="4"
                placeholder="@lang('super.facebook_pixel')"
                name="facebook_pixel"
                data-is_required="1"
                aria-label="@lang('super.facebook_pixel')">{{  $val }}</textarea>
            <span class="error-message" style="color: red; display: none;"></span>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.display_facebook_messenger'),
                    'name' => 'is_facebook_messenger',
                    'class' => 'isFacebookMessengerStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="facebookMessengerPageId">@lang('super.facebook_messenger_page_id')</label>
            @php
                $val = isset($setting->facebook_messenger)? $setting->facebook_messenger : "";
            @endphp
            <textarea id="facebookMessengerPageId"
                class="form-control"
                rows="4"
                placeholder="@lang('super.facebook_messenger_page_id')"
                name="facebook_messenger"
                data-is_required="1"
                aria-label="@lang('super.facebook_messenger_page_id')">{{ $val }}</textarea>
            <span class="error-message" style="color: red; display: none;"></span>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.display_disqus'),
                    'name' => 'is_disqus',
                    'class' => 'isDisqusStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="disqusLink">@lang('super.disqus_link')</label>
            @php
                $val = isset($setting->disqus)? $setting->disqus : "";
            @endphp
            <textarea id="disqusLink"
                class="form-control"
                rows="4"
                placeholder="@lang('super.disqus_link')"
                name="disqus"
                data-is_required="1"
                @isset($setting->disqus)
                    value="{{ $setting->disqus }}"
                @endisset
                aria-label="@lang('super.disqus_link')">{{ $val }}</textarea>
            <span class="error-message" style="color: red; display: none;"></span>
        </div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mt-5 text-align-right">
            @include('back.system.settings.include.submig_button')
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5"></div>
    </div>

</form>
