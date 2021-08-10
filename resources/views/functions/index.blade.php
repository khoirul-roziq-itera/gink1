@extends('layouts/main')


@section('title','List Functions')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">List Functions</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Functions</a></div>
        <div class="breadcrumb-item">List Functions</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Function</h4>
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
                    <a href="{{ url('functions/create')}}" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Add Data</button></a>
                  </div>
                </div>
              </div>

              <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                <table id="table-1" class="table table-hover table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th>Nomor</th>
                      <th>Function Title</th>
                      <th>Function Name</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($funcs as $func => $result)
                    <tr class="text-center">
                      <td>{{ $func + 1 }}</td>
                      <td>{{ $result->function_Title }}</td>
                      <td>{{ $result->function_Name }}</td>
                      <td>
                        @if( $result->function_Status == 1)
                        <span class="badge badge-warning">Menunggu</span>
                        @elseif( $result->function_Status == 2 )
                        <span class="badge badge-info">Sedang Dikerjakan</span>
                        @else
                        <span class="badge badge-success">Selesai</span>
                        @endif
                      </td>
                      <td>

                        <form action="{{ route('functions.destroy', $result->id ) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('functions', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
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
@include('sweetalert::alert')
@endsection