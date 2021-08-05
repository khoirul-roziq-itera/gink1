@extends('layouts/main')


@section('title','Dashboard')
    
@section('container')
     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
          </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card" style="box-shadow: 5px 10px #b6b3b3;">
              <div class="card-header">
                <i class="fas fa-user" style="font-size: 20px; padding:0.5em"></i> <h4> My Profile</h4>
              </div>
              <div class="card-body">   
                  <div class="form-group row">
                    <label for="staticName" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-5">
                      <input type="text" readonly class="form-control-plaintext" id="staticName" value="Admin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticName" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-5">
                      <input type="text" readonly class="form-control-plaintext" id="staticName" value="Admin@gmail.com">
                    </div>
                </div>
              </div>
          </div>
        </div>
               
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-user-edit" style="font-size: 20px; margin-right:0.5em"></i> <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control" name="name" autofocus>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password" class="d-block">Password</label>
                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="password_confirmation" class="d-block">Password Confirmation</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Save') }}
                    </button>

                </div>
              </form> 
            </div>
        </div>
      </div>
   </div>
</section>
</div>

                    
@endsection