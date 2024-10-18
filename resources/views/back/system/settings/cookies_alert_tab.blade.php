<form data-target_pulse="cookiesAlertPulse">
    <div class="row gy-4">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="cookieAlert">@lang('super.cookie_alert')</label>
            <div class="toggle mb-3 on"
                    id="cookieAlert">
                <span></span>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="cookieText">@lang('super.cookie_text')</label>
            <input type="text"
                    class="form-control"
                    id="cookieText"
                    placeholder="@lang('super.cookies_text')">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mt-5 text-align-right">
            <button type="button" class="btn btn-primary-gradient label-btn label-end mt-3 cookiesAlertPulse">
                @lang('super.save_cookie_alert') <i class="ri-save-line label-btn-icon ms-2"></i>
            </button>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mt-5"></div>
    </div>
</form>

