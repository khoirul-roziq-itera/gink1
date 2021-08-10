@extends('layouts/main')

@section('title','Detail Project')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Detail User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="users">Manage User</a></div>
        <div class="breadcrumb-item">Edit Project</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Informasi Profile</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="name" readonly="" value="{{ $user->name }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="level" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="level" readonly="" value="{{ $user->level }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="{{ $user->email }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="appname" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-7">
                  <input type="name" class="form-control" id="name" readonly="" value="{{ $user->profile_photo_path }}">
                </div>
              </div>
              <img src="{{ asset($user->profile_photo_path) }}" alt="">
              <div class="form-group row">
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="users" class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Cancel</></a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success "> <i class="fas fa-edit"></i> Edit</a>
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