<form>
    <div class="row gy-4">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <label for="smtpStatus">@lang('super.smtp_status')</label>
            <div class="toggle mb-3 on"
                    id="smtpStatus">
                <span></span>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpHost">@lang('super.smtp_host')</label>
            <input type="text"
                    class="form-control"
                    id="smtpHost"
                    placeholder="@lang('super.smtp_host')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpPort">@lang('super.smtp_port')</label>
            <input type="text"
                    class="form-control"
                    id="smtpPort"
                    placeholder="@lang('super.smtp_port')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpEncryption">@lang('super.smtp_encryption')</label>
            <input type="text"
                    class="form-control"
                    id="smtpEncryption"
                    placeholder="@lang('super.smtp_encryption')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpUsername">@lang('super.smtp_username')</label>
            <input type="text"
                    class="form-control"
                    id="smtpUsername"
                    placeholder="@lang('super.smtp_username')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpPassword">@lang('super.smtp_password')</label>
            <input type="text"
                    class="form-control"
                    id="smtpUsername"
                    placeholder="@lang('super.smtp_password')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpFrom">@lang('super.smtp_from')</label>
            <input type="text"
                    class="form-control"
                    id="smtpFrom"
                    placeholder="@lang('super.smtp_from')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 withSMTPService">
            <label for="smtpFromName">@lang('super.smtp_from_name')</label>
            <input type="text"
                    class="form-control"
                    id="smtpFromName"
                    placeholder="@lang('super.smtp_from_name')">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label for="smtpContactMail">@lang('super.smtp_contact_mail')</label>
            <input type="text"
                    class="form-control"
                    id="smtpContactMail"
                    placeholder="@lang('super.smtp_contact_mail')">
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">
            <button type="button" class="btn btn-primary-gradient label-btn label-end mt-3">
                @lang('super.save_mail_settings') <i class="ri-save-line label-btn-icon ms-2"></i>
            </button>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
</form>
