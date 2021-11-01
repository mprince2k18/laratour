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

                    @forelse (tour() as $tour)

                    <div class="col-lg-10 mb-20">
                        <div class="content">
                            <h1 class="content-title content-title-{{ $loop->index }}">
                                {{ $tour->element ?? 'N/A' }} <a href="{{ route('tour.destroy', [$tour->id, $tour->element]) }}"><i class="fa fa-trash text-danger"></i></a>
                            </h1>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>
                        </div>
                        <div class="card">
                            
                            
                                
                            
                       <form action="{{ route('tour.update', $tour->id) }}" method="POST">
                                @csrf
                                <!-- First row -->
                                <div class="form-row row-eq-spacing-sm">
                                    <div class="col-sm">
                                    <label for="first-name{{ $tour->id }}" class="required">Element ID</label>
                                    <input type="text" class="form-control" id="first-name{{ $tour->id }}" name="element" value="{{ $tour->element ?? 'N/A' }}" placeholder="#element1 or .element1" required="required">
                                    </div>
                                    <div class="col-sm">
                                    <label for="last-name{{ $tour->id }}" class="required">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $tour->title ?? 'N/A' }}" id="last-name{{ $tour->id }}" placeholder="Title">
                                    </div>
                                </div>

                                <div class="form-row row-eq-spacing-sm">
                                    <div class="col-sm">
                                    <label for="content-name{{ $tour->id }}" class="required">Content</label>
                                    <textarea class="form-control form-control-lg" id="content-name{{ $tour->id }}" placeholder="Enter content here" name="content">{{ $tour->content ?? '' }}</textarea>
                                    </div>
                                </div>

                                <div>
                                    <!-- Third row -->
                                    <div class="form-row row-eq-spacing-md">
                                        <div class="col-md-3">
                                        <label for="state" class="required">Placement</label>
                                        <select class="form-control" id="state" required="required" name="placement">
                                        <option value="left" {{ $tour->placement == 'left' ? 'selected' : '' }}>Left</option>
                                        <option value="right" {{ $tour->placement == 'right' ? 'selected' : '' }}>Right</option>
                                        <option value="top" {{ $tour->placement == 'top' ? 'selected' : '' }}>Top</option>
                                        <option value="bottom" {{ $tour->placement == 'bottom' ? 'selected' : '' }}>Bottom</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state">Next Path</label>
                                        <input type="url" class="form-control" id="school-name" placeholder="Path" name="path" name="path" value="{{ $tour->path ?? null }}">
                                    </div>

                                    <div class="col-md-3">
                                            <label for="widget" class="required">Widget</label>
                                            <select class="form-control" id="widget" required="required" name="widget">
                                            <option value="sidebar" {{ $tour->placement == 'sidebar' ? 'selected' : '' }}>Sidebar</option>
                                            <option value="navbar" {{ $tour->placement == 'navbar' ? 'selected' : '' }}>Navbar</option>
                                            <option value="content" {{ $tour->placement == 'content' ? 'selected' : '' }}>Content</option>
                                            <option value="footer" {{ $tour->placement == 'footer' ? 'selected' : '' }}>Footer</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <!-- Submit button container -->
                                <div class="text-right"> <!-- text-right = text-align: right -->
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>

                            </form>

                           


                        
                        </div>
                       
                    </div>

                    @empty
                                
                    @endforelse
                   
                </div>
            </div>
        </div>
        <!-- Content wrapper end -->
    </div>
    <!-- Page wrapper end -->

    
@endsection

  

