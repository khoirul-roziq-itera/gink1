@extends('layouts/main')


@section('title','Dashboard')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

<<<<<<< HEAD
    <div class="section-body">
      <a href="{{ url('create/proyek') }}"><button type="button" class="btn btn-danger btn-lg" style="margin-bottom: 1em"><i class="fas fa-plus"></i> Tambah Data</button></a>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Proyek</h4>
              <div class="card-header-form">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
=======
          <div class="section-body">
            {{-- <button type="button" class="btn btn-danger btn-lg" style="margin-bottom: 1em"><i class="fas fa-plus"></i>  Tambah Data</button> --}}
            
            <a href="{{ asset('#')}}" class="btn btn-danger btn-lg" style="margin-bottom: 1em"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Proyek</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table id="example" class="table table-hover table-bordered border-primary">
                        <thead class="text-center" >
                            <tr>
                                <th>No</th>
                                <th>Nama Proyek</th>
                                <th>Kategori</th>
                                <th>Jangka Waktu</th>
                                <th>Jumlah Modul</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Calculator App</td>
                                <td>Akutansi</td>
                                <td>30/05/2021</td>
                                <td>3</td>
                                <td><div class="badge badge-success">Selesai</div></td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>Create a mobile app</td>
                                <td>aaaaaaaaaa</td>
                                <td>bbbbbbbbbb</td>
                                <td>xxxxx</td>
                                <td><div class="badge badge-warning">Sedang dikerjakan</div></td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>Create a mobile app</td>
                                <td>aaaaaaaaaa</td>
                                <td>bbbbbbbbbb</td>
                                <td>xxxxx</td>
                                <td><div class="badge badge-danger">Menunggu</div></td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                      </table>
>>>>>>> cd9ccc6d7f9c53a64c1cef4c852aff5c5663cd33
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table id="example" class="table table-hover table-bordered border-primary">
                  <thead class="text-center">
                    <tr>
                      <th>No</th>
                      <th>Nama Proyek</th>
                      <th>Kategori</th>
                      <th>Jangka Waktu</th>
                      <th>Jumlah Modul</th>
                      <th>Fungsi</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>1</td>
                      <td>Calculator App</td>
                      <td>Akutansi</td>
                      <td>30/05/2021</td>
                      <td>3</td>
                      <td>BE</td>
                      <td>
                        <div class="badge badge-success">Selesai</div>
                      </td>
                      <td>
                        <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr class="text-center">
                      <td>2</td>
                      <td>Create a mobile app</td>
                      <td>aaaaaaaaaa</td>
                      <td>bbbbbbbbbb</td>
                      <td>xxxxx</td>
                      <td>yyyyy</td>
                      <td>
                        <div class="badge badge-warning">Sedang dikerjakan</div>
                      </td>
                      <td>
                        <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr class="text-center">
                      <td>3</td>
                      <td>Create a mobile app</td>
                      <td>aaaaaaaaaa</td>
                      <td>bbbbbbbbbb</td>
                      <td>xxxxx</td>
                      <td>yyyyy</td>
                      <td>
                        <div class="badge badge-danger">Menunggu</div>
                      </td>
                      <td>
                        <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                        <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
</section>
</div>

@endsection