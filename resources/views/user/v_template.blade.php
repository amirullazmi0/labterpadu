<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/untan.png" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/assets/css/core/libs.min.css" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="/assets/css/hope-ui.min.css?v=1.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="/assets/css/custom.min.css?v=1.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="/assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="/assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="/assets/css/rtl.min.css" />


    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Fullcalender CSS
    <link rel='stylesheet' href='/assets/vendor/fullcalendar/core/main.css' />
    <link rel='stylesheet' href='/assets/vendor/fullcalendar/daygrid/main.css' />
    <link rel='stylesheet' href='/assets/vendor/fullcalendar/timegrid/main.css' />
    <link rel='stylesheet' href='/assets/vendor/fullcalendar/list/main.css' /> -->

</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <main class="main-content">
        <div class="position-relative iq-banner">

            @include('user.v_navbar')

        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                @yield('content')
            </div>
        </div>

        @include('template.v_footer')
    </main>


    <!-- Library Bundle Script -->
    <script src="/assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="/assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="/assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="/assets/js/charts/vectore-chart.js"></script>

    <script src="/assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="/assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="/assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="/assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="/assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="/assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="/assets/js/hope-ui.js" defer></script>

    {{-- <script src="/assets/js/myjs.js"></script> --}}

    <!-- Fullcalender Javascript
    <script src='/assets/vendor/fullcalendar/core/main.js'></script>
    <script src='/assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='/assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='/assets/vendor/fullcalendar/list/main.js'></script>
    <script src='/assets/vendor/fullcalendar/interaction/main.js'></script>
    <script src='/assets/vendor/moment.min.js'></script>
    <script src='/assets/js/plugins/calender.js'></script> -->
</body>

</html>