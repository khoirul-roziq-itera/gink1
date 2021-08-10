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
                        <form action="{{ url('modules/kill/'.$result->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('modules/restore/'.$result->id) }}" class="btn btn-success" style="margin: 2px"><i class="fas fa-history"> Restore</i></a>
                            <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt"></i> Delete</a>
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