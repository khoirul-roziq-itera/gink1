@extends('layouts/main')

@section('title','Detail Tag')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Categories</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('categories')}}">Categories</a></div>
        <div class="breadcrumb-item">Detail</a></div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Category</h4>
            </div>
            <div class="card-body">
              <div class="row" style="padding-bottom: 1em">
                <div class="col-6">
                  <div class="input-group">
                    <span class="input-group-text" style="font-weight: bold">Category Name </span>
                    <input type="text" aria-label="First name" class="form-control" disabled value="{{ $category->category_name }}">
                  </div>
                </div>
              </div>

              <h2 class="section-title" style="padding-bottom: 1em">List Projects</h2>
              <div class="row">
                <div class="col-6">
                  <table class="table table-bordered">
                    <thead class="text-center">
                      <tr>
                        <th >Nomor</th>
                        <th >Project Name</th>
                        <th >Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      @foreach( $apps as $app => $result )
                      <tr>
                        <th scope="row">{{$app + 1}}</th>
                        <td> {{ $result->app_name }}</td>
                        <td>
                          <a href="{{ url('projects', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i> Detail</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="float-right">
                    <a href="{{ url ('categories')}}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Back</a>
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

@endsection