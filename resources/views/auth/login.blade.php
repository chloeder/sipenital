<!DOCTYPE html>


<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('templates') }}/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SI-PERSONIL | POLRES MINAHASA</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('templates') }}/assets/img/logo/tribrata.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('templates') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('templates') }}/assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('templates') }}/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('templates') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('templates') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('templates') }}/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="{{ asset('templates') }}/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('templates') }}/assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="app-brand justify-content-center mb-4">
                    <img src="{{ asset('templates') }}/assets/img/logo/tribrata.png" height="100" class="me-4"
                        alt="View Badge User" data-app-dark-img="logo/tribrata.png"
                        data-app-light-img="logo/tribrata.png" />
                    <img src="{{ asset('templates') }}/assets/img/logo/polda_sulut.png" height="100"
                        alt="View Badge User" data-app-dark-img="logo/polda_sulut.png"
                        data-app-light-img="logo/polda_sulut.png" />
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->

                        <div class="app-brand justify-content-center">
                            <a href="#" class="app-brand-link gap-2">

                                <span class="app-brand-text demo text-body fw-bolder">SIPENITAL RESMIN</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <div class="text-center">
                            <h4 class="mb-2">Selamat Datang! 👋</h4>
                            <p class="mb-4">Silahkan login menggunakan email dan password yang telah didaftarkan</p>
                        </div>

                        <form id="formAuthentication" class="mb-3" action="{{ route('login.auth') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nrp_nip" class="form-label">NRP/NIP</label>
                                <input type="text" class="form-control @error('nrp_nip') is-invalid @enderror"
                                    id="nrp_nip" name="nrp_nip" placeholder="Silahkan masukkan alamat NRP/NIP anda"
                                    autofocus />
                                @error('nrp_nip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="d-flex justify-content-end">
                                    <a href="auth-forgot-password-basic.html">
                                        <small class="text-warning">Lupa Password?</small>
                                    </a>
                                </div> --}}
                            </div>
                            {{-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Ingatkan Saya </label>
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <button class="btn btn-dark d-grid w-100" type="submit">Masuk</button>
                            </div>
                        </form>

                        {{-- <p class="text-center">
                            <span>Belum mempunyai akun?</span>
                            <a href="{{ route('register') }}">
                                <span class="text-warning">Buat akun sekarang!</span>
                            </a>
                        </p> --}}
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('templates') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('templates') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('templates') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('templates') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('templates') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('templates') }}/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
