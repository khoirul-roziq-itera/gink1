@extends('layouts/main')


@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Projects</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('projects')}}">Projects</a></div>
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
              <h4>Archive Project</h4>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive" style="padding: 2em">
                <table id="table-1" class="table table-hover table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th>Nomor</th>
                      <th>Applications Name</th>
                      <th>Category</th>
                      <th>Creator</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($apps as $app => $result)
                    <tr class="text-center">
                      <td>{{ $app + 1 }}</td>
                      <td>{{ $result->app_name }}</td>
                      <td>{{ $result->category->category_name }}</td>
                      <td>{{ $result->user->name }}</td>
                      <td>
                        <div class="badge badge-primary">Selesai</div>
                      </td>
                      <td>
                        <form action="{{ url('projects/kill/'.$result->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('projects/restore/'.$result->id) }}" class="btn btn-success" style="margin: 2px"><i class="fas fa-history"> Restore</i></a>
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