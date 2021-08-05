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
                                <!-- <div class="form-group row">
                                    <label for="appname" class="col-sm-2 col-form-label">Input Function</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="choices-tags" name="funcs" placeholder="choose functions">
                                            {{-- @foreach ( $funcs as $func)
                                            <option value="{{ $func->id }}">{{ $func->function_Name }}</option>
                                            @endforeach --}}
                                            <button class="btn btn-outline-primary" type="button"><i class="fas fa-plus" style="font-size: 20px"></i></button>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
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
                                </div> -->
                                <div class="form-group row">
                                    <label for="FEDuration" class="col-sm-2 col-form-label">Front-End Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FEDuration" id="FEDuration" class="form-control" placeholder="Masukkan jumlah hari" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FECost" class="col-sm-2 col-form-label">Front-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FECost" id="FECost" class="form-control" placeholder="Masukkan biaya" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FEPrice" class="col-sm-2 col-form-label">Front-End Price</label>
                                    <div class="col-sm-7">

                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FEPrice" id="FEPrice" class="form-control" placeholder="Masukkan harga" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="BEDuration" class="col-sm-2 col-form-label">Back-End Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="BEDuration" id="BEDuration" class="form-control" placeholder="Masukkan jumlah hari" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BECost" class="col-sm-2 col-form-label">Back-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BECost" id="BECost" class="form-control" placeholder="Masukkan biaya" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BEPrice" class="col-sm-2 col-form-label">Back-End Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BEPrice" id="BEPrice" class="form-control" placeholder="Masukkan harga" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="FSDuration" class="col-sm-2 col-form-label">Full-Stack Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FSDuration" id="FSDuration" class="form-control" placeholder="Masukkan jumlah hari" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSCost" class="col-sm-2 col-form-label">Full-Stack Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSCost" id="FSCost" class="form-control" placeholder="Masukkan biaya" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSPrice" class="col-sm-2 col-form-label">Full-Stack Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSPrice" id="FSPrice" class="form-control" placeholder="Masukkan harga" />
                                        </div>
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