<div class="row gy-3">
    @php
        $google_check = 0;
        $google_check_class = '';
        if(isset($setting->google_check)){
            $google_check = ($setting->google_check == 1)? 1 : 0;
            $google_check_class = ($setting->google_check == 1)? 'on' : '';
        }
    @endphp
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="mb-3">
            <input type="hidden" name="google_check" class="googleLoignStatus"
                value="{{ $google_check }}"
                >
            <label for="googleLoignStatus" class="form-label">@lang('super.google_login')</label>
            <div class="toggle switchToggleOne mb-3 {{ $google_check_class }}"
                data-target_class="googleLoignStatus"
                id="googleLoignStatus">
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
                autocomplete="off"
                name="google_client_id"
                data-is_required="1"
                @isset($setting->google_client_id)
                    value="{{ $setting->google_client_id }}"
                @endisset
                placeholder="@lang('super.sl_google_client_id_help')">
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <label for="googleClientSecret" class="form-label">@lang('super.sl_google_client_secret')</label>
        <input type="text"
                class="form-control"
                id="googleClientSecret"
                autocomplete="off"
                name="google_client_secret"
                data-is_required="1"
                @isset($setting->google_client_secret)
                    value="{{ $setting->google_client_secret }}"
                @endisset
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
