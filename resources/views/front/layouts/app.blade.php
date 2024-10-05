<!DOCTYPE html>
<html lang="en"
        dir="ltr"
        data-nav-layout="vertical"
        data-theme-mode="light"
        data-header-styles="light"
        data-menu-styles="light"
        {{-- loader="disable" --}}
        data-vertical-style="">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="Sparic - Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template">

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

        @include('front.layouts.components.offcanvas')

		<!--- GLOBAL LOADER -->
        <div id="loader" class="d-none">
            <img src="{{asset('build/assets/images/svgs/loader.svg')}}" alt="">
        </div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->
		<div class="page">

                <!-- MAIN-HEADER -->
                @include('front.layouts.components.main-header')
                <!-- END MAIN-HEADER -->

                <!-- MAIN-SIDEBAR -->
                @include('front.layouts.components.main-sidebar')
                <!-- END MAIN-SIDEBAR -->

                <!-- NEWS-TICKER -->
                {{-- @include('front.layouts.components.news-ticker') --}}
                <!-- END NEWS-TICKER -->

                <!-- MAIN-CONTENT -->
                <div class="main-content app-content">
                    <div class="side-app">
                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">
                                @yield('content')
                        </div>
                    </div>
                    @yield('modal-page-content')
                </div>
                <!-- END MAIN-CONTENT -->


            @yield('modal-page-content1')

            <!-- RIGHT-SIDEBAR -->
            @include('front.layouts.components.right-sidebar')

            <!-- END RIGHT-SIDEBAR -->

            <div class="scrollToTop" style="display: none;"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>

            <!-- MAIN-FOOTER -->
            @include('front.layouts.components.main-footer')

            <!-- END MAIN-FOOTER -->
            @include('front.layouts.components.alert_message')
		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('front.layouts.components.scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- THEMECOLOR JS -->
        @vite('resources/assets/js/themeColors.js')


        <!-- APP JS -->
		@vite('resources/js/app.js')

        @if(session('alert_message'))
            <script>
                $(function(){
                    const alertMessage = new bootstrap.Toast(document.getElementById('alertMessage'))
                    alertMessage.show();
                });
            </script>
        @endif
        <!-- END SCRIPTS -->

	</body>
</html>
