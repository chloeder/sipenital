@extends('layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kelola Akun/</span> {{ $user->name }}</h4>

        <!-- Basic Layout -->
        <div class="row">

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Kelola Akun</h5>
                    <div class="d-flex">
                        <form action="{{ route('admin.kelola.delete.akun', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger d-grid justify-content-center me-2">Hapus Akun</button>
                        </form>
                        <a href="{{ route('admin.kelola.akun.semua') }}" class="btn btn-md btn-outline-dark">Kembali</a>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Nama</label>
                        <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                            value="{{ $user->name }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInput1" class="form-label">NRP/NIP</label>
                        <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                            value="{{ $user->nrp_nip }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Jabatan</label>
                        <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                            value="{{ $user->jabatan }}" readonly />
                    </div>
                    <form id="formAuthentication" class="mb-3" action="{{ route('admin.kelola.update.akun', $user->id) }}"
                        method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <div class="d-flex">
                                    <span class="me-2">Email</span>
                                    <p class="badge rounded-pill bg-secondary">*Email Lama : {{ $user->email }}</p>
                                </div>
                            </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Silahkan masukkan alamat email anda"
                                value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="btn btn-dark justify-content-center">Update Akun</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
