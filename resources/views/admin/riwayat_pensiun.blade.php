@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endpush
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Riwayat/</span>Riwayat Pensiun</h4>

    <div class="card">

        <div class="card-header d-flex  justify-content-between">
            <h5 class="mb-0">Daftar Pensiunan Tahun {{ \Carbon\Carbon::now()->year }}</h5>
            <p class="mb-0">Total : <span>{{ $pensiun->count() }}</span></p>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped table-hover py-3" id="myTable">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP/NIP</th>
                            <th>Bagian</th>
                            <th>Pangkat</th>
                            <th>Jabatan</th>
                            <th>Keterangan</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $month = Carbon\Carbon::now()->month;
                        @endphp
                        @foreach ($pensiun as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->nrp_nip }}</td>
                                @if ($p->satker_id == null)
                                    <td><span></span> </td>
                                @else
                                    <td>
                                        <a href="{{ route('admin.struktur', $p->satker->id) }}">
                                            <span
                                                class="fw-bold badge rounded-pill bg-label-dark">{{ $p->satker->nama_satker }}</span>
                                        </a>
                                    </td>
                                @endif
                                <td>{{ $p->pangkat }}</td>
                                <td>{{ $p->jabatan }}</td>
                                @if ($p->keterangan == null)
                                    <td>
                                        <span class="fw-bold fst-italic badge rounded-pill bg-label-secondary">Akan
                                            Pensiun</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="fw-bold badge rounded-pill bg-label-danger">{{ $p->keterangan }}</span>
                                    </td>
                                @endif
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.personil.detail', $p->id) }}">
                                                Lihat Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    @push('js')
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    @endpush
@endsection
