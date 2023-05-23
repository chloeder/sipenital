@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endpush
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kelola Akun/</span>Semua Akun</h4>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Daftar Akun Terdaftar</h5>
            <p class="mb-0">Total : <span>{{ $user->count() }}</span></p>
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
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->nrp_nip }}</td>
                                <td>{{ $u->jabatan }}</td>
                                <td>
                                    @if ($u->status == 'active')
                                        <form action="{{ route('admin.update.status.akun', $u->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="w-bold badge rounded-pill bg-success"
                                                style="border: none"><span>Aktif</span>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.update.status.akun', $u->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="w-bold badge rounded-pill bg-danger"
                                                style="border: none"><span>Tidak Aktf</span>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.kelola.edit.akun', $u->id) }}">
                                                Kelola Akun
                                            </a>
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
