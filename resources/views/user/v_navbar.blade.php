<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar fixed-top shadow shadow-sm">
    <div class="container-fluid navbar-inner">
        <a href="/" class="navbar-brand">
            <!--Logo start-->
            <div class="d-none d-sm-block d-md-block d-lg-block">
                <img class="img-fluid me-2" src="/img/untan.png" style="max-height: 60px" alt="">
            </div>
            <div class="d-inline">
                <h5 class="text-uppercase fw-bold">Lab Terpadu</h5>
                <h6 class="d-none d-sm-block d-md-block d-lg-block">Universitas Tanjungpura</h6>
                <div class="d-block d-md-none d-lg-none">
                    <h6>Universitas</h6>
                    <h6>Tanjungpura</h6>
                </div>
            </div>
        </a>
        {{-- <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
            </i>
        </div> --}}
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
                <li class="nav-item">
                    <a class="nav-link  {{ ($active === 'dashboard') ? 'active' : ''; }}" href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($active === 'ruangan') ? 'active' : ''; }}" href="/daftar-ruangan">Ruangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($active === 'alat') ? 'active' : ''; }}" href="/daftar-alat">Alat</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Download
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @foreach ($temp_berkas as $temp)
                        <li class="nav-link">
                            <a class="dropdown-item" href="{{ asset('storage/'.$temp->berkas) }}">{{ $temp->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> <!-- Nav Header Component Start -->

<div class="iq-navbar-header" style="height: 115px;">
    {{-- <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>{{ $title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
<!--Nav End-->