@extends('layouts/main')


@section('title','Archive Tags')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 style="font-size: 25px">Archive Tags</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('tags')}}">Tags</a></div>
        <div class="breadcrumb-item">Archive</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Archive</h4>
           </div>
            <div class="card-body p-0">
              <div class="table-responsive" style="padding: 2em">
                <table id="table-1" class="table table-hover">
                  <thead class="text-center">
                    <tr>
                      <th>Nomor</th>
                      <th>Tags Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $tag => $result)
                    <tr class="text-center">
                      <td>{{ $tag + 1 }}</td>
                      <td>{{ $result->tag_name }}</td>
                      <td>
                        <form action="{{ url('tags/kill/'.$result->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('tags/restore/'.$result->id) }}" class="btn btn-success" style="margin: 2px"><i class="fas fa-history"></i> Restore</a>
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
  </section>
</div>

@endsection

