@extends('layouts/main')

@section('title','Detail Project')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Detail Function</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('functions')}}">Function</a></div>
        <div class="breadcrumb-item">Detail</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Data</h4>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="funcTitle" class="col-sm-2 col-form-label">Function Title</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" id="funcTitle" name="funcTitle" class="form-control" value="{{ $func->function_Title }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="funcName" class="col-sm-2 col-form-label">Function Name</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" id="funcName" name="funcName" class="form-control" value="{{ $func->function_Name }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="funcGroup" class="col-sm-2 col-form-label">function Group</label>
                <div class="col-sm-7">
                  <input id="funcGroup" name="funcGroup" class="form-control" readonly="" value="{{ $func->function_Group }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="FEDuration" class="col-sm-2 col-form-label">Front-End Duration</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FEDuration" id="FEDuration" class="form-control" value="{{ $func->function_FE_Duration }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FECost" class="col-sm-2 col-form-label">Front-End Cost</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FECost" id="FECost" class="form-control" value="{{ $func->function_FE_Cost }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FEPrice" class="col-sm-2 col-form-label">Front-End Price</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FEPrice" id="FEPrice" class="form-control" value="{{ $func->function_FE_Price }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="BEDuration" class="col-sm-2 col-form-label">Back-End Duration</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="BEDuration" id="BEDuration" class="form-control" value="{{ $func->function_BE_Duration }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="BECost" class="col-sm-2 col-form-label">Back-End Cost</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="BECost" id="BECost" class="form-control" value="{{ $func->function_BE_Cost }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="BEPrice" class="col-sm-2 col-form-label">Back-End Price</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="BEPrice" id="BEPrice" class="form-control" value="{{ $func->function_BE_Price }}" />
                </div>
              </div>

              <div class="form-group row">
                <label for="FSDuration" class="col-sm-2 col-form-label">Full-Stack Duration</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FSDuration" id="FSDuration" class="form-control" value="{{ $func->function_FS_Duration }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FSCost" class="col-sm-2 col-form-label">Full-Stack Cost</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FSCost" id="FSCost" class="form-control" value="{{ $func->function_FS_Cost }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="FSPrice" class="col-sm-2 col-form-label">Full-Stack Price</label>
                <div class="col-sm-7">
                  <input readonly="" type="text" name="FSPrice" id="FSPrice" class="form-control" value="{{ $func->function_FS_Price }}" />
                </div>
              </div>
              <div class="form-group row">
                <label for="funcNotes" class="col-sm-2 col-form-label">Function Notes</label>
                <div class="col-sm-7">
                  <textarea name="funcNotes" id="funcNotes" class="form-control" readonly="">{{ $func->function_Notes }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="funcStatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-7">
                  <input id="funcStatus" name="funcStatus" class="form-control" readonly="" value="{{ $funcStatus }}" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="{{ url('functions') }}"  class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Back</button></a>
                    <a href="{{ route('functions.edit', $func->id) }}" class="btn btn-success "> <i class="fas fa-edit" ></i> Edit</button></a>
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