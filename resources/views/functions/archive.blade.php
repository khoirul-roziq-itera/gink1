@extends('layouts/main')


@section('title','List Functions')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Archive Functions</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                <table id="table-1" class="table table-hover table-bordered border-primary">
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
                        <form action="{{ url('functions/kill/'.$result->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('functions/restore/'.$result->id) }}" class="btn btn-success" style="margin: 2px"><i class="fas fa-history"> Restore</i></a>
                            <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt"></i></a>
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