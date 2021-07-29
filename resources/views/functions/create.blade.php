@extends('layouts/main')

@section('title','Create Function')
    
@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 style="font-size: 25px">Create Function</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="#">Data Function</a></div>
                  <div class="breadcrumb-item">Create Function</div>
                </div>
              </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>INPUT DATA</h4>
                            </div>
                            <form method="POST" action="{{ route('projects.store') }}" id="myForm">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="appname" class="col-sm-2 col-form-label">App Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" id="appName" name="appName" class="form-control" placeholder="Masukkan nama project">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-7">
                                            <select id="category" name="category" class="form-control">
                                                <option value="">- Pilih Kateg</option>
                                                <option value="Akutansi">Akutansi</option>
                                                <option value="Administrasi">Administrasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tags" class="col-sm-2 col-form-label">Tag</label>
                                        <div class="col-sm-7">
                                            <input type="text" id="tags" name="tags" class="form-control" placeholder="Masukkan tags">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="startTime" class="col-sm-2 col-form-label">Start Time</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="startProjectT" class="form-control datepicker" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deadline" class="col-sm-2 col-form-label">Deadline</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="deadlineProjectT" class="form-control datepicker" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="finished" class="col-sm-2 col-form-label">Finished</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="endProjectT" class="form-control datepicker" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-7">
                                            <select id="status" name="status" class="form-control">
                                                <option value="">- Pilih Status</option>
                                                <option value="3">Selesai</option>
                                                <option value="2">Sedang Dikerjakan</option>
                                                <option value="1">Menunggu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <div class="form-group float-right">
                                                <a href="{{ url('dashboard') }}"><button type="button" class="btn btn-secondary btn-lg">Cancel</button></a>
                                                <button type="submit" onclick="sweet()" class="btn btn-danger btn-lg" id="swal-2">Submit</button>            
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
  

 