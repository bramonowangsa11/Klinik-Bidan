@extends('layouts.admin.navbar')
@section('main-content')
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

@endsection