@extends('layouts/main')


@section('title','Manage users')

@section('container')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Manage Users</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Manage Users</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Users</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-6 offset-6">
                                    <div style="padding:2.5em">
                                        <a href="{{ url('users/create') }}" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Create User</a>
                                    </div>
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
                                                        <a href="{{ url('users', $result->id) }}" class="btn btn-primary" style="margin: 2px"><i class="fas fa-eye"></i></a>
                                                        <button type="submit" class="btn btn-danger" style="margin: 2px" onclick="return confirm('Do you want to delete this data?');"><i class="fas fa-trash-alt"></i></a>
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