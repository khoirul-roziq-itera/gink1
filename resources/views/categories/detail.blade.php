@extends('layouts/main')

@section('title','Detail Tag')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Detail Category</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Categories</a></div>
        <div class="breadcrumb-item"><a href="#">List</a></div> 
        <div class="breadcrumb-item"><a href="#">Detail</a></div> 
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
                <h5 class="card-title">Nama Category</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ url ('tags')}}" class="btn btn-danger">Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection