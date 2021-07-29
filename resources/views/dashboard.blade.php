@extends('layouts/main')


@section('title','Dashboard')
    
@section('container')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1 style="font-size: 25px">Dashboard</h1>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger text-center">
                <i class="fas fa-clock" style="font-size: 30pt; padding-top:0.5em"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4 style="font-size: 15px">Waiting</h4>
                </div>
                <div class="card-body" style="font-size: 25pt">
                  10
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
                  <h4 style="font-size: 15px">Processed</h4>
                </div>
                <div class="card-body" style="font-size: 25pt">
                  42
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary" >
                <i class="fas fa-clipboard-list" style="font-size: 30pt; padding-top:0.5em"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4 style="font-size: 15px">Completed</h4>
                </div>
                <div class="card-body" style="font-size: 25pt">
                  10
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
                  <h4 style="font-size: 15px">Total Project</h4>
                </div>
                <div class="card-body"  style="font-size: 25pt">
                  47
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
                    <div class="card">

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
          </div>
          <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Finished Project</h4>
              </div>
              <div class="card-body">            
                <div class="table-responsive">
                  <table id="table-1" class="table table-hover table-bordered border-primary">
                    <thead class="text-center">
                      <tr>
                          <th>No</th>
                          <th>Nama Project</th>
                          <th>Tanggal Selesai</th>
                          <th>Estimasi Biaya</th>
                          <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                          <td>1</td>
                          <td>Calculator App</td>
                          <td>30/05/2021</td>
                          <td>Rp. 100.000</td>
                          <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="testdetail" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
                              <a href="#" class="btn btn-danger" style="margin: 2px" id="swal-6"><i class="fas fa-trash-alt"></i></a>
                            </div>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     </div>
@endsection