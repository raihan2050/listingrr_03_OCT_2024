@extends('back.layouts.auth_app')

@section('styles')

@endsection

@section('content')
    <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="my-4 d-flex justify-content-center">
                <a href="#">
                    <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                    <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                </a>
            </div>
            <div class="card custom-card">
                <div class="card-body p-5">
                    <p class="h5 fw-semibold mb-2 text-center">Sign In</p>
                    <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back 🤗!</p>
                    <form method="POST" action="{{ route('super.login') }}">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label for="signinEmail" class="form-label text-default">{{ __('Email Address') }}</label>
                                <input id="signinEmail"
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
                            <div class="col-xl-12 mb-2">
                                <label for="signinPassword" class="form-label text-default d-block">
                                    {{ __('Password') }}
                                    <a href="javascript:void(0);" class="float-end text-danger">Forget password ?</a>
                                </label>
                                <div class="input-group">
                                    <input id="signinPassword"
                                            type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password"
                                            placeholder="{{ __('Password') }}"
                                            required
                                            autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button class="btn btn-light" type="button" onclick="showHidePassword('signinPassword')" id="button-addon2">
                                        <i class="ri-eye-off-line align-middle"></i>
                                    </button>
                                </div>
                                <div class="mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-muted fw-normal" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 d-grid mt-2">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center d-none">
                        <p class="fs-12 text-muted mt-3">
                            Dont have an account?
                            <a href="sign-up-basic.html" class="text-primary">Sign Up</a>
                        </p>
                    </div>
                    <div class="text-center my-3 authentication-barrier d-none"> <span>OR</span> </div>
                    <div class="btn-list text-center d-none">
                        <button class="btn btn-icon btn-light">
                            <i class="ri-facebook-line fw-bold text-dark op-7"></i>
                        </button>
                        <button class="btn btn-icon btn-light">
                            <i class="ri-google-line fw-bold text-dark op-7"></i>
                        </button>
                        <button class="btn btn-icon btn-light">
                            <i class="ri-twitter-x-line fw-bold text-dark op-7"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function showHidePassword(inputId) {
        const passwordInput = document.getElementById(inputId);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
@endsection
