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
                        <a href="/pasien" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/lihat-reservasi-user" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Cek Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/riwayat" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Riwayat
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
        <div class="d-flex">
            <div class="sidebar p-3 flex-shrink-0 d-none d-md-block bg-dark m-0 vh-100">
                <a href="/dashboard-user" class="text-white fw-bold fs-5 text-decoration-none">Dashboard</a>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/pasien" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/lihat-reservasi-user" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Cek Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/riwayat" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Riwayat
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Logout
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
                    
                    {{-- <div class="col-md-2">
                        <a href="/input-kb">
                            <button type="button" class="btn btn-success btn-sm">tambah</button>
                        </a>
                    </div> --}}
                </div>
                {{-- bagian tabel --}}
                <div class="row col-md-12 col-12 mt-2 ms-0">
                    <div class="overflow-x-scroll mb-2">
                        <table class="table table-responsive table-sm table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Istri</th>
                                    <th>NIK Istri/Suami</th>
                                    <th>Nama Suami</th>
                                    {{-- <th>Nik Suami</th> --}}
                                    <th>ALamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kbs as $key => $kb)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $kb->tgl_kb }}</td>
                                        <td>{{ $kb->Ibu->name }}</td>
                                        <td>
                                            <div class=" border-bottom border-1 border-black">
                                                {{ $kb->Ibu->nik }}
                                            </div>
                                            <div>
                                                {{ $kb->Suami->nik }}
                                            </div>
                                        </td>
                                        <td>{{ $kb->Suami->name }}</td>
                                        {{-- <td>{{ $kb->Suami->nik }}</td> --}}
                                <td>{{ $kb->Suami->alamat }}</td>
                                        <td>
                                            <a href="{{ route('kb.showByid', ['id' => $kb->id]) }}">
                                                <button type="button" class="btn btn-info btn-sm">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $kbs->links() }}
                </div>
            </div>
            {{-- end konten --}}
        </div>
    </div>
    {{-- end --}}
