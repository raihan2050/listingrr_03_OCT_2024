@extends('back.layouts.app')

@section('title', __('super.gateway_manager'))

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
@endsection

@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div class="ms-md-1 mb-1 mb-md-0 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item active" aria-current="page">@lang('super.payment_config')</li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">@lang('super.gateway_manager')</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
@php
    $gatewayList = [
        'cod' => [
            'id' => 0,
            'unique_keyword' => 'cod',
            'title' => __('super.payc_cod'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 1,
            'href' => 'tab_cod',
            'identity' => 'TabCod',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'stripe' => [
            'id' => 0,
            'unique_keyword' => 'stripe',
            'title' => __('super.payc_stripe'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_stripe',
            'identity' => 'TabStripe',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'paypal' => [
            'id' => 0,
            'unique_keyword' => 'paypal',
            'title' => __('super.payc_paypal'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_paypal',
            'identity' => 'TabPayPal',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'mollie' => [
            'id' => 0,
            'unique_keyword' => 'mollie',
            'title' => __('super.payc_mollie'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_mollie',
            'identity' => 'TabMollie',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'paytm' => [
            'id' => 0,
            'unique_keyword' => 'paytm',
            'title' => __('super.payc_paytm'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_paytm',
            'identity' => 'TabPaytm',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'razorpay' => [
            'id' => 0,
            'unique_keyword' => 'razorpay',
            'title' => __('super.payc_razorpay'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_razorpay',
            'identity' => 'TabRazorpay',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'sslcommerz' => [
            'id' => 0,
            'unique_keyword' => 'sslcommerz',
            'title' => __('super.payc_ssl_commerz'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_ssl_commerz',
            'identity' => 'TabSSLCommerz',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'mercadopago' => [
            'id' => 0,
            'unique_keyword' => 'mercadopago',
            'title' => __('super.payc_mercadopago'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_mercadopago',
            'identity' => 'TabMercadopago',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'authorize' => [
            'id' => 0,
            'unique_keyword' => 'authorize',
            'title' => __('super.payc_authorize_net'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_authorizenet',
            'identity' => 'TabAuthorizeNet',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'paystack' => [
            'id' => 0,
            'unique_keyword' => 'paystack',
            'title' => __('super.payc_paystack'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_paystack',
            'identity' => 'TabPaystack',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'flutterwave' => [
            'id' => 0,
            'unique_keyword' => 'flutterwave',
            'title' => __('super.payc_flutterwave'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_flutterwave',
            'identity' => 'TabFlutterwave',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        'bank' => [
            'id' => 0,
            'unique_keyword' => 'bank',
            'title' => __('super.payc_bank_transfer'),
            'name' => '',
            'description' => '',
            'logo_light' => '',
            'logo_dark' => '',
            'information' => '',
            'status' => 'disable',
            'tab_status' => 0,
            'href' => 'tab_bank_transfer',
            'identity' => 'TabBankTransfer',
            'icon' => 'ri-arrow-drop-right-line',
        ],
    ];

    foreach ($paymentSettings as $paymentSettingKey => $paymentSetting) {
        if(!isset($gatewayList[$paymentSetting->unique_keyword])){
            continue;
        }
        $tmpGatewayList = $gatewayList[$paymentSetting->unique_keyword];
        $gatewayList[$paymentSetting->unique_keyword] = [
            'id' => $paymentSetting->id,
            'unique_keyword' => $paymentSetting->unique_keyword,
            'title' => $tmpGatewayList['title'],
            'name' => $paymentSetting->name,
            'description' => $paymentSetting->description,
            'logo_light' => $paymentSetting->logo_light,
            'logo_dark' => $paymentSetting->logo_dark,
            'information' => $paymentSetting->information,
            'status' => $paymentSetting->status,
            'tab_status' => $tmpGatewayList['tab_status'],
            'href' => $tmpGatewayList['href'],
            'identity' => $tmpGatewayList['identity'],
            'icon' => $tmpGatewayList['icon'],
            'paymentSetting' => $paymentSetting
        ];
    }

    $gatewayList = array_map(function($gateway) {
        return (object) $gateway;
    }, $gatewayList);
@endphp
<div class="card custom-card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-2 col-xl-2">
                @include('back.gateway.tab_left')
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10 col-xl-10">
                @include('back.gateway.tab_right')
            </div>
        </div>
    </div>
</div>

{{-- @include('back.currency.modal_gateway_form') --}}
@endsection

@section('scripts')
    @vite('resources/assets/back/js/gateway_manager.js')
    @vite('resources/assets/back/js/form_beforeunload.js')
@endsection
