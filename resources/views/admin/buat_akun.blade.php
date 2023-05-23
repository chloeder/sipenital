@extends('layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kelola Akun/</span>Buat Akun</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Buat Akun Baru</h5>
                    <a href="{{ route('admin.kelola.akun.semua') }}" class="btn btn-md btn-outline-dark">Kembali</a>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" action="{{ route('register.auth') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nrp_nip" class="form-label">NRP/NIP</label>
                            <input type="text" class="form-control @error('nrp_nip') is-invalid @enderror" id="nrp_nip"
                                name="nrp_nip" placeholder="Silahkan masukkan alamat NRP/NIP anda" autofocus />
                            @error('nrp_nip')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Silahkan masukkan alamat email anda"
                                value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password"
                                    class="form-control  @error('password') is-invalid @enderror" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="basic-default-company" class="form-label">Role</label>
                            <select class="form-select" name="role" id="defaultSelect">
                                <option value="1">Admin</option>
                                <option value="0">Operator</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
