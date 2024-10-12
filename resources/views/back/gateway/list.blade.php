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
    <div class="page-title fw-semibold fs-18 mb-0">
        <div>
            <a class="modalCurrencyFormBtn btn bg-primary text-white btn-sm"
                data-bs-effect="effect-scale"
                data-bs-toggle="modal"
                data-gateway_id="0"
                href="#modalCurrencyForm"
                >
                <span> <i class="fa fa-plus"></i> </span> @lang('super.payc_curr_new_currency')
            </a>
        </div>
    </div>
</div>
@php
    $gatewayList = [
        [
            'title' => 'COD',
            'status' => 1,
            'href' => 'tab_cod',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Stripe',
            'status' => 0,
            'href' => 'tab_stripe',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'PayPal',
            'status' => 0,
            'href' => 'tab_paypal',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Mollie',
            'status' => 0,
            'href' => 'tab_mollie',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Paytm',
            'status' => 0,
            'href' => 'tab_paytm',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Razorpay',
            'status' => 0,
            'href' => 'tab_razorpay',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'SSL Commerz',
            'status' => 0,
            'href' => 'tab_ssl_commerz',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Mercadopago',
            'status' => 0,
            'href' => 'tab_mercadopago',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Authorize.Net',
            'status' => 0,
            'href' => 'tab_authorizenet',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Paystack',
            'status' => 0,
            'href' => 'tab_paystack',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Flutterwave',
            'status' => 0,
            'href' => 'tab_flutterwave',
            'icon' => 'ri-arrow-drop-right-line',
        ],
        [
            'title' => 'Bank Transfer',
            'status' => 0,
            'href' => 'tab_bank_transfer',
            'icon' => 'ri-arrow-drop-right-line',
        ],
    ];
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
@endsection
