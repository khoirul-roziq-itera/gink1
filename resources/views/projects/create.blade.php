@extends('layouts/main')

@section('title','Create Data')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Projects</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('projects') }}">Projects</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Project</h4>
                        </div>
                        <form method="POST" action="{{ route('projects.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="appname" class="col-sm-2 col-form-label">Application Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="appName" name="appName" class="form-control @error('appName') is-invalid @enderror" placeholder="Input your application name">
                                        <div class="invalid-feedback">
                                            @error('appName')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-7">
                                        <select id="choices-categories" name="category" class="form-control" placeholder="Select categories">
                                            <option value="">--- Choose Category ---</option>
                                            @foreach( $categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tags" class="col-sm-2 col-form-label">Tag</label>
                                    <div class="col-sm-7">
                                        <select id="choices-tags" name="tags[]" class="form-control" placeholder="Select tags" multiple>
                                            @foreach ( $tags as $tag)
                                            <option value="{{ $tag->id }}">{{$tag->tag_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modules" class="col-sm-2 col-form-label">Modules</label>
                                    <div class="col-sm-7">
                                        <select id="choices-modules" name="modules[]" class="form-control" placeholder="Select modules" multiple>
                                            @foreach ( $modules as $module)
                                            <option value="{{ $module->id }}">{{$module->module_Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="startProjectT" class="col-sm-2 col-form-label">Start Time</label>
                                    <div class="col-sm-7">
                                        <input type="date" name="startProjectT" class="form-control datepicker" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deadlineProjectT" class="col-sm-2 col-form-label">Deadline</label>
                                    <div class="col-sm-7">
                                        <input type="date" name="deadlineProjectT" class="form-control datepicker" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="endProjectT" class="col-sm-2 col-form-label">Finished</label>
                                    <div class="col-sm-7">
                                        <input type="date" name="endProjectT" class="form-control datepicker" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <select id="status" name="status" class="form-control">
                                            <option value="">-- Choose Status --</option>
                                            <option value="1">Waiting</option>
                                            <option value="2">On Progress</option>
                                            <option value="3">Finished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="notes" id="notes" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group float-right">
                                            <a href="{{ url('projects') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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