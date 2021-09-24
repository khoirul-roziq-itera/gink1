@extends('layouts/main')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Profile</h1>
    </div>
    <div class="section-body">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
          {{session('success')}}
        </div>
      </div>
      @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Profile</h4>
            </div>
            <div class="card-body">
              <div class="col-sm-4 offset-4" style="padding-bottom: 1em;">
                @if(Auth::user()->profile_photo_path != NULL)
                <img src="{{ asset(Auth::user()->profile_photo_path) }}" alt="" class="rounded-circle" width="150">
                @else
                <img alt="image" src="{{ asset(Auth::user()->profile_photo_url) }}" class="rounded-circle" width="150">
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
                    <a href="{{ url('dashboard')}}" class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Cancel</></a>
                    <a href="{{ route('profile.edit', Auth::user()->id) }}" class="btn btn-success "> <i class="fas fa-edit"></i> Edit</a>
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