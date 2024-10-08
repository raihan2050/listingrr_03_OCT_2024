@extends('back.layouts.app')

@section('title', __('super.coupon_manger'))

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    @vite('resources/assets/back/scss/coupon.scss')
@endsection

@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div class="ms-md-1 mb-1 mb-md-0 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item active" aria-current="page">@lang('super.payment_config')</li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">@lang('super.set_coupons')</a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="page-title fw-semibold fs-18 mb-0">
        <div>
            <a class="modaldCouponFormBtn btn bg-primary text-white btn-sm"
                data-bs-effect="effect-scale"
                data-bs-toggle="modal"
                data-coupon_id="0"
                href="#modaldCouponForm">
                <span> <i class="fa fa-plus"></i> </span> New Coupon
            </a>
        </div>
    </div>
</div>

<div class="card custom-card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="couponListTable" class="table table-bordered text-nowrap w-100 dataTable no-footer dtr-inline" aria-describedby="responsiveDataTable_info">
                <thead>
                     @include('back.coupons.list_table', ['table_part' => 'head'])
                </thead>
                <tbody>
                     @include('back.coupons.list_table', ['table_part' => 'body'])
                </tbody>
             </table>
        </div>
    </div>
</div>

@include('back.coupons.modal_coupon_form')
@endsection

@section('scripts')

    <!-- SELECT2 JS -->
    {{-- <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script> --}}

    <!-- APEXCHART JS -->
    {{-- <script src="{{asset('build/assets/plugins/apexcharts/apexcharts.min.js')}}"></script> --}}

    <!-- DATA TABLES JS -->
    {{-- <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script> --}}

    <!-- INDEX JS -->
    @vite('resources/assets/back/js/coupon.js')

@endsection
