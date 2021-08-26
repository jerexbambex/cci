    <!--====================  header area ====================-->
    <div class="header-area bg-white header-sticky only-mobile-sticky">
        <div class="header-top-bar-info bg-gray d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-wrap">
                            <div class="top-bar-left">
                                <div class="top-bar-text">
                                    <a href="#" class="font-medium display-inline"><i class="fa fa-clock"></i> 8:00AM - 4:00PM</a> Mondays - Fridays
                                </div>
                            </div>
                            <div class="top-bar-right">
                                <ul class="top-bar-info">
                                    <li class="info-item">
                                        <a href="tel:07055555801" class="info-link">
                                            <i class="info-icon fa fa-phone"></i>
                                            <span class="info-text">07055555802, 07055555801</span>
                                        </a>
                                    </li>
                                    <li class="info-item">
                                        <a href="mailto:info@cambridgecollegeikeja.com" class="info-link">
                                            <i class="info-icon fa fa-comment-alt-lines"></i>
                                            <span class="info-text">info@cambridgecollegeikeja.com</span>
                                        </a>
                                    </li>
                                    <li class="info-item">
                                        <i class="info-icon fa fa-map-marker-alt"></i>
                                        <span class="info-text">64 Adekunle Fajuyi Way G.R.A. Ikeja Lagos</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-bottom-wrap header-sticky bg-white" style="border-top: 4px solid #072b83;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header position-relative">
                            <!-- brand logo -->
                            <div class="header__logo py-1" style="height: 100px;">
                                <a href="{{ route('frontend.index') }}">
                                    <img src="/frontend/assets/images/logo/cambridgelogo.png" class="" alt="" width="60%" style="height: 80px; width: 200px;">
                                </a>
                            </div>

                            <div class="header-right">

                                <!-- navigation menu -->
                                <div class="header__navigation menu-style-three d-none d-xl-block">
                                    <nav class="navigation-menu">
                                        <ul>
                                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.index') }}"><span>Home</span></a>
                                            </li>
                                            <li class="{{ Request::is('/about') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.about') }}"><span>About</span></a>
                                            </li>
                                            <li class="{{ Request::is('/why-us') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.why') }}"><span>Why us</span></a>
                                            </li>
                                            <li class="{{ Request::is('/programs*') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.programs') }}"><span>Programmes</span></a>
                                            </li>
                                            <li class="{{ Request::is('/events') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.event') }}"><span>Events</span></a>
                                            </li>
                                            <li class="{{ Request::is('/gallery') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.gallery') }}"><span>Gallery</span></a>
                                            </li>
                                            <li class="{{ Request::is('/leadership*') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.leadership') }}"><span>Leadership</span></a>
                                            </li>
                                            <li class="{{ Request::is('/contact-us') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.contact') }}"><span>Contact</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-search-form-two">
                                    <form action="#" class="search-form-top-active">
                                        <div class="search-icon" id="search-overlay-trigger">
                                            <a href="javascript:void(0)">
                                                {{-- <i class="fa fa-search"></i> --}}
                                            </a>
                                        </div>
                                    </form>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--====================  End of header area  ====================-->