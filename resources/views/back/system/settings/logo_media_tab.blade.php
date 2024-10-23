
    <div class="row gy-4">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            {{-- <ul class="nav nav-pills nav-fill mb-3" role="tablist"> --}}
            <ul class="nav nav-tabs flex-row vertical-tabs-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break logoMediaLogoPulse active" data-bs-toggle="tab" role="tab" aria-current="page" href="#logoUploadTab" aria-selected="true">
                        <i class="ri-flower-line me-2 align-middle d-inline-block" style="padding: 0px 8px 0px 8px;"></i>
                        @lang('super.site_logo')
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break logoMediaFaviconPulse" data-bs-toggle="tab" role="tab" aria-current="page" href="#faviconUploadTab" aria-selected="false" tabindex="-1">
                        <i class="ri-shapes-line me-2 align-middle d-inline-block" style="padding: 0px 8px 0px 8px;"></i>
                        @lang('super.site_favicon')
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break logoMediaLoaderPulse" data-bs-toggle="tab" role="tab" aria-current="page" href="#loaderUploadTab" aria-selected="false" tabindex="-1">
                        <i class="ri-loader-2-line me-2 align-middle d-inline-block" style="padding: 0px 8px 0px 8px;"></i>
                        @lang('super.site_loader')
                    </a>
                </li>
            </ul>
            @php
                $targetLeftTabPulse = "logoMediaPulse";
            @endphp
            <input type="hidden" id="{{ $targetLeftTabPulse }}" value=""> {{-- from data-target_left_tab_pulse --}}
            <div class="tab-content">
                <div class="tab-pane show active text-muted" id="logoUploadTab" role="tabpanel">
                    @php
                        $pulseClass = 'logoMediaLogoPulse';
                        $targetForm = 'logoMediaLogoForm';
                        $btnDetails = [
                            'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
                            'targetForm' => $targetForm,
                            'target_left_tab_pulse' => $targetLeftTabPulse,
                            'lavel' => __('super.save_logo_media'),
                        ];
                    @endphp
                    <form data-target_pulse="{{ $pulseClass }}"
                            data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
                            class="{{ $targetForm }}">
                        @include('back.system.settings.logo_media_tabs.logo_upload_tab')
                        @include('back.layouts.components.form.submig_button')
                    </form>
                </div>
                <div class="tab-pane show text-muted" id="faviconUploadTab" role="tabpanel">
                    @php
                        $pulseClass = 'logoMediaFaviconPulse';
                        $targetForm = 'logoMediaFaviconForm';
                        $btnDetails = [
                            'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
                            'targetForm' => $targetForm,
                            'target_left_tab_pulse' => $targetLeftTabPulse,
                            'lavel' => __('super.save_logo_media'),
                        ];
                    @endphp
                    <form data-target_pulse="{{ $pulseClass }}"
                            data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
                            class="{{ $targetForm }}">
                        @include('back.system.settings.logo_media_tabs.favicon_upload_tab')
                        @include('back.layouts.components.form.submig_button')
                    </form>
                </div>
                <div class="tab-pane text-muted" id="loaderUploadTab" role="tabpanel">
                    @php
                        $pulseClass = 'logoMediaLoaderPulse';
                        $targetForm = 'logoMediaLoaderForm';
                        $btnDetails = [
                            'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
                            'targetForm' => $targetForm,
                            'target_left_tab_pulse' => $targetLeftTabPulse,
                            'lavel' => __('super.save_logo_media'),
                        ];
                    @endphp
                    <form data-target_pulse="{{ $pulseClass }}"
                            data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
                            class="{{ $targetForm }}">
                        @include('back.system.settings.logo_media_tabs.loader_upload_tab')
                        @include('back.layouts.components.form.submig_button')
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">

        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
