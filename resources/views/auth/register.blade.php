@extends('layouts.custom-app1')

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
                                <div class="text-center mb-6">
                                    <a class="header-brand1" href="{{url('index')}}">
                                        <img src="{{asset('build/assets/images/brand/logo.png')}}"
                                            class="header-brand-img main-logo" alt="Sparic logo">
                                        <img src="{{asset('build/assets/images/brand/logo-light.png')}}"
                                            class="header-brand-img darklogo" alt="Sparic logo">
                                    </a>
                                </div>
                                <h3>Register</h3>
                                <p class="text-muted">Create New Account</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon bg-white">
                                            <i class="fa fa-user w-4 text-muted-dark"></i>
                                        </span>
                                        <input id="name"
                                                type="text"
                                                class="form-control @error('name') is-invalid @enderror"
                                                name="name"
                                                value="{{ old('name') }}"
                                                placeholder="{{ __('Name') }}"
                                                required
                                                autocomplete="name"
                                                autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-addon bg-white">
                                            <i class="fa fa-envelope  text-muted-dark w-4"></i>
                                        </span>
                                        <input id="email"
                                            type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="{{ __('Email Address') }}"
                                            required
                                            autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-addon bg-white">
                                            <i class="fa fa-unlock-alt  text-muted-dark w-4"></i>
                                        </span>
                                        <input id="password"
                                                type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password"
                                                placeholder="{{ __('Password') }}"
                                                required
                                                autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-addon bg-white">
                                            <i class="fa fa-unlock-alt  text-muted-dark w-4"></i>
                                        </span>
                                        <input id="password-confirm"
                                                type="password"
                                                class="form-control"
                                                name="password_confirmation"
                                                placeholder="{{ __('Confirm Password') }}"
                                                required
                                                autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox text-start">
                                            <input type="checkbox" name="agreeWithYou" class="custom-control-input {{ $errors->has('agreeWithYou') ? 'is-invalid' : '' }}" >
                                            <span class="custom-control-label">Agree the <a href="{{url('terms')}}">terms and policy</a></span>
                                            @error('agreeWithYou')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </label>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-block px-4">
                                                {{ __('Create a new account') }}
                                            </button>
                                        </div>
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
