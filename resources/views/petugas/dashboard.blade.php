@extends('layouts.main')
@section('content')
    <div class="col mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Selamat Datang {{ Auth::user()->name }} 🎉</h5>
                        <p class="mb-4">
                            Aplikasi <span class="fw-bold">SIPENITAL RESMIN</span> merupakan aplikasi yang digunakan untuk
                            mengelola data personil di lingkungan Polres Minahasa
                        </p>

                        <a href="{{ route('petugas.personil') }}" class="btn btn-sm btn-outline-primary">Lihat Personil</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{ asset('templates') }}/assets/img/illustrations/man-with-laptop-light.png"
                            height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,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" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Personil</span>
                            <h3 class="card-title mb-2">{{ $personil }} Personil</h3>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,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" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Satuan Kerja</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $satker }} Satker</h3>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('templates') }}/assets/img/icons/unicons/paypal.png"
                                        alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Jabatan Kosong</span>
                            {{-- <h3 class="card-title text-nowrap mb-2">$2,456</h3> --}}
                            {{-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                -14.82%</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('templates') }}/assets/img/icons/unicons/cc-primary.png"
                                        alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">$14,857</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                        id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('templates') }}/assets/img/icons/unicons/paypal.png" alt="User"
                                    class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Paypal</small>
                                    <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('templates') }}/assets/img/icons/unicons/wallet.png" alt="User"
                                    class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+270.69</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('templates') }}/assets/img/icons/unicons/chart.png" alt="User"
                                    class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Transfer</small>
                                    <h6 class="mb-0">Refund</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+637.91</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('templates') }}/assets/img/icons/unicons/cc-success.png"
                                    alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Credit Card</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-838.71</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('templates') }}/assets/img/icons/unicons/wallet.png" alt="User"
                                    class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+203.33</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('templates') }}/assets/img/icons/unicons/cc-warning.png"
                                    alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Mastercard</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-92.45</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Revenue -->
@endsection
