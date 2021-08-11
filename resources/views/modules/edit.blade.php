@extends('layouts/main')

@section('title','Edit Data')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Edit Project</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('projects')}}">Project</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card card-danger">
                        <form method="POST" action="{{ route('modules.update', $module->id) }}">
                            @csrf
                            @method('patch')
                            <div class="card-header">
                                <h4>Edit Data Project</h4>
                                <br>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="moduleName" class="col-sm-2 col-form-label">Module Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="moduleName" name="moduleName" class="form-control" placeholder="Masukkan nama modul" value="{{ $module->module_Name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags" class="col-sm-2 col-form-label">Input Functions</label>
                                    <div class="col-sm-7">
                                        <select id="choices-functions" name="funcs[]" class="form-control" placeholder="Select Functions" multiple>
                                            @foreach ( $funcs as $func)
                                            <option value="{{ $func->id }}" @foreach( $module->funcs as $result )
                                                @if($func->id == $result->id)
                                                selected
                                                @endif
                                                @endforeach
                                                >{{ $func->function_Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="moduleNotes" class="col-sm-2 col-form-label">Module Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="moduleNotes" id="moduleNotes" class="form-control" value="{{ $module->module_Notes }}"></textarea>
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
                                    <div class="col-sm-7 offset-2">
                                        <div class="form-group float-right">
                                            <a href="{{ route('modules.edit', $module->id) }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                                            <button type="submit" class="btn btn-primary" id="swal-2">Save changes</button>
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