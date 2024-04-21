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
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="/input-table" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          input Data
        </a>
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
      @foreach ($imunisasis as $imunisasi)
        <tr>
          <td>{{$imunisasi->id}}</td>
          <td>{{$imunisasi->tanggal}}</td>
          <td>{{$imunisasi->nama_anak}}</td>
          <td>{{$imunisasi->nik_anak}}</td>
          <td>{{$imunisasi->nama_orangtua}}</td>
          <td>{{$imunisasi->tgl_lahir}}</td>
          <td>{{$imunisasi->alamat}}</td>
          <td><a href=""></a></td>
          <td>
            <a href="/detail-table">
              <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</button>
            </a>
          </td>
        </tr>
        
        
      @endforeach
      
      
    </tbody>
  </table>
  {{ $imunisasis->links() }}
  <!-- Pagination -->
  {{-- <nav aria-label="Page navigation">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item active"><a class="page-link" href="/dashboard-admin">1</a></li>
      <li class="page-item"><a class="page-link" href="/table-imunisasi2">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav> --}}


  {{-- modal --}}
  <div class="container">
  {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">Lihat Detail</button> --}}
</div>





    </div>
</div>
{{-- end --}}
</div>
