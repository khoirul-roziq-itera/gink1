@extends('layouts/main')

@section('title','List Tags')

@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">List Tags</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Data Tags</a></div>
        <div class="breadcrumb-item active">List Tags</a></div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Tambah Tags</h4>
              </div>
              <div class="card-body">
                <form >
                    <div class="form-group row">
                        <label for="nameTags" class="col-sm-2 col-form-label">Tags Name</label>
                        <div class="col-sm-5">
                          <input type="nama" class="form-control" id="namaTags" placeholder="Input tags">
                        </div>
                        <div class="col-sm-2 " style="padding-top:4px">
                            <button class="btn btn-success"> <i class="fas fa-plus-circle fa-lg" ></i> Tambah</button>
                        </div>
                        
                      </div>
                  </form>
              </div>
            </div>
            
            <div class="card">
                <div class="section-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Tags</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                                <table id="table-1" class="table table-hover table-bordered border-primary">
                                    <thead class="text-center">
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Tag Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{-- @foreach($funcs as $func => $result)
                                    <tr class="text-center">
                                        <td>{{ $func + 1 }}</td>
                                        <td>{{ $result->app_name }}</td>
                                        <td>{{ $result->category }}</td>
                                        <td>{{ $result->deadline_modul_t }}</td>
                                        <td>
                                        <div class="badge badge-primary">Selesai</div>
                                        </td>
                                        <td>
                
                                        <form action="{{ route('functions.destroy', $result->id ) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ url('functions', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to archive this data?');"><i class="fas fa-archive"></i></a>
                                            </div>
                                        </form>
                
                                        </td>
                                    </tr>
                                    @endforeach --}}
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
    </div>
  </section>
</div>

@endsection
