@extends('layouts/main')


@section('title','Dashboard')
    
@section('container')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Dashboard</h1>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="far fa-clock"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Waiting</h4>
                </div>
                <div class="card-body">
                  10
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                <i class="fas fa-recycle"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Processed</h4>
                </div>
                <div class="card-body">
                  42
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="fas fa-clipboard-list"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Completed</h4>
                </div>
                <div class="card-body">
                  10
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-secondary">
                <i class="far fa-list-alt"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Orders</h4>
                </div>
                <div class="card-body">
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
                <h4>History</h4>
              </div>
              <div class="card-body">             
                <ul class="list-unstyled list-unstyled-border">
                  <li class="media">
                    <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png" alt="avatar">
                    <div class="media-body">
                      <div class="float-right text-primary">Now</div>
                      <div class="media-title">Farhan A Mujib</div>
                      <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                    </div>
                  </li>
                  <li class="media">
                    <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png" alt="avatar">
                    <div class="media-body">
                      <div class="float-right">12m</div>
                      <div class="media-title">Ujang Maman</div>
                      <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                    </div>
                  </li>
                  <li class="media">
                    <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-3.png" alt="avatar">
                    <div class="media-body">
                      <div class="float-right">17m</div>
                      <div class="media-title">Rizal Fakhri</div>
                      <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                    </div>
                  </li>
                  <li class="media">
                    <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png" alt="avatar">
                    <div class="media-body">
                      <div class="float-right">21m</div>
                      <div class="media-title">Alfa Zulkarnain</div>
                      <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                    </div>
                  </li>
                </ul>
                <div class="text-center pt-1 pb-1">
                  <a href="#" class="btn btn-primary btn-lg btn-round">
                    View All
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection