@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="container bg-secondary min-vh-100 min-vw-100 p-0 m-0">
        <nav class="navbar navbar-dark bg-dark d-md-none m-0">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
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
            <div class="content flex-grow-1 p-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class=" mt-3">
                            <h1 class=" fw-bold">Input Data Imunisasi</h1>
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
                        <div class="col-md-3">
                            <form class=" mt-2" method="POST" action="{{ route('kb.store') }}">
                                @csrf
                                {{-- kiri --}}
                                <div class="">
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTanggal" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" id="inputTanggal" aria-describedby=""
                                            name="tanggal">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputNamaAnak" class="form-label">Nama Anak</label>
                                        <input type="text" class="form-control" id="inputNamaAnak"
                                            aria-describedby="" name="nama_anak">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputNIK" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="inputNIK" aria-describedby=""
                                            name="nik_anak">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
                                        <input type="text" class="form-control" id="inputNamaOrtu"
                                            aria-describedby="" name="nama_orangtua">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTanggalLhr" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="inputTanggalLhr"
                                            aria-describedby="" name="tgl_lahir">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputAlamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="inputAlamat" aria-describedby=""
                                            name="alamat">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                </div>

                                {{-- </form> --}}
                        </div>
                        {{-- Tengah --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                <input type="text" class="form-control" id="inputBeratBadan" aria-describedby=""
                                    name="berat_badan">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-4 form-outline border-0 border-bottom border-dark">
                                <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
                                <input type="text" class="form-control" id="inputPanjangBadan" aria-describedby=""
                                    name="panjang_badan">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-2">
                                <label for="inputHBO" class="form-label">HBO</label>
                                <input type="checkbox" class="form-check-input" id="inputHBO" name="HBO"
                                    value='1'>

                            </div>
                            <div class="mb-2">
                                <label for="inputBCG" class="form-label">BCG</label>
                                <input type="checkbox" class="form-check-input" id="inputBCG" name="BCG"
                                    value='1'>

                            </div>
                            <div class="mb-4">
                                <label for="inputPenta" class="form-label">PENTA</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputPenta" name="PENTA"
                                        value="1">
                                    <label for="inputPenta" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputPenta" name="PENTA"
                                        value="2">
                                    <label for="inputPenta" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputPenta" name="PENTA"
                                        value="3">
                                    <label for="inputPenta" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-4">
                                <label for="inputIPV" class="form-label">IPV</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV"
                                        value="1">
                                    <label for="inputIPV" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV"
                                        value="2">
                                    <label for="inputIPV" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV"
                                        value="3">
                                    <label for="inputIPV" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="inputPCV" class="form-label">PCV</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputPCV" name="PCV"
                                        value="1">
                                    <label for="inputPCV" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputPCV" name="PCV"
                                        value="2">
                                    <label for="inputPCV" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputPCV" name="PCV"
                                        value="3">
                                    <label for="inputPCV" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>



                        </div>

                        {{-- Kanan --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-3">
                                <label for="inputBCG" class="form-label">Rota Virus</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS"
                                        value="1">
                                    <label for="inputBCG" class="form-label">1</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS"
                                        value="2">
                                    <label for="inputBCG" class="form-label">2</label>
                                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS"
                                        value="3">
                                    <label for="inputBCG" class="form-label">3</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="inputTPV" class="form-label">MK</label>
                                <input type="checkbox" class="form-check-input" id="inputTPV" name="MK"
                                    value='1'>

                            </div>
                            <div class="mb-3">
                                <label for="inputTPV" class="form-label">Booster</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="inputTPV" name="booster"
                                        value="PENTA">
                                    <label for="inputTPV" class="form-label">Penta</label>
                                    <input type="checkbox" class="form-check-input" id="inputTPV" name="booster"
                                        value="MK">
                                    <label for="inputTPV" class="form-label">MK</label>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary mb-md-3 position-relative mt-auto mb">Submit</button>
                            </form>




                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>
    </div>
