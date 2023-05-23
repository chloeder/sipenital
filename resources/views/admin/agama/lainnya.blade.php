@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endpush
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Agama Personil/</span>Lainnya</h4>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Daftar Personil</h5>
            <p class="mb-0">Total : <span>{{ $agama->count() }}</span></p>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped table-hover py-3" id="myTable">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Agama</th>
                            <th>Bagian</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agama as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a->nama }}</td>
                                @if ($a->agama == null)
                                    <td><span class="badge rounded-pill bg-label-danger">Kosong</span></td>
                                @else
                                @endif

                                @if ($a->satker_id == null)
                                    <td><span>Kosong</span> </td>
                                @else
                                    <td>
                                        <a href="{{ route('admin.struktur', $a->satker->id) }}">
                                            <span
                                                class="fw-bold badge rounded-pill bg-label-dark">{{ $a->satker->nama_satker }}</span>
                                        </a>
                                    </td>
                                @endif

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.personil.detail', $a->id) }}">
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
