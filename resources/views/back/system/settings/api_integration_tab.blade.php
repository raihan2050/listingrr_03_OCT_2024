<form action="">
    <div class="row gy-1">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="custom-toggle-switch mb-4">
                <div><span>@lang('super.enable_google_analytics')</span></div>
                <input id="googleAnalyticsStatus" type="checkbox" checked="">
                <div class="toggle m-0 mt-3 on" for="googleAnalyticsStatus"><span></span></div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="googleAnalytics">@lang('super.google_analytics')</label>
            <textarea id="googleAnalytics"
                class="form-control"
                rows="4"
                placeholder="@lang('super.google_analytics')"
                aria-label="@lang('super.google_analytics')"></textarea>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="custom-toggle-switch mb-4">
                <div><span>@lang('super.enable_google_adsense_code')</span></div>
                <input id="googleAdsenseCodeStatus" type="checkbox" checked="">
                <div class="toggle m-0 mt-3 on" for="googleAdsenseCodeStatus"><span></span></div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="googleAdsenseCode">@lang('super.google_adsense_code')</label>
            <textarea id="googleAdsenseCode"
                class="form-control"
                rows="4"
                placeholder="@lang('super.google_adsense_code')"
                aria-label="@lang('super.google_adsense_code')"></textarea>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="custom-toggle-switch mb-4">
                <div><span>@lang('super.aisplay_google_recaptcha')</span></div>
                <input id="aisplayGoogleRecaptchaStatus" type="checkbox" checked="">
                <div class="toggle m-0 mt-3 on" for="aisplayGoogleRecaptchaStatus"><span></span></div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div>
                <label for="googleRechaptchaSiteKey">@lang('super.google_rechaptcha_site_key')</label>
                <input type="text"
                        class="form-control"
                        id="googleRechaptchaSiteKey"
                        placeholder="@lang('super.google_rechaptcha_site_key')">
            </div>
            <div>
                <label for="googleRechaptchaSecretKey">@lang('super.google_rechaptcha_secret_key')</label>
                <input type="text"
                        class="form-control"
                        id="googleRechaptchaSecretKey"
                        placeholder="@lang('super.google_rechaptcha_secret_key')">
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="custom-toggle-switch mb-4">
                <div><span>@lang('super.display_facebook_pixel')</span></div>
                <input id="displayFacebookPixelStatus" type="checkbox" checked="">
                <div class="toggle m-0 mt-3 on" for="displayFacebookPixelStatus"><span></span></div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="facebookPixel">@lang('super.facebook_pixel')</label>
            <textarea id="facebookPixel"
                class="form-control"
                rows="4"
                placeholder="@lang('super.facebook_pixel')"
                aria-label="@lang('super.facebook_pixel')"></textarea>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="custom-toggle-switch mb-4">
                <div><span>@lang('super.display_facebook_messenger')</span></div>
                <input id="displayFacebookMessengerStatus" type="checkbox" checked="">
                <div class="toggle m-0 mt-3 on" for="displayFacebookMessengerStatus"><span></span></div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="facebookMessengerPageId">@lang('super.facebook_messenger_page_id')</label>
            <textarea id="facebookMessengerPageId"
                class="form-control"
                rows="4"
                placeholder="@lang('super.facebook_messenger_page_id')"
                aria-label="@lang('super.facebook_messenger_page_id')"></textarea>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><hr></div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="custom-toggle-switch mb-4">
                <div><span>@lang('super.display_disqus')</span></div>
                <input id="displayDisqusStatus" type="checkbox" checked="">
                <div class="toggle m-0 mt-3 on" for="displayDisqusStatus"><span></span></div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="disqusLink">@lang('super.disqus_link')</label>
            <textarea id="disqusLink"
                class="form-control"
                rows="4"
                placeholder="@lang('super.disqus_link')"
                aria-label="@lang('super.disqus_link')"></textarea>
        </div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mt-5 text-align-right">
            <button type="button" class="btn btn-primary-gradient label-btn label-end mt-3">
                @lang('super.save_apis_information') <i class="ri-save-line label-btn-icon ms-2"></i>
            </button>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5"></div>
    </div>

</form>
