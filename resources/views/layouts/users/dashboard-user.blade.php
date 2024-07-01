@extends('layouts.bootstrap')
@section('content')


    {{-- css --}}
    <style>
        .background-card-user {
            /* filter: blur(8px);
            -webkit-filter: blur(8px); */

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{ asset('images/background-foto2.jpg') }});
        }
    </style>
    {{-- end css --}}
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
                        <a href="/logout" class="nav-link text-white">
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
                <h4 class="text-white">Dashboard</h4>
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
                        <a href="/logout" class="nav-link text-white">
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
                {{-- bagian tabel --}}
                <div class="row col-md-12 col-12 ms-0 mt-2">
                    <div class="container mt-5">
                        <h1>Dashboard</h1>
                        <div class="row">
                            <div class="col-md-3">

                                <div class="card card-custom mb-4 rounded-4 background-card-user">
                                    
                                    <div class="card-body text-white">
                                        
                                        <div class="justify-content-center">
                                            <div class="col-md-auto justify-content-center d-flex">
                                                <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="50"
                                                    height="50" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-width="2"
                                                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </div>
                                            <div class="col-md-auto d-block">
                                                <h4 class="card-title fw-bold text-center">{{Auth::user()->name}}</h4>
                                                <h6 class=" fw-semibold">{{Auth::user()->name}}</h6>
                                                <h6 class=" fw-semibold">{{Auth::user()->email}}</h6>
                                                <h6 class=" fw-semibold">{{$user_data->ttl}}</h6>
                                                <h6 class=" fw-semibold">{{$user_data->no_telp}}</h6>
                                            </div>
                                        </div>



                                        {{-- <p class="card-text">Jumlah Reservasi Hari Ini</p> --}}
                                        {{-- <h2>{{$today_reservation}}</h2> --}}
                                        {{-- <a href="#" class="text-white">Go somewhere ></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card card-custom mb-4 rounded-4"
                                    style="background:url({{ asset('images/mountain.jpg') }}); background-size:cover; filter:blur(0px)">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Riwayat KB</h5>
                                        <p class="card-text">Riwayat Pemeriksaan Terkahir</p>
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-kb" class="text-white">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card card-custom mb-4 rounded-4"
                                    style="background:url({{ asset('images/mountain.jpg') }}); background-size:cover; filter:blur(0px)">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Riwayat ANC</h5>
                                        <p class="card-text">Riwayat Pemeriksaan Terkahir</p>
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-anc" class="text-white">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card card-custom mb-4 rounded-4"
                                    style="background:url({{ asset('images/mountain.jpg') }}); background-size:cover; filter:blur(0px)">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Riwayat Imunisasi</h5>
                                        <p class="card-text">Riwayat Pemeriksaan Terkahir</p>
                                        {{-- <h2>{{$count_pasien}}</h2> --}}
                                        <a href="/riwayat-imunisasi" class="text-white">Go somewhere ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end konten --}}
            </div>
        </div>
        {{-- end --}}
