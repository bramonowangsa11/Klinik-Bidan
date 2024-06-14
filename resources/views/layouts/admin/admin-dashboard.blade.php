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
                {{-- bagian tabel --}}
                <div class="row col-md-12 col-12 ms-0 mt-2">
                    <div class="container mt-5">
                        <h1>Dashboard</h1>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 bg-primary rounded-4">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Reservasi</h5>
                                        <p class="card-text">Jumlah Reservasi Hari Ini</p>
                                        <h2 class=" fw-bold">$12,500</h2>
                                        <a href="#" class="text-white">More Info ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 rounded-4" style="background-color: #44C95C">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Pasien</h5>
                                        <p class="card-text">Jumlah Pasien Terdaftar</p>
                                        <h2 class=" fw-bold">$12,500</h2>
                                        <a href="#" class="text-white">More Info ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 rounded-4" style="background-color: #FFAC1C">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Pasien</h5>
                                        <p class="card-text">Jumah Pasien Bulan Ini</p>
                                        <h2 class=" fw-bold">$12,500</h2>
                                        <a href="#" class="text-white">More Info ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 rounded-4" style="background-color: #949d16">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Imunisasi</h5>
                                        <p class="card-text">Jumah Data Imunisasi Bulan Ini</p>
                                        <h2 class=" fw-bold">$12,500</h2>
                                        <a href="/cetak-imunisasi" class="text-white">More Info ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 rounded-4" style="background-color: #c51a23">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">Ibu Hamil</h5>
                                        <p class="card-text">Jumah Data Ibu Hamil Bulan Ini</p>
                                        <h2 class=" fw-bold">$12,500</h2>
                                        <a href="/cetak-bumil" class="text-white">More Info ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom mb-4 rounded-4" style="background-color: #0eb59c">
                                    <div class="card-body text-white">
                                        <h5 class="card-title fw-bold">KB</h5>
                                        <p class="card-text">Jumah Data KB Bulan Ini</p>
                                        <h2 class=" fw-bold">$12,500</h2>
                                        <a href="/cetak-kb" class="text-white">More Info ></a>
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
