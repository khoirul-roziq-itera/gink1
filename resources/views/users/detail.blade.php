@extends('layouts/main')

@section('title','Detail Project')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Detail User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Manage User</a></div>
        <div class="breadcrumb-item">Edit Project</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Data</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="Appku">
                </div>
              </div>
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="Akutansi">
                </div>
              </div>

              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="01/09/2021">
                </div>
              </div>

              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="MyImage.jpg">
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="" class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Cancel</></a>
                    <a href="" class="btn btn-success "> <i class="fas fa-edit"></i> Edit</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection