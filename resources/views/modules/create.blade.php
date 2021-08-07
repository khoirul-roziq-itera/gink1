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
                            <h4>Input Data</h4>
                        </div>
                        <form method="POST" action="{{ route('modules.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="moduleName" class="col-sm-2 col-form-label">Name Modul</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="moduleName" name="moduleName" class="form-control" placeholder="Masukkan nama modul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags" class="col-sm-2 col-form-label">Input Functions</label>
                                    <div class="col-sm-7">
                                        <select id="choices-functions" name="funcs[]" class="form-control" placeholder="Select Functions" multiple>
                                            @foreach ( $funcs as $func)
                                            <option value="{{ $func->id }}">{{ $func->function_Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="moduleNotes" class="col-sm-2 col-form-label">Function Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="moduleNotes" id="moduleNotes" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="moduleStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <select id="moduleStatus" name="moduleStatus" class="form-control">
                                            <option value="">-- Choose Status --</option>
                                            <option value="1">Menunggu</option>
                                            <option value="2">Sedang Dikerjakan</option>
                                            <option value="3">Selesai</option>
                                        </select>
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