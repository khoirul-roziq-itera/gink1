@extends('layouts/main')

@section('title','Create Modul')

@section('container')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Modules</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('modules') }}">Modules</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Module</h4>
                        </div>
                        <form method="POST" action="{{ route('modules.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="moduleName" class="col-sm-2 col-form-label">Name Modul</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="moduleName" name="moduleName" class="form-control @error('moduleName') is-invalid @enderror" value="{{ old('moduleName') }}" placeholder="Masukkan nama modul">
                                        <div class="invalid-feedback">
                                            @error('moduleName')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags" class="col-sm-2 col-form-label">Input Functions</label>
                                    <div class="col-sm-7">
                                        <select id="choices-functions" name="funcs[]" class="form-control @error('funcs') is-invalid @enderror" placeholder="Select Functions" multiple>
                                            @foreach ( $funcs as $func)
                                            <option value="{{ $func->id }}">{{ $func->function_Name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            @error('funcs')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="moduleNotes" class="col-sm-2 col-form-label">Function Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="moduleNotes" id="moduleNotes" class="form-control @error('moduleNotes') is-invalid @enderror">{{ old('moduleNotes') }}</textarea>
                                        <div class="invalid-feedback">
                                            @error('moduleNotes')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="moduleStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <select id="moduleStatus" name="moduleStatus" class="form-control @error('moduleStatus') is-invalid @enderror">
                                            <option value="">-- Choose Status --</option>
                                            <option value="1">Waiting</option>
                                            <option value="2">On Progress</option>
                                            <option value="3">Finished</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            @error('moduleStatus')
                                            {{ $message }}
                                            @enderror
                                        </div>
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