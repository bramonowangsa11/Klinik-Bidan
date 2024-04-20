@extends('layouts.bootstrap')
@section('content')
{{-- start --}}

{{-- hhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}
<div class="row d-flex col-lg-12 order-2 order-lg-1 vh-100">
{{-- sidebar --}}
<div class="col-md-3 col-sm-2">
    <div class="d-flex flex-column p-3 text-bg-dark vh-100" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Hi, Admin</span>
        </a>
    <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/detail-table" class="nav-link text-white" aria-current="page">
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
            <a href="/input-table" class="nav-link text-white active">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Input Data
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
<div class="col-md-9">
    <div class="row">
        <div class=" mt-3">
            <h1>Input Data</h1>
        </div>
        <div class="col-md-4">
            <form class=" mt-5" method="POST" action="/input-table">
            {{-- kiri --}}
                <div class="">
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputTanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="inputTanggal" aria-describedby="">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputNamaAnak" class="form-label">Nama Anak</label>
                        <input type="text" class="form-control" id="inputNamaAnak" aria-describedby="">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputNIK" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="inputNIK" aria-describedby="">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
                        <input type="text" class="form-control" id="inputNamaOrtu" aria-describedby="">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputTanggalLhr" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="inputTanggalLhr" aria-describedby="">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" aria-describedby="">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                </div>
            {{-- </form> --}}
        </div>
    {{-- Tengah --}}
        <div class="col-md-4 mt-5">
            <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                <input  type="text" class="form-control" id="inputBeratBadan" aria-describedby="">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-4 form-outline border-0 border-bottom border-dark">
                <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
                <input type="text" class="form-control" id="inputPanjangBadan" aria-describedby="">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="inputBCG" class="form-label">HBO</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                    <label for="inputBCG" class="form-label">3</label>
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-4">
                <label for="inputBCG" class="form-label">BCG</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                    <label for="inputBCG" class="form-label">3</label>
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="inputPenta" class="form-label">Penta</label>
                <input type="text" class="form-control" id="inputPenta" aria-describedby="">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="inputTPV" class="form-label">IPV</label>
                <input type="text" class="form-control" id="inputTPV">
            </div>
            
        </div>
            {{-- Kanan --}}
        <div class="col-md-4 mt-5">
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="inputTPV" class="form-label">PCV</label>
                <input type="text" class="form-control" id="inputTPV">
            </div>
            <div class="mb-3">
                <label for="inputBCG" class="form-label">Rota Virus</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                    <label for="inputBCG" class="form-label">3</label>
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="inputTPV" class="form-label">MK</label>
                <input type="checkbox" class="form-check-input" id="inputTPV">
            </div>
            <div class="mb-3">
                <label for="inputTPV" class="form-label">Booster</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputTPV">
                    <label for="inputTPV" class="form-label">Penta</label>
                    <input type="checkbox" class="form-check-input" id="inputTPV">
                    <label for="inputTPV" class="form-label">MK</label>
                </div>
            </div>
            <div class="mb-2">
                <label for="inputTPV" class="form-label">Time Stamp</label>
                <input type="time" class="form-control" id="inputTPV">
            </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
    </div>
        </div>
    
    </div>
   
  
    
</div>
{{-- end --}}
</div>
