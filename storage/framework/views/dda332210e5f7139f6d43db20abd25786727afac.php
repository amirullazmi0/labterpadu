<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e($title); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/untan.png" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/assets/css/core/libs.min.css ass" />

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

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                                <div class="card-body">
                                    <?php if(session()->has('success')): ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo e(session('success')); ?>

                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php endif; ?>

                                    <?php if(session()->has('error')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php echo e(session('error')); ?>

                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php endif; ?>

                                    <div class="row justify-content-center">
                                        <img class="col-4" src="/img/untan.png" alt="">
                                        <!--logo End-->
                                        <h5 class="col-lg-12 logo-title text-uppercase text-center  mt-3">Laboratorium Keilmuan Dasar</h5>
                                        <p class="logo-title text-center mt-1">Universitas Tanjungpura</p>
                                    </div>

                                    <!-- <h6 class="text-center text-uppercase mt-3">Login to Dashboard</h6> -->
                                    <form action="/login" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="nip" class="form-label">NIP/NIM/NIDN</label>
                                                    <input type="text" class="form-control" name="nip" id="nip" aria-describedby="nip"
                                                        autofocus>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" id="password"
                                                        aria-describedby="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-sm btn-primary">Sign In</button>
                                        </div>
                                    </form>

                                    <div class="m-3 text-center">
                                        <small>Kembali ke halaman utama <a href="/">klik disini</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                    <img src="/img/labterpadu.jpg" class="img-fluid gradient-main animated-scaleX" alt="images">
                    <!-- <img src="/assets/images/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="images"> -->
                </div>
            </div>
        </section>
    </div>

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

    <!-- App Script -->
    <script src="/assets/js/hope-ui.js" defer></script>
</body>

</html><?php /**PATH D:\Project Laravel\labterpadu\resources\views//login/login.blade.php ENDPATH**/ ?>