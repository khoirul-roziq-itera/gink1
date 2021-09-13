@extends('layouts/main')


@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">My Profile</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <form method="POST" action="{{ route('profile.update', Auth::user()->id) }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
                                        <div class=" invalid-feedback">
                                            @error('name')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password" placeholder="Masukkan password">
                                        <div class="invalid-feedback">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password_confirmation" class="col-sm-2 col-form-label">Password Confirmation</label>
                                    <div class="col-sm-7">
                                        <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Masukkan password">
                                        <div class="invalid-feedback">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-7">
                                        <select id="level" name="level" class="form-control">
                                            <option value="">-- Choose Level --</option>
                                            <option value="admin" @if($user->level == 'admin') selected @endif>Admin</option>
                                            <option value="creator" @if($user->level == 'creator') selected @endif>Creator</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                                        <div class="invalid-feedback">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="photo" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                                        <div class="invalid-feedback">
                                            @error('photo')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group float-right">
                                            <a href="{{ url('profile', Auth::user()->id) }}"><button type="button" class="btn btn-danger btn">Cancel</button></a>
                                            <button type="submit" class="btn btn-primary btn">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection