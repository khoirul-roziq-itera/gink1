@extends('layouts/main')


@section('title','Dashboard')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Dashboard</h1>
    </div>

    <div class="section-body">
      <h2 class="section-title">Infomation Project</h2>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger text-center">
              <i class="fas fa-clock" style="font-size: 30pt; padding-top:0.5em"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4 style="font-size: 20px">Waiting</h4>
              </div>
              <div class="card-body" style="font-size: 25pt">
                {{ $waiting }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-recycle" style="font-size: 30pt; padding-top:0.5em"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4 style="font-size: 20px">On Progress</h4>
              </div>
              <div class="card-body" style="font-size: 25pt">
                {{ $onProgress}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-clipboard-list" style="font-size: 30pt; padding-top:0.5em"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4 style="font-size: 20px">Finished</h4>
              </div>
              <div class="card-body" style="font-size: 25pt">
                {{ $finished }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-secondary">
              <i class="far fa-list-alt" style="font-size: 30pt; padding-top:0.5em"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4 style="font-size: 20px">Total</h4>
              </div>
              <div class="card-body" style="font-size: 25pt">
                {{ $all }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Calendar</h4>
            </div>
            <div class="section-body">
              <div class="row">
                <div class="col-12">

                  <div class="card-body">
                    <div class="fc-overflow">
                      <div id="myEvent"></div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Finished Project</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="table-1" class="table table-hover table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Finished</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($apps as $app => $result)
                    <tr class="text-center">
                      <td>{{ $app + 1 }}</td>
                      <td>{{ $result->app_name }}</td>
                      <td>{{ $result->category->category_name }}</td>
                      <td>{{ $result->end_project_t }}</td>
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
</div>
</div>
</section>
</div>
@endsection