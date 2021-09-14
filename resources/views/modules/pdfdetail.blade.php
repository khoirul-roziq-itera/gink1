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
                                                    {{ $module->module_name }}<br>
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
                                                    <span class="badge badge-danger">Waiting</span>
                                                    @elseif( $module->module_Status == 2 )
                                                    <span class="badge badge-success">On Progress</span>
                                                    @else
                                                    <span class="badge badge-primary">Finished</span>
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

                                {{-- <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="section-lead">All items here for calculation in modules</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-md">
                                                <tr>
                                                    <th data-width="40">#</th>
                                                    <th>Role</th>
                                                    <th class="text-center">Duration</th>
                                                    <th class="text-center">Cost</th>
                                                    <th class="text-right">Price</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Front-End</td>
                                                    <td class="text-center">{{ $func->function_FE_Duration }} Day</td>
                                                    <td class="text-center">Rp. {{ $func->function_FE_Cost }}</td>
                                                    <td class="text-right">Rp. {{ $func->function_FE_Price }}</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Back-End</td>
                                                    <td class="text-center">{{ $func->function_BE_Duration }} Day</td>
                                                    <td class="text-center">Rp. {{ $func->function_BE_Cost }}</td>
                                                    <td class="text-right">Rp. {{ $func->function_BE_Price }}</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Full-Stack</td>
                                                    <td class="text-center">{{ $func->function_FS_Duration }} Day</td>
                                                    <td class="text-center">Rp. {{ $func->function_FS_Cost }}</td>
                                                    <td class="text-right">Rp. {{ $func->function_FS_Price }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-8">
                                                <div class="d-flex">
                                                    <div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
                                                    <div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
                                                    <div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
                                                    <div class="bg-paypal" data-width="61" data-height="38"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <div class="invoice-detail-item">
                                                    <div class="invoice-detail-name">Total Duration</div>
                                                    <div class="invoice-detail-value">{{ $func->function_FE_Duration + $func->function_BE_Duration +  $func->function_FS_Duration }} day </div>
                                                </div>
                                                <hr class="mt-2 mb-2">
                                                <div class="invoice-detail-item">
                                                    <div class="invoice-detail-name">Total Cost</div>
                                                    <div class="invoice-detail-value">Rp. {{ $func->function_FE_Cost + $func->function_BE_Cost + $func->function_FS_Cost }}.00</div>
                                                </div>
                                                <div class="invoice-detail-item">
                                                    <div class="invoice-detail-name">Total Price</div>
                                                    <div class="invoice-detail-value invoice-detail-value-lg">Rp. {{ $func->function_FE_Price + $func->function_BE_Price + $func->function_FS_Price}}.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-9">
                                        <p>Calculation</p>
                                      <div class="table-responsive">
                                        <table class="table table-bordered">
                                          <thead class="text-center">
                                            <tr>
                                              <th>Role</th>
                                              <th>Cost</th>
                                              <th>Price</th>
                                              <th>Profit</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-center">
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Front-End</td>
                                              {{-- cost --}}
                                              <td>Rp. {{ $app->app_FE_Cost }}</td>
                                              {{-- price --}}
                                              <td>Rp. {{ $app->app_FE_Price }}</td>
                                              {{-- profit --}}
                                              <td>Rp. {{ $app->app_FE_Price - $app->app_FE_Cost }}</td>
                                            </tr>
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Back-End</td>
                                              {{-- cost --}}
                                              <td>Rp. {{ $app->app_BE_Cost }}</td>
                                              {{-- price --}}
                                              <td>Rp. {{ $app->app_BE_Price }}</td>
                                              {{-- total --}}
                                              <td>Rp. {{ $app->app_BE_Price - $app->app_BE_Cost }}</td>
                                            </tr>
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Full-Stack</td>
                                              {{-- cost --}}
                                              <td>Rp. {{ $app->app_FS_Cost }}</td>
                                              {{-- price --}}
                                              <td>Rp. {{ $app->app_FS_Price }}</td>
                                              {{-- total --}}
                                              <td>Rp. {{ $app->app_FS_Price - $app->app_FS_Cost }}</td>
                                            </tr>
                                            <tr>
                                              <td style="background: rgb(185, 235, 185)">Total</td>
                                              {{-- cost --}}
                                              <td style="background: rgb(185, 235, 185)">Rp. {{ $app->app_Cost_Total }}</td>
                                              {{-- price --}}
                                              <td style="background: rgb(185, 235, 185)">Rp. {{ $app->app_Price_Total }}</td>
                                              {{-- total --}}
                                              <td style="background: rgb(185, 235, 185)">Rp. {{ $app->app_Price_Total - $app->app_Cost_Total }}</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <hr>
                            <!-- <div class="text-md-right">
                                <div class="float-lg-left mb-lg-0 mb-3">
                                    <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                                    <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                                </div>
                                <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                            </div> -->
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://www.ginktech.net/">GinkTech</a>
                </div>
                <!-- <div class="footer-right">
                    2.3.0
                </div> -->
            </footer>
        </div>
    </div>
</body>

</html>