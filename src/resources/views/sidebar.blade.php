<div class="sidebar">
            <div class="sidebar-menu">
                <h5 class="sidebar-title">Getting started</h5>
                <div class="sidebar-divider"></div>

                <a href="{{ route('tour.create') }}" id="element1" class="sidebar-link sidebar-link-with-icon {{ request()->routeIs('tour.create') ? 'active' : '' }}">
                    <span class="sidebar-icon">
                        <i class="fa fa-code" aria-hidden="true"></i>
                    </span>
                    Create New Tour
                </a>


                <a href="{{ route('tour.index') }}" id="element2" class="sidebar-link sidebar-link-with-icon {{ request()->routeIs('tour.index') ? 'active' : '' }}">
                    <span class="sidebar-icon">
                        <i class="fa fa-terminal" aria-hidden="true"></i>
                    </span>
                    All Tour Elements
                </a>

            </div>
        </div>