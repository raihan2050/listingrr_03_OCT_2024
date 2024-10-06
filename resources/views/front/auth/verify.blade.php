@extends('front.layouts.auth_front_app')

@section('content')
<div class="container-lg">
    <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="my-4 d-flex justify-content-center">
                <a href="index.html">
                    <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                    <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                </a>
            </div>
            <div class="my-4 d-flex justify-content-center">
                @if (session('resent'))
                    <div class="alert alert-success">
                        @lang('verify_email.resend')
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card custom-card">
                <div class="card-body p-5">
                    <p class="h1 fw-semibold mb-5 text-center">
                        @lang('verify_email.verify_your_account_title')!
                    </p>
                    <p class="h3 mb-4 text-muted op-7 fw-normal text-center">
                        @lang('verify_email.verify_your_account_sub_title')
                    </p>
                    <p class="h4 mb-4 text-muted op-7 fw-normal text-center">
                        @lang('verify_email.please_verify_your_email')
                    </p>
                    <div class="row gy-3">
                        <div class="col-xl-12 mb-2">
                            {{-- <div class="row">
                                <div class="col-3">
                                    <input type="text" class="form-control form-control-lg text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control form-control-lg text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control form-control-lg text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control form-control-lg text-center" id="four" maxlength="1">
                                </div>
                            </div> --}}
                            {{-- <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                     Did not recieve a code ?
                                    <a href="mail.html" class="text-primary ms-2 d-inline-block">
                                        Resend
                                    </a>
                                </label>
                            </div> --}}
                        </div>
                        <div class="col-xl-12 d-grid mt-2">
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-lg btn-primary w-100">@lang('verify_email.btn_request_another')</button>
                            </form>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="fs-12 text-danger mt-3 mb-0">
                            <sup><i class="ri-asterisk"></i></sup>
                            @lang('verify_email.dont_share')!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
