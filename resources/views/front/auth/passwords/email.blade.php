@extends('front.layouts.auth_front_app')

@section('styles')

@endsection

@section('content')

@endsection
<div class="row authentication mx-0">
    <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
        <div class="authentication-cover">
            <div class="aunthentication-cover-content rounded">
                <div class="swiper-slide">
                    <div class="text-fixed-white text-center d-flex align-items-center justify-content-center">
                        <div>
                            <div class="mb-5">
                                <img src="{{asset('build/assets/images/authentication/reset-password.png')}}" class="authentication-image" alt="">
                            </div>
                            <h6 class="fw-semibold text-fixed-white">Reset Password</h6>
                            <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto, quam labore blanditiis at ratione.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-7 col-xl-7 col-lg-12">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                <div class="p-5">
                    <div class="mb-3">
                        <a href="">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="" class="authentication-brand desktop-logo">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="" class="authentication-brand desktop-dark">
                        </a>
                    </div>
                    <p class="h5 fw-semibold mb-2">Reset Password</p>
                    <p class="mb-3 text-muted op-7 fw-normal">Changing / Creating a new password!</p>
                    <div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="text-center my-5 authentication-barrier opacity-0"> <span>&nbsp;</span> </div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-xl-12 mt-0">
                                <label for="resetEmail" class="form-label text-default">{{ __('Email Address') }}</label>
                                <input id="resetEmail"
                                        type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="{{ __('Email Address') }}"
                                        required
                                        autocomplete="email"
                                        autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xl-12 d-grid mt-4">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </>
                    </form>
                    <div class="text-center">
                        <p class="fs-12 text-muted mt-4">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-primary">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')

@endsection
