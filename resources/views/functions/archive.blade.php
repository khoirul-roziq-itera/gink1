@extends('layouts/main')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Functions</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url ('functions')}}">Functions</a></div>
        <div class="breadcrumb-item">Archive</div>
    </div>
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
              <h4>Archive Functions</h4>
            </div>
            <div class="card-body p-0">
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
                        <span class="badge badge-danger">Waiting</span>
                        @elseif( $result->function_Status == 2 )
                        <span class="badge badge-success">On Progess</span>
                        @else
                        <span class="badge badge-primary">Finished</span>
                        @endif
                      </td>
                      <td>
                        <form action="{{ url('functions/kill/'.$result->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('functions/restore/'.$result->id) }}" class="btn btn-success" style="margin: 2px"><i class="fas fa-history"> Restore</i></a>
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