@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endpush
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Satuan Kerja/</span>Semua Bagian/Satker</h4>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Daftar Satuan Kerja</h5>
            <p class="mb-0">Total : <span>{{ $satker->count() }}</span></p>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped table-hover py-3" id="myTable">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($satker as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ route('admin.struktur', $s->id) }}">
                                        <span class="fw-bold badge rounded-pill bg-label-dark">{{ $s->nama_satker }}</span>
                                    </a>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.struktur', $s->id) }}">
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
