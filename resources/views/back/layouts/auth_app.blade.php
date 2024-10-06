<!DOCTYPE html>
<html lang="en"
        dir="ltr"
        data-nav-layout="vertical"
        data-theme-mode="light"
        data-header-styles="light"
        data-menu-styles="light"
        data-vertical-style="overlay">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template">
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

	<body class="">
        <div id="sidebar"></div>
        <div class="
                main-menu
                main-sidebar
                slide-left
                slide-right
                main-content
                app-sidebar
                sidebar-right
                sidemenu-toggle
                d-none"></div>

        <header class="app-header bg-transparent">
            <div class="main-header-container container-fluid">
                <div class="header-content-left">

                </div>
                <div class="header-content-right">
                    @include('back.layouts.components.header.language')
                </div>
            </div>
        </header>


		<div class="container">
            @yield('content')
        </div>

        @include('back.layouts.components.scripts')
        @yield('scripts')
	</body>
</html>
