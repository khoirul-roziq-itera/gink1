<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap/css/bootstrap.min.css"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset ('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css')}}" />


    {{-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-KXkS7cFeWpYwcoXxyfOumLyRGXMp7BTMTjwrgjMg0+hls4thG2JGzRgQtRfnAuKTn2KWTDZX4UdPg+xTs8k80Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars" style="font-size:30px"></i></a></li>

                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset(Auth::user()->profile_photo_url) }}"  class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }} </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title text-center">My Profile</div>
                            <a href="{{url ('detailprofile')}}" class="dropdown-item has-icon">
                                <i class="fas fa-user lg " style="color:red"></i> Profile Akun
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <form method="POST" action="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt" style="margin: 0.5em; "></i> Logout</button>
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand" style="padding: 10px">
                        <img src="{{ asset('img/ginktech.jpg') }}" alt="logo" width="80" class="rounded-3">
                        <p style="margin-top: 3px; font-size:14pt; font-weight:bold">GinkTech</p>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm" style="margin-bottom: 7em">
                        <a style="font-weight:bold; font-size:25px ; color:#fd5959">GT</a>
                    </div>

                    <div class="menu-sidebar" style="margin-top: 3.5em">
                        <ul class="sidebar-menu">

                            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                                <a href="{{ url ('dashboard') }}"><i class="fas fa-tachometer-alt fa-lg"></i><span style="font-weight:bold; font-size:19px">Dashboard</span></a>
                            </li>
                            <li class="nav-item dropdown {{ Request::is('functions/create') || Request::is('functions') || Request::is('functions/archive') ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-laptop-code"></i><span style="font-weight:bold; font-size:19px">Functions</span></a>
                                <ul class="dropdown-menu">
                                    <li class="{{ Request::is('functions/create') ? 'active' : '' }}"><a href="{{ url('functions/create') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-plus-circle"></i>Create</a></li>
                                    <li class="{{ Request::is('functions') ? 'active' : '' }}"><a href="{{ url('functions') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-database"></i>Data</a></li>
                                    <li class="{{ Request::is('functions/archive') ? 'active' : '' }}"><a href="{{ url('functions/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown {{ Request::is('modules/create') || Request::is('modules') || Request::is('modules/archive') ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-atlas"></i><span style="font-weight:bold; font-size:19px">Modules</span></a>
                                <ul class="dropdown-menu">
                                    <li class="{{ Request::is('modules/create') ? 'active' : '' }}"><a href="{{ url('modules/create') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-plus-circle"></i>Create</a></li>
                                    <li class="{{ Request::is('modules') ? 'active' : '' }}"><a href="{{ url('modules') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-database"></i>Data</a></li>
                                    <li class="{{ Request::is('modules/archive') ? 'active' : '' }}"><a href="{{ url('modules/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown {{ Request::is('tags') || Request::is('tags/archive') || Request::is('tags/detail') ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-tags"></i><span style="font-weight:bold; font-size:19px">Tags</span></a>
                                <ul class="dropdown-menu">
                                    <li class=" {{  Request::is('tags') ? 'active' : '' }}"><a class="nav-link" href="{{ url('tags') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-database"></i>Data</a></li>
                                    <li class=" {{  Request::is('tags/archive') ? 'active' : '' }}"><a class="nav-link" href="{{ url('tags/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown {{ Request::is('categories') || Request::is('categories/archive') ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-stream"></i><span style="font-weight:bold; font-size:19px">Categories</span></a>
                                <ul class="dropdown-menu">
                                    <li class=" {{ Request::is('categories') ? 'active' : '' }}"><a class="nav-link" href="{{ url('categories') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-database"></i>Data</a></li>
                                    <li class=" {{ Request::is('categories/archive') ? 'active' : '' }}"><a class="nav-link" href="{{ url('categories/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown {{ Request::is('projects/create') || Request::is('projects') || Request::is('projects/archive') || Request::is('projects/1') ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-list"></i><span style="font-weight:bold; font-size:19px">Projects</span></a>
                                <ul class="dropdown-menu">
                                    <li class="{{ Request::is('projects/create') ? 'active' : '' }}"><a href="{{ url('projects/create') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-plus-circle"></i>Create</a></li>
                                    <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="{{ url ('projects') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-database"></i>Data</a></li>
                                    <li class="{{ Request::is('projects/archive') ? 'active' : '' }}"><a href="{{ url ('projects/archive')}}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            @if(auth()->user()->level == "admin")
                            <li class="{{ Request::is('user') ? 'active' : '' }}">
                                <a href="{{ url('/users') }}"><i class="fas fa-users fa-lg"></i><span style="font-weight:bold; font-size:19px">Manage Users</span></a>
                            </li>
                            @endif
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
    <script src="{{ asset('js/stisla.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    {{-- datatables  --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    {{-- calender --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>


    <script src="{{asset ('js/page/modules-datatables.js')}}"></script>
    <script src="{{asset ('js/page/modules-calendar.js')}}"></script>


    <script src="https://demo.getstisla.com/assets/modules/prism/prism.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    {{-- Script form multiple select tags--}}
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-tags', {
                removeItemButton: true,
            });
        });
    </script>
    {{-- Script form select categories--}}
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-categories', {
                removeItemButton: true,
            });
        });
    </script>

    {{-- Script form select function--}}
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-functions', {
                removeItemButton: true,
            });
        });
    </script>

    {{-- Script form select modules--}}
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-modules', {
                removeItemButton: true,
            });
        });
    </script>

</body>

</html>