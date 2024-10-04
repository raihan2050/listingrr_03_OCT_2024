@extends('front.layouts.custom-app1')

@section('styles')

@endsection

@section('content')

<div class="page-content">
    <div class="container text-center text-dark">
        <div class="row">
            <div class="col-lg-4 d-block mx-auto">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-2">
                                    <a class="header-brand1" href="{{url('index')}}">
                                        <img src="{{asset('build/assets/images/brand/logo.png')}}"
                                            class="header-brand-img main-logo" alt="Sparic logo">
                                        <img src="{{asset('build/assets/images/brand/logo-light.png')}}"
                                            class="header-brand-img darklogo" alt="Sparic logo">
                                    </a>
                                </div>
                                <h3>Login</h3>
                                <p class="text-muted">Sign In to your account</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon bg-white">
                                            <i class="fa fa-user text-dark"></i>
                                        </span>
                                        <input id="email"
                                                type="email"
                                                class="form-control @error('email') is-invalid @enderror"
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
                                    <div class="input-group mb-4">
                                        <span class="input-group-addon bg-white">
                                            <i class="fa fa-unlock-alt text-dark"></i>
                                        </span>
                                        <input id="password"
                                                type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password"
                                                placeholder="{{ __('Password') }}"
                                                required
                                                autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                {{ __('Login') }}
                                            </button>
                                        <div>
                                        @if (Route::has('password.request'))
                                            <div class="col-12">
                                                <a class="btn btn-link box-shadow-0 px-0" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                                <div class="mt-6 btn-list d-none">
                                    <button type="button" class="btn btn-icon btn-facebook"><i
                                            class="fa fa-facebook"></i></button>
                                    <button type="button" class="btn btn-icon btn-google"><i
                                            class="fa fa-google"></i></button>
                                    <button type="button" class="btn btn-icon btn-twitter"><i
                                            class="fa fa-twitter"></i></button>
                                    <button type="button" class="btn btn-icon btn-dribbble"><i
                                            class="fa fa-dribbble"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
