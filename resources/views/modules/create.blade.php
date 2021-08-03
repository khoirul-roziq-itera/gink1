@extends('layouts/main')

@section('title','Create Modul')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Create Modul</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Data Modul</a></div>
                <div class="breadcrumb-item">Create Modul</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>INPUT DATA</h4>
                        </div>
                        <form method="POST" action="{{ route('modules.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="appname" class="col-sm-2 col-form-label">Name Modul</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="appName" name="appModul" class="form-control" placeholder="Masukkan nama modul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="appname" class="col-sm-2 col-form-label">Input Function</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="cari nama function">
                                            <button class="btn btn-outline-primary" type="button"><i class="fas fa-search" style="font-size: 20px"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-7 offset-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="">
                                            <button class="btn btn-outline-primary" type="button"><i class="fas fa-plus" style="font-size: 20px"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-7 offset-2">
                                        <div class="section-title">Data Function</div>
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Function Name</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>fungsi a</td>
                                                    <td>
                                                        <form action="" method="post">
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt" style="font-size: 20px"></i></a>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>fungsi a</td>
                                                    <td>
                                                        <form action="" method="post">
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt" style="font-size: 20px"></i></a>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>fungsi a</td>
                                                    <td>
                                                        <form action="" method="post">
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt" style="font-size: 20px"></i></a>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group float-right">
                                            <a href="{{ url('dashboard') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                                            <button type="submit" onclick="sweet()" class="btn btn-primary" id="swal-2">Submit</button>
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