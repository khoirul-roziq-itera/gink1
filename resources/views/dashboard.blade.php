@extends('layouts/main')


@section('title','Dashboard')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
      </div>
    </div>

    <div class="section-body">
      <a href="{{url('projects/create')}}"><button type="button" class="btn btn-danger btn-lg" style="margin-bottom: 1em"><i class="fas fa-plus"></i> Tambah Data</button></a>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Project</h4>
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
                <table id="table" class="table table-hover table-bordered border-primary">
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

@endsection