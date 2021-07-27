@extends('layouts/main')


@section('title','List Project')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">List Project</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Project</a></div>
        <div class="breadcrumb-item">List Project</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-6">
                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="padding-top: 2em; padding-left:2em">
                    <button type="button" class="btn btn-primary" style="margin-right: 0.5em"><i class="fas fa-print"></i> PRINT</button>
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-file-export"></i> EXPORT
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="#"><i class="far fa-file-pdf" style="color: red"></i> PDF</a></li>
                        <li><a class="dropdown-item" href="#"><i class="far fa-file-excel" style="color: rgb(76, 199, 138)"></i> EXCEL</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div style="padding:2.5em">
                    <a href="{{ url('projects/create')}}" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Add Data</button></a>
                  </div>
                </div>
              </div>

              <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                <table id="table-1" class="table table-hover table-bordered border-primary">
                  <thead class="text-center">
                    <tr>
                      <th>Nomor</th>
                      <th>Applications Name</th>
                      <th>Category</th>
                      <th>Deadline</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($apps as $app => $result)
                    <tr class="text-center">
                      <td>{{ $app + 1 }}</td>
                      <td>{{ $result->app_name }}</td>
                      <td>{{ $result->category }}</td>
                      <td>{{ $result->deadline_project_t }}</td>
                      <td>
                        <div class="badge badge-primary">Selesai</div>
                      </td>
                      <td>

                        <form action="{{ route('projects.destroy', $result->id ) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="testdetail" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
                            <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to archive this data?');"><i class="fas fa-archive"></i></a>
                          </div>
                        </form>

                      </td>
                    </tr>
                    @endforeach
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