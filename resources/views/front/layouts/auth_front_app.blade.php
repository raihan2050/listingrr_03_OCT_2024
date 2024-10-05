<!DOCTYPE html>
<html lang="en" dir="ltr">
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

        <style>
            body {
                overflow-x: hidden !important;
            }
        </style>

        @yield('styles')

	</head>

	<body class="bg-white">

		<!--- GLOBAL LOADER -->
        <div id="loader">
            <img src="{{asset('build/assets/images/svgs/loader.svg')}}" alt="">
        </div>
		<!--- END GLOBAL LOADER -->

        <div style="display: none;" id="afterLoadShown">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script>
            $(function() {
                function hideLoader() {
                    const loader = document.getElementById("loader");
                    const afterLoadShown = document.getElementById("afterLoadShown");

                    setTimeout(() => {
                        loader.classList.add("d-none");
                        afterLoadShown.classList.add("d-block");
                    }, 300);
                }

                window.addEventListener("load", hideLoader);
            });
        </script>

        @yield('scripts')
	</body>
</html>
