@extends('layouts/main')

@section('title','Detail Tag')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Tags</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url ('tags')}}">Tags</a></div>
        <div class="breadcrumb-item">Detail</a></div>        
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4>Detail Tag</h4>
            </div>
              <div class="card-body">
                <div class="row" style="padding-bottom: 1em">
                  <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text" style="font-weight: bold">Tag Name </span>
                        <input type="text" aria-label="First name" class="form-control" value="app">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Project</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Appku</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Appmu</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Appku</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="float-right">
                      <a href="{{ url ('tags')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
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
                  
                  
                