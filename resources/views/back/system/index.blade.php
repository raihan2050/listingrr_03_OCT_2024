@extends('back.layouts.app')

@section('title', __('super.manage_site'))

@section('styles')

@endsection

@section('content')
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div class="ms-md-1 mb-1 mb-md-0 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item active" aria-current="page">@lang('super.manage_site')</li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">@lang('super.system_settings')</a>
                    </li>
                </ol>
            </nav>
        </div>
        {{-- <div class="page-title fw-semibold fs-18 mb-0">
            <div>
                <a href="javascript:void(0);" class="btn bg-secondary-transparent text-secondary btn-sm" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" data-bs-original-title="Rating">
                    <span> <i class="fa fa-star"></i> </span>
                </a>
                <a href="lockscreen.html" class="btn bg-primary-transparent text-primary mx-2 btn-sm" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" data-bs-original-title="lock">
                    <span> <i class="fa fa-lock"></i> </span>
                </a>
                <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                    <span> <i class="fa fa-plus"></i> </span>
                </a>
            </div>
        </div> --}}
    </div>

    <div class="card custom-card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <nav class="nav nav-tabs flex-column nav-style-5" role="tablist">
                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#personal-info" aria-selected="true">
                            <i class="ri-palette-line me-2 fs-18 align-middle"></i>
                            @lang('super.basic_information')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#account-settings" aria-selected="false" tabindex="-1">
                            <i class="ri-image-2-line me-2 fs-18 align-middle"></i>
                            @lang('super.logo_other_media')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#email-settings" aria-selected="false" tabindex="-1">
                            <i class="ri-seo-line me-2 fs-18 align-middle"></i>
                            @lang('super.search_engine_optimization')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#labels" aria-selected="false" tabindex="-1">
                            <i class="ri-login-circle-line me-2 fs-18 align-middle"></i>
                            @lang('super.social_login')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#labels" aria-selected="false" tabindex="-1">
                            <i class="ri-mail-settings-line me-2 fs-18 align-middle"></i>
                            @lang('super.email_settings')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#notification-settings" aria-selected="false" tabindex="-1">
                            <i class="ri-smartphone-line me-2 fs-18 align-middle"></i>
                            @lang('super.sms_settings')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#security" aria-selected="false" tabindex="-1">
                            <i class="ri-bank-card-2-line me-2 fs-18 align-middle"></i>
                            @lang('super.payment_gateway')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#security" aria-selected="false" tabindex="-1">
                            <i class="ri-links-line me-2 fs-18 align-middle"></i>
                            @lang('super.api_integration')
                        </a>
                        <a class="nav-link mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#security" aria-selected="false" tabindex="-1">
                            <i class="ri-alarm-warning-line me-2 fs-18 align-middle"></i>
                            @lang('super.cookies_alert')
                        </a>
                    </nav>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="tab-content mail-setting-tab mt-4 mt-lg-0">
                        <div class="tab-pane border br-5 text-muted active show" id="personal-info" role="tabpanel">
                            1
                        </div>
                        <div class="tab-pane p-4 text-muted" id="account-settings" role="tabpanel">
                            2
                        </div>
                        <div class="tab-pane border br-5 p-0 text-muted" id="email-settings" role="tabpanel">
                            3
                        </div>
                        <div class="tab-pane p-4 border br-5 text-muted" id="labels" role="tabpanel">
                            4
                        </div>
                        <div class="tab-pane text-muted border br-5" id="notification-settings" role="tabpanel">
                            5
                        </div>
                        <div class="tab-pane text-muted border br-5 p-0" id="security" role="tabpanel">
                            6
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
        @vite('resources/assets/js/select2.js')

        <!-- SWEET-ALERT JS -->
        <script src="{{asset('build/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>

        <!-- CHECKOUT JS -->
        @vite('resources/assets/js/checkout.js')


@endsection
