@extends('layouts/main')



@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Functions</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('functions')}}">Function</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Functions</h4>
                        </div>
                        <form method="POST" action="{{ route('functions.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="funcTitle" class="col-sm-2 col-form-label">Function Title</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcTitle" name="funcTitle" class="form-control @error('funcTitle') is-invalid @enderror" placeholder="Input title" value="{{ old('funcTitle') }}">
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
                                        <input type="text" id="funcName" name="funcName" class="form-control @error('funcName') is-invalid @enderror" placeholder="Input name" value="{{ old('funcName') }}">
                                        <div class="invalid-feedback">
                                            @error('tagName')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcGroup" class="col-sm-2 col-form-label">Function Group</label>
                                    <div class="col-sm-7">
                                        <select id="funcGroup" name="funcGroup" class="form-control @error('funcGroup') is-invalid @enderror">
                                            <option value="">-- Choose Group --</option>
                                            <option value="Create">Create</option>
                                            <option value="Read">Read</option>
                                            <option value="Update">Update</option>
                                            <option value="Delete">Delete</option>
                                            <option value="Other">Other</option>
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
                                            <input type="text" name="FEDuration" id="FEDuration" class="form-control @error('FEDuration') is-invalid @enderror" placeholder="Input total of days" value="{{ old('FEDuration') }}" />
                                            <span class="input-group-text" id="basic-addon1">Day </span>
                                            <div class="invalid-feedback">
                                                @error('FEDuration')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FECost" class="col-sm-2 col-form-label">Front-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FECost" id="FECost" class="form-control @error('FECost') is-invalid @enderror" placeholder="Input cost" value="{{ old('FECost') }}" />
                                            <div class="invalid-feedback">
                                                @error('FECost')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FEPrice" class="col-sm-2 col-form-label">Front-End Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FEPrice" id="FEPrice" class="form-control @error('FEPrice') is-invalid @enderror" placeholder="Input price" value="{{ old('FEPrice') }}" />
                                            <div class="invalid-feedback">
                                                @error('FEPrice')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BEDuration" class="col-sm-2 col-form-label">Back-End Duration</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <input type="text" name="BEDuration" id="BEDuration" class="form-control @error('BEDuration') is-invalid @enderror" placeholder="Input total of days" value="{{ old('BEDuration') }}" />
                                            <span class="input-group-text" id="basic-addon1">Day </span>
                                            <div class="invalid-feedback">
                                                @error('BEDuration')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BECost" class="col-sm-2 col-form-label">Back-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BECost" id="BECost" class="form-control @error('BECost') is-invalid @enderror" placeholder="Input cost" value="{{ old('BECost') }}" />
                                            <div class="invalid-feedback">
                                                @error('BECost')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BEPrice" class="col-sm-2 col-form-label">Back-End Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BEPrice" id="BEPrice" class="form-control @error('BEPrice') is-invalid @enderror" placeholder="Input price" value="{{ old('BEPrice') }}" />
                                            <div class="invalid-feedback">
                                                @error('BEPrice')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="FSDuration" class="col-sm-2 col-form-label">Full-Stack Duration</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <input type="text" name="FSDuration" id="FSDuration" class="form-control @error('FSDuration') is-invalid @enderror" placeholder="Input total of days" value="{{ old('FSDuration') }}" />
                                            <span class="input-group-text" id="basic-addon1">Day </span>
                                            <div class="invalid-feedback">
                                                @error('FSDuration')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSCost" class="col-sm-2 col-form-label">Full-Stack Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSCost" id="FSCost" class="form-control @error('FSCost') is-invalid @enderror" placeholder="Input cost" value="{{ old('FSCost') }}" />
                                            <div class="invalid-feedback">
                                                @error('FECost')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSPrice" class="col-sm-2 col-form-label">Full-Stack Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSPrice" id="FSPrice" class="form-control @error('FSPrice') is-invalid @enderror" placeholder="Input price " value="{{ old('FSPrice') }}" />
                                            <div class="invalid-feedback">
                                                @error('FEPrice')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcNotes" class="col-sm-2 col-form-label">Function Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="funcNotes" id="funcNotes" class="form-control">{{ old('funcNotes') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <select id="funcStatus" name="funcStatus" class="form-control @error('funcStatus') is-invalid @enderror">
                                            <option value="">-- Choose Status --</option>
                                            <option value="1">Waiting</option>
                                            <option value="2">On Progress</option>
                                            <option value="3">Finished</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            @error('funcStatus')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group float-right">
                                            <a href="{{ url('functions') }}"><button type="button" class="btn btn-danger btn">Cancel</button></a>
                                            <button type="submit" class="btn btn-primary btn">Submit</button>
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