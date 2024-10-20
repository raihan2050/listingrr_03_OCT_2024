
    <div class="row gy-4">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            {{-- <ul class="nav nav-pills nav-fill mb-3" role="tablist"> --}}
            <ul class="nav nav-tabs flex-row vertical-tabs-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break socialLoginFBPulse active" data-bs-toggle="tab" role="tab" aria-current="page" href="#facebookLoginTab" aria-selected="true">
                        <i class="ri-facebook-line me-2 align-middle d-inline-block"></i>
                        @lang('super.facebook')
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break socialLoginGPulse" data-bs-toggle="tab" role="tab" aria-current="page" href="#googleLoginTab" aria-selected="false" tabindex="-1">
                        <i class="ri-google-line me-2 align-middle d-inline-block"></i>
                        @lang('super.google')
                    </a>
                </li>
            </ul>
            <input type="hidden" id="socialLoginPulse" value=""> {{-- from data-target_left_tab_pulse --}}
            <div class="tab-content">
                <div class="tab-pane show active text-muted" id="facebookLoginTab" role="tabpanel">
                    <form data-target_pulse="socialLoginFBPulse"
                            data-target_left_tab_pulse="socialLoginPulse"
                            class="socialLoginFBForm">
                        @include('back.system.settings.social_login.sl_facebook')

                        <button type="button"
                                class="btn btn-primary-gradient label-btn label-end mt-3 socialLoginFBPulse submitForm"
                                data-targetForm="socialLoginFBForm"
                                data-targetTabForm="socialLoginForm"
                                data-target_left_tab_pulse="socialLoginPulse">
                            @lang('super.save_social_login')
                            <span class="btnSubmitIcon">
                                <i class="ri-save-line label-btn-icon ms-2"></i>
                            </span>
                            <span class="label-btn-icon ms-2 btnSubmitLoader" style="display: none;">
                                <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span>
                            </span>
                        </button>
                    </form>
                </div>
                <div class="tab-pane text-muted" id="googleLoginTab" role="tabpanel">
                    <form data-target_pulse="socialLoginGPulse"
                            data-target_left_tab_pulse="socialLoginPulse"
                            class="socialLoginGForm">
                        @include('back.system.settings.social_login.sl_google')

                        <button type="button"
                                class="btn btn-primary-gradient label-btn label-end mt-3 socialLoginGPulse submitForm"
                                data-targetForm="socialLoginGForm"
                                data-targetTabForm="socialLoginForm"
                                data-target_left_tab_pulse="socialLoginPulse">
                            @lang('super.save_social_login')
                            <span class="btnSubmitIcon">
                                <i class="ri-save-line label-btn-icon ms-2"></i>
                            </span>
                            <span class="label-btn-icon ms-2 btnSubmitLoader" style="display: none;">
                                <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">

        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
