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

      {{-- <button type="button" class="btn btn-primary btn-lg" style="margin-bottom: 1em" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
        Tambah Data
      </button> --}}


      {{-- akhir modal tambah data --}}

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
                <table id="example" class="table table-hover table-bordered border-primary">
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
                          <a href="#" class="btn btn-danger" style="margin: 2px"><i class="fas fa-trash-alt"></i></a>
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
                          <a href="#" class="btn btn-danger" style="margin: 2px"><i class="fas fa-trash-alt"></i></a>
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

{{-- <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">INPUT DATA PROJECT</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{ url('projects/create') }}">
@csrf
<div class="form-group">
  <label for="nama">Nama Project</label>
  <input type="text" id="nama" class="form-control" placeholder="Masukkan nama project">
</div>
<div class="form-group">
  <label for="pekerjaan">Kategori</label>
  <select id="pekerjaan" class="form-control">
    <option value="">- Pilih Kateg</option>
    <option value="">Akutansi</option>
    <option value="">Administrasi</option>
    <option value="">aaaaaa</option>
    <option value="">aaaaaa</option>
    <option value="">aaaaaa</option>
  </select>
</div>
<div class="form-group">
  <label>Batas Pengerjaan</label>
  <input type="date" name="tanggal" class="form-control datepicker" required />
</div>
<div class="form-group">
  <div class="multi_select_box">
    <label for="modul">Modul</label>
    <select id="multiple-checkboxes" class="multi_select" multiple="multiple">
      <option value="php">PHP</option>
      <option value="javascript">JavaScript</option>
      <option value="java">Java</option>
      <option value="sql">SQL</option>
      <option value="jquery">Jquery</option>
      <option value=".net">.Net</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label for="pekerjaan">Status</label>
  <select id="pekerjaan" class="form-control">
    <option value="">- Pilih Status</option>
    <option value="">Selesai</option>
    <option value="">Menunggu</option>
    <option value="">Sedang Dikerjakan</option>
  </select>
</div>


<div class="modal-footer ">
  <button type="button" class="btn btn-primary">Simpan</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
</div>
</form>
</div>

</div>
</div>
</div> --}}

</section>

@endsection