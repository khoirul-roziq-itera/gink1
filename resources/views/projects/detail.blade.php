@extends('layouts/main')

@section('title','Detail Project')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Projects</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url ('projects') }}">Data Project</a></div>
        <div class="breadcrumb-item">Detail</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Project</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <h2 class="section-title" style="padding-bottom: 1em">Informasi Project</h2>
                  <div class="form-group row">
                    <label for="moduleName" class="col-sm-2 col-form-label">Project Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" disabled value="{{ $app->app_name }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="moduleName" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" disabled value="{{ $app->category->category_name }}">
                    </div>

                  </div>
                  <div class="form-group row">
                    <label for="moduleName" class="col-sm-2 col-form-label">Start Time</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" disabled value="{{ $app->start_project_t }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="moduleName" class="col-sm-2 col-form-label">Deadline</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" disabled value="{{ $app->deadline_project_t }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="moduleName" class="col-sm-2 col-form-label">Finished</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" disabled value="{{ $app->end_project_t }}">
                    </div>
                  </div>
                </div>
              </div>

              <h2 class="section-title" style="padding-bottom: 1em">List Modules</h2>
              <div class="row">
                <div class="col-9">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Module Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach( $app->modules as $module => $result )
                          <td>{{ $module + 1}}</td>
                          <td>{{ $result->module_Name }}</td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <h2 class="section-title" style="padding-bottom: 1em">List Tags</h2>
              <div class="row">
                <div class="col-9">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tags Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach( $app->tags as $tag => $result )
                          <td>{{ $tag + 1}}</td>
                          <td>{{ $result->tag_name }}</td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <h2 class="section-title" style="padding-bottom: 1em">Calculation</h2>
              <div class="row">
                <div class="col-9">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="text-center">
                        <tr>
                          <th>Role</th>
                          <th>Cost</th>
                          <th>Price</th>
                          <th>Profit</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Front-End</td>
                          {{-- cost --}}
                          <td>Rp. {{ $app->app_FE_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $app->app_FE_Price }}</td>
                          {{-- profit --}}
                          <td>Rp. {{ $app->app_FE_Price - $app->app_FE_Cost }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Back-End</td>
                          {{-- cost --}}
                          <td>Rp. {{ $app->app_BE_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $app->app_BE_Price }}</td>
                          {{-- total --}}
                          <td>Rp. {{ $app->app_BE_Price - $app->app_BE_Cost }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Full-Stack</td>
                          {{-- cost --}}
                          <td>Rp. {{ $app->app_FS_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $app->app_FS_Price }}</td>
                          {{-- total --}}
                          <td>Rp. {{ $app->app_FS_Price - $app->app_FS_Cost }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Total</td>
                          {{-- cost --}}
                          <td style="background: rgb(185, 235, 185)">Rp. {{ $app->app_Cost_Total }}</td>
                          {{-- price --}}
                          <td style="background: rgb(185, 235, 185)">Rp. {{ $app->app_Price_Total }}</td>
                          {{-- total --}}
                          <td style="background: rgb(185, 235, 185)">Rp. {{ $app->app_Price_Total - $app->app_Cost_Total }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-9">
                <div class="card-footer text-right">
                  <a href="{{ url ('projects') }}" class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Back</button></a>
                  <a href="{{ route('projects.edit', $app->id) }}" class="btn btn-success "> <i class="fas fa-edit"></i> Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>
</div>
@endsection