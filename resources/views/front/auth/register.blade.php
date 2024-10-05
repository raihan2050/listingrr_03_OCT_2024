@extends('front.layouts.auth_front_app')

@section('styles')

@endsection

@section('content')

    <div class="row authentication mx-0">
        <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="aunthentication-cover-content rounded">
                    <div class="swiper-slide">
                        <div class="text-fixed-white text-center d-flex align-items-center justify-content-center">
                            <div>
                                <div class="mb-5">
                                    <img src="{{asset('build/assets/images/authentication/sign-up.png')}}" class="authentication-image" alt="">
                                </div>
                                <h6 class="fw-semibold text-fixed-white">Sign Up</h6>
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
                        <p class="h5 fw-semibold mb-2">Sign Up</p>
                        <p class="mb-3 text-muted op-7 fw-normal">Welcome &amp; Join us by creating a free account !</p>
                        <div class="btn-list d-none">
                            <button class="btn btn-light">
                                <svg class="google-svg" xmlns="http://www.w3.org/2000/svg" width="2443" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg>
                                Sign up with google
                            </button>
                            <button class="btn btn-icon btn-light"><i class="ri-facebook-fill"></i></button>
                            <button class="btn btn-icon btn-light"><i class="ri-twitter-x-fill"></i></button>
                        </div>
                        <div class="text-center my-5 authentication-barrier opacity-0"> <span>&nbsp;</span> </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-xl-12 mt-0">
                                    <label for="signupFirstname" class="form-label text-default">{{ __('Name') }}</label>
                                    <input id="signupFirstname"
                                            type="text"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="{{ __('Name') }}"
                                            required
                                            autocomplete="name"
                                            autofocus>
                                    @error('name')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-12">
                                    <label for="signupEmail" class="form-label text-default">{{ __('Email Address') }}</label>
                                    <input id="signupEmail"
                                        type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="{{ __('Email Address') }}"
                                        required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-12">
                                    <label for="signupPassword" class="form-label text-default">Password</label>
                                    <div class="input-group">
                                        <input id="signupPassword"
                                                type="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                name="password"
                                                placeholder="{{ __('Password') }}"
                                                required
                                                autocomplete="new-password">
                                        <button class="btn btn-light" onclick="showHidePassword('signupPassword')" type="button" id="button-addon2">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </button>
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label for="passwordConfirm" class="form-label text-default">Confirm Password</label>
                                    <div class="input-group">
                                        <input id="passwordConfirm"
                                                type="password"
                                                class="form-control form-control-lg"
                                                name="password_confirmation"
                                                placeholder="{{ __('Confirm Password') }}"
                                                required
                                                autocomplete="new-password">
                                        <button class="btn btn-light" onclick="showHidePassword('passwordConfirm')" type="button" id="button-addon21">
                                            <i class="ri-eye-off-line align-middle"></i>
                                        </button>
                                    </div>
                                    <div class="form-check d-flex mt-3">
                                        <input type="checkbox" name="agreeWithYou" id="agreeWithYou" class="form-check-input {{ $errors->has('agreeWithYou') ? 'is-invalid' : '' }}" >
                                        <label class="form-check-label text-muted fw-normal" for="agreeWithYou">
                                            By creating a account you agree to our
                                            <a href="{{url('terms')}}" class="text-success">
                                                <u>Terms &amp; Conditions</u>
                                            </a>
                                            and
                                            <a class="text-success"><u>Privacy Policy</u></a>
                                        </label>
                                    </div>
                                    <div class="col-xl-12 d-grid mt-1">
                                        @error('agreeWithYou')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 d-grid mt-2">
                                        <button type="submit" class="btn btn-lg btn-primary">
                                            Create Account
                                        </button>
                                    </div>
                                </div>
                            </div>
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
