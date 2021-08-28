@extends('layouts/main')

@section('title','Detail Functions')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Functions</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('functions')}}">Functions</a></div>
        <div class="breadcrumb-item">Detail</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Detail Functions</h4>
            </div>
            <div class="card-body">
              <div class="btn-group mb-5" role="group" style="padding-right: 0.5em">
                <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-file-export"></i> EXPORT
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><a class="dropdown-item" target="_blank" href="{{ url('functions/exportDetailPdf', $func->id) }}"><i class="far fa-file-pdf" style="color: red"></i> PDF</a></li>
                  <li><a class="dropdown-item" href="#"><i class="far fa-file-excel" style="color: rgb(76, 199, 138)"></i> EXCEL</a></li>
                </ul>
              </div>
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
                          <td>{{ $func->function_FE_Duration }} day</td>
                          {{-- cost --}}
                          <td>Rp. {{ $func->function_FE_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $func->function_FE_Price }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Back-End</td>
                          {{-- duration --}}
                          <td>{{ $func->function_BE_Duration }} day</td>
                          {{-- cost --}}
                          <td>Rp. {{ $func->function_BE_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $func->function_BE_Price }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Full-Stack</td>
                          {{-- duration --}}
                          <td>{{ $func->function_FS_Duration }} day</td>
                          {{-- cost --}}
                          <td>Rp. {{ $func->function_FS_Cost }}</td>
                          {{-- price --}}
                          <td>Rp. {{ $func->function_FS_Price }}</td>
                        </tr>
                        <tr>
                          <td style="background: rgb(185, 235, 185)">Total</td>
                          {{-- duration --}}
                          <td style="background: rgb(185, 235, 185)">{{ $func->function_FE_Duration + $func->function_BE_Duration +  $func->function_FS_Duration }} day </td>
                          {{-- cost --}}
                          <td style="background: rgb(185, 235, 185)">Rp. {{ $func->function_FE_Cost + $func->function_BE_Cost + $func->function_FS_Cost }}.00</td>
                          {{-- price --}}
                          <td style="background: rgb(185, 235, 185)">Rp. {{ $func->function_FE_Price + $func->function_BE_Price + $func->function_FS_Price}}.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-9">
                  <div class="card-footer text-right">
                    <a href="{{ url('functions') }}" class="btn btn-danger "> <i class="fas fa-arrow-left"></i> Back</button></a>
                    <a href="{{ route('functions.edit', $func->id) }}" class="btn btn-success "> <i class="fas fa-edit"></i> Edit</button></a>
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