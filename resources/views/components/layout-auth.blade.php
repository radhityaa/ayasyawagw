<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MPWA Multi Device V5.0.0 ,Whatsapp gateway Multi device Beta version">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords"
        content="waapi,wa gateway, whatsapp blast, wamp, mpwa, m pedia wa gateway, wa gateway m pedia, ">
    <meta name="author" content="Ilman Sunanuddin , M pedia">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ $title }} | Ayasya Tech</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/new-template/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/new-template/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/new-template/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet"
        href="{{ asset('assets/new-template/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/new-template/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/new-template/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/new-template/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- body -->
                {{ $slot }}
                <!-- /body -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/new-template/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/new-template/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/new-template/vendor/libs/@form-validation/auto-focus.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/new-template/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/new-template/js/pages-auth.js') }}"></script>
</body>

</html>
