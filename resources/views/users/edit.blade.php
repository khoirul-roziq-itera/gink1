@extends('layouts/main')

@section('title','Edit User')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Edit User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="users">Manage User</a></div>
                <div class="breadcrumb-item">Edit User</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data</h4>
                        </div>
                        <form method="POST" action="{{ route('functions.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="funcTitle" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcTitle" name="funcTitle" class="form-control" value="Admin">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" placeholder="Masukkan password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password_confirmation" class="col-sm-2 col-form-label">Password Confirmation</label>
                                    <div class="col-sm-7">
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Masukkan password">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="funcGroup" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-7">
                                        <select id="funcGroup" name="funcGroup" class="form-control">
                                            <option value="">-- Choose Level --</option>
                                            <option value="">Admin</option>
                                            <option value="">Creator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcName" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcName" name="funcName" class="form-control" value="admin@admin.com">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="funcName" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control" id="customFile">         
                                    </div>                           
                                </div>                          
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group float-right">
                                            <a href="detailusers"><button type="button" class="btn btn-danger btn">Cancel</button></a>
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