<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
            <h1><a class="navbar-brand" href="index.html">
                    <span class="w3yellow">Nguetobaye</span> Farm
                </a></h1>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/')}}">@lang('messages.home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about')}}">@lang('messages.about')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog')}}">@lang('messages.blog')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery')}}">@lang('messages.gallery')</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('messages.languages') <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item pt-2" href="locale/en">@lang('messages.english')</a></li>
                            <li><a class="dropdown-item" href="locale/fr">@lang('messages.french')</a></li>
                            <li><a class="dropdown-item" href="locale/es">@lang('messages.spanish')</a></li>
                            <li><a class="dropdown-item" href="locale/ru">@lang('messages.russian')</a></li>
                            <li><a class="dropdown-item" href="locale/zh">@lang('messages.chinese')</a></li>
                            <li><a class="dropdown-item" href="locale/ar">@lang('messages.arabic')</a></li>

                        </ul>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">@lang('messages.contact')</a>
                    </li>

                </ul>
                <!--/search-right-->
                <ul class="header-search me-lg-4">
                    <li class="nav-item search-right">
                        <a href="#search" class="btn search-btn btn-primary" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span> Search</a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                <form action="#" method="GET" class="search-box d-flex position-relative">
                                    <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                    <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                            <a class="close" href="#close">×</a>
                        </div>
                        <!-- /search popup -->
                    </li>
                </ul>
                <!--//search-right-->
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->

        </nav>
    </div>
</header>