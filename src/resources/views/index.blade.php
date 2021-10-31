@extends('laratour::app')


@section('content')


    {{-- <button id="startTourBtn" class="btn btn-primary">Start Tour</button>
    <h2>Panel Group</h2>
    <p>Try to remove the class and see what happens.</p>
    <div class="panel-group">
      <div class="panel panel-default" id="panel1">
        <div class="panel-heading">Panel Header</div>
        <div class="panel-body">Panel Content</div>
      </div>
      <div class="panel panel-default" id="panel2">
        <div class="panel-heading">Panel Header</div>
        <div class="panel-body">Panel Content</div>
      </div>
      <div class="panel panel-default" id="panel3">
        <div class="panel-heading">Panel Header</div>
        <div class="panel-body">Panel Content</div>
      </div>
    </div> --}}

  <!-- Page wrapper start -->
    <div id="page-wrapper" class="page-wrapper with-navbar with-sidebar with-navbar-fixed-bottom" data-sidebar-type="full-height">

        <!-- Sticky alerts -->
        <div class="sticky-alerts"></div>

        <!-- Navbar start -->
        <nav class="navbar">
            <div class="navbar-content">
                <button id="toggle-sidebar-btn" class="btn btn-action" type="button" onclick="halfmoon.toggleSidebar()">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <a href="#" class="navbar-brand ml-10 ml-sm-20">
                <img src="https://www.gethalfmoon.com/static/site/img/fake-logo.svg" alt="fake-logo">
                <span class="d-none d-sm-flex">Laratour</span>
            </a>
            <div class="navbar-content ml-auto">
                <button class="btn btn-action mr-5" type="button" onclick="halfmoon.toggleDarkMode()">
                    <i class="fa fa-moon-o" aria-hidden="true"></i>
                    <span class="sr-only">Toggle dark mode</span>
                </button>
                <a href="javascript:;" id="startTourBtn" class="btn btn-primary" role="button">Start Tour</a>
            </div>
        </nav>
        <!-- Navbar end -->

        <!-- Sidebar overlay -->
        <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>

        <!-- Sidebar start -->
        <div class="sidebar">
            <div class="sidebar-menu">
                <h5 class="sidebar-title">Getting started</h5>
                <div class="sidebar-divider"></div>

                <a href="#"  id="panel1" class="sidebar-link sidebar-link-with-icon active">
                    <span class="sidebar-icon">
                        <i class="fa fa-code" aria-hidden="true"></i>
                    </span>
                    Installation
                </a>


                <a href="#" id="panel2" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa fa-terminal" aria-hidden="true"></i>
                    </span>
                    CLI commands
                </a>


                <br />
                <h5 class="sidebar-title">Components</h5>
                <div class="sidebar-divider"></div>

                <a href="#" id="panel3" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                    </span>
                    File explorer
                </a>

            </div>
        </div>
        <!-- Sidebar end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row row-eq-spacing-lg">
                    <div class="col-lg-9">
                        <div class="content">
                            <h1 class="content-title">
                                Page title
                            </h1>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                        </div>
                        <div class="card" id="panel4">
                            <h2 class="card-title">
                                Card title
                            </h2>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                            
                                <div class="fake-content w-100"></div>
                            
                        </div>
                        <div class="content">
                            <div class="fake-content"></div>
                            <div class="fake-content w-150"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="content">
                            <h2 class="content-title font-size-20">
                                On this page
                            </h2>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content wrapper end -->

        <!-- Navbar fixed bottom start -->
        <nav class="navbar navbar-fixed-bottom">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-question-circle-o mr-5" aria-hidden="true"></i>
                        Help
                    </a>
                </li>
            </ul>
            <span class="navbar-text">
                &copy; Copyright {{ Carbon\Carbon::now()->year }}, Mohammad Prince
            </span>
        </nav>
        <!-- Navbar fixed bottom end -->

    </div>
    <!-- Page wrapper end -->

    
@endsection

  

