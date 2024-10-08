@extends('back.layouts.app')

@section('title', __('super.currency_manager'))

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
                    <a href="javascript:void(0);">@lang('super.currency_list')</a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-title fw-semibold fs-18 mb-0">
        <div>
            <a class="modalCurrencyFormBtn btn bg-primary text-white btn-sm"
                data-bs-effect="effect-scale"
                data-bs-toggle="modal"
                data-currency_id="0"
                href="#modalCurrencyForm"
                >
                <span> <i class="fa fa-plus"></i> </span> New Currency
            </a>
        </div>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="currencyListTable" class="table table-bordered text-nowrap w-100 dataTable no-footer dtr-inline" aria-describedby="responsiveDataTable_info">
                <thead>
                     @include('back.currency.list_table', ['table_part' => 'head'])
                </thead>
                <tbody>
                     @include('back.currency.list_table', ['table_part' => 'body'])
                </tbody>
             </table>
        </div>
    </div>
</div>

@include('back.currency.modal_currency_form')
@endsection

@section('scripts')
    @vite('resources/assets/back/js/currency_manager.js')
@endsection
