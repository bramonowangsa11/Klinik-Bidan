@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="container min-vh-100 p-0 m-0 min-vw-100">
        <nav class="navbar navbar-expand-lg navbar-dark p-2 d-md-none m-0 min-vw-100 bg-dark" style="width: 47vh">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Imunisasi
                        </a>
                    </li>
                    <li>
                        <a href="/ibu-hamil" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Ibu Hamil
                        </a>
                    </li>
                    <li>
                        <a href="/data-kb" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            KB
                        </a>
                    </li>
                    <li>
                        <a href="/input-table" class="nav-link text-white dropdown-toggle active" id="navbarDropdown"
                            data-bs-toggle="dropdown">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            input Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/input-table">Imunisasi</a>
                            <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                            <a class="dropdown-item" href="/input-kb">KB</a>
                        </div>
                    </li>
                    <li>
                        <a href="/daftar-reservasi" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Daftar Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/daftar-pasien" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Tambah Pasien
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
        <div class="d-flex">
            <div class="sidebar p-3 flex-shrink-0 d-none d-md-block bg-dark m-0 vh-100">
                <h4 class="text-white">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Imunisasi
                        </a>
                    </li>
                    <li>
                        <a href="/ibu-hamil" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Ibu Hamil
                        </a>
                    </li>
                    <li>
                        <a href="/data-kb" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            KB
                        </a>
                    </li>
                    <li>
                        <a href="/data-pasien" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Daftar Pasien
                        </a>
                    </li>
                    <li>
                        <a href="/input-table" class="nav-link text-white dropdown-toggle active" id="navbarDropdown"
                            data-bs-toggle="dropdown">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            input Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/input-table">Imunisasi</a>
                            <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                            <a class="dropdown-item" href="/input-kb">KB</a>
                        </div>
                    </li>
                    <li>
                        <a href="/daftar-reservasi" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Daftar Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/daftar-pasien" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Tambah Pasien
                        </a>
                    </li>
                </ul>
            </div>
            {{-- isi konten nya disini --}}
            <div class="content flex-grow-1 p-2" style="width: 47vh">
                {{-- bagian kb dan search --}}
                <div class="row col-md-12 col-11 ms-0">
                    <div class=" col-md-7 mt-2">
                        <h1 class=" fw-bold">Data KB</h1>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (session('errors'))
                            <div class="alert alert-danger">
                                {{ session('errors') }}
                            </div>
                        @endif
                    </div>
                    <div class=" col-md-4">
                        <form class="form-inline my-2 my-lg-0" action="{{ route('imunisasi.search') }}" method="POST">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-9">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search" name="keyword">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <a href="/input-kb">
                            <button type="button" class="btn btn-success btn-sm">tambah</button>
                        </a>
                    </div>
                </div>
                {{-- bagian tabel --}}
                <div class="row col-md-12 col-12 mt-2 ms-0">
                    <div class="overflow-x-scroll mb-2">
                        <table class="table table-responsive table-sm table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Nama Ibu</th>
                                    <th>Nama Suami</th>
                                    <th>NIK Ibu</th>
                                    <th>NIK Suami</th>
                                    <th>NO KK</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ancs as $key => $anc)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $anc->tgl_pemeriksaan }}</td>
                                        <td>{{ $anc->nama_ibu }}</td>
                                        <td>{{ $anc->nama_suami }}</td>
                                        <td>{{ $anc->nik_ibu }}</td>
                                        <td>{{ $anc->nik_suami }}</td>
                                        <td>{{ $anc->tgl_pemeriksaan }}</td>

                                        <td>{{ $anc->alamat }}</td>

                                        <td>
                                            <a href="{{ route('bumil.showid', ['id' => $anc->id]) }}">
                                                <button type="button" class="btn btn-info btn-sm">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $ancs->links() }}
                </div>
            </div>
            {{-- end konten --}}
        </div>
    </div>
    {{-- end --}}
