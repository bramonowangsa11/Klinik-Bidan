@extends('layouts.bootstrap')
@section('content')
{{-- start --}}
<div class="row w-full vh-100">
{{-- sidebar --}}
<div class="col-md-3">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Hi, Admin</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard-admin" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Imunisasi
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
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
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Admin</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="/logout">Sign out</a></li>
      </ul>
    </div>
  </div>
</div>
{{-- content --}}
<div class="col-md-9 bg-primary">
    <div>
        <h1>Table Content</h1>
    </div>
    <div class="container bg-black">
        <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Anak</th>
        <th>NIK</th>
        <th>Nama Orang Tua</th>
        <th>Tanggal Lahir</th>
        <th>ALamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>12-10-24</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>12-10-24</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>4</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
       <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>5</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
       <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>6</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>7</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>8</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>9</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
      </tr>
      <tr>
        <td>10</td>
        <td>12-10-24</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>12</td>
        <td>wahyu</td>
        <td>Sanggrahan</td>
        <td><button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button></td>
        {{-- <td><button type="button" class="btn btn-info btn-sm">Details</button></td> --}}
      </tr>
    </tbody>
  </table>
  <!-- Pagination -->
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="/dashboard-admin">1</a></li>
      <li class="page-item active"><a class="page-link" href="/table-imunisasi2">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>


  {{-- modal --}}
  <div class="container">
  {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">Lihat Detail</button> --}}
</div>

<!-- Modal Details-->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Isi detail data disini -->
        <div class="mb-3">
          <label for="inputN0" class="form-label">No</label>
          <input type="text" class="form-control" id="inputNo" readonly value="1">
        </div>
        <div class="mb-3">
          <label for="inputTanggal" class="form-label">Tanggal</label>
          <input type="text" class="form-control" id="inputTanggal" readonly value="10/03/2024">
        </div>
        <div class="mb-3">
          <label for="inputNamaAnak" class="form-label">Nama Anak</label>
          <input type="text" class="form-control" id="inputNamaAnak" readonly value="Doley">
        </div>
        <div class="mb-3">
          <label for="inputNIK" class="form-label">NIK</label>
          <input type="number" class="form-control" id="inputNIK" readonly value="3403101108020005">
        </div>
        <div class="mb-3">
          <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
          <input type="text" class="form-control" id="inputNamaOrtu" readonly value="Wahyu">
        </div>
        <div class="mb-3">
          <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
          <input type="text" class="form-control" id="inputTglLahir" readonly value="11/04/2024">
        </div>
        <div class="mb-3">
          <label for="inputAlamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputAlamat" readonly value="Sanggrahan">
        </div>
        <div class="mb-3">
          <label for="inputBeratBadan" class="form-label">Berat Badan</label>
          <input type="number" class="form-control" id="inputBeratBadan" readonly value="20">
        </div>
        <div class="mb-3">
          <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
          <input type="number" class="form-control" id="inputPanjangBadan" readonly value="150">
        </div>
        <div class="mb-3">
          <label for="inputHBO" class="form-label">HBO</label>
          <input type="checkbox" class="form-check-input" checked id="inputHBO" disabled>
        </div>
        <div class="mb-3">
          <label for="inputBCG" class="form-label">BCG</label>
          <input type="checkbox" class="form-check-input" checked id="inputBCG" disabled>
        </div>
        <div class="mb-3">
          <label for="inputPenta" class="form-label">Penta</label>
          <input type="number" class="form-control" id="inputPenta" readonly value="1">
        </div>
        <div class="mb-3">
          <label for="inputTPV" class="form-label">TPV</label>
          <input type="number" class="form-control" id="inputTPV" readonly value="2">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahModal">Ubah</button>
        <button type="button" class="btn btn-danger" >Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
{{-- end modal details --}}


<!-- Modal ubah-->
<div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Isi detail data disini -->
        <div class="mb-3">
          <label for="inputN0" class="form-label">No</label>
          <input type="text" class="form-control" id="inputNo" value="1">
        </div>
        <div class="mb-3">
          <label for="inputTanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="inputTanggal" value="10/03/2024">
        </div>
        <div class="mb-3">
          <label for="inputNamaAnak" class="form-label">Nama Anak</label>
          <input type="text" class="form-control" id="inputNamaAnak" value="Doley">
        </div>
        <div class="mb-3">
          <label for="inputNIK" class="form-label">NIK</label>
          <input type="number" class="form-control" id="inputNIK" value="3403101108020005">
        </div>
        <div class="mb-3">
          <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
          <input type="text" class="form-control" id="inputNamaOrtu" value="Wahyu">
        </div>
        <div class="mb-3">
          <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="inputTglLahir" value="11/04/2024">
        </div>
        <div class="mb-3">
          <label for="inputAlamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputAlamat" value="Sanggrahan">
        </div>
        <div class="mb-3">
          <label for="inputBeratBadan" class="form-label">Berat Badan</label>
          <input type="number" class="form-control" id="inputBeratBadan" value="20">
        </div>
        <div class="mb-3">
          <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
          <input type="number" class="form-control" id="inputPanjangBadan" value="150">
        </div>
        <div class="mb-3">
          <label for="inputHBO" class="form-label">HBO</label>
          <input type="checkbox" class="form-check-input" checked id="inputHBO" value="true">
        </div>
        <div class="mb-3">
          <label for="inputBCG" class="form-label">BCG</label>
          <input type="checkbox" class="form-check-input" checked id="inputBCG" value="true">
        </div>
        <div class="mb-3">
          <label for="inputPenta" class="form-label">Penta</label>
          <input type="number" class="form-control" id="inputPenta" value="1">
        </div>
        <div class="mb-3">
          <label for="inputTPV" class="form-label">TPV</label>
          <input type="number" class="form-control" id="inputTPV" value="2">
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
