@extends('layouts.bootstrap')
@section('content')

<div class="row d-flex col-lg-12 order-2 order-lg-1 vh-100">
    {{-- sidebar --}}
    <div class="col-md-3 col-sm-2">
        <div class="d-flex flex-column p-3 text-bg-secondary vh-100" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Hi, user</span>
            </a>
            <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/pasien" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Reservasi
                    </a>
                </li>
                <li>
                    <a href="/lihat-reservasi-user" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Cek Reservasi
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
                <li><a class="dropdown-item" href="/logout">Sign out</a></li>
            </ul>
            </div>
        </div>
    </div>
    {{-- sidebar end --}}
    {{-- content --}}
    <div class="container col-md-9 ">
        <h1>RESERVASI</h1>
        
        @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{ Session::get('success') }}
                      </div>
        @endif
        @if(session('errors'))
              <div class="alert alert-danger">
                  {{ session('errors') }}
              </div>
        @endif
        <div class="row d-flex justify-content-center align-items-center">
            
            
            <div class="col-md-4 align-items-center ">
                <form action="reservasi" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="tglReservasi" class="form-label">Tanggal Reservasi</label>
                        <input type="date" class="form-control" id="tglReservasi" placeholder="dd/mm/yyyy" name="tgl_reservasi" value="{{$tgl}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="Sesi" class="form-label">Sesi Ke-</label>
                        <select class="form-select" id="Sesi" aria-label="Default select example" name="sesi">
                            @foreach($availableSessions as $session)
                                <option name='sesi' value="{{ $session }}">Sesi {{ $session }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="layanan" class="form-label">Jenis Layanan</label>
                        <select class="form-select" id="layanan" aria-label="Default select example" name="layanan">
                            <option name="layanan" value="Imunisasi">Imunisasi</option>
                            <option name="layanan" value="Bumil">Ibu Hamil</option>
                            <option name="layanan" value="KB">KB</option>
                        </select>
                    </div>
                    

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Reservasi</button>
                </form>
            </div>
            <div class="col-md-3 small ms-lg-5 mt-lg-5">
            Keterangan :
            <p>Sesi 1   | Pukul 06.00-06.30</p>
            <p>Sesi 2   | Pukul 06.30-07.00</p>
            <p>Sesi 3   | Pukul 07.00-07.30</p>
            <p>Sesi 4   | Pukul 07.30-08.00</p>
            <p>Sesi 5   | Pukul 08.00-08.30</p>
            <p>Sesi 6   | Pukul 08.30-09.00</p>
            <p>Sesi 7   | Pukul 16.00-16.30</p>
            <p>Sesi 8   | Pukul 16.30-17.00</p>
            <p>Sesi 9   | Pukul 17.00-17.30</p>
            <p>Sesi 10  | Pukul 17.30-18.00</p>
            <p>Sesi 11  | Pukul 18.00-18.30</p>
            <p>Sesi 12  | Pukul 18.30-19.00</p>
            <p>Sesi 13  | Pukul 19.00-19.30</p>
            <p>Sesi 14  | Pukul 19.30-20.00</p>
        </div>

        </div>
        

    </div>
</div>