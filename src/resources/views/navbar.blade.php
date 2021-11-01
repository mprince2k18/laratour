<nav class="navbar">
    <div class="navbar-content">
        <button id="toggle-sidebar-btn" class="btn btn-action" type="button" onclick="halfmoon.toggleSidebar()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    </div>
    <a href="#" class="navbar-brand ml-10 ml-sm-20">
        {{-- <img src="https://www.gethalfmoon.com/static/site/img/fake-logo.svg" alt="fake-logo"> --}}
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