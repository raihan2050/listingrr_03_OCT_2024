@php
    $currentUserDetails = getSuperUser();
    $lightDark = ($currentUserDetails->dark_mode == 1)? "dark" : "light";
@endphp
<!DOCTYPE html>
<html lang="en"
        dir="ltr"
        data-nav-layout="vertical"
        data-theme-mode="{{ $lightDark }}"
        data-header-styles="{{ $lightDark }}"
        data-menu-styles="{{ $lightDark }}"
        {{-- loader="disable" --}}
        data-vertical-style="">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="Sparic - Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template">

        <meta name="csrf_token" content="{{ csrf_token() }}" />

        <!-- TITLE -->
		<title> @yield('title', 'Home') - {{ config('app.name') }}</title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand/favicon.ico')}}" type="image/x-icon" >
		<link rel="shortcut icon" href="{{asset('build/assets/images/brand/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link id="style" href="{{asset('build/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])


        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- ANIMATE CSS -->
        <link href="{{asset('build/assets/iconfonts/animated.css')}}" rel="stylesheet">

        <!-- APP CSS -->
        @vite(['resources/css/app.css'])

        @yield('styles')

	</head>

	<body class="">

		<!--- GLOBAL LOADER -->
        <div id="loader">
            <img src="{{asset('build/assets/images/svgs/loader.svg')}}" alt="">
        </div>
		<!--- END GLOBAL LOADER -->

        @include('back.layouts.components.main-header')

        @include('back.layouts.components.main-sidebar')

        {{-- @include('back.layouts.components.news-ticker') --}}

        <!-- PAGE -->
		<div class="main-content app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
		</div>
        @yield('modal-page-content')
        @yield('modal-page-content1')

        @include('back.layouts.components.right-sidebar')

        @include('back.layouts.components.main-footer')

        @include('back.layouts.components.offcanvas')

        @include('back.layouts.components.alert_message')

        <div class="scrollToTop" style="display: none;"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
        <div id="responsive-overlay"></div>

        @include('back.layouts.components.scripts')

		<script src="{{asset('build/assets/sticky.js')}}"></script>

        @vite('resources/assets/js/themeColors.js')


		@vite('resources/js/app.js')

        @if(session('alert_message'))
            <script>
                $(function(){
                    const alertMessage = new bootstrap.Toast(document.getElementById('alertMessage'))
                    alertMessage.show();
                });
            </script>
        @endif

	</body>
</html>
