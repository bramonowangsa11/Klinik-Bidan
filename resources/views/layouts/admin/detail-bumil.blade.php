@extends('layouts.bootstrap')
@section('content')
{{-- start --}}

{{-- hhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}
<div class="row d-flex col-lg-12 order-2 order-lg-1 vh-100">
    {{-- sidebar --}}
    <div class="col-md-3 col-sm-2">
        <div class="d-flex flex-column p-3 text-bg-secondary vh-100" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Hi, Admin</span>
            </a>
            <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/admin" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Imunisasi
                    </a>
                </li>
                <li>
                    <a href="/ibu-hamil" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Ibu Hamil
                    </a>
                </li>
                <li>
                    <a href="/input-table" class="nav-link text-white dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    input Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/input-table">Imunisasi</a>
                        <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Submenu 3</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Customers
                    </a>
                </li>
                </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
            </div>
        </div>
    </div>
    {{-- content --}}
    <div class="col-md-9">
        <div>
            <h1>Detail Data Ibu Hamil</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1" role="tab" aria-controls="page1" aria-selected="true">Halaman 1</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab" aria-controls="page2" aria-selected="true">Halaman 2</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3" role="tab" aria-controls="page3" aria-selected="true">Halaman 3</a>
                        </li>
                    </ul>
                    </div>
                    <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <!-- Halaman 1 -->
                        <div class="tab-pane fade show active" id="page1" role="tabpanel" aria-labelledby="page1-tab">
                        <div class="row">
                                <div class="col-md-4">
                                    <form class="" method="POST" action="/input-table">
                                        <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTanggalPemeriksaan" class="form-label">Tanggal Pemeriksaan</label>
                                            <input type="date" class="form-control" id="inputTanggalPemeriksaan" disabled name="tanggalPemeriksaan" value="21/21/2024">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-0">
                                        <label for="inputREG" class="form-label">REG</label>
                                        <div>
                                            <label for="inputREG" class="form-label">B</label>
                                            <input type="checkbox" class="form-check-input" id="inputREG" name="REG" value="1" checked disabled>
                                            <label for="inputREG" class="form-label">L</label>
                                            <input type="checkbox" class="form-check-input" id="inputREG" name="REG" value="2" disabled>
                                            <input type="hidden" name="REG" value="0">
                                        </div>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-0">
                                        <label for="inputBukuKIA" class="form-label">Buku KIA</label>
                                        <input type="checkbox" class="form-check-input" id="inputBukuKIA" name="bukuKIA" value='1' checked disabled>
                                        <input type="hidden" name="bukuKIA" value="0">
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputNamaIbu" class="form-label">Nama Ibu</label>
                                            <input type="text" class="form-control" id="inputNamaIbu" aria-describedby="" value="Sutinah" name="nama_ibu" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputNamaSuami" class="form-label">Nama Suami</label>
                                            <input type="text" class="form-control" id="inputNamaSuami" aria-describedby="" value="Suyanto" name="nama_suami" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputNIK_ibu" class="form-label">NIK Ibu</label>
                                            <input type="text" class="form-control" id="inputNIK_ibu" aria-describedby="" value="3403101108020001" name="nik_ibu" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputNIK_suami" class="form-label">NIK Suami</label>
                                            <input type="text" class="form-control" id="inputNIK_suami" aria-describedby="" value="3403101108020002" name="nik_suami" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        
                                        
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputNoKK" class="form-label">NO KK</label>
                                            <input type="text" class="form-control" id="inputNoKK" aria-describedby="" value="3403101108020000" disabled name="noKK">
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTgl_lahir_ibu" class="form-label">Tanggal Lahir Ibu / Suami</label>
                                            <input type="date" class="form-control" id="inputTgl_lahir-ibu" aria-describedby="" value="12/12/2024" name="tgl_lahir_ibu" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputUmur" class="form-label">Umur Ibu / Suami</label>
                                            <input type="text" class="form-control" id="inputUmur" aria-describedby="" value="26" name="umur" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                        <label for="input_pendidikan" class="form-label">Pendidikan Ibu / Suami</label>
                                        <input  type="text" class="form-control" id="input_pendidikan" aria-describedby="" name="pendidikan" value="SMA" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="input_pekerjaan" class="form-label">Pekerjaan Ibu / Suami</label>
                                        <input type="text" class="form-control" id="input_pekerjaan" aria-describedby="" name="pekerjaan" value="Petani" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputAlamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="inputAlamat" aria-describedby="" name="alamat" value="Gunungkidul" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="input_noHP" class="form-label">No HP / BPJS</label>
                                        <input type="text" class="form-control" id="input_noHP" aria-describedby="" name="noHP" value="082233334444" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputParitas" class="form-label">Paritas</label>
                                        <input type="text" class="form-control" id="inputParitas" aria-describedby="" name="paritas" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputSpasing" class="form-label">Spasing</label>
                                        <input type="text" class="form-control" id="inputSpasing" aria-describedby="" name="spasing" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputP4K" class="form-label">P4K/Rencana Kelahiran</label>
                                        <input type="checkbox" class="form-check-input" id="inputP4K" name="P4K" value='1' checked disabled>
                                        <input type="hidden" name="HBO" value="0">
                                        </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputHPHT" class="form-label">HPHT</label>
                                        <input type="date" class="form-control" id="inputHPHT" aria-describedby="" name="HPHT" value="12/12/2002" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputHPL" class="form-label">HPL</label>
                                        <input type="date" class="form-control" id="inputHPL" aria-describedby="" name="HPL" value="12/12/2002" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    
                                    
                                    <a class="btn btn-primary next-btn" data-toggle="tab" href="#page2" aria-selected="false">Next</a>
                                    
                                </div>
                            </form>
                        </div>
                        </div>
                        <!-- Halaman 2 -->
                        <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                        <div class="row">
                                <div class="col-md-4">
                                    <form class="" method="POST" action="/input-table">
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputUmurKehamilan" class="form-label">Umur Kehamilan (Minggu)</label>
                                        <input type="text" class="form-control" id="inputUmurKehamilan" aria-describedby="" name="umur_keehamilan" value="9+3" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputAnamesaKehamilan" class="form-label">Anamesa Kehamilan</label>
                                        <input type="text" class="form-control" id="inputAnamesaKehamilan" aria-describedby="" name="anamesa_kehamilan" value="batuk" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTinggiBadan" class="form-label">Tinggi Badan</label>
                                        <input type="text" class="form-control" id="inputTinggiBadan" aria-describedby="" name="tinggi_badan" value="165" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputLILA" class="form-label">LILA</label>
                                            <input type="text" class="form-control" id="inputLILA" aria-describedby="" name="LILA" value="24" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                            <input type="text" class="form-control" id="inputBeratBadan" aria-describedby="" name="berat_badan" value="44" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTFU" class="form-label">TFU</label>
                                            <input type="text" class="form-control" id="inputTFU" aria-describedby="" name="TFU" value="10" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTensi" class="form-label">Tensi</label>
                                            <input type="text" class="form-control" id="inputTensi" aria-describedby="" name="tensi" value="124/80" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTT_K1" class="form-label">Status TT K1</label>
                                            <input type="text" class="form-control" id="inputTT_K1" aria-describedby="" name="TT_K1" value="115" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputTM" class="form-label">TM/K1/K4</label>
                                            <input type="text" class="form-control" id="inputTM" aria-describedby="" name="TM" value="gatau" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputFE1" class="form-label">FE1/FE2/FE3</label>
                                            <input type="text" class="form-control" id="inputFE1" aria-describedby="" name="FE1" value="80" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                        <label for="inputBATlain" class="form-label">BAT Lain</label>
                                        <input  type="text" class="form-control" id="inputBATlain" aria-describedby="" name="BATlain" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputPresentasi" class="form-label">Presentasi</label>
                                        <input type="text" class="form-control" id="inputPresentasi" aria-describedby="" name="Presentasi" value="100" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputDJJ" class="form-label">DJJ</label>
                                        <input type="text" class="form-control" id="inputDJJ" aria-describedby="" name="DJJ" value="144" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputKepalaTHD" class="form-label">Kepala THD PAP</label>
                                        <input type="text" class="form-control" id="inputKepalaTHD" aria-describedby="" name="KepalaTHD" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTBJ" class="form-label">TBJ</label>
                                        <input type="text" class="form-control" id="inputTBJ" aria-describedby="" name="TBJ" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputHB" class="form-label">HB</label>
                                        <input type="text" class="form-control" id="inputHB" aria-describedby="" name="HB" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputProteinUrine" class="form-label">Protein Urine</label>
                                        <input type="text" class="form-control" id="inputProteinUrine" aria-describedby="" name="ProteinUrine" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    
                                    <a class="btn btn-primary next-btn" data-toggle="tab" href="#page3" >Next</a>
                                    <a class="btn btn-primary prev-btn" data-toggle="tab" href="#page1" >Prev</a>
                                </div>
                            </form>
                        </div>
                        </div>
                        <!-- Halaman 3 -->
                        <div class="tab-pane fade" id="page3" role="tabpanel" aria-labelledby="page3-tab">
                        <div class="row">
                                <div class="col-md-4">
                                    <form class="" method="POST" action="/input-bumil">
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputGoldar" class="form-label">Golongan Darah</label>
                                            <input type="text" class="form-control" id="inputGoldar" aria-describedby="" name="Goldar" value="A" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputHBsAG" class="form-label">HBsAG</label>
                                            <input type="text" class="form-control" id="inputHBsAG" aria-describedby="" name="HbsAG" value="gatau" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputIMS" class="form-label">IMS</label>
                                            <input type="text" class="form-control" id="inputIMS" aria-describedby="" name="IMS" value="gatau" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                            <label for="inputHIV" class="form-label">HIV</label>
                                            <input type="text" class="form-control" id="inputHIV" aria-describedby="" name="HIV" value="gatau" disabled>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputKomplikasi" class="form-label">Komplikasi</label>
                                            <div>
                                                <input type="checkbox" class="form-check-input" id="inputHDK" name="HDK" value="1" >
                                                <label for="inputKomplikasi" class="form-label">HDK</label>
                                                <input type="checkbox" class="form-check-input" id="inputAbortus" name="Abortus" value="2">
                                                <label for="inputKomplikasi" class="form-label">Abortus</label>
                                                <input type="checkbox" class="form-check-input" id="inputPerdarahan"  name="Perdarahan" value="3">
                                                <label for="inputBCG" class="form-label">Perdarahan</label>
                                                <input type="checkbox" class="form-check-input" id="inputInveksi"  name="Inveksi" value="4">
                                                <label for="inputBCG" class="form-label">Infeksi</label>
                                                <input type="checkbox" class="form-check-input" id="inputKPD"  name="KPD" value="5">
                                                <label for="inputBCG" class="form-label">KPD</label>
                                                <input type="checkbox" class="form-check-input" id="inputlain-lain"  name="lain-lain" value="6">
                                                <label for="inputBCG" class="form-label">lain-lain</label>
                                                <input type="hidden" name="Komplikasi" value="0">
                                            </div>
                                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                        </div>
                                        
                                </div>
                                <div class="col-md-4">
                                    
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                        <label for="inputRujuk" class="form-label">Rujuk Ke</label>
                                        <input  type="text" class="form-control" id="inputRujuk" aria-describedby="" name="Rujuk" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTrimester1" class="form-label">Trimester 1</label>
                                        <input type="text" class="form-control" id="inputTrimester1" aria-describedby="" name="Trimester1" value="1" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTrimester2" class="form-label">Trimester 2</label>
                                        <input type="text" class="form-control" id="inputTrimester2" aria-describedby="" name="Trimester2" value="2" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputTrimester3" class="form-label">Trimester 3</label>
                                        <input type="text" class="form-control" id="inputTrimester3" aria-describedby="" name="Trimester3" value="3" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                        <label for="inputFR" class="form-label">FR/R</label>
                                        <input type="text" class="form-control" id="inputFR" aria-describedby="" name="FR" value="gatau" disabled>
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <a class="btn btn-primary" data-toggle="tab" href="#page3" aria-selected="true">Prev</a>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ubahModal">Edit</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                    
                                    
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
                
                </div>
                
            </div>
            <!-- Modal ubah-->
            <div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi detail data disini -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active" id="halaman1-tab" data-toggle="tab" href="#halaman1" role="tab" aria-controls="halaman1" aria-selected="true">Halaman 1</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="halaman2-tab" data-toggle="tab" href="#halaman2" role="tab" aria-controls="halaman2" aria-selected="true">Halaman 2</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="halaman3-tab" data-toggle="tab" href="#halaman3" role="tab" aria-controls="halaman3" aria-selected="true">Halaman 3</a>
                                    </li>
                                </ul>
                                </div>
                                <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <!-- Halaman 1 -->
                                    <div class="tab-pane fade show active" id="halaman1" role="tabpanel" aria-labelledby="halaman1-tab">
                                    <div class="row">
                                            <div class="col-md-4">
                                                <form class="" method="POST" action="/input-table">
                                                    <div class="mb-2 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputTanggalPemeriksaan" class="form-label">Tanggal Pemeriksaan</label>
                                                        <input type="date" class="form-control" id="inputTanggalPemeriksaan"  name="tanggalPemeriksaan" value="21/21/2024">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-0">
                                                    <label for="inputREG" class="form-label">REG</label>
                                                    <div>
                                                        <label for="inputREG" class="form-label">B</label>
                                                        <input type="checkbox" class="form-check-input" id="inputREG" name="REG" value="1" checked >
                                                        <label for="inputREG" class="form-label">L</label>
                                                        <input type="checkbox" class="form-check-input" id="inputREG" name="REG" value="2" >
                                                        <input type="hidden" name="REG" value="0">
                                                    </div>
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-0">
                                                    <label for="inputBukuKIA" class="form-label">Buku KIA</label>
                                                    <input type="checkbox" class="form-check-input" id="inputBukuKIA" name="bukuKIA" value='1' checked >
                                                    <input type="hidden" name="bukuKIA" value="0">
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNamaIbu" class="form-label">Nama Ibu</label>
                                                        <input type="text" class="form-control" id="inputNamaIbu" aria-describedby="" value="Sutinah" name="nama_ibu" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNamaSuami" class="form-label">Nama Suami</label>
                                                        <input type="text" class="form-control" id="inputNamaSuami" aria-describedby="" value="Suyanto" name="nama_suami" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNIK_ibu" class="form-label">NIK Ibu</label>
                                                        <input type="text" class="form-control" id="inputNIK_ibu" aria-describedby="" value="3403101108020001" name="nik_ibu" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNIK_suami" class="form-label">NIK Suami</label>
                                                        <input type="text" class="form-control" id="inputNIK_suami" aria-describedby="" value="3403101108020002" name="nik_suami" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    
                                                    
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputNoKK" class="form-label">NO KK</label>
                                                        <input type="text" class="form-control" id="inputNoKK" aria-describedby="" value="3403101108020000"  name="noKK">
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputTgl_lahir_ibu" class="form-label">Tanggal Lahir Ibu / Suami</label>
                                                        <input type="date" class="form-control" id="inputTgl_lahir-ibu" aria-describedby="" value="12/12/2024" name="tgl_lahir_ibu" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputUmur" class="form-label">Umur Ibu / Suami</label>
                                                        <input type="text" class="form-control" id="inputUmur" aria-describedby="" value="26" name="umur" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="input_pendidikan" class="form-label">Pendidikan Ibu / Suami</label>
                                                    <input  type="text" class="form-control" id="input_pendidikan" aria-describedby="" name="pendidikan" value="SMA" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="input_pekerjaan" class="form-label">Pekerjaan Ibu / Suami</label>
                                                    <input type="text" class="form-control" id="input_pekerjaan" aria-describedby="" name="pekerjaan" value="Petani" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputAlamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="inputAlamat" aria-describedby="" name="alamat" value="Gunungkidul" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="input_noHP" class="form-label">No HP / BPJS</label>
                                                    <input type="text" class="form-control" id="input_noHP" aria-describedby="" name="noHP" value="082233334444" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputParitas" class="form-label">Paritas</label>
                                                    <input type="text" class="form-control" id="inputParitas" aria-describedby="" name="paritas" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputSpasing" class="form-label">Spasing</label>
                                                    <input type="text" class="form-control" id="inputSpasing" aria-describedby="" name="spasing" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputP4K" class="form-label">P4K/Rencana Kelahiran</label>
                                                    <input type="checkbox" class="form-check-input" id="inputP4K" name="P4K" value='1' checked >
                                                    <input type="hidden" name="HBO" value="0">
                                                    </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHPHT" class="form-label">HPHT</label>
                                                    <input type="date" class="form-control" id="inputHPHT" aria-describedby="" name="HPHT" value="12/12/2002" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHPL" class="form-label">HPL</label>
                                                    <input type="date" class="form-control" id="inputHPL" aria-describedby="" name="HPL" value="12/12/2002" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                
                                                
                                                <a class="btn btn-primary next-btn" data-toggle="tab" href="#page2" aria-selected="false">Next</a>
                                                
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <!-- Halaman 2 -->
                                    <div class="tab-pane fade" id="halaman2" role="tabpanel" aria-labelledby="halaman2-tab">
                                    <div class="row">
                                            <div class="col-md-4">
                                                <form class="" method="POST" action="/input-table">
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputUmurKehamilan" class="form-label">Umur Kehamilan (Minggu)</label>
                                                    <input type="text" class="form-control" id="inputUmurKehamilan" aria-describedby="" name="umur_keehamilan" value="9+3" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputAnamesaKehamilan" class="form-label">Anamesa Kehamilan</label>
                                                    <input type="text" class="form-control" id="inputAnamesaKehamilan" aria-describedby="" name="anamesa_kehamilan" value="batuk" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTinggiBadan" class="form-label">Tinggi Badan</label>
                                                    <input type="text" class="form-control" id="inputTinggiBadan" aria-describedby="" name="tinggi_badan" value="165" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputLILA" class="form-label">LILA</label>
                                                        <input type="text" class="form-control" id="inputLILA" aria-describedby="" name="LILA" value="24" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                                                        <input type="text" class="form-control" id="inputBeratBadan" aria-describedby="" name="berat_badan" value="44" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputTFU" class="form-label">TFU</label>
                                                        <input type="text" class="form-control" id="inputTFU" aria-describedby="" name="TFU" value="10" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputTensi" class="form-label">Tensi</label>
                                                        <input type="text" class="form-control" id="inputTensi" aria-describedby="" name="tensi" value="124/80" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputTT_K1" class="form-label">Status TT K1</label>
                                                        <input type="text" class="form-control" id="inputTT_K1" aria-describedby="" name="TT_K1" value="115" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputTM" class="form-label">TM/K1/K4</label>
                                                        <input type="text" class="form-control" id="inputTM" aria-describedby="" name="TM" value="gatau" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputFE1" class="form-label">FE1/FE2/FE3</label>
                                                        <input type="text" class="form-control" id="inputFE1" aria-describedby="" name="FE1" value="80" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="inputBATlain" class="form-label">BAT Lain</label>
                                                    <input  type="text" class="form-control" id="inputBATlain" aria-describedby="" name="BATlain" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputPresentasi" class="form-label">Presentasi</label>
                                                    <input type="text" class="form-control" id="inputPresentasi" aria-describedby="" name="Presentasi" value="100" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputDJJ" class="form-label">DJJ</label>
                                                    <input type="text" class="form-control" id="inputDJJ" aria-describedby="" name="DJJ" value="144" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputKepalaTHD" class="form-label">Kepala THD PAP</label>
                                                    <input type="text" class="form-control" id="inputKepalaTHD" aria-describedby="" name="KepalaTHD" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTBJ" class="form-label">TBJ</label>
                                                    <input type="text" class="form-control" id="inputTBJ" aria-describedby="" name="TBJ" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputHB" class="form-label">HB</label>
                                                    <input type="text" class="form-control" id="inputHB" aria-describedby="" name="HB" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputProteinUrine" class="form-label">Protein Urine</label>
                                                    <input type="text" class="form-control" id="inputProteinUrine" aria-describedby="" name="ProteinUrine" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                
                                                <a class="btn btn-primary next-btn" data-toggle="tab" href="#page3" >Next</a>
                                                <a class="btn btn-primary prev-btn" data-toggle="tab" href="#page1" >Prev</a>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <!-- Halaman 3 -->
                                    <div class="tab-pane fade" id="halaman3" role="tabpanel" aria-labelledby="halaman3-tab">
                                    <div class="row">
                                            <div class="col-md-4">
                                                <form class="" method="POST" action="/input-table">
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputGoldar" class="form-label">Golongan Darah</label>
                                                        <input type="text" class="form-control" id="inputGoldar" aria-describedby="" name="Goldar" value="A" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputHBsAG" class="form-label">HBsAG</label>
                                                        <input type="text" class="form-control" id="inputHBsAG" aria-describedby="" name="HbsAG" value="gatau" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputIMS" class="form-label">IMS</label>
                                                        <input type="text" class="form-control" id="inputIMS" aria-describedby="" name="IMS" value="gatau" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                        <label for="inputHIV" class="form-label">HIV</label>
                                                        <input type="text" class="form-control" id="inputHIV" aria-describedby="" name="HIV" value="gatau" >
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="inputKomplikasi" class="form-label">Komplikasi</label>
                                                        <div>
                                                            <input type="checkbox" class="form-check-input" id="inputHDK" name="HDK" value="1" >
                                                            <label for="inputKomplikasi" class="form-label">HDK</label>
                                                            <input type="checkbox" class="form-check-input" id="inputAbortus" name="Abortus" value="2">
                                                            <label for="inputKomplikasi" class="form-label">Abortus</label>
                                                            <input type="checkbox" class="form-check-input" id="inputPerdarahan"  name="Perdarahan" value="3">
                                                            <label for="inputBCG" class="form-label">Perdarahan</label>
                                                            <input type="checkbox" class="form-check-input" id="inputInveksi"  name="Inveksi" value="4">
                                                            <label for="inputBCG" class="form-label">Infeksi</label>
                                                            <input type="checkbox" class="form-check-input" id="inputKPD"  name="KPD" value="5">
                                                            <label for="inputBCG" class="form-label">KPD</label>
                                                            <input type="checkbox" class="form-check-input" id="inputlain-lain"  name="lain-lain" value="6">
                                                            <label for="inputBCG" class="form-label">lain-lain</label>
                                                            <input type="hidden" name="Komplikasi" value="0">
                                                        </div>
                                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                    </div>
                                                    
                                            </div>
                                            <div class="col-md-4">
                                                
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                                                    <label for="inputRujuk" class="form-label">Rujuk Ke</label>
                                                    <input  type="text" class="form-control" id="inputRujuk" aria-describedby="" name="Rujuk" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester1" class="form-label">Trimester 1</label>
                                                    <input type="text" class="form-control" id="inputTrimester1" aria-describedby="" name="Trimester1" value="1" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester2" class="form-label">Trimester 2</label>
                                                    <input type="text" class="form-control" id="inputTrimester2" aria-describedby="" name="Trimester2" value="2" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputTrimester3" class="form-label">Trimester 3</label>
                                                    <input type="text" class="form-control" id="inputTrimester3" aria-describedby="" name="Trimester3" value="3" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <div class="mb-3 form-outline border-0 border-bottom border-dark">
                                                    <label for="inputFR" class="form-label">FR/R</label>
                                                    <input type="text" class="form-control" id="inputFR" aria-describedby="" name="FR" value="gatau" >
                                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                                </div>
                                                <a class="btn btn-primary" data-toggle="tab" href="#page3" aria-selected="true">Prev</a>
                                    
                                                
                                                
                                            </div>
                                            <div class="col-md-4">
                                                
                                                
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
                </div>
            </div>
            </div>
            {{-- end modal ubah --}}
        </div>
    </div>  
{{-- end --}}
</div>

<script>
$(document).ready(function(){
  // Tombol Next
  $(".next-btn").click(function(){
    $("#page1").hide();
    $("#page2").show();
  });
  
  // Tombol Previous
  $(".prev-btn").click(function(){
    $("#page2").hide();
    $("#page1").show();
  });
});
</script>
