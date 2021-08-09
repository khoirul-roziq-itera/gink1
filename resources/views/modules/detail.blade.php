@extends('layouts/main')

@section('title','Detail Project')
@section('id', $module->id)
@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Detail Project</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Project</a></div>
        <div class="breadcrumb-item active"><a href="#">List Project</a></div>
        <div class="breadcrumb-item">Edit Project</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ url ('modules')}}"><button class="btn btn-secondary "><i class="fas fa-arrow-circle-left"></i> Back</button></a>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="moduleName" class="col-sm-2 col-form-label">Module Name</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" id="moduleName" name="moduleName" class="form-control" value="{{ $module->module_Name }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="moduleCreator" class="col-sm-2 col-form-label">Module Creator</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" id="moduleCreator" name="moduleCreator" class="form-control" value="{{ $module->user->name }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FEDuration" class="col-sm-2 col-form-label">Front-End Duration</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FEDuration" id="FEDuration" class="form-control" value="{{ $module->module_FE_Duration }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FECost" class="col-sm-2 col-form-label">Front-End Cost</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FECost" id="FECost" class="form-control" value="{{ $module->module_FE_Cost }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FEPrice" class="col-sm-2 col-form-label">Front-End Price</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FEPrice" id="FEPrice" class="form-control" value="{{ $module->module_FE_Price }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="BEDuration" class="col-sm-2 col-form-label">Back-End Duration</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="BEDuration" id="BEDuration" class="form-control" value="{{ $module->module_BE_Duration }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="BECost" class="col-sm-2 col-form-label">Back-End Cost</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="BECost" id="BECost" class="form-control" value="{{ $module->module_BE_Cost }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="BEPrice" class="col-sm-2 col-form-label">Back-End Price</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="BEPrice" id="BEPrice" class="form-control" value="{{ $module->module_BE_Price }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="FSDuration" class="col-sm-2 col-form-label">Full-Stack Duration</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FSDuration" id="FSDuration" class="form-control" value="{{ $module->module_FS_Duration }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FSCost" class="col-sm-2 col-form-label">Full-Stack Cost</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FSCost" id="FSCost" class="form-control" value="{{ $module->module_FS_Cost }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FSPrice" class="col-sm-2 col-form-label">Full-Stack Price</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FSPrice" id="FSPrice" class="form-control" value="{{ $module->module_FS_Price }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="costTotal" class="col-sm-2 col-form-label">Cost Total</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="costTotal" id="costTotal" class="form-control" value="{{ $module->module_Cost_Total }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="priceTotal" class="col-sm-2 col-form-label">Price Total</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="priceTotal" id="priceTotal" class="form-control" value="{{ $module->module_Price_Total }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="funcNotes" class="col-sm-2 col-form-label">Module Notes</label>
                <div class="col-sm-7">
                  <textarea name="funcNotes" id="funcNotes" class="form-control" readonly="">{{ $module->module_FE_Duration }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="funcStatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-7">
                  <input id="funcStatus" name="funcStatus" class="form-control" readonly="" value="{{ $moduleStatus }}" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="{{ route('modules.edit', $module->id) }}"><button class="btn btn-success "> <i class="fas fa-edit" style="font-size: 18px"></i> Edit</button></a>
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