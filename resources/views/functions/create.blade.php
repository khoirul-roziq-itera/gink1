@extends('layouts/main')

@section('title','Create Function')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="font-size: 25px">Create Function</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Data Function</a></div>
                <div class="breadcrumb-item">Create Function</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>INPUT DATA</h4>
                        </div>
                        <form method="POST" action="{{ route('functions.store') }}" id="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="funcTitle" class="col-sm-2 col-form-label">Function Title</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcTitle" name="funcTitle" class="form-control" placeholder="Input Function Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcName" class="col-sm-2 col-form-label">Function Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="funcName" name="funcName" class="form-control" placeholder="Input Function Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcGroup" class="col-sm-2 col-form-label">function Group</label>
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
                                    <label for="" class="col-sm-2 col-form-label">Pilih Form Input</label>
                                    <div class="col-sm-7">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" >
                                            <div class="btn-group me-2" role="group" aria-label="First group" style="padding-right:3px">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFE">
                                                    Front-End
                                                </button>                                          
                                            </div>
                                            <div class="btn-group me-2" role="group" aria-label="Second group" style="padding-right:3px">
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalBE">
                                                    Back-End
                                                </button>
                                            </div>
                                            <div class="btn-group me-2" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalFS">
                                                      Full-Stack
                                                </button>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FEDuration" class="col-sm-2 col-form-label">Front-End Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FEDuration" id="FEDuration" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FECost" class="col-sm-2 col-form-label">Front-End Cost</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FECost" id="FECost" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FEPrice" class="col-sm-2 col-form-label">Front-End Price</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FEPrice" id="FEPrice" class="form-control" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="BEDuration" class="col-sm-2 col-form-label">Back-End Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="BEDuration" id="BEDuration" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BECost" class="col-sm-2 col-form-label">Back-End Cost</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="BECost" id="BECost" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="BEPrice" class="col-sm-2 col-form-label">Back-End Price</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="BEPrice" id="BEPrice" class="form-control" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="FSDuration" class="col-sm-2 col-form-label">Full-Stack Duration</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FSDuration" id="FSDuration" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSCost" class="col-sm-2 col-form-label">Full-Stack Cost</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FSCost" id="FSCost" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="FSPrice" class="col-sm-2 col-form-label">Full-Stack Price</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="FSPrice" id="FSPrice" class="form-control" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcNotes" class="col-sm-2 col-form-label">Function Notes</label>
                                    <div class="col-sm-7">
                                        <textarea name="funcNotes" id="funcNotes" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="funcStatus" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <select id="funcStatus" name="funcStatus" class="form-control">
                                            <option value="">-- Choose Status --</option>
                                            <option value="1">Menunggu</option>
                                            <option value="2">Sedang Dikerjakan</option>
                                            <option value="3">Selesai</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-group float-right">
                                            <a href="{{ url('functions') }}"><button type="button" class="btn btn-danger btn-lg">Cancel</button></a>
                                            <button type="submit" onclick="sweet()" class="btn btn-primary btn-lg" id="swal-2">Submit</button>
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


<!-- Modal FE -->
<div class="modal fade" id="modalFE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Front-End Function</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">        
        <form>
            <div class="form-group">
              <label>Front-End Duration</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-calendar-alt"></i>
                  </div>
                </div>
                <input type="text" name="FEDuration" id="FEDuration" class="form-control" placeholder="Masukkan jumlah hari" required />
              </div>
            </div>
            <div class="form-group">
              <label>Front-End Cost</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-money-bill-wave"></i>
                  </div>
                </div>
                <input type="text" name="FEPrice" id="FEPrice" class="form-control" placeholder="Masukkan biaya Rp. " required />
              </div>
            </div>
            <div class="form-group">
                <label>Front-End Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-money-bill-wave"></i>
                    </div>
                  </div>
                  <input type="text" name="FEPrice" id="FEPrice" class="form-control" placeholder="Masukkan harga Rp. "  required />
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<!-- Modal BE -->
<div class="modal fade" id="modalBE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Back-End Function</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">        
        <form>
            <div class="form-group">
              <label>Back-End Duration</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-calendar-alt"></i>
                  </div>
                </div>
                <input type="text" name="BEDuration" id="BEDuration" class="form-control" placeholder="Masukkan jumlah hari" required />
              </div>
            </div>
            <div class="form-group">
              <label>Back-End Cost</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-money-bill-wave"></i>
                  </div>
                </div>
                <input type="text" name="FSCost" id="FSCost" class="form-control"  placeholder="Masukkan harga Rp. " required />
              </div>
            </div>
            <div class="form-group">
                <label>Back-End Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-money-bill-wave"></i>
                    </div>
                  </div>
                  <input type="text" name="FSPrice" id="FSPrice" class="form-control"   placeholder="Masukkan harga Rp. " required />
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<!-- Modal FS -->
<div class="modal fade" id="modalFS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Full-Stack Function</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">        
        <form>
            <div class="form-group">
              <label>Full-Stack Duration</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-calendar-alt"></i>
                  </div>
                </div>
                <input type="text" name="FSDuration" id="FSDuration" class="form-control" placeholder="Masukkan jumlah hari" required />
              </div>
            </div>
            <div class="form-group">
              <label>Full-Stack Cost</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-money-bill-wave"></i>
                  </div>
                </div>
                <input type="text" name="FSPrice" id="FSPrice" class="form-control" placeholder="Masukkan biaya Rp. " required />
              </div>
            </div>
            <div class="form-group">
                <label>Full-Stack Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-money-bill-wave"></i>
                    </div>
                  </div>
                  <input type="text" name="FSPrice" id="FSPrice" class="form-control" placeholder="Masukkan harga Rp. "  required />
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>