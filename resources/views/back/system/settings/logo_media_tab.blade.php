<form data-target_pulse="logoMediaPulse" class="logoMediaForm">
    <div class="row gy-4">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            {{-- <ul class="nav nav-pills nav-fill mb-3" role="tablist"> --}}
            <ul class="nav nav-tabs flex-row vertical-tabs-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break active" data-bs-toggle="tab" role="tab" aria-current="page" href="#logoUploadTab" aria-selected="true">
                        <i class="ri-flower-line me-2 align-middle d-inline-block"></i>
                        @lang('super.site_logo')
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break" data-bs-toggle="tab" role="tab" aria-current="page" href="#faviconUploadTab" aria-selected="false" tabindex="-1">
                        <i class="ri-shapes-line me-2 align-middle d-inline-block"></i>
                        @lang('super.site_favicon')
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break" data-bs-toggle="tab" role="tab" aria-current="page" href="#loaderUploadTab" aria-selected="false" tabindex="-1">
                        <i class="ri-loader-2-line me-2 align-middle d-inline-block"></i>
                        @lang('super.site_loader')
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active text-muted" id="logoUploadTab" role="tabpanel">
                    @include('back.system.settings.logo_media_tabs.logo_upload_tab')
                </div>
                <div class="tab-pane text-muted" id="faviconUploadTab" role="tabpanel">
                    @include('back.system.settings.logo_media_tabs.favicon_upload_tab')
                </div>
                <div class="tab-pane text-muted" id="loaderUploadTab" role="tabpanel">
                    @include('back.system.settings.logo_media_tabs.loader_upload_tab')
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">
            <button type="button"
                    class="btn btn-primary-gradient label-btn label-end mt-3 logoMediaPulse submitForm"
                    data-targetForm="logoMediaForm">
                @lang('super.save_logo_media')
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
