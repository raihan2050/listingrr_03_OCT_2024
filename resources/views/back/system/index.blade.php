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
    </div>

    <div class="card custom-card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <nav class="nav nav-tabs flex-column nav-style-5" role="tablist">
                        <a class="nav-link basicInfoPulse active" data-bs-toggle="tab" role="tab" aria-current="page" href="#basicInfoTab" aria-selected="true">
                            <i class="ri-tools-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.basic_information')
                            </div>
                        </a>
                        <a class="nav-link logoMediaPulse mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#logoMediaTab" aria-selected="false" tabindex="-1">
                            <i class="ri-image-2-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.logo_other_media')
                            </div>
                        </a>
                        <a class="nav-link seoPulse mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#seoTab" aria-selected="false" tabindex="-1">
                            <i class="ri-seo-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.search_engine_optimization')
                            </div>
                        </a>
                        <a class="nav-link socialLoginPulse mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#socialLoginTab" aria-selected="false" tabindex="-1">
                            <i class="ri-login-circle-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.social_login')
                            </div>
                        </a>
                        <a class="nav-link emailSettingsPulse mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#emailSettingsTab" aria-selected="false" tabindex="-1">
                            <i class="ri-mail-settings-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.email_settings')
                            </div>
                        </a>
                        <a class="nav-link smsSettingsPulse mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#smsSettingsTab" aria-selected="false" tabindex="-1">
                            <i class="ri-smartphone-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.sms_settings')
                            </div>
                        </a>
                        <a class="nav-link apiIntegrationPulse mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#apiIntegrationTab" aria-selected="false" tabindex="-1">
                            <i class="ri-links-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.api_integration')
                            </div>
                        </a>
                        <a class="nav-link cookiesAlertPulse mt-3" data-bs-toggle="tab" role="tab" aria-current="page" href="#cookiesAlertTab" aria-selected="false" tabindex="-1">
                            <i class="ri-alarm-warning-line me-2 fs-18 align-middle"></i>
                            <div class="text-align-left">
                                @lang('super.cookies_alert')
                            </div>
                        </a>
                    </nav>
                </div>
                <div class="col-xl-10 col-lg-9">
                    <div class="tab-content mail-setting-tab mt-4 mt-lg-0">
                        <div class="tab-pane border br-5 text-muted1 active show" id="basicInfoTab" role="tabpanel">
                            @include('back.system.settings.basic_info_tab')
                        </div>
                        <div class="tab-pane border br-5 text-muted1" id="logoMediaTab" role="tabpanel">
                            @include('back.system.settings.logo_media_tab')
                        </div>
                        <div class="tab-pane border br-5 text-muted1" id="seoTab" role="tabpanel">
                            @include('back.system.settings.seo_tab')
                        </div>
                        <div class="tab-pane border br-5 text-muted1" id="socialLoginTab" role="tabpanel">
                            @include('back.system.settings.social_login_tab')
                        </div>
                        <div class="tab-pane border br-5 text-muted1" id="emailSettingsTab" role="tabpanel">
                            @include('back.system.settings.email_settings_tab')
                        </div>
                        <div class="tab-pane border br-5 text-muted1" id="smsSettingsTab" role="tabpanel">
                            @include('back.system.settings.sms_settings_tab')
                        </div>
                        <div class="tab-pane border br-5 text-muted1" id="apiIntegrationTab" role="tabpanel">
                            @include('back.system.settings.api_integration_tab')
                        </div>
                        <div class="tab-pane border br-5 text-muted1" id="cookiesAlertTab" role="tabpanel">
                            @include('back.system.settings.cookies_alert_tab')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    @vite('resources/assets/back/js/form_beforeunload.js')
@endsection
