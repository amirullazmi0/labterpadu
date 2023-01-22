<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
    <div class="container-fluid navbar-inner">
        <div class="d-none d-lg-block">
            <?php if(auth()->user()->level != "0"): ?>
            <?php echo e(auth()->user()->lab->name); ?>

            <?php endif; ?>
        </div>
        <a href="" class="navbar-brand">
            <?php if(auth()->user()->level != "0"): ?>
            <?php echo e(auth()->user()->lab->name); ?>

            <?php endif; ?>
            <!--Logo start-->
            
            <!--logo End-->
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
            </i>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <span class="mt-2 navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php if(auth()->user()->photo): ?>
                        <img class="img-fluid" style="max-height: 40px" src="<?php echo e(asset('storage/'. auth()->user()->photo)); ?>" alt="">
                        <?php else: ?>
                        <img class="img-fluid" style="max-height: 40px" src="<?php echo e(asset('img/user-default.jpg')); ?>" alt="">
                        <?php endif; ?>
                        <div class="caption ms-3 d-none d-md-block ">
                            <h6 class="mb-0 caption-title"><?php echo e(auth()->user()->name); ?></h6>
                            <?php if( auth()->user()->level == "0"): ?>
                            <p class="mb-0 caption-sub-title">Admin</p>
                            <?php endif; ?>
                            <?php if( auth()->user()->level == "1"): ?>
                            <p class="mb-0 caption-sub-title">Dosen</p>
                            <?php endif; ?>
                            <?php if( auth()->user()->level == "2"): ?>
                            <p class="mb-0 caption-sub-title">Laboran</p>
                            <?php endif; ?>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <?php if(auth()->user()->level == "0"): ?>
                        <li><a class="dropdown-item" href="/admin/profil/<?php echo e(auth()->user()->name); ?>">Profil</a></li>
                        <?php else: ?>
                        <li><a class="dropdown-item" href="/aadmin/profil/<?php echo e(auth()->user()->name); ?>">Profil</a></li>
                        <?php endif; ?>
                        <hr>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> <!-- Nav Header Component Start -->

<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1><?php echo e($title); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="/assets/images/dashboard/top-header.png" alt="header"
            class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/assets/images/dashboard/top-header1.png" alt="header"
            class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/assets/images/dashboard/top-header3.png" alt="header"
            class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/assets/images/dashboard/top-header4.png" alt="header"
            class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="/assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
    </div>
</div> <!-- Nav Header Component End -->
<!--Nav End--><?php /**PATH D:\Project Laravel\labterpadu\resources\views/template/v_navbar.blade.php ENDPATH**/ ?>