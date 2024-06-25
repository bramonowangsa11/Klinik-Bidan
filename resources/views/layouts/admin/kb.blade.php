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
                            <h1 class=" fw-bold">Input Data KB</h1>
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
                                        <label for="tanggal-kb" class="form-label">Tanggal KB</label>
                                        <input type="date" class="form-control" id="tangal-kb" aria-describedby=""
                                            name="tgl_kb" value="{{old('tgl_kb')}}">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="nikform">
                                        <label for="nikIbu" class="form-label">NIK Ibu</label>
                                        <input type="text" class="form-control" id="nikIbu" aria-describedby=""
                                            value="{{ $ibu->nik }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                                        <label for="namaIbu" class="form-label">Nama Ibu</label>
                                        <input type="text" class="form-control" id="namaIbu" aria-describedby=""
                                            value="{{ $ibu->name }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                                        <label for="nikSuami" class="form-label">NIK Suami</label>
                                        <input type="text" class="form-control" id="nikSuami" aria-describedby=""
                                            value="{{ $suami->nik }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>

                                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                                        <label for="namaSuami" class="form-label">Nama Suami</label>
                                        <input type="text" class="form-control" id="namaSuami" aria-describedby=""
                                            value="{{ $suami->name }}" readonly>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="jumlah-anak" class="form-label">Jumlah Anak</label>
                                        <input type="number" class="form-control" id="jumlah-anak" aria-describedby=""
                                            name="jmlh_anak" value="{{ old('jmlh_anak') }}">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>

                                </div>
                                {{-- </form> --}}
                        </div>
                        {{-- Tengah --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="umur-anak-terkecil" class="form-label">Umur Anak Terkecil</label>
                                <input type="number" class="form-control" id="umur-anak-terkecil" aria-describedby=""
                                    name="umur_anak_terkecil" value="{{ old('umur_anak_terkecil') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="jaminan" class="form-label">Jaminan</label>
                                <input type="text" class="form-control" id="jaminan" aria-describedby=""
                                    name="jaminan"value="{{ old('jaminan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="alki" class="form-label">Alki</label>
                                <input type="text" class="form-control" id="alki" aria-describedby=""
                                    name="alki"value="{{ old('alki') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="pasca-plasenta" class="form-label">Pasca Plasenta</label>
                                <input type="text" class="form-control" id="pasca-plasenta" aria-describedby=""
                                    name="pasca_plasenta"value="{{ old('pasca_plasenta') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                <label for="pasca-salin" class="form-label">Pasca Salin</label>
                                <input type="text" class="form-control" id="pasca-salin" aria-describedby=""
                                    name="pasca_salin" value="{{ old('pasca_salin') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="do" class="form-label">DO</label>
                                <input type="text" class="form-control" id="do" aria-describedby=""
                                    name="do"value="{{ old('do') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>



                        </div>
                        {{-- Kanan --}}
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="gc-dari" class="form-label">gc dari</label>
                                <input type="text" class="form-control" id="gc-dari" aria-describedby=""
                                    name="gc_dari"value="{{ old('gc_dari') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>

                            <div class="mb-4">
                                <label for="metode-kb" class="form-label">metode kb</label>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="IUD">
                                    <label for="metode-kb" class="form-label">IUD</label>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="STK">
                                    <label for="metode-kb" class="form-label">STK</label>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="PIL">
                                    <label for="metode-kb" class="form-label">PIL</label>
                                    <input type="checkbox" class="form-check-input" id="metode-kb" name="metode_kb"
                                        value="CO">
                                    <label for="metode-kb" class="form-label">CO</label>

                                </div>
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="beratBadan" class="form-label">Berat Badan</label>
                                <input type="number" class="form-control" id="beratBadan" aria-describedby=""
                                    name="berat_badan"value="{{ old('berat_badan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="tinggiBadan" class="form-label">tinggi Badan</label>
                                <input type="number" class="form-control" id="tinggiBadan" aria-describedby=""
                                    name="tinggi_badan"value="{{ old('tinggi_badan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="tensi" class="form-label">Tensi</label>
                                <input type="text" class="form-control" id="tensi" aria-describedby=""
                                    name="tensi"value="{{ old('tensi') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="lila" class="form-label">Lila</label>
                                <input type="number" class="form-control" id="lila" aria-describedby=""
                                    name="lila"value="{{ old('lila') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>



                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="tanggal-kembali" class="form-label">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tanggal-kembali" aria-describedby=""
                                    name="tgl_kembali"value="{{ old('tgl_kembali') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="kegagalan" class="form-label">Kegagalan</label>
                                <input type="text" class="form-control" id="kegagalan" aria-describedby=""
                                    name="kegagalan"value="{{ old('kegagalan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="inform-consent" class="form-label">Inform Consent</label>
                                <input type="text" class="form-control" id="inform-consent" aria-describedby=""
                                    name="inform_consent"value="{{ old('inform_consent') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" aria-describedby=""
                                    name="keterangan"value="{{ old('keterangan') }}">
                                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <input type="text" class="form-control" id="keterangan" aria-describedby=""
                                name="id_suami" value="{{ $ibu->id }}" hidden>
                            <input type="text" class="form-control" id="keterangan" aria-describedby=""
                                name="id_ibu" value="{{ $suami->id }}" hidden>
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
