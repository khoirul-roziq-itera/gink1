<!DOCTYPE html>
<html lang="en">

<head>
    <title>Invoice &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <!-- <h1>Detail Function</h1> -->
                    </div>

                    <div class="section-body">
                        <div class="invoice">
                            <div class="invoice-print">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="invoice-title">
                                            <h2>Detail Modul</h2>
                                            <div class="invoice-number">ID Module #{{ $module->id}}</div>
                                        </div>
                                        <hr>
                                        <div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Module Name:</strong><br>
                                                    {{ $module->module_Name }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Module Creator:</strong><br>
                                                    {{ $module->user->name }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Module Notes:</strong><br>
                                                    {{ $module->module_Notes }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Status:</strong><br>
                                                    @if( $module->module_Status == 1)
                                                    <span class="">Waiting</span>
                                                    @elseif( $module->module_Status == 2 )
                                                    <span class="">On Progress</span>
                                                    @else
                                                    <span class="">Finished</span>
                                                    @endif<br>
                                                </address>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>List Functions</p>
                                        <div class="table">
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>#</th>
                                                    <th>Functions Name</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach( $module->funcs as $func => $result )
                                                  <tr>
                                                    <td>{{ $func + 1}}</td>
                                                    <td>{{ $result->function_Name }}</td>
                                                  </tr>
                                                  @endforeach
                                                </tbody>
                                            </table> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-9">
                                      <div class="table-responsive">
                                        <table class="table table-bordered">
                                          <thead class="text-center">
                                            <tr>
                                              <th>Role</th>
                                              <th>Duration</th>
                                              <th>Cost</th>
                                              <th>Price</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-center">
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Front-End</td>
                                              {{-- Duration --}}
                                              <td>{{ $module->module_FE_Duration }} day</td>
                                              {{-- cost --}}
                                              <td>Rp. {{ $module->module_FE_Cost  }}</td>
                                              {{-- price --}}
                                              <td>Rp. {{ $module->module_FE_Price }}</td>
                                            </tr>
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Back-End</td>
                                              {{-- duration --}}
                                              <td>{{ $module->module_BE_Duration }} day</td>
                                              {{-- cost --}}
                                              <td>Rp. {{ $module->module_BE_Cost }}</td>
                                              {{-- price --}}
                                              <td>Rp. {{ $module->module_BE_Price }}</td>
                                            </tr>
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Full-Stack</td>
                                              {{-- duration --}}
                                              <td>{{ $module->module_FS_Duration }} day</td>
                                              {{-- cost --}}
                                              <td>Rp. {{ $module->module_FS_Cost }}</td>
                                              {{-- price --}}
                                              <td>Rp. {{ $module->module_FS_Price }}</td>
                                            </tr>
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Total</td>
                                              {{-- duration --}}
                                              <td style="background: rgb(185, 235, 185)">{{ $module->module_FE_Duration  + $module->module_BE_Duration  +  $module->module_FS_Duration  }} day </td>
                                              {{-- cost --}}
                                              <td style="background: rgb(185, 235, 185)">Rp. {{ $module->module_FE_Cost + $module->module_BE_Cost + $module->module_FS_Cost }}.00</td>
                                              {{-- price --}}
                                              <td style="background: rgb(185, 235, 185)">Rp. {{ $module->module_FE_Price + $module->module_BE_Price + $module->module_FS_Price }}.00</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://www.ginktech.net/">GinkTech</a>
                </div>

            </footer>
        </div>
    </div>
</body>

</html>