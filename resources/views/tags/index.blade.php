@extends('layouts/main')

@section('title','List Tags')

@section('container')


<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">List Tags</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('tags')}}">Data Tags</a></div>
        <div class="breadcrumb-item active">List</a></div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
               <h4>Add Tag</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('tags.store') }}" method="POST" id="tag">
                @csrf
                <div class="form-group row">
                  <label for="tagName" class="col-sm-2 col-form-label">Tag Name</label>
                  <div class="col-sm-5">
                    <input type="nama" class="form-control" id="tagName" name="tagName" placeholder="Input tag"/>
                  </div>
                  <div class="col-sm-2 " style="padding-top:4px">
                    <button type="submit" class="btn btn-success" onclick="return swal('Hello world!');"> <i class="fas fa-plus-circle fa-lg"></i> Add</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          @if(session('sukses'))
            <div class="alaret alert-success" role="alert">
              {{session('sukses')}}
            </div>     
          @endif  
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Tags</h4>
                </div>
                <div class="card-body p-0">
                  <div class="col-12">
                    <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                      <table id="table-1" class="table table-hover">
                        <thead class="text-center">
                          <tr>
                            <th>Nomor</th>
                            <th>Tag Name</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tags as $tag => $result)
                          <tr class="text-center">
                            <td>{{ $tag + 1 }}</td>
                            <td>{{ $result->tag_name }}</td>
                            <td>
  
                              <form action="{{ route('tags.destroy', $result->id ) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ url('tags', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i> Detail</a>
                                  <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to archive this data?');"><i class="fas fa-archive"></i> Archive</a>
                                </div>
                              </form>
  
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
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

