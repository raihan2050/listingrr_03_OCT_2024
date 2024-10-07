<div class="row gy-3">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="mb-3">
            <label for="googleLoignStatus" class="form-label">@lang('super.google_login')</label>
            <div class="toggle mb-3 on" id="googleLoignStatus">
                <span></span>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12"></div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <label for="googleClientId" class="form-label">@lang('super.sl_google_client_id')</label>
        <input type="text"
                class="form-control"
                id="googleClientId"
                placeholder="@lang('super.sl_google_client_id_help')">
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <label for="googleClientSecret" class="form-label">@lang('super.sl_google_client_secret')</label>
        <input type="text"
                class="form-control"
                id="googleClientSecret"
                placeholder="@lang('super.sl_google_client_secret_help')">
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <label for="googleClientRedirectUrl" class="form-label">@lang('super.sl_google_redirect_url')</label>
        <input type="text"
                class="form-control"
                id="googleClientRedirectUrl"
                placeholder="@lang('super.sl_google_redirect_url_help')"
                disabled>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>
</div>
