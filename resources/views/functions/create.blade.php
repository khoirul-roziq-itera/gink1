@extends('layouts/main')

@section('title','Create Functions')

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
                                        <input type="text" id="funcTitle" name="funcTitle" class="form-control" placeholder="Masukkan judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcName" class="col-sm-2 col-form-label">Function Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcName" name="funcName" class="form-control" placeholder="Masukkan nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcGroup" class="col-sm-2 col-form-label">Function Group</label>
                                    <div class="col-sm-7">
                                        <select id="funcGroup" name="funcGroup" class="form-control">
                                            <option value="">-- Choose Group --</option>
                                            <option value="Create">Create</option>
                                            <option value="Read">Read</option>
                                            <option value="Update">Update</option>
                                            <option value="Delete">Delete</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="FEDuration" class="col-sm-2 col-form-label">Front-End Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FEDuration" id="FEDuration" class="form-control" placeholder="Masukkan jumlah hari" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FECost" class="col-sm-2 col-form-label">Front-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FECost" id="FECost" class="form-control" placeholder="Masukkan biaya" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FEPrice" class="col-sm-2 col-form-label">Front-End Price</label>
                                    <div class="col-sm-7">

                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FEPrice" id="FEPrice" class="form-control" placeholder="Masukkan harga" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="BEDuration" class="col-sm-2 col-form-label">Back-End Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="BEDuration" id="BEDuration" class="form-control" placeholder="Masukkan jumlah hari" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BECost" class="col-sm-2 col-form-label">Back-End Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BECost" id="BECost" class="form-control" placeholder="Masukkan biaya" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BEPrice" class="col-sm-2 col-form-label">Back-End Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="BEPrice" id="BEPrice" class="form-control" placeholder="Masukkan harga" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="FSDuration" class="col-sm-2 col-form-label">Full-Stack Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FSDuration" id="FSDuration" class="form-control" placeholder="Masukkan jumlah hari" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSCost" class="col-sm-2 col-form-label">Full-Stack Cost</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSCost" id="FSCost" class="form-control" placeholder="Masukkan biaya" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSPrice" class="col-sm-2 col-form-label">Full-Stack Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="text" name="FSPrice" id="FSPrice" class="form-control" placeholder="Masukkan harga" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcNotes" class="col-sm-2 col-form-label">Function Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="funcNotes" id="funcNotes" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <select id="funcStatus" name="funcStatus" class="form-control">
                                            <option value="">-- Choose Status --</option>
                                            <option value="1">Waiting</option>
                                            <option value="2">On Progress</option>
                                            <option value="3">Finished</option>
                                        </select>
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