@extends('layouts.bootstrap')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1" role="tab" aria-controls="page1" aria-selected="true">Halaman 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab" aria-controls="page2" aria-selected="false">Halaman 2</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <!-- Halaman 1 -->
            <div class="tab-pane fade show active" id="page1" role="tabpanel" aria-labelledby="page1-tab">
              <form>
                <div class="form-group">
                  <label for="name">Nama:</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <a class="btn btn-primary" data-toggle="tab" href="#page2">Next</a>
              </form>
            </div>
            <!-- Halaman 2 -->
            <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
              <form>
                <div class="form-group">
                  <label for="address">Alamat:</label>
                  <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                  <label for="phone">Nomor Telepon:</label>
                  <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

