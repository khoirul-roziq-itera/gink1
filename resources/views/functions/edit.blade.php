@extends('layouts/main')


@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Functions</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('functions')}}">Functions</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Functions</h4>
                        </div>
                        <form method="POST" action="{{ route('functions.update', $func->id) }}" id="myForm">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="funcTitle" class="col-sm-2 col-form-label">Fitur Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcTitle" name="funcTitle" class="form-control @error('funcTitle') is-invalid @enderror" value="{{ $func->function_Title }}">
                                        <div class="invalid-feedback">
                                            @error('funcTitle')
                                             {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcName" class="col-sm-2 col-form-label">Function Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcName" name="funcName" class="form-control @error('funcName') is-invalid @enderror" value="{{ $func->function_Name }}">
                                        <div class="invalid-feedback">
                                            @error('funcName')
                                            {{ $message }}
                                            @enderror
                                          </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcGroup" class="col-sm-2 col-form-label">Function Group</label>
                                    <div class="col-sm-7">
                                        <select id="funcGroup" name="funcGroup" class="form-control @error('funcGroup') is-invalid @enderror" >
                                            <option value="">-- Choose Group --</option>
                                            <option value="Create" @if($func->function_Group == 'Create') selected @endif>Create</option>
                                            <option value="Read" @if($func->function_Group == 'Read') selected @endif>Read</option>
                                            <option value="Update" @if($func->function_Group == 'Update') selected @endif>Update</option>
                                            <option value="Delete" @if($func->function_Group == 'Delete') selected @endif>Delete</option>
                                            <option value="Other" @if($func->function_Group == 'Other') selected @endif>Other</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            @error('funcGroup')
                                            {{ $message }}
                                            @enderror
                                          </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="FEDuration" class="col-sm-2 col-form-label">Front-End Duration</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <input type="text" name="FEDuration" id="FEDuration" class="form-control" value="{{ $func->function_FE_Duration }}" />
                                            <span class="input-group-text" id="basic-addon1">Day </span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FECost" class="col-sm-2 col-form-label">Front-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FECost" id="FECost" class="form-control " value="{{ $func->function_FE_Cost }}" />
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FEPrice" class="col-sm-2 col-form-label">Front-End Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FEPrice" id="FEPrice" class="form-control" value="{{ $func->function_FE_Price }}" />
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BEDuration" class="col-sm-2 col-form-label">Back-End Duration</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <input type="text" name="BEDuration" id="BEDuration" class="form-control " value="{{ $func->function_BE_Duration }}" />
                                            <span class="input-group-text" id="basic-addon1">Day </span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BECost" class="col-sm-2 col-form-label">Back-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BECost" id="BECost" class="form-control" value="{{ $func->function_BE_Cost }}" />
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BEPrice" class="col-sm-2 col-form-label">Back-End Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BEPrice" id="BEPrice" class="form-control " value="{{ $func->function_BE_Price }}" />
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="FSDuration" class="col-sm-2 col-form-label">Full-Stack Duration</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <input type="text" name="FSDuration" id="FSDuration" class="form-control" value="{{ $func->function_FS_Duration }}" />
                                            <span class="input-group-text" id="basic-addon1">Day </span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSCost" class="col-sm-2 col-form-label">Full-Stack Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSCost" id="FSCost" class="form-control " value="{{ $func->function_FS_Cost }}" />
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSPrice" class="col-sm-2 col-form-label">Full-Stack Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSPrice" id="FSPrice" class="form-control " value="{{ $func->function_FS_Price }}" />
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcNotes" class="col-sm-2 col-form-label">Function Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="funcNotes" id="funcNotes" class="form-control">{{ $func->function_Notes }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <select id="funcStatus" name="funcStatus" class="form-control">
                                            <option value="">-- Choose Status --</option>
                                            <option value="1" @if($func->function_Status == '1') selected @endif>Waiting</option>
                                            <option value="2" @if($func->function_Status == '2') selected @endif>On Progress</option>
                                            <option value="3" @if($func->function_Status == '3') selected @endif>Finished</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group float-right">
                                            <a href="{{ url('functions') }}"><button type="button" class="btn btn-danger btn">Cancel</button></a>
                                            <button type="submit" class="btn btn-primary btn">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection