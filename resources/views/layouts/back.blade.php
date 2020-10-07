<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name', 'PC Builder') }}</title>
        <link href="/back/css/styles.css" rel="stylesheet" />
        <script src="/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">
            .bg-primary {
                background-color: #ffffff !important;
            }
            .pl5 {
                padding-left: 5px;
            }
            .require {
                color: red;
            }
            .rightborder {
                border-right: 1px solid #dee2e6;
            }
        </style>
        @yield('css')
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                        <a class="navbar-brand" href="/home">{{ env('APP_NAME') }}</a>
                        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                        <!-- Navbar Search-->
                        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <!-- Navbar-->
                        <ul class="navbar-nav ml-auto ml-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/profile">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div id="layoutSidenav">
                        <div id="layoutSidenav_nav">
                            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                <div class="sb-sidenav-menu">
                                    <div class="nav">
                                        <div class="sb-sidenav-menu-heading">Core</div>
                                        <a class="nav-link" href="{{ route('home') }}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Dashboard
                                        </a>
                                        <div class="sb-sidenav-menu-heading">Registration</div>
                                        <a class="nav-link" href="{{ route('create-completed-pc') }}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                                            Completed PC
                                        </a>
                                        <a class="nav-link" href="{{ route('create-notebook') }}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                                            Notebook
                                        </a>
                                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#parfofpc" aria-expanded="false" aria-controls="parfofpc">
                                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                            Parf of PC
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="parfofpc" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="{{ route('create-pfp-cpu') }}">CPU</a>
                                                <a class="nav-link" href="/home">CPU Cooler</a>
                                                <a class="nav-link" href="/home">Memory</a>
                                                <a class="nav-link" href="/home">Video Card</a>
                                                <a class="nav-link" href="/home">Storage</a>
                                                <a class="nav-link" href="/home">Case</a>
                                                <a class="nav-link" href="/home">Monitor</a>
                                                <a class="nav-link" href="/home">Motherboard</a>
                                                <a class="nav-link" href="/home">Power Supply</a>
                                                <a class="nav-link" href="/home">Optical Drive</a>
                                                <a class="nav-link" href="/home">External Storage</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="sb-sidenav-footer">
                                    <div class="small">Logged in as:</div> {{ Auth::user()->name }}
                                </div>
                            </nav>
                        </div>
                        <div id="layoutSidenav_content">
                            <main>
                                @yield('content')
                            </main>
                            <!-- <footer class="py-4 bg-light mt-auto">
                                <div class="container-fluid">
                                    <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; {{ date('Y') }}</div>
                                    </div>
                                </div>
                            </footer> -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/back/js/scripts.js"></script>
        @yield('js')
    </body>
</html>