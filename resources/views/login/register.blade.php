<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/untan.png" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/assets/css/core/libs.min.css" />


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
                                    @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    @if(session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    <div class="row justify-content-center">
                                        <!-- <img class="col-4" src="/img/untan.png" alt="">
                                        logo End -->
                                        <h3 class="col-lg-12 logo-title text-uppercase text-center text-primary mt-3">Sign Up</h3>
                                        <h5 class="col-lg-12 logo-title text-uppercase text-center  mt-3">Laboratorium Keilmuan Dasar</h5>
                                        <p class="logo-title text-center mt-1">Universitas Tanjungpura</p>
                                    </div>

                                    <!-- <h6 class="text-center text-uppercase mt-3">Login to Dashboard</h6> -->
                                    <form action="/register" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="full-name" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required="" autofocus>
                                                    @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="last-name" class="form-label">NIP/NIM/NIDN</label>
                                                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" value="{{ old('nip') }}" required="">
                                                    @error('nip')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required="">
                                                    @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="phone" class="form-label">Password</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="pwd" required="">
                                                    @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">User Type</label>
                                                    <select class="form-select @error('level') is-invalid @enderror" name="level" id="exampleFormControlSelect1" value="{{ old('level') }}" required="">
                                                        <option selected="" disabled hidden>Select Type</option>
                                                        <option value="1">Dosen</option>
                                                        <option value="2">Laboran</option>
                                                    </select>
                                                    @error('level')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Lab</label>
                                                    <select class="form-select @error('lab') is-invalid @enderror" name="lab" id="exampleFormControlSelect1" required="">
                                                        <option selected="" disabled hidden>Select Lab</option>
                                                        <option value="lpig">LPIG</option>
                                                        <option value="gambar">Gambar</option>
                                                        <option value="fisika">fisika</option>
                                                        <option value="biologi">Biologi</option>
                                                        <option value="kimia">kimia</option>
                                                        <option value="multimedia">Multimedia</option>
                                                    </select>
                                                    @error('lab')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="phone" class="form-label">photo</label>
                                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" aria-label="file example" s>
                                                    @error('photo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="phone" class="form-label">Address</label>
                                                    <textarea class="form-control  @error('address') is-invalid @enderror" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    @error('address')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">register</button>
                                        </div>
                                    </form>

                                    <div class="m-3 text-center">
                                        <small>Sudah punya akun <a href="/">klik disini</a></small>
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

</html>