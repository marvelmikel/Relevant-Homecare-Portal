<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Revevant - Admin Dashbaord</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/img/favicon.png')}}">

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="/assets/css/line-awesome.min.css">

        <link rel="stylesheet" href="/assets/plugins/morris/morris.css">

        <link rel="stylesheet" href="/assets/css/style.css">

        <!--[if lt IE 9]>
                    <script src="assets/js/html5shiv.min.js"></script>
                    <script src="assets/js/respond.min.js"></script>
                <![endif]-->
        </head>

    <body>
        <div class="main-wrapper">
            {{ $slot }}
        </div>
    </body>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script src="/assets/js/jquery.slimscroll.min.js"></script>

<script src="/assets/plugins/morris/morris.min.js"></script>
<script src="/assets/plugins/raphael/raphael.min.js"></script>
<script src="/assets/js/chart.js"></script>

<script src="/assets/js/app.js"></script>


    </html>
</html>
