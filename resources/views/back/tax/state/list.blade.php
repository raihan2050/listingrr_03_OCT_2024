@extends('back.layouts.app')

@section('title', __('super.tax_manager'))

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
                    <a href="javascript:void(0);">@lang('super.payc_statet_state_tax')</a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-title fw-semibold fs-18 mb-0">
        <div>
            <a class="modalTaxStateFormBtn btn bg-primary text-white btn-sm"
                data-bs-effect="effect-scale"
                data-bs-toggle="modal"
                data-tax_state_id="0"
                href="#modalTaxStateForm"
                >
                <span> <i class="fa fa-plus"></i> </span> @lang('super.payc_statet_new_tax')
            </a>
        </div>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="taxStateListTable" class="table table-bordered text-nowrap w-100 dataTable no-footer dtr-inline" aria-describedby="responsiveDataTable_info">
                <thead>
                     @include('back.tax.state.list_table', ['table_part' => 'head'])
                </thead>
                <tbody>
                     @include('back.tax.state.list_table', ['table_part' => 'body'])
                </tbody>
             </table>
        </div>
    </div>
</div>

@include('back.tax.state.modal_tax_form')
@endsection

@section('scripts')
    @vite('resources/assets/back/js/tax_state.js')
@endsection
