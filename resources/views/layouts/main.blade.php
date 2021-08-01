<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/prism/prism.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css')}}" />


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-KXkS7cFeWpYwcoXxyfOumLyRGXMp7BTMTjwrgjMg0+hls4thG2JGzRgQtRfnAuKTn2KWTDZX4UdPg+xTs8k80Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars" style="font-size:30px"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset ('img/avatar-1.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title text-center">My Profile</div>
                            <a href="testprofile" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                @csrf

                                <button type="submit" class="dropdown-item has-icon text-danger" style="padding-left: 0;">
                                    <span class="dropdown-item has-icon text-danger">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </span>
                                </button>

                            </form>
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
                        <a style="font-weight:bold; font-size:19px">GT</a>
                    </div>
                    <div class="menu-sidebar" style="margin-top: 3.5em">
                        <ul class="sidebar-menu">
                            <li>
                                <a href="{{ url ('dashboard') }}"><i class="fas fa-tachometer-alt fa-lg"></i><span style="font-weight:bold; font-size:19px">Dashboard</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-list"></i><span style="font-weight:bold; font-size:19px">Projects</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ url('projects/create') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-plus-circle"></i>Create</a></li>
                                    <li><a class="nav-link" href="{{ url ('projects') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-list-ul"></i> List</a></li>
                                    <li><a class="nav-link" href="{{ url ('projects/archive')}}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-atlas"></i><span style="font-weight:bold; font-size:19px">Modules</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ url('modules/create') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-plus-circle"></i>Create</a></li>
                                    <li><a class="nav-link" href="{{ url('modules') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-list-ul"></i>List</a></li>
                                    <li><a class="nav-link" href="{{ url('modules/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-laptop-code"></i><span style="font-weight:bold; font-size:19px">Functions</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ url('functions/create') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-plus-circle"></i>Create</a></li>
                                    <li><a class="nav-link" href="{{ url('functions') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-list-ul"></i>List</a></li>
                                    <li><a class="nav-link" href="{{ url('functions/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-tags"></i><span style="font-weight:bold; font-size:19px">Tags</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ url('tags') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-list-ul"></i>List</a></li>
                                    <li><a class="nav-link" href="{{ url('tags/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i><span style="font-weight:bold; font-size:19px">Categories</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ url('categories') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-list-ul"></i>List</a></li>
                                    <li><a class="nav-link" href="{{ url('categories/archive') }}" style="font-weight:bold; font-size:15px"><i class="fas fa-archive"></i>Archive</a></li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-signature"></i><span style="font-weight:bold; font-size:19px">Laporan</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="addCateg" style="font-weight:bold; font-size:15px;">Project</a></li>
                                    <li><a class="nav-link" href="listCateg" style="font-weight:bold; font-size:15px">Function</a></li>
                                    <li><a class="nav-link" href="listCateg" style="font-weight:bold; font-size:15px">Modul</a></li>
                                </ul>
                            </li> -->
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
    <!-- sweetalert -->
    <script src="{{asset('js/page/modules-sweetalert.js')}}"></script>
    {{-- datatables  --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    {{-- calender --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- modul sweetalert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="{{asset ('js/page/modules-datatables.js')}}"></script>
    <script src="{{asset ('js/page/modules-calendar.js')}}"></script>

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#pilih-modul', {
                removeItemButton: true,
                maxItemCount: 10,
                searchResultLimit: 10,
                renderChoiceLimit: 10
            });
        });
    </script>     --}}
    <script src="https://demo.getstisla.com/assets/modules/prism/prism.js"></script>
    <script src="{{ asset ('js/page/bootstrap-modal.js')}}"></script>
        <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>