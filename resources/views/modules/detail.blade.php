@extends('layouts/main')


@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Modules</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url ('modules')}}">Modules</a></div>
        <div class="breadcrumb-item">Detail</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Module</h4>
            </div>
            <div class="card-body">
              <a class="btn btn-danger" href="{{ url('modules/exportDetailPdf', $module->id) }}" role="button"><i class="fas fa-file-pdf"></i> Export PDF</a>
              <div class="form-group row" style="padding-top: 1em">
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
                <label for="funcNotes" class="col-sm-2 col-form-label">Module Notes</label>
                <div class="col-sm-7">
                  <textarea name="funcNotes" id="funcNotes" class="form-control" readonly="">{{ $module->module_Notes }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="funcStatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-7">
                  <input id="funcStatus" name="funcStatus" class="form-control" readonly="" value="{{ $moduleStatus }}" />
                </div>
              </div>

              <h2 class="section-title" style="padding-bottom: 1em">List Functions</h2>
              <div class="row">
                <div class="col-9">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Functions Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $module->funcs as $func => $result )
                        <tr>
                          <td>{{ $func + 1}}</td>
                          <td>{{ $result->function_Name }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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
                          <th>Duration</th>
                          <th>Cost</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Front-End</td>
                          {{-- Duration --}}
                          <td>{{ $module->module_FE_Duration }} day</td>
                          {{-- cost --}}
                          <td>Rp. {{ $module->module_FE_Cost  }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $module->module_FE_Price }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Back-End</td>
                          {{-- duration --}}
                          <td>{{ $module->module_BE_Duration }} day</td>
                          {{-- cost --}}
                          <td>Rp. {{ $module->module_BE_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $module->module_BE_Price }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Full-Stack</td>
                          {{-- duration --}}
                          <td>{{ $module->module_FS_Duration }} day</td>
                          {{-- cost --}}
                          <td>Rp. {{ $module->module_FS_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $module->module_FS_Price }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Total</td>
                          {{-- duration --}}
                          <td style="background: rgb(185, 235, 185)">{{ $module->module_FE_Duration  + $module->module_BE_Duration  +  $module->module_FS_Duration  }} day </td>
                          {{-- cost --}}
                          <td style="background: rgb(185, 235, 185)">Rp. {{ $module->module_FE_Cost + $module->module_BE_Cost + $module->module_FS_Cost }}.00</td>
                          {{-- price --}}
                          <td style="background: rgb(185, 235, 185)">Rp. {{ $module->module_FE_Price + $module->module_BE_Price + $module->module_FS_Price }}.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="{{ url ('modules') }}" class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Back</a>
                    <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-success "> <i class="fas fa-edit"></i> Edit</a>
                  </div>
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