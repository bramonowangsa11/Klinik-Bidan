@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="row w-full vh-100">
        {{-- sidebar --}}
        <div class="col-md-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Hi, Admin</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/dashboard-admin" class="nav-link active" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Imunisasi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
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
                    <li>
                        <a href="/logout" class="nav-link text-primary">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Logout
                        </a>
                    </li>

                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                            class="rounded-circle me-2">
                        <strong>Admin</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- side bar end --}}
        {{-- content --}}
        <div class="col-md-9 vh-100">
            <div class="row col-md-12">
                <div class="container flex justify-content-center align-items-center mt-lg-3 col-md-8">
                    <div class="card">
                        <div class=" card-header">
                            <h3>Tambah Pasien</h3>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class=" card-body">
                            <form action="/pasien" method="POST">
                                @csrf
                                @method('POST')
                                <div class="mb-2">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" placeholder="" name="nik"
                                        value="">
                                </div>
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder=""
                                        name="name" value="">
                                </div>
                                <div class="mb-2">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder=""
                                        name="alamat" value="">
                                </div>
                                <div class="mb-2">
                                    <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal-lahir"
                                        placeholder="dd/mm/yyyy" name="ttl" value="">
                                </div>
                                <div class="mb-2">
                                    <label for="no-telp" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" id="no-telp" placeholder=""
                                        name="no_telp" value="">
                                </div>
                                <div class="d-flex flex-row align-items-center mb-2">
                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <div><label class="form-label" for="form3Example6cd">Jenis Kelamin</label></div>
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="flexRadioDefault1" value="Laki-Laki" checked>
                                        <label class="form-check-label me-3" for="flexRadioDefault1">Laki-Laki</label>
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="flexRadioDefault2" value="Perempuan">
                                        <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
                                    </div>
                                </div>
                                <button class=" btn btn-primary" type="submit">Tambah</button>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        {{-- end --}}
    </div>
