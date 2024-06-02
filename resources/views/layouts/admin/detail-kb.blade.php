@extends('layouts.bootstrap')
@section('content')
{{-- start --}}
<div class="container bg-secondary min-vh-100 min-vw-100">
  <nav class="navbar navbar-dark bg-dark d-md-none ms-0">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav flex-column">
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
                    <a href="/input-table" class="nav-link text-white dropdown-toggle active" id="navbarDropdown" data-bs-toggle="dropdown">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    input Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/input-table">Imunisasi</a>
                        <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                        
                    </div>
                </li>
                <li>
                    <a href="/daftar-reservasi" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
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
                    <a href="/input-table" class="nav-link text-white dropdown-toggle active" id="navbarDropdown" data-bs-toggle="dropdown">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    input Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/input-table">Imunisasi</a>
                        <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                        
                    </div>
                </li>
                <li>
                    <a href="/daftar-reservasi" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Daftar Reservasi
                    </a>
                </li>
        </ul>
    </div>
    {{-- isi konten nya disini --}}
    <div class="content flex-grow-1 p-3">
        <div class="col-md-9">
    <div>
        <h1>Detail Tabel</h1>
        {{-- @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
        @if($errors->any())
                <div class="alert alert-danger">
                  <ul>  
                    @foreach($errors->all() as $error)
                      <li>
                        {{ $error }}
                      </li>
                    @endforeach
                  </ul>
                </div>
        @endif --}}
    </div>
    <form action="" method="POST">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row">
        {{-- kiri --}}
        <div class="col-md-3 mt-lg-5">
            {{-- biodata --}}
            <h5>Tanggal</h5>
            <h5>Nama Anak</h5>
            <h5>NIK Ibu</h5>
            <h5>Nama Ibu</h5>
            <h5>Nama Suami</h5>
            <h5>Umur Ibu</h5>
            <h5>Alamat</h5>
            
            {{-- isi biodata --}}

        </div>
        {{-- tengah --}}
        <div class="col-md-9 mt-lg-5">
          {{-- <h5>: {{$imunisasi->tanggal_kb}}</h5>
          <h5>: {{$imunisasi->nama_anak}}</h5>
          <h5>: {{$imunisasi->nik_anak}}</h5>
          <h5>: {{$imunisasi->nama_orangtua}}</h5>
          <h5>: {{$imunisasi->tgl_lahir}}</h5>
          <h5>: {{$imunisasi->alamat}}</h5> --}}
           
            


        </div>
        {{-- kanan --}}
        <div class="col-md-9">
            <table class="table border-black border-2 table-bordered tab">
                <thead class=" bg-secondary">
                    <tr class=" bg-secondary">
                        <th>Jumlah Anak</th>
                        <th>Umur Anak Terkecil</th>
                        <th>Jaminan</th>
                        <th>Alki</th>
                        <th>Pasca Plasenta</th>
                        <th>Pasca Salin</th>
                        <th>Do</th>
                        <th>Gc</th>
                        <th>Metode KB</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Tensi</th>
                        <th>Lila</th>
                        <th>Tanggal Kembali</th>
                        <th>Inform Consent</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{-- <td>{{$imunisasi->berat_badan}}</td>
                        <td>{{$imunisasi->panjang_badan}}</td>
                        <td>{{$imunisasi->HBO}}</td>
                        <td>{{$imunisasi->BCG}}</td>
                        <td>{{$imunisasi->PENTA}}</td>
                        <td>{{$imunisasi->IPV}}</td>
                        <td>{{$imunisasi->PCV}}</td>
                        <td>{{$imunisasi->ROTA_VIRUS}}</td>
                        <td>{{$imunisasi->MK}}</td>
                        <td>{{$imunisasi->booster}}</td> --}}

                    </tr>
                </tbody>
            </table>
        
            
            
            <div class=" mb-3">
              <div class="row">
                <div class="col-md-1">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahModal">Ubah</button>
                </form>
                </div>
                <div class="col-md-1 ms-4">
                  <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
                </div>
              </div>
              
              
              {{-- <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal">Detail</button> --}}
            </div>
        </div>
      </div>


    
      {{-- modal --}}


<!-- Modal ubah-->
<div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          {{-- kiri --}}
          <div class="col-md-3">
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="tanggal-kb" class="form-label">Tanggal KB</label>
                        <input type="date" class="form-control" id="tangal-kb" aria-describedby="" name="tanggal-kb">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="nikform">
                        <label for="nikIbu" class="form-label">NIK Ibu</label>
                        <input type="text" class="form-control" id="nikIbu" aria-describedby="" name="nikIbu">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                        <label for="namaIbu" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" id="namaIbu" aria-describedby="" name="namaIbu">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                        <label for="namaSuami" class="form-label">Nama Suami</label>
                        <input type="text" class="form-control" id="namaSuami" aria-describedby="" name="namaSuami">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    
                    <div class="mb-3 form-outline border-0 border-bottom border-dark" id="result">
                        <label for="umurIbu" class="form-label">Umur Ibu</label>
                        <input type="number" class="form-control" id="umurIbu" aria-describedby="" name="umurIbu">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="jumlah-anak" class="form-label">Jumlah Anak</label>
                        <input type="number" class="form-control" id="jumlah-anak" aria-describedby="" name="jumlah-anak">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
          </div>
          {{-- tengah --}}
          <div class="col-md-3">
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="umur-anak-terkecil" class="form-label">Umur Anak Terkecil</label>
                <input type="number" class="form-control" id="umur-anak-terkecil" aria-describedby="" name="umur-anak-terkecil">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="jaminan" class="form-label">Jaminan</label>
                <input type="text" class="form-control" id="jaminan" aria-describedby="" name="jaminan">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="alki" class="form-label">Alki</label>
                <input type="date" class="form-control" id="alki" aria-describedby="" name="alki">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="pasca-plasenta" class="form-label">Pasca Plasenta</label>
                <input type="text" class="form-control" id="pasca-plasenta" aria-describedby="" name="pasca-plasenta">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                <label for="pasca-salin" class="form-label">Pasca Salin</label>
                <input  type="text" class="form-control" id="pasca-salin" aria-describedby="" name="pasca-salin">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="do" class="form-label">DO</label>
                <input type="text" class="form-control" id="do" aria-describedby="" name="do">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="gc-dari" class="form-label">gc dari</label>
                <input type="text" class="form-control" id="gc-dari" aria-describedby="" name="gc-dari">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            
            <div class="mb-4">
                <label for="metode-kb" class="form-label">metode kb</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="metode-kb" name="PENTA" value="1">
                    <label for="metode-kb" class="form-label">IUD</label>
                    <input type="checkbox" class="form-check-input" id="metode-kb" name="PENTA" value="2">
                    <label for="metode-kb" class="form-label">STK</label>
                    <input type="checkbox" class="form-check-input" id="metode-kb" name="PENTA" value="3">
                    <label for="metode-kb" class="form-label">PIL</label>
                    <input type="checkbox" class="form-check-input" id="metode-kb" name="PENTA" value="3">
                    <label for="metode-kb" class="form-label">CO</label>
                    <input type="hidden" name="PENTA" value="0">
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="beratBadan" class="form-label">Berat Badan</label>
                <input type="number" class="form-control" id="beratBadan" aria-describedby="" name="beratBadan">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="tinggiBadan" class="form-label">tinggi Badan</label>
                <input type="number" class="form-control" id="tinggiBadan" aria-describedby="" name="tinggiBadan">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="tensi" class="form-label">Tensi</label>
                <input type="number" class="form-control" id="tensi" aria-describedby="" name="tensi">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="lila" class="form-label">Lila</label>
                <input type="number" class="form-control" id="lila" aria-describedby="" name="lila">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
          </div>
          {{-- kanan --}}
          <div class="col-md-3">
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="tanggal-kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tanggal-kembali" aria-describedby="" name="tanggal-kembali">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="kegagalan" class="form-label">Kegagalan</label>
                <input type="text" class="form-control" id="kegagalan" aria-describedby="" name="kegagalan">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="inform-consent" class="form-label">Inform Consent</label>
                <input type="text" class="form-control" id="inform-consent" aria-describedby="" name="inform-consent">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" aria-describedby="" name="keterangan">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div>
              <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>

        </div>
        <!-- Isi detail data disini -->
        
        
      </div>
    </div>
  </div>
</div>
{{-- end modal ubah --}}




    </div>
</div>



    </div>
</div>
</div>
