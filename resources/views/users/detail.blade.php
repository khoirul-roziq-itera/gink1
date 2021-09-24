@extends('layouts/main')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Manage Users</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="users">Manage Users</a></div>
        <div class="breadcrumb-item">Detail</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail User</h4>
            </div>
            <div class="card-body">
              <div class="col-sm-4 offset-4" style="padding-bottom: 1em;">
                @if($user->profile_photo_path != null)
                <img src="{{ asset($user->profile_photo_path) }}" width="150" class="rounded" alt="myfoto">
                @else
                <img src="{{ asset($user->profile_photo_url) }}" width="150" class="rounded" alt="myfoto">
                @endif
              </div>
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
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="{{ url('users')}}" class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Cancel</></a>
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