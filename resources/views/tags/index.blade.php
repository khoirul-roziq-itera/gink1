@extends('layouts/main')


@section('container')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Tags</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Tag</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('tags.store') }}" method="POST" id="tag">
                @csrf
                <div class="form-group row">
                  <label for="tagName" class="col-sm-2 col-form-label">Tag Name</label>
                  <div class="col-sm-5">
                    <input type="nama" class="form-control @error('tagName') is-invalid @enderror" value="{{ old('tagName') }}" id="tagName" name="tagName" placeholder="Input tag" />
                    <div class="invalid-feedback">
                      @error('tagName')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-2 " style="padding-top:4px">
                    <button type="submit" class="btn btn-success" id="swal-2"><i class="fas fa-plus-circle fa-lg"></i> ADD DATA</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          @if(session('success'))
          <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
              <button class="close" data-dismiss="alert">
                <span>&times;</span>
              </button>
              {{session('success')}}
            </div>
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
                            <th>Creator</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tags as $tag => $result)
                          <tr class="text-center">
                            <td>{{ $tag + 1 }}</td>
                            <td>{{ $result->tag_name }}</td>
                            <td>{{ $result->user->name }}</td>
                            <td>

                              <form action="{{ url('tags/kill/'.$result->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ url('tags', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i> Detail</a>
                                  <button type="submit" class="btn btn-danger " style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt"></i> Delete</a>
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