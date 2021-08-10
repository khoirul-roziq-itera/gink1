@extends('layouts/main')


@section('title','List Modules')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">List Module</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Module</a></div>
        <div class="breadcrumb-item">List Module</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Module</h4>
            </div>
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
                <table id="table-1" class="table table-hover table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th>Nomor</th>
                      <th>Module Name</th>
                      <th>Functions</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($modules as $module => $result)
                    <tr class="text-center">
                      <td>{{ $module + 1 }}</td>
                      <td>{{ $result->module_Name }}</td>
                      <td>
                        @foreach( $result->funcs as $func )
                        <span class="badge bg-secondary mt-1">{{ $func->function_Name }}</span><br>
                        @endforeach
                      </td>
                      <td>
                        @if( $result->module_Status == 1)
                        <span class="badge badge-warning">Menunggu</span>
                        @elseif( $result->module_Status == 2 )
                        <span class="badge badge-info">Sedang Dikerjakan</span>
                        @else
                        <span class="badge badge-success">Selesai</span>
                        @endif
                      </td>
                      <td>

                        <form action="{{ route('modules.destroy', $result->id ) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('modules', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
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