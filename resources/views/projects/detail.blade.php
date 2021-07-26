@extends('layouts/main')

@section('title','Detail Project')
    
@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Project</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Data Project</a></div>
              <div class="breadcrumb-item active"><a href="#">List Project</a></div>
              <div class="breadcrumb-item">Edit Project</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url ('projects')}}"><i class="fas fa-arrow-circle-left" style="font-size: 30px; color:silver"></i></a>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <label class="col-sm-2 col-form-label" style="font-size: 20px; font-weight:bold">Nama</label>
                            <label  class="col-sm-10 col-form-label" style="font-size: 20px; font-weight:bold">: Dwiki Agus Saputra</label>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" style="font-size: 20px; font-weight:bold">Nama</label>
                            <label  class="col-sm-10 col-form-label" style="font-size: 20px; font-weight:bold">: Dwiki Agus Saputra</label>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" style="font-size: 20px; font-weight:bold">Nama</label>
                            <label  class="col-sm-10 col-form-label" style="font-size: 20px; font-weight:bold">: Dwiki Agus Saputra</label>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" style="font-size: 20px; font-weight:bold">Nama</label>
                            <label  class="col-sm-10 col-form-label" style="font-size: 20px; font-weight:bold">: Dwiki Agus Saputra</label>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" style="font-size: 20px; font-weight:bold">Nama</label>
                            <label  class="col-sm-10 col-form-label" style="font-size: 20px; font-weight:bold">: Dwiki Agus Saputra</label>
                          </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="testedit"><button class="btn btn-danger"> <i class="fas fa-edit"></i> Edit</button></a>
                        </div>
                      </div>
                </div>
            </div>
          </div>
    </section>
</div>
@endsection