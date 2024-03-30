@extends('layouts.bootstrap')
@section('content')
<section class="masthead" style="background:url({{asset('images/group3.jpg')}})">
  <div class="container vh-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-9 ">
        {{-- card --}}
        <div class=" card small text-black h-75" style="border-radius: 25px; background-color:rgb(229, 228, 228)">
            <div class="col d-flex h-75">
                <img src="{{asset('images/Group 1.png')}}" class="card-img img-fluid" alt="..." style="width: 25%; height:50%; margin-right:49%; border-radius:25px">
                <img src="{{asset('images/Group 2.png')}}" class="card-img img-fluid" alt="..." style="width: 25%; height:100%; border-radius:25px; margin-left:9px">
            </div>
          <div class="card-body p-md-1 "> 
            <div class="row">
              <div class="col-md-4 col-lg-4 col-xl-4 order-2 order-lg-1">
                <form class="mx-1 mx-md-4 mt-0 mb-lg-5 border-1" method="POST" action="/login">
                  @csrf
                    
                {{-- Bagian Kanan --}}
              </div>
              <div class="col-md-10 col-lg-6 col-xl-4 order-2 order-lg-1 mt-0 mb-20 border-black rounded border p-2">
                {{-- <form class="mx-1 mx-md-4 mt-lg-5"> --}}
                {{-- email --}}
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="border-bottom border-dark flex-fill mb-0 mt-lg-4">
                        <label class="form-label" for="form3Example7c">Email</label>
                        <input style="background-color: rgb(229, 228, 228)" type="email" id="form3Example7c" class="form-control" name="email" value="{{old('email')}}"  required  />
                    </div>
                  </div>
                  {{-- Password --}}
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="border-bottom border-dark form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Password</label>
                        <input type="password" id="form3Example4c" class="form-control " name="password" style="background-color: rgb(229, 228, 228)" required />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label font-weight-bold fs-1 me-lg-5" for="button-register">Masuk</label>
                    <button id="button-register" type="submit" class=" btn btn-sm border-0 col-2 mb-2">
                        <img src="{{asset('images/arrow.png')}}" alt="login" class=" ">
                    </button>
                    {{-- link daftar dan lupa password --}}
                    <div>
                        <a class="me-lg-5 text-black" style="font-weight:bold" href="/lupa-password">Lupa Password?</a>
                        <a class="text-black" style="margin-left: 25px; font-weight:bold" href="/daftar">Buat Akun</a>
                    </div>
                    <!-- pesan eror dan sukses -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <!-- akhir alert -->
                    {{-- <button type="button" class="btn btn-primary btn-lg">Register</button> --}}
                  </div>
                </form>
                
                

                {{-- <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>