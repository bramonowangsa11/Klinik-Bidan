@extends('layouts.bootstrap')
@section('content')

<div class="row d-flex col-lg-12 order-2 order-lg-1 vh-100">
    {{-- sidebar --}}
    <div class="col-md-3 col-sm-2">
        <div class="d-flex flex-column p-3 text-bg-secondary vh-100" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Hi, {{ $user->name }}</span>
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
    {{-- sidebar end --}}
    {{-- content --}}
    <div class="container col-md-9">
        <h1>RESERVASI</h1>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-5 align-items-center">
                <form action="/reservasi2">
                    <div class="mb-3">
                        <label for="tglReservasi" class="form-label">Tanggal Reservasi</label>
                        <input type="date" class="form-control" id="tglReservasi" placeholder="dd/mm/yyyy">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>

        </div>

    </div>
</div>