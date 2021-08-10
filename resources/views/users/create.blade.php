@extends('layouts/main')

@section('title','Create Admin')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Create User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Manage User</a></div>
                <div class="breadcrumb-item">Create User</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data</h4>
                        </div>
                        <form method="POST" action="{{ route('functions.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="funcTitle" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcTitle" name="funcTitle" class="form-control" placeholder="Masukkan nama lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" placeholder="Masukkan password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password_confirmation" class="col-sm-2 col-form-label">Password Confirmation</label>
                                    <div class="col-sm-7">
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Masukkan password">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="funcGroup" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-7">
                                        <select id="funcGroup" name="funcGroup" class="form-control">
                                            <option value="">-- Choose Level --</option>
                                            <option value="">Admin</option>
                                            <option value="">Creator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcName" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcName" name="funcName" class="form-control" placeholder="Masukkan email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="funcName" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control" id="customFile">         
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("button[name=btnFunction]").click(function() {
            if ($(this).val() == "Front-End") {
                $("#FEDuration").removeAttr("disabled");
                $("#FECost").removeAttr("disabled");
                $("#FEPrice").removeAttr("disabled");
            } else {
                $("#FEDuration").attr("disabled", "disabled");
                $("#FECost").attr("disabled", "disabled");
                $("#FEPrice").attr("disabled", "disabled");
            }
        });
        $("button[name=btnFunction]").click(function() {
            if ($(this).val() == "Back-End") {
                $("#BEDuration").removeAttr("disabled");
                $("#BECost").removeAttr("disabled");
                $("#BEPrice").removeAttr("disabled");
            } else {
                $("#BEDuration").attr("disabled", "disabled");
                $("#BECost").attr("disabled", "disabled");
                $("#BEPrice").attr("disabled", "disabled");
            }
        });
        $("button[name=btnFunction]").click(function() {
            if ($(this).val() == "Full-Stack") {
                $("#FSDuration").removeAttr("disabled");
                $("#FSCost").removeAttr("disabled");
                $("#FSPrice").removeAttr("disabled");
            } else {
                $("#FSDuration").attr("disabled", "disabled");
                $("#FSCost").attr("disabled", "disabled");
                $("#FSPrice").attr("disabled", "disabled");
            }
        });

    });

</script>
@endsection