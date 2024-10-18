<form data-target_pulse="smsSettingsPulse">
    <div class="row gy-4">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            {{-- <ul class="nav nav-pills nav-fill mb-3" role="tablist"> --}}
            <ul class="nav nav-tabs flex-row vertical-tabs-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break active" data-bs-toggle="tab" role="tab" aria-current="page" href="#smsTwilioTab" aria-selected="true">
                        <i class="ri-mobile-download-line me-2 align-middle d-inline-block"></i>
                        @lang('super.twilio')
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active text-muted" id="smsTwilioTab" role="tabpanel">
                    @include('back.system.settings.sms_settings.sms_setting_twilio')
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">
            <button type="button" class="btn btn-primary-gradient label-btn label-end mt-3 smsSettingsPulse">
                @lang('super.sms_setting_save') <i class="ri-save-line label-btn-icon ms-2"></i>
            </button>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
</form>
