@extends('layouts/main')


@section('title','Dashboard')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="section-body">
      <a href="{{url('projects/create')}}"><button type="button" class="btn btn-danger btn-lg" style="margin-bottom: 1em"><i class="fas fa-plus"></i> Tambah Data</button></a>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Project</h4>

            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table id="table-1" class="table table-hover table-bordered border-primary">
                  <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Project</th>
                        <th>Kategori</th>
                        <th>Batas Pengerjaan</th>
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
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="testdetail" class="btn btn-primary" style="margin: 2px"><i class="fas fa-info-circle"></i></a>
                          <a href="testedit" class="btn btn-success" style="margin: 2px"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-danger" style="margin: 2px" id="swal-6"><i class="fas fa-trash-alt"></i></a>
                        </div>
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
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="#" class="btn btn-primary" style="margin: 2px"><i class="fas fa-info-circle"></i></a>
                          <a href="#" class="btn btn-success" style="margin: 2px"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-danger" style="margin: 2px"><i class="fas fa-trash-alt"></i></a>
                        </div>
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
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="#" class="btn btn-primary" style="margin: 2px"><i class="fas fa-info-circle"></i></a>
                          <a href="#" class="btn btn-success" style="margin: 2px"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-danger" style="margin: 2px" id="swal"><i class="fas fa-trash-alt">
                           
                          </i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
</div>

@endsection