@extends('layouts/main')


@section('title','Manage users')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Manage User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Manage User</a></div>
              </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Data User</h4>
                      </div>
                        <div class="card-body p-0">
                        <div class="row">
                          <div class="col-6 offset-6">
                            <div style="padding:2.5em">
                                <a href="addusers" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Add Data</a>
                            </div>
                          </div>  
                        </div>

                        <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                            <table id="table-1" class="table table-hover table-bordered">
                            <thead class="text-center">
                                <tr>
                                <th>Nomor</th>
                                <th>Name</th>
                                <th>Level</th>
                                <th>Email</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>Administrator Sistem</td>
                                    <td>Admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="detailusers" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
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

@endsection

