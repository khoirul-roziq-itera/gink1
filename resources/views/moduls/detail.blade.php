@extends('layouts/main')

@section('title','Detail Function')
    
@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Detail Function</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Data Function</a></div>
              <div class="breadcrumb-item active"><a href="#">List Function</a></div>
              <div class="breadcrumb-item">Edit Function</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                          <h4>Nama Function</h4>
                        </div>
                        <div class="card-body">
                          This is some text within a card body.
                        </div>
                        <div class="card-footer text-right">
                            <a href="testlist"><button class="btn btn-secondary">Back</button></a>
                            <a href="testedit"><button class="btn btn-danger">Edit</button>
                        </div>
                      </div>
                </div>
            </div>
          </div>
    </section>
</div>
@endsection