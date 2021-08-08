@extends('layouts/main')


@section('title','Data admin')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Data Admin</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                        <div class="row">
                          <div class="col-6 offset-6">
                            <div style="padding:2.5em">
                                <a href="" class="btn btn-success float-right"  data-toggle="modal" data-target="#tambahadmin"><i class="fas fa-plus-circle"></i> Add Data</a>
                            </div>
                          </div>  
                        </div>

                        <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                            <table id="table-1" class="table table-hover table-bordered">
                            <thead class="text-center">
                                <tr>
                                <th>Nomor</th>
                                <th>Nama Lengkap</th>
                                <th>Peran Admin</th>
                                <th>Email</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>Administrator Sistem</td>
                                    <td>Admin Sistem</td>
                                    <td>admin@gmail.com</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="#" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning" style="margin: 2px"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" style="margin: 2px"><i class="fas fa-trash-alt"></i></a>
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
<div class="modal" tabindex="-1" role="dialog" id="tambahadmin">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalClose">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection

