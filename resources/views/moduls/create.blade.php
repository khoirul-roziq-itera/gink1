@extends('layouts/main')

@section('title','Create Data')
    
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
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-danger">
                            <form method="POST" action="{{ route('projects.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="appName">Nama Aplikasi</label>
                                        <input type="text" id="appName" name="appName" class="form-control" placeholder="Masukkan nama project">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Kategori</label>
                                        <select id="category" name="category" class="form-control">
                                            <option value="">- Pilih Kateg</option>
                                            <option value="Akutansi">Akutansi</option>
                                            <option value="Administrasi">Administrasi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tag</label>
                                        <input type="text" id="tags" name="tags" class="form-control" placeholder="Masukkan nama project">
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Mulai</label>
                                        <input type="date" name="startProjectT" class="form-control datepicker" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Batas Waktu</label>
                                        <input type="date" name="deadlineProjectT" class="form-control datepicker" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Selesai</label>
                                        <input type="date" name="endProjectT" class="form-control datepicker" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="">- Pilih Status</option>
                                            <option value="3">Selesai</option>
                                            <option value="2">Sedang Dikerjakan</option>
                                            <option value="1">Menunggu</option>
                                        </select>
                                    </div>
                                    <div class="form-group float-right">
                                        <a href="{{ url('dashboard') }}"><button type="button" class="btn btn-secondary btn-lg">Cancel</button></a>
                                        <button type="submit" class="btn btn-danger btn-lg" id="swal-2">Submit</button>
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
  

 