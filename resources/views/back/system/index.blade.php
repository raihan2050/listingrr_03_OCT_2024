@extends('back.layouts.app')

@section('title', __('super.manage_site'))

@section('styles')

@endsection

@section('content')
    <div class="page-header d-sm-flex d-block">
        <ol class="breadcrumb mb-sm-0 mb-3">
            <li class="breadcrumb-item"><a href="javascript:void(0);">@lang('super.manage_site')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('super.system_settings')</li>
        </ol>
        <div class="ms-auto">

        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-md-12">
            <div class="card custom-card">
                <div class="card-body p-0 product-checkout">
                    <ul class="nav nav-tabs tab-style-2 d-sm-flex d-block border-bottom border-block-end-dashed" role="tablist">
                        @php
                            $systemSettingLis = [
                                [
                                    "is_active" => 1,
                                    "id" => "basic-information-tab",
                                    "target_id" => "basic-information-form",
                                    "icon" => "ri-info-i",
                                    "title" => "Basic Information"
                                ],
                                [
                                    "is_active" => 0,
                                    "id" => "media-tab",
                                    "target_id" => "media-form",
                                    "icon" => "ri-image-line",
                                    "title" => "Media"
                                ],
                                [
                                    "is_active" => 0,
                                    "id" => "seo-tab",
                                    "target_id" => "seo-form",
                                    "icon" => "ri-seo-line",
                                    "title" => "SEO"
                                ],
                                [
                                    "is_active" => 0,
                                    "id" => "delivered-tab",
                                    "target_id" => "delivery-tab-pane",
                                    "icon" => "ri-code-s-slash-line",
                                    "title" => "Scripts"
                                ],
                            ];
                        @endphp
                        @foreach ($systemSettingLis as $systemSettingLi)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if ($systemSettingLi['is_active'] == 1) active @endif"
                                    id="{{ $systemSettingLi['id'] }}"
                                    data-bs-toggle="tab"
                                    data-bs-target="#{{ $systemSettingLi['target_id'] }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="{{ $systemSettingLi['id'] }}"
                                    @if ($systemSettingLi['is_active'] == 1) aria-selected="true" @else aria-selected="false" @endif>
                                        <i class="{{ $systemSettingLi['icon'] }} me-2 align-middle icon-padding"></i>
                                        {{ $systemSettingLi['title'] }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @include('back.system.settings.basic-information-form')
                        @include('back.system.settings.media-form')
                        @include('back.system.settings.seo-form')
                        @include('back.system.settings.script-form')
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
