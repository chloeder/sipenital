@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-6 col-sm-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                        <div>
                            <span class="fw-semibold d-block mb-1">Total Personil</span>
                            <p class="card-title mb-2">{{ $current_personil }} dari {{ $count_personil }} Personil</p>
                        </div>
                        @if ($percentage_personil == 100)
                            <div>
                                <h5 class="fw-bold text-success">
                                    <i class="bx bx-up-arrow-alt"></i>{{ $percentage_personil }}%
                                </h5>
                            </div>
                        @elseif($percentage_personil >= 50)
                            <div>
                                <h5 class="fw-bold text-warning">
                                    <i class="bx bx-minus"></i>{{ $percentage_personil }}%
                                </h5>
                            </div>
                        @else
                            <div>
                                <h5 class="fw-bold text-danger">
                                    <i class="bx bx-down-arrow-alt"></i>{{ $percentage_personil }}%
                                </h5>
                            </div>
                        @endif
                    </div>
                    {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-center justify-content-between">
                        <div>
                            <span class="fw-semibold d-block mb-1">Jabatan Terisi</span>
                            <p class="card-title mb-2">{{ $current_personil }} dari {{ $count_personil }} Jabatan</p>
                        </div>
                        @if ($percentage_personil == 100)
                            <div>
                                <h5 class="fw-bold text-success">
                                    <i class="bx bx-up-arrow-alt"></i>{{ $percentage_personil }}%
                                </h5>
                            </div>
                        @elseif($percentage_personil >= 50)
                            <div>
                                <h5 class="fw-bold text-warning">
                                    <i class="bx bx-minus"></i>{{ $percentage_personil }}%
                                </h5>
                            </div>
                        @else
                            <div>
                                <h5 class="fw-bold text-danger">
                                    <i class="bx bx-down-arrow-alt"></i>{{ $percentage_personil }}%
                                </h5>
                            </div>
                        @endif
                    </div>
                    {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                </div>
            </div>
        </div>

    </div>
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">{{ $satker->nama_satker }}</h5>
            <div>
                <button type="button" class="btn btn-md btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#backDropModal">Import Excel
                </button>
                <a href="{{ route('admin.satker') }}" class="btn btn-md btn-outline-dark">Kembali</a>
            </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">

            {{-- <div class="mb-3">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#backDropModal">Import
                    Excel</button>
            </div> --}}

            <div class="table-responsive text-nowrap">
                <table class="table table-hover my-3" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Nama Personil</th>
                            <th>Pangkat</th>
                            <th>NRP/NIP</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personil as $p)
                            @if ($p->nama == null)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->jabatan }}</td>
                                    <td class="fst-italic fw-bold">
                                        <span class="badge rounded-pill bg-label-danger">Kosong</span>
                                    </td>
                                    <td class="fst-italic fw-bold">
                                        <span class="badge rounded-pill bg-label-danger">Kosong</span>
                                    </td>
                                    <td class="fst-italic fw-bold">
                                        <span class="badge rounded-pill bg-label-danger">Kosong</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.personil.detail', $p->id) }}">
                                                    Lihat Detail</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->jabatan }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->pangkat }}</td>
                                    <td>{{ $p->nrp_nip }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.personil.detail', $p->id) }}">
                                                    Edit Personil</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('admin.personil.import') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Import File Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="input-group">

                        <input type="file" class="form-control" name="file" id="inputGroupFile01" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-success">Import</button>
                </div>
            </form>
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
    {{-- @push('js2')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script type="text/javascript">
            var labels = {!!json_encode($labels) !!};
            var users = {!! json_encode($data) !!};

            const data = {
                labels: labels,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: users,
                }]
            };

            const config = {
                type: 'line',
                data: data,
                options: {}
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endpush --}}
@endsection
