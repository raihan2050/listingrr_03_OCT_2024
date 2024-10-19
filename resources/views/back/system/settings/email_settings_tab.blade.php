<form data-target_pulse="emailSettingsPulse" class="emailSettingsForm">
    <div class="row gy-4">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            @php
                $inputSwitchForm = [
                    'label' => __('super.smtp_status'),
                    'name' => 'smtp_check',
                    'class' => 'smtpStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpHost">@lang('super.smtp_host')</label>
            <input type="text"
                    class="form-control"
                    id="smtpHost"
                    autocomplete="off"
                    name="email_host"
                    data-is_required="1"
                    @isset($setting->email_host)
                        value="{{ $setting->email_host }}"
                    @endisset
                    placeholder="@lang('super.smtp_host')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpPort">@lang('super.smtp_port')</label>
            <input type="text"
                    class="form-control"
                    id="smtpPort"
                    autocomplete="off"
                    name="email_port"
                    data-is_required="1"
                    @isset($setting->email_port)
                        value="{{ $setting->email_port }}"
                    @endisset
                    placeholder="@lang('super.smtp_port')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpEncryption">@lang('super.smtp_encryption')</label>
            <input type="text"
                    class="form-control"
                    id="smtpEncryption"
                    autocomplete="off"
                    name="email_encryption"
                    data-is_required="1"
                    @isset($setting->email_encryption)
                        value="{{ $setting->email_encryption }}"
                    @endisset
                    placeholder="@lang('super.smtp_encryption')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpUsername">@lang('super.smtp_username')</label>
            <input type="text"
                    class="form-control"
                    id="smtpUsername"
                    autocomplete="off"
                    name="email_user"
                    data-is_required="1"
                    @isset($setting->email_user)
                        value="{{ $setting->email_user }}"
                    @endisset
                    placeholder="@lang('super.smtp_username')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpPassword">@lang('super.smtp_password')</label>
            <input type="text"
                    class="form-control"
                    id="smtpUsername"
                    autocomplete="off"
                    name="email_pass"
                    data-is_required="1"
                    @isset($setting->email_pass)
                        value="{{ $setting->email_pass }}"
                    @endisset
                    placeholder="@lang('super.smtp_password')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpFrom">@lang('super.smtp_from')</label>
            <input type="text"
                    class="form-control"
                    id="smtpFrom"
                    autocomplete="off"
                    name="email_from"
                    data-is_required="1"
                    @isset($setting->email_from)
                        value="{{ $setting->email_from }}"
                    @endisset
                    placeholder="@lang('super.smtp_from')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpFromName">@lang('super.smtp_from_name')</label>
            <input type="text"
                    class="form-control"
                    id="smtpFromName"
                    autocomplete="off"
                    name="email_from_name"
                    data-is_required="1"
                    @isset($setting->email_from_name)
                        value="{{ $setting->email_from_name }}"
                    @endisset
                    placeholder="@lang('super.smtp_from_name')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="smtpContactMail">@lang('super.smtp_contact_mail')</label>
            <input type="text"
                    class="form-control"
                    id="smtpContactMail"
                    autocomplete="off"
                    name="contact_email"
                    data-is_required="1"
                    @isset($setting->contact_email)
                        value="{{ $setting->contact_email }}"
                    @endisset
                    placeholder="@lang('super.smtp_contact_mail')">
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">
            <button type="button"
                    class="btn btn-primary-gradient label-btn label-end mt-3 emailSettingsPulse submitForm"
                    data-targetForm="emailSettingsForm">
                @lang('super.save_mail_settings')
                <span class="btnSubmitIcon">
                    <i class="ri-save-line label-btn-icon ms-2"></i>
                </span>
                <span class="label-btn-icon ms-2 btnSubmitLoader" style="display: none;">
                    <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span>
                </span>
            </button>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
</form>
