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
                              <input type="text" class="form-control" disabled value="apppku">
                          </div>
                      </div>
                        <div class="form-group row">
                          <label for="moduleName" class="col-sm-2 col-form-label">Tags</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" disabled value="#">
                          </div>
                      </div>
                        <div class="form-group row">
                          <label for="moduleName" class="col-sm-2 col-form-label">Category</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" disabled value="#">
                          </div>
                      </div>
                        <div class="form-group row">
                          <label for="moduleName" class="col-sm-2 col-form-label">Start Time</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" disabled value="#">
                          </div>
                      </div>
                        <div class="form-group row">
                          <label for="moduleName" class="col-sm-2 col-form-label">Deadline</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" disabled value="#">
                          </div>
                      </div>
                        <div class="form-group row">
                          <label for="moduleName" class="col-sm-2 col-form-label">Finished</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" disabled value="#">
                          </div>
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
                                <td>1000</td>
                                {{-- price --}}
                                <td>2000</td>
                                {{-- total --}}
                                <td>1000</td>
                              </tr>
                              <tr>
                                <td style="background: rgb(185, 235, 185)">Back-End</td>
                                {{-- cost --}}
                                <td>1000</td>
                                {{-- price --}}
                                <td>2000</td>
                                {{-- total --}}
                                <td>1000</td>
                              </tr>
                              <tr>
                                <td style="background: rgb(185, 235, 185)">Full-Stack</td>
                                {{-- cost --}}
                                <td>1000</td>
                                {{-- price --}}
                                <td>2000</td>
                                {{-- total --}}
                                <td>1000</td>
                              </tr>
                              <tr>
                                <td style="background: rgb(185, 235, 185)">Total</td>
                                {{-- cost --}}
                                <td style="background: rgb(185, 235, 185)">1000</td>
                                {{-- price --}}
                                <td style="background: rgb(185, 235, 185)">2000</td>
                                {{-- total --}}
                                <td style="background: rgb(185, 235, 185)">3000</td>
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
                        <a href=""  class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Back</button></a>
                        <a href="" class="btn btn-success "> <i class="fas fa-edit" ></i> Edit</button></a>
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
      

