<form>
    <div class="row gy-4">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            {{-- <ul class="nav nav-pills nav-fill mb-3" role="tablist"> --}}
            <ul class="nav nav-tabs flex-row vertical-tabs-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break active" data-bs-toggle="tab" role="tab" aria-current="page" href="#fill-pill-home" aria-selected="true">
                        <i class="ri-flower-line me-2 align-middle d-inline-block"></i>
                        Site Logo
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break" data-bs-toggle="tab" role="tab" aria-current="page" href="#fill-pill-about" aria-selected="false" tabindex="-1">
                        <i class="ri-shapes-line me-2 align-middle d-inline-block"></i>
                        Site Favicon
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-break" data-bs-toggle="tab" role="tab" aria-current="page" href="#fill-pill-services" aria-selected="false" tabindex="-1">
                        <i class="ri-loader-2-line me-2 align-middle d-inline-block"></i>
                        Site Loader
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active text-muted" id="fill-pill-home" role="tabpanel">
                    111
                </div>
                <div class="tab-pane text-muted" id="fill-pill-about" role="tabpanel">
                    222
                </div>
                <div class="tab-pane text-muted" id="fill-pill-services" role="tabpanel">
                    333
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"></div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 text-align-right">
            <button type="button" class="btn btn-success label-btn label-end mt-3">
                @lang('super.save_logo_media') <i class="ri-save-line label-btn-icon ms-2"></i>
            </button>
        </div>
        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 mt-5"></div>
    </div>
</form>
