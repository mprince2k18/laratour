@extends('laratour::app')


@section('content')

  <!-- Page wrapper start -->
    <div id="page-wrapper" class="page-wrapper with-navbar with-sidebar with-navbar-fixed-bottom" data-sidebar-type="full-height">

        <!-- Sticky alerts -->
        <div class="sticky-alerts"></div>

        <!-- Navbar start -->
        @includeWhen(true, 'laratour::navbar')
        <!-- Navbar end -->

        <!-- Sidebar overlay -->
        <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>

        <!-- Sidebar start -->
        @includeWhen(true, 'laratour::sidebar')
        <!-- Sidebar end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row row-eq-spacing-lg">
                    <div class="col-lg-10">
                        <div class="content">
                            <h1 class="content-title">
                                Tour Elements
                            </h1>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                        </div>
                        <div class="card" id="panel4">
                            
                            <form action="{{ route('tour.store') }}" method="POST">
                                @csrf
                                <!-- First row -->
                                <div class="form-row row-eq-spacing-sm">
                                    <div class="col-sm">
                                    <label for="first-name" class="required">Element ID or CLASS</label>
                                    <input type="text" class="form-control" id="first-name" name="element" placeholder="#element1 or .element1" required="required">
                                    </div>
                                    <div class="col-sm">
                                    <label for="last-name" class="required">Title</label>
                                    <input type="text" name="title" class="form-control" id="last-name" placeholder="Title">
                                    </div>
                                </div>

                                <div class="form-row row-eq-spacing-sm">
                                    <div class="col-sm">
                                    <label for="content-name" class="required">Content</label>
                                    <textarea class="form-control form-control-lg" id="content-name" placeholder="Enter content here" name="content"></textarea>
                                    </div>
                                </div>

                                <div>
                                    <!-- Third row -->
                                    <div class="form-row row-eq-spacing-md">
                                        <div class="col-md-3">
                                            <label for="state" class="required">Placement</label>
                                            <select class="form-control" id="state" required="required" name="placement">
                                            <option value="left">Left</option>
                                            <option value="right">Right</option>
                                            <option value="top">Top</option>
                                            <option value="bottom">Bottom</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="state">Next Path</label>
                                            <input type="url" class="form-control" id="school-name" placeholder="Path" name="path" name="path">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="widget" class="required">Widget</label>
                                            <select class="form-control" id="widget" required="required" name="widget">
                                            <option value="sidebar">Sidebar</option>
                                            <option value="navbar">Navbar</option>
                                            <option value="content">Content</option>
                                            <option value="footer">Footer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit button container -->
                                <div class="text-right"> <!-- text-right = text-align: right -->
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </div>

                            </form>
                        
                        </div>
                       
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Content wrapper end -->
    </div>
    <!-- Page wrapper end -->

    
@endsection

  

