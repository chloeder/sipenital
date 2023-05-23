@extends('layouts.main')
@section('content')
    <div class="col mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-between row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Selamat Datang {{ Auth::user()->name }} 🎉</h5>
                        <p class="mb-4">
                            Aplikasi <span class="fw-bold">SIPENITAL RESMIN</span> merupakan aplikasi yang digunakan untuk
                            mengelola data personil di lingkungan Polres Minahasa
                        </p>

                        <a href="{{ route('admin.personil') }}" class="btn btn-sm btn-outline-primary">Lihat Personil</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body align-middle">
                        <img src="{{ asset('templates') }}/assets/img/logo/tribrata.png" height="140" class="me-4"
                            alt="View Badge User" data-app-dark-img="logo/tribrata.png"
                            data-app-light-img="logo/tribrata.png" />

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAjRJREFUSEvtlz1y01AUhe+VQkWUn5IKswPMpI8pGclhsgLCMESiYwdxVpAS2RSIHUAiDXQ4NQzJDkhWgGOFgkmkk3mKZfTz9DOWGVPgymPd+z7pvHOPnpkW9OEFcakQrLmvtsBBm6Ge+Mabw7o3qLnmCzDdU4k+X+j9b0V9UvCyt7vH4F7cBEbvUh/sV8E11/pIhK24jgnG2Bh4sj4pWHPNn0S0lmgY+UZ/vQy86pkbIehruoYPfcN++u+DFya1kCYyF4JHzOr3v26utU9W6/oquF+0l1Dp4pf+9lR2ffnI6hACZK8t3VHPR0/ss+zvU3NpnrVDwLsq5xKw7XcHH5J1mmcNCdgs6lVVfpCFT8ErR1YPjL0qMIP3x117OmpCpSDAj7K+bI+obQyuoxQTnY6Nfjt5c83BruUQ4VmVUurV7/XRtjP6Ey6Tb7NKrbmmWGy1CkzMz33dduYCvuu9fKhAOamERgX83jfsnbmAV9zd1yA+qAemVOw22uOqMcreUMhhO86BRmDhC7E4FOqUzbEYJ1EXEg0vu/YwNU7RWBDd7oEsDJiPJ0/gJE0SxWtFgAD8OAbm9jiVRK6Ziz7f6JccGvL1qZnNhE7qiWcFi4xmxpdSgzEf+7rdkQbIrOC6859VrOgEUltq4Q0OqQWmVj7BcM5QotBQlshJvigag2OlpJJLJJ6rucRi/8G38Zx3c6nUcSIlnZ58+ctGRxwIwutJAE0KoNBZNmxKwTVDv1HZwv473QCqWmMug9NZ6gAAAABJRU5ErkJggg==" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="{{ route('admin.personil') }}">Lihat</a>

                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Personil</span>
                            <h3 class="card-title mb-2">{{ $personil }} Personil</h3>
                            <a href="{{ route('admin.personil') }}" class="stretched-link"></a>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAaFJREFUSEvtVu1RwlAQ3AsFGDugA7ECsQKxAHlcGpAOhArEAuCIFiBUIFQgHYgdYAG8c4IBIyR5OGQGHMnP3MfO3bvbPcKePtoTLg4HWET8UknP8jpRrwfjpF1EKqWSnmTFzOf0zszTpP1HxSJS9kjfnO1XPBgOmpFfKL0+CMYVY5VOmXm29FsHrnqkL64kUIwNB9UYeATChSvGKl0y8+gIvOiAiBxbnT4z/3G4hoaD2i/X6ZyZJ6nrFCfqAKjk7aUFtZY7uRhIaEQmfk7M1HDQyGQuFwkUaT8ckQil1yFCrkjMldpJ+os5wPc8GFVb9UC+BU1UESbfNU8ktiWQ1XDFoBWP9BlAeeM5iFrGcHv9/84iEcmoR/qaChqjeUrXN8yDIipeqdOjdJtKdO8YvJlpBKeFAofSG4Bw5Zp4q5S9x39NJDog3G5RcbEXyFZdUoS5zLVVkqi0hDp90Wy3BaK7jKo/rFI5eW9Ffjsfe0uwJ5GaJe0D+L42FUMLaqyDbgAvGcglEuuslaw0OnVjwZikAWaqk2tIirIfjkgUVZErzyeZeDMuRevZXQAAAABJRU5ErkJggg==" />

                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="{{ route('admin.satker') }}">Lihat</a>

                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Satuan Kerja</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $satker }} Satker</h3>
                            <a href="{{ route('admin.satker') }}" class="stretched-link"></a>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,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" />

                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="{{ route('admin.satker') }}">Lihat</a>

                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Jabatan Kosong</span>
                            <h3 class="card-title text-nowrap mb-2">{{ $jabatankosong }} Jabatan</h3>
                            <a href="{{ route('admin.satker') }}" class="stretched-link"></a>
                            {{-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                -14.82%</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAlFJREFUSEvlldGO0kAUhv9Tim3ckuUWipF9Amvi/XbvjeITyMYXwCcQn8DdJ5BHEBMT76zXmtg3WMgC3lbpGgq7PWaKxGktMLiQTXTuoDPznf+f/8wQbmjQDXGxdfDQLD2jmCvg+H119uPzMmFbBQ8Nqwvg0QKmQXtYib6/y4NvDTwq3n7AmvYpA3lrR+HjfxMsVO3U6kFxzykUaB/Q+5VJ0MvauJNwjW6VOkz8VIIFBPjM8ADy7elYhEtpKIfr3LRcjfFhza7+NNKPDhAE6+jK4IFheQQcEvDtitAoMDsxqCH+kyEMnNaisLUVcEot4aU9CdvzMJV6AN/NQmLC0Z1J6H01y/UrzA4phmtPL47leUqKZbVRpNeFlUPTaoPxYomyAOAAoPri+6KYxW8lsIAQo8WEE6FWKIn58guA8m8w9ZnQJubXecUw0XFtMu5sBBaTz1BOIIlaw3oDIHUjLRQNzFITzE0xlwheDHjC9mwxSorlRUvS3bWjsLEuUBufsbwgL1BM3JxNil2VNtrY6iTFqwMFgHviIokJp3n2/pXidKCoD7APkJPXTsn5Mj2pTsciC7lD+YzlQMmtIUKnm5eOBrhgOAS4DOwD8O0ovH8tcCZQK4M0MvZaDHolgBrpB3kPSeKIXJF4eTRtvkgeDDiiZ8V1SaQ7yzYTa34dydl8c35ejS5O8lSnwOseglUbpZNv+QDurbL7D8XQKLdCEHXkm2dVz6rYrRyuTS4HFbt3Ak563pjbzcDHWhS6174yVZWLvBRiKi/r5Z0pXlfg/wf+CadvFS7DESrgAAAAAElFTkSuQmCC" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.daftar.riwayat.pensiun') }}">Lihat</a>

                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Personil Pensiun</span>
                            <h3 class="card-title mb-2">{{ $pensiun }} Personil</h3>
                            <a href="{{ route('admin.daftar.riwayat.pensiun') }}" class="stretched-link"></a>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAMZJREFUSEvtlsEVgjAQRH9sQDvQEuhA6pCDdCJ0ggesAzqwBO1AGxBfDnhQFjd5CpfNeTaTzJuZxDHTcjPxEkRcQ76A9dBhH3DNoNJeJIj4BA2wFTZvd5AasaSAST3qDTPXmzxxcfLl4GD/JYcJsBIwN+A8Nt/BsS+Zl6trKBwctAUQg+ugzKDws0ZsUsd4SJyRzOXjlCvitBQwd0Wcqo84aa5mlfmTyjSphxQwc01mLv9mAxvBiJe/feg1ztdigr632k01uCc7bVsfWCfoVwAAAABJRU5ErkJggg==" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.daftar.riwayat.sakit') }}">Lihat</a>

                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Personil Sakit</span>
                            <h3 class="card-title mb-2">{{ $sakit }} Personil</h3>
                            <a href="{{ route('admin.daftar.riwayat.sakit') }}" class="stretched-link"></a>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXtJREFUSEvtlttZAjEQRs/QgHQgHUigAaxEqESsxKUSbUAWO6AEbID4EQN7nwwrygt5TXbOzu2fEa505EpcTGCfMwfujT+5Fccq9TYJ9msy4CllqHLvyWTKQvtGBfeCHmkJeCe4Bv1CmIljo3nhc8Z43oG78E6Bt4L7QE+OGuEN8G+g58ArYCvU5wzxPASQ8CmOXT0FqbCfwKFlPK/RgJpTnzPD8xbBj+JCXhunARcW4kKXFH3sP1giPEdjTiskKzjU10/O81hsLzJl2QmWiS4s54ADfI2/gYviKuX4FuqWHjW100lQLlhcI/ZhVMKATBxbVcMvCE4qV/lHzO2E8I8CUpXMHcJBClvHoFVAomodpHUYFbEpmVFhyttGJzwMCRjHcG6UIVFAYSWTWBdlrS5VoAluWAg6oRWtrhVDb3gjvDVPjxzr6qPmvLYAqJ4mwS0516LbdlfJaf3B36y3HeEtw5PgOMzn7BmZXB5wWOjDlqEdEzhlpM/91cDfQ/IeLqbX+Y0AAAAASUVORK5CYII=" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.daftar.riwayat.bermasalah') }}">Lihat</a>

                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Personil Bermasalah</span>
                            <h3 class="card-title mb-2">{{ $kasus }} Personil</h3>
                            <a href="{{ route('admin.daftar.riwayat.bermasalah') }}" class="stretched-link"></a>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
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
        </div> --}}

        <div class="col-md-12 col-lg-12 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Riwayat Agama Personil</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="{{ route('admin.daftar.riwayat.personil') }}">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <a href="{{ route('admin.agama.islam') }}">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Agama</small>
                                        <h6 class="mb-0 fw-bold badge rounded-pill bg-label-secondary">Islam</h6>
                                    </div>
                                </a>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{ $islam }}</h6>
                                    <span class="text-muted">Orang</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <a href="{{ route('admin.agama.protestan') }}">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Agama</small>
                                        <h6 class="mb-0 fw-bold badge rounded-pill bg-label-secondary">Protestan</h6>
                                    </div>
                                </a>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{ $protestan }}</h6>
                                    <span class="text-muted">Orang</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <a href="{{ route('admin.agama.katolik') }}">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Agama</small>
                                        <h6 class="mb-0 fw-bold badge rounded-pill bg-label-secondary">Katolik</h6>
                                    </div>
                                </a>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{ $katolik }}</h6>
                                    <span class="text-muted">Orang</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <a href="{{ route('admin.agama.hindu') }}">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Agama</small>
                                        <h6 class="mb-0 fw-bold badge rounded-pill bg-label-secondary">Hindu</h6>
                                    </div>
                                </a>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{ $hindu }}</h6>
                                    <span class="text-muted">Orang</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <a href="{{ route('admin.agama.buddha') }}">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Agama</small>
                                        <h6 class="mb-0 fw-bold badge rounded-pill bg-label-secondary">Buddha</h6>
                                    </div>
                                </a>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{ $buddha }}</h6>
                                    <span class="text-muted">Orang</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <a href="{{ route('admin.agama.khonghucu') }}">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Agama</small>
                                        <h6 class="mb-0 fw-bold badge rounded-pill bg-label-secondary">Khonghucu</h6>
                                    </div>
                                </a>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{ $khonghucu }}</h6>
                                    <span class="text-muted">Orang</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <a href="{{ route('admin.agama.lainnya') }}">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Agama</small>
                                        <h6 class="mb-0 fw-bold badge rounded-pill bg-label-secondary">Lainnya</h6>
                                    </div>
                                </a>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{ $lainnya }}</h6>
                                    <span class="text-muted">Orang</span>
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
