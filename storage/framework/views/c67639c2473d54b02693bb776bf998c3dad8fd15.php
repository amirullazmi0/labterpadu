<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />

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

</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <?php echo $__env->make('template.v_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="main-content">
        <div class="position-relative iq-banner">

            <?php echo $__env->make('template.superadmin_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

        <?php echo $__env->make('template.v_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
</body>

</html><?php /**PATH D:\Project Laravel\labterpadu\resources\views//template/v_template.blade.php ENDPATH**/ ?>