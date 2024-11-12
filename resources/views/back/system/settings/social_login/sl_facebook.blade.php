<div class="row gy-3">
    @php
        $facebook_check = 0;
        $facebook_check_class = '';
        if(isset($setting->facebook_check)){
            $facebook_check = ($setting->facebook_check == 1)? 1 : 0;
            $facebook_check_class = ($setting->facebook_check == 1)? 'on' : '';
        }
    @endphp
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="mb-3">
            @php
                $inputSwitchForm = [
                    'label' => __('super.facebook_login'),
                    'name' => 'facebook_check',
                    'class' => 'facebookLoignStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12"></div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <label for="fbAppId" class="form-label">@lang('super.sl_fb_app_id')</label>
        <input type="text"
                class="form-control"
                id="fbAppId"
                autocomplete="off"
                name="facebook_client_id"
                data-is_required="1"
                @isset($setting->facebook_client_id)
                    value="{{ $setting->facebook_client_id }}"
                @endisset
                placeholder="@lang('super.sl_fb_app_id_help')">
        <span class="error-message" style="color: red; display: none;">This field is required</span>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <label for="fbAppSecret" class="form-label">@lang('super.sl_fb_app_secret')</label>
        <input type="text"
                class="form-control"
                id="fbAppSecret"
                name="facebook_client_secret"
                autocomplete="off"
                data-is_required="1"
                @isset($setting->facebook_client_secret)
                    value="{{ $setting->facebook_client_secret }}"
                @endisset
                placeholder="@lang('super.sl_fb_app_secret_help')">
        <span class="error-message" style="color: red; display: none;">This field is required</span>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
        <label for="fbAppRedirectUrl" class="form-label">@lang('super.sl_fb_redirect_url')</label>
        <input type="text"
                class="form-control"
                id="fbAppRedirectUrl"
                placeholder="@lang('super.sl_fb_redirect_url_help')"
                disabled>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>
</div>
