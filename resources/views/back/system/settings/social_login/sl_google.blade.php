<div class="row gy-3">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="mb-3">
            @php
                $inputSwitchForm = [
                    'label' => __('super.google_login'),
                    'name' => 'google_check',
                    'class' => 'googleLoignStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
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
        <span class="error-message" style="color: red; display: none;">This field is required</span>
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
        <span class="error-message" style="color: red; display: none;">This field is required</span>
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
