<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="SIASN, Kaum Rebahan - eKantor Web ID">
        <meta name="author" content="Raden Parhanudin">
        <meta name="keywords" content="SIASN, Kaum, Rebahan, eKantor, Web, Id">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'SIASN - Kaum Rebahan') }}</title>
        <link href="{{ asset('assets') }}/css/app.css" rel="stylesheet">
        <link href="{{ asset('assets') }}/css/custome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        @stack('plugins-css')
        @stack('style')
    </head>
    <body>
        <div class="wrapper">
            <nav id="sidebar" class="sidebar js-sidebar {{ session('collapsed') ? "collapsed" : "" }}">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="{{ route('dashboard.index') }}">
                    <span class="align-middle">{{ config('app.name') }}</span>
                    </a>
                    <ul class="sidebar-nav">
                        @php
                            $modules = ['dashboard', 'formasimenpan', 'profileasn', 'datareferensi', 'administrator'];
                        @endphp
                        @foreach ($modules as $module)
                        @include("$module::sidebar")
                        @endforeach
                    </ul>
                </div>
            </nav>
            <div class="main">
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                    </a>
                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <i class="align-middle" data-feather="settings"></i>
                                </a>
                                <a class="user-info nav-link dropdown-toggle d-none d-sm-inline-block" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <img id="fotoProfile" src="{{ (Auth::user()->foto_profile) ? asset("storage/".Auth::user()->foto_profile) : asset('assets/img/avatars/user-hacker.png') }}" class="avatar img-fluid rounded me-1" alt="{{ Auth::user()->name }}" /> <span class="text-dark">{{ Auth::user()->name }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out align-middle me-2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>{{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('dashboard.collapsed') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sidebar align-middle me-2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                                        Sidebar Collapsed : {!! session('collapsed') ? "<span class='text-primary'>True</span>" : "<span class='text-danger'>False</span>" !!}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="content">
                    @yield('content')
                </main>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-start">
                                <p class="mb-0">
                                    <a class="text-muted" href="{{ url('/') }}"><strong>{{ config('app.name') }}</strong></a> - <a class="text-muted" href="https://wa.me/6282342788059" target="_blank"><strong>Raden Parhanudin</strong></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="{{ asset('assets') }}/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @stack('plugins-js')
        @stack('script')
    </body>
</html>