@extends('layouts/main')

@section('title','Detail Project')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Detail Project</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Project</a></div>
        <div class="breadcrumb-item active"><a href="#">List Project</a></div>
        <div class="breadcrumb-item">Edit Project</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ url ('projects')}}"><button class="btn btn-secondary "><i class="fas fa-arrow-circle-left"></i> Back</button></a>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">App Name</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="Appku">
                </div>
              </div>
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="Akutansi">
                </div>
              </div>
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Tags</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="-">
                </div>
              </div>
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Deadline</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="01/09/2021">
                </div>
              </div>
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="Selesai">
                </div>
              </div>
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Cost Total</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="Rp. 100.000">
                </div>
              </div>
              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Price Total</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="Rp. 150.000">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="{{ route('projects.edit', $app->id) }}"><button class="btn btn-success "> <i class="fas fa-edit" style="font-size: 18px"></i> Edit</button></a>
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