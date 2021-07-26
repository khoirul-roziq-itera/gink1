@extends('layouts/main')


@section('title','Data Project')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Archive Project</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Modul</a></div>
        <div class="breadcrumb-item">Archive Modul</div>
      </div>
    </div>

    <div class="section-body">
      
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-0">
              <div  style="padding: 3em">
                <a href="{{ url('projects/create')}}" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Add Data</button></a>
              </div>
              <div class="table-responsive" style="padding: 2em">
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
                          <div class="badge badge-primary">Selesai</div>
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" class="btn btn-success" style="margin: 2px"><i class="fas fa-history"> Restore</i></a>
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
  </section>
</div>

@endsection