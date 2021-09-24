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
                                            <h2>Detail Project</h2>
                                            <div class="invoice-number">ID Project #{{ $app->id}}</div>
                                        </div>
                                        <hr>
                                        <div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Application Name:</strong><br>
                                                    {{ $app->app_name }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Category:</strong><br>
                                                    {{ $app->category->category_name }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Start Time:</strong><br>
                                                    {{ $app->start_project_t }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Estimation Finish:</strong><br>
                                                    {{ $app->deadline_project_t }}<br>
                                                </address>
                                            </div>
                                            <div class="col-md-6">
                                                <address>
                                                    <strong>Finished:</strong><br>
                                                    {{ $app->end_project_t }}<br>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>List Modules</p>
                                        <div class="table">
                                            <table class="table table-bordered table-md">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Module Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $app->modules as $module => $result )
                                                    <tr>
                                                      <td>{{ $module + 1}}</td>
                                                      <td>{{ $result->module_Name }}</td>
                                                    </tr>
                                                    @endforeach
                                                  </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-9">
                                        <p>List Tags</p>
                                      <div class="table-responsive">
                                        <table class="table table-bordered">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Tags Name</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach( $app->tags as $tag => $result )
                                            <tr>
                                              <td>{{ $tag + 1}}</td>
                                              <td>{{ $result->tag_name }}</td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>

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