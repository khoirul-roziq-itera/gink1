@extends('layouts/main')

@section('container')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Manage Users</h1>
        </div>

        <div class="section-body">
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
                            <h4>Manage Users</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">

                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="padding-top: 2em; padding-left:4em">
                                    <a href="{{ url('users/create')}}" type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> ADD USER</a>
                                </div>

                            </div>

                            <div class="table-responsive" style="padding-left: 2em; padding-right: 2em">
                                <table id="table-1" class="table table-hover table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Long Name</th>
                                            <th>Level</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($users as $user => $result)
                                        <tr>
                                            <td>{{ $user + 1 }}</td>
                                            <td>{{ $result->name }}</td>
                                            <td>{{ $result->level }}</td>
                                            <td>{{ $result->email }}</td>
                                            <td>
                                                <form action="{{ route('users.destroy', $result->id ) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{ url('users', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i> Detail</a>
                                                        <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt"></i> Delete</a>
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