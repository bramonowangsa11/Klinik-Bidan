@extends('layouts.bootstrap')
@section('content')
<style type="text/css">
    .ml-5{
        margin-left: 5%;
    }
</style>
<section class="start" style="background-color: rgb(139, 134, 134)">
    <div class="container vh-100 vw-100" style="background-color: rgb(139, 134, 134)">
        <div class="row">
            <div class="col">
                <div class="d-flex">
                    <div class="col-10 ms-lg-5 mt-lg-2">
                        <h1 class=" ms-lg-5 text-white fw-bolder" style="">Hi, Admin!</h1>
                        <p class="text-white ms-lg-5 fw-semibold">Thank you for logging in. We're glad to have you here.</p>
                    </div>
                    <div class=" col-1 ms-lg-5 mt-lg-2 align-content-center">
                        <a class=" btn btn-primary text-left" href = "/logout">Logout</a>
                    </div>
                    

                </div>

            </div>
        </div>
    </div>
    {{-- <div class="vh-100 bg-black">
        <div class="bg-primary">
            <div class="col-12">
                <h1 class="text-white bg-danger ">Hi, Admin!</h1>
            </div>
            <div class=" bg-light">
                <p class="text-white mt-0">Thank you for logging in. We're glad to have you here.</p>
            </div>
                
                <a class=" mt-0" href = "/logout">Logout</a>
            </div>
        </div>
    </div> --}}
    
</section>
    
    
