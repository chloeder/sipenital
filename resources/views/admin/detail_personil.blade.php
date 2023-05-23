@extends('layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 ">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail Personil/</span>{{ $personil->nama }}</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Detail Personil</h5>
                    <a href="{{ route('admin.personil') }}" class="btn btn-md btn-outline-dark">Kembali</a>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form action="{{ route('admin.personil.update', $personil->id) }}" id="formAccountSettings"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-name">Nama </label>
                                @if ($personil->nama == null)
                                    <input type="text" name="nama" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="nama" class="form-control" id="basic-default-name"
                                        value="{{ $personil->nama }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Pangkat</label>
                                @if ($personil->pangkat == null)
                                    <input type="text" name="pangkat" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="pangkat" class="form-control" id="basic-default-company"
                                        value="{{ $personil->pangkat }}" />
                                @endif

                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">TMT Pangkat</label>
                                @if ($personil->tmt_pangkat == null)
                                    <input type="date" name="tmt_pangkat" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="date" name="tmt_pangkat" class="form-control" id="basic-default-company"
                                        value="{{ $personil->tmt_pangkat }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">TMT Berkala</label>
                                @if ($personil->tmt_berkala == null)
                                    <input type="date" name="tmt_berkala" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="date" name="tmt_berkala" class="form-control" id="basic-default-company"
                                        value="{{ $personil->tmt_berkala }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">NRP/NIP</label>
                                @if ($personil->nrp_nip == null)
                                    <input type="text" name="nrp_nip" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="nrp_nip" class="form-control" id="basic-default-company"
                                        value="{{ $personil->nrp_nip }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Satuan
                                    Kerja</label>
                                <select id="defaultSelect" class="form-select" name="satker_id">
                                    <option>Pilih Satuan Kerja</option>
                                    @foreach ($satker as $s)
                                        <option value="{{ $s->id }}"
                                            {{ $personil->satker_id == $s->id ? 'selected' : '' }}>
                                            {{ $s->nama_satker }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Jabatan</label>
                                @if ($personil->jabatan == null)
                                    <input type="text" name="jabatan" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="jabatan" class="form-control" id="basic-default-company"
                                        value="{{ $personil->jabatan }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">TMT -
                                    Jabatan</label>
                                @if ($personil->tmt_jabatan == null)
                                    <input type="date" name="tmt_jabatan" class="form-control"
                                        id="basic-default-name" value="" />
                                @else
                                    <input type="date" name="tmt_jabatan" class="form-control"
                                        id="basic-default-company" value="{{ $personil->tmt_jabatan }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Status
                                    Marital</label>
                                <select id="defaultSelect" class="form-select" name="status_marital">
                                    <option>Status Marital</option>
                                    <option value="KAWIN" {{ $personil->status_marital == 'KAWIN' ? 'selected' : '' }}>
                                        KAWIN</option>
                                    <option value="BLM KAWIN"
                                        {{ $personil->status_marital == 'BLM KAWIN' ? 'selected' : '' }}>
                                        BLM
                                        KAWIN</option>
                                </select>
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Nama
                                    Isteri/Suami</label>
                                @if ($personil->nama_isteri_suami == null)
                                    <input type="text" name="nama_isteri_suami" class="form-control"
                                        id="basic-default-name" value="" />
                                @else
                                    <input type="text" name="nama_isteri_suami" class="form-control"
                                        id="basic-default-company" value="{{ $personil->nama_isteri_suami }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Agama</label>
                                <select id="defaultSelect" class="form-select" name="agama">
                                    <option>Agama</option>
                                    <option value="ISLAM" {{ $personil->agama == 'ISLAM' ? 'selected' : '' }}>
                                        ISLAM
                                    </option>
                                    <option value="PROTESTAN" {{ $personil->agama == 'PROTESTAN' ? 'selected' : '' }}>
                                        PROTESTAN
                                    </option>
                                    <option value="KATOLIK" {{ $personil->agama == 'KATOLIK' ? 'selected' : '' }}>
                                        KATOLIK
                                    </option>
                                    <option value="HINDU" {{ $personil->agama == 'HINDU' ? 'selected' : '' }}>
                                        HINDU
                                    </option>
                                    <option value="BUDDHA" {{ $personil->agama == 'BUDDHA' ? 'selected' : '' }}>
                                        BUDDHA
                                    </option>
                                    <option value="KHONGHUCU" {{ $personil->agama == 'KHONGHUCU' ? 'selected' : '' }}>
                                        KHONGHUCU
                                    </option>
                                </select>

                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Tangga Lahir</label>
                                @if ($personil->tanggal_lahir == null)
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        id="basic-default-name" value="" />
                                @else
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        id="basic-default-company" value="{{ $personil->tanggal_lahir }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Alamat</label>
                                @if ($personil->alamat == null)
                                    <input type="text" name="alamat" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="alamat" class="form-control" id="basic-default-company"
                                        value="{{ $personil->alamat }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">No
                                    Telepon</label>
                                @if ($personil->no_hp == null)
                                    <input type="text" name="no_hp" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="no_hp" class="form-control" id="basic-default-company"
                                        value="{{ $personil->no_hp }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Fasilitas
                                    Kesehatan</label>
                                @if ($personil->fasilitas_kesehatan == null)
                                    <input type="text" name="fasilitas_kesehatan" class="form-control"
                                        id="basic-default-name" value="" />
                                @else
                                    <input type="text" name="fasilitas_kesehatan" class="form-control"
                                        id="basic-default-company" value="{{ $personil->fasilitas_kesehatan }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">No BPJS</label>
                                @if ($personil->no_bpjs == null)
                                    <input type="text" name="no_bpjs" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="no_bpjs" class="form-control" id="basic-default-company"
                                        value="{{ $personil->no_bpjs }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">NIK</label>
                                @if ($personil->nik == null)
                                    <input type="text" name="nik" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="nik" class="form-control" id="basic-default-company"
                                        value="{{ $personil->nik }}" />
                                @endif
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="form-label fw-bolder" for="basic-default-company">Kasus</label>
                                @if ($personil->kasus == null)
                                    <input type="text" name="kasus" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="kasus" class="form-control" id="basic-default-company"
                                        value="{{ $personil->kasus }}" />
                                @endif
                            </div>
                            <div class="mb-4 col">
                                <label class="form-label fw-bolder" for="basic-default-company">Keterangan</label>
                                @if ($personil->keterangan == null)
                                    <input type="text" name="keterangan" class="form-control" id="basic-default-name"
                                        value="" />
                                @else
                                    <input type="text" name="keterangan" class="form-control"
                                        id="basic-default-company" value="{{ $personil->keterangan }}" />
                                @endif
                            </div>

                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>

                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <!-- Basic with Icons -->

        </div>
    </div>
@endsection
