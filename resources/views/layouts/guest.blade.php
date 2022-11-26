<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
       <meta name="robots" content="noindex, nofollow">
       <title>Relevant Home Care System</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

         <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{ URL::asset('/assets/css/font-awesome.min.css')}}">

              <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css')}}">

            <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
     
    </head>
    <body class="account-page">
        <div class="main-wrapper">
            {{ $slot }}
        </div>
    </body>

    <script src="{{ URL::asset('/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{ URL::asset('/assets/js/popper.min.js')}}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap.min.js')}}"></script>

<script src="{{ URL::asset('/assets/js/app.js')}}"></script>
</html>



