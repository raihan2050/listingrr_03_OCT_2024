<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="Sparic - Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template">

        <!-- TITLE -->
		<title> Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template</title>

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

	<body class="app sidebar-mini ltr">

		<!--- GLOBAL LOADER -->
		<div id="global-loader" >
			<img src="{{asset('build/assets/images/svgs/loader.svg')}}" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->
		<div class="page">
            <div class="page-main">

                <!-- MAIN-HEADER -->
                @include('back.front.layouts.components.main-header')

                <!-- END MAIN-HEADER -->

                <!-- NEWS-TICKER -->
                {{-- @include('back.front.layouts.components.news-ticker') --}}

                <!-- END NEWS-TICKER -->

                <!-- MAIN-SIDEBAR -->
                @include('back.front.layouts.components.main-sidebar')

                <!-- END MAIN-SIDEBAR -->

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
            </div>

            @yield('modal-page-content1')

            <!-- RIGHT-SIDEBAR -->
            @include('back.front.layouts.components.right-sidebar')

            <!-- END RIGHT-SIDEBAR -->

            <!-- MAIN-FOOTER -->
            @include('back.front.layouts.components.main-footer')

            <!-- END MAIN-FOOTER -->
            @include('back.front.layouts.components.alert_message')
		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('back.front.layouts.components.scripts')

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
