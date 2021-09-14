@extends('layouts/main')


@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Functions</h1>
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
              <h4>Data Functions</h4>
            </div>
            <div class="card-body p-0">
              <div class="col-6">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="padding-top: 2em; padding-left:2em">
                  <div class="btn-group" role="group" style="padding-right: 0.5em">
                    <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-file-export"></i> EXPORT
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="{{ url('functions/exportIndexPdf') }}"><i class="far fa-file-pdf" style="color: red"></i> PDF</a></li>
                      <li><a class="dropdown-item" href="{{ url('functions/exportIndexExcel') }}"><i class="far fa-file-excel" style="color: rgb(76, 199, 138)"></i> EXCEL</a></li>
                    </ul>
                  </div>
                  <a href="{{ url('functions/create')}}" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> ADD DATA</a>
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
                      <span class="badge badge-danger">Waiting</span>
                      @elseif( $result->function_Status == 2 )
                      <span class="badge badge-success">On Progress</span>
                      @else
                      <span class="badge badge-primary">Finished</span>
                      @endif
                    </td>
                    <td>

                      <form action="{{ url('functions/kill/'.$result->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="{{ url('functions', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i> Detail</a>
<<<<<<< HEAD
                          <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt"></i> Delete</a>                          </div>
=======
                          <!-- <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to archive this data?');"><i class="fas fa-archive"></i> Archive</a> -->
                          <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt"></i> Delete</a>
                        </div>
>>>>>>> bb51f6ea1237888ddaf895a8011a417f8644d9da
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