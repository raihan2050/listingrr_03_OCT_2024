
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
            @php
                $targetLeftTabPulse = "logoMediaPulse";
            @endphp
            <input type="hidden" id="{{ $targetLeftTabPulse }}" value=""> {{-- from data-target_left_tab_pulse --}}
            <div class="tab-content">
                <div class="tab-pane show active text-muted" id="facebookLoginTab" role="tabpanel">
                    @php
                        $pulseClass = 'socialLoginFBPulse';
                        $targetForm = 'socialLoginFBForm';
                        $btnDetails = [
                            'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
                            'targetForm' => $targetForm,
                            'target_left_tab_pulse' => $targetLeftTabPulse,
                            'lavel' => __('super.save_social_login'),
                        ];
                    @endphp
                    <form data-target_pulse="{{ $pulseClass }}"
                            data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
                            class="{{ $targetForm }}">
                        @include('back.system.settings.social_login.sl_facebook')
                        @include('back.layouts.components.form.submig_button')
                    </form>
                </div>
                <div class="tab-pane text-muted" id="googleLoginTab" role="tabpanel">
                    @php
                        $pulseClass = 'socialLoginGPulse';
                        $targetForm = 'socialLoginGForm';
                        $btnDetails = [
                            'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
                            'targetForm' => $targetForm,
                            'target_left_tab_pulse' => $targetLeftTabPulse,
                            'lavel' => __('super.save_social_login'),
                        ];
                    @endphp
                    <form data-target_pulse="{{ $pulseClass }}"
                            data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
                            class="{{ $targetForm }}">
                        @include('back.system.settings.social_login.sl_google')
                        @include('back.layouts.components.form.submig_button')
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">

        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
