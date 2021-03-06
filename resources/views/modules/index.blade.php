@extends('layouts/main')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Modules</h1>
    </div>
    <div class="section-body">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
          {{session('success')}}
        </div>
      </div>
      @endif

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Modules</h4>
            </div>
            <div class="card-body p-0">
              <div class="col-6">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="padding-top: 2em; padding-left:2em">
                  <div style="padding-right: 0.5em">
                    <a href="{{ url('modules/exportIndexPdf')}}" type="button" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Export PDF</a>
                  </div>
                  <div>
                    <a href="{{ url('modules/create')}}" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> ADD DATA</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
              <table id="table-1" class="table table-hover table-bordered">
                <thead class="text-center">
                  <tr>
                    <th>Nomor</th>
                    <th>Module Name</th>
                    <th>Cost Total</th>
                    <th>Price Total</th>
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
                      {{ $result->module_Cost_Total}}
                    </td>
                    <td>
                      {{ $result->module_Price_Total}}
                    </td>
                    <td>
                      @if( $result->module_Status == 1)
                      <span class="badge badge-danger">Waiting</span>
                      @elseif( $result->module_Status == 2 )
                      <span class="badge badge-success">On Progress</span>
                      @else
                      <span class="badge badge-primary">Finished</span>
                      @endif
                    </td>
                    <td>
                      <form action="{{ url('modules/kill/'.$result->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="{{ url('modules', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i> Detail</a>
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