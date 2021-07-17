<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css')}}"/>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                    
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          
                            <a href="testprofile" class="dropdown-item has-icon">
                                <i class="far fa-user" ></i> Profile
                            </a>
                           
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand" style="padding: 10px">
                            <img src="{{ asset('img/ginktech.jpg') }}" alt="logo" width="100" class="img-thumbnail">
                            <p style="margin-top: 3px; font-size:14pt; font-weight:bold">CTO</p>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">POCC</a>
                    </div>
                    <div class="menu-sidebar" style="margin-top: 2em">
                        <ul class="sidebar-menu">
                            <li>
                                <a href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Proyek</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="index-0.html">Create Proyek</a></li>
                                    <li><a class="nav-link" href="index.html">List Proyek</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Modul</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Fungsi</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Laporan</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>History</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>    
                    
                </aside>
            </div>

            <!-- Main Content -->
            @yield('container')

            {{-- footer --}}
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://ginktech.net/">GinkTech</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    

    <!-- Page Specific JS File -->
    <script src="{{asset('js/page/modules-sweetalert.js')}}"></script>

    {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script> --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{asset('js/page/modules-datatables.js')}}"></script>

    
    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
     
</body>

</html>