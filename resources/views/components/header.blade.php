<header class="header light-text" data-onscroll-classes="fixed-header animate-header">

    <div class="header__top-nav">

        <div class="container">
            <!-- Promotion for full version -->
            <div class="promotion">

                <div class="row align-items-center">
                    <div class="flex-md-6 flex-lg-9 text-center-sm text-left-md">
                        <p>Watch Us live on YouTube
                        </p>
                    </div><!-- .flex-* -->

                    <div class="flex-md-6 flex-lg-3">
                        <a href="https://www.youtube.com/@alephthefathershouse1693" _blank
                            class="button button--promotion button-block-sm button-inline-lg">YouTube</a>
                    </div><!-- .flex-* -->
                </div>

            </div>
        </div><!-- .container ends -->

    </div><!-- .header__top-nav ends -->

    <nav class="bottom-nav">

        <div class="container">

            <div class="header__nav">

                <div class="header__logo brand--logo">
                    <a href="{{route('welcome')}}"><img src="{{asset('template/aleph.png')}}"
                            alt="Aleph Ministries"></a>
                </div>

                <div class="header__mobile--opener hide-on-lg">
                    <button class="header__mobile--icon" aria-expanded="false" aria-controls="mobile-menu"
                        data-toggle="mobile-menu">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                </div>

                <ul class="header__navitems show-on-lg" id="mobile-menu">

                    <!-- Contains donation button for mobile and tablet devices -->
                    <li class="header__extra">
                        <div class="cta">
                            <a href="donations.html"
                                class="button button-block-sm button--primary button--fill">Donate</a>
                        </div>
                    </li><!-- .header__extra ends -->

                    <li class="header__list active"><a href="{{route('welcome')}}">Home</a></li>
                    <!-- .header__list ends -->

                    <li class="header__list"><a href="{{route('about')}}">About</a></li><!-- .header__list ends -->

                    <li class="header__list">
                        <a href="" class="dropdown-link caret">Ministries</a>

                        <div class="header__submenu">
                            <ul>

                                <li class="header__list"><a href="{{route('ministries-layout')}}">Ministries layout</a>
                                </li>
                                <li class="header__list"><a href="{{route('ministries-single')}}">Ministries single</a>
                                </li>

                            </ul>
                        </div><!-- .header__submenu ends -->
                    </li><!-- .header__list ends -->

                    <li class="header__list">
                        <a href="" class="dropdown-link caret">Sermons</a>

                        <div class="header__submenu">
                            <ul>

                                <li class="header__list"><a href="{{route('sermons-layout')}}">Sermons layout</a></li>
                                <li class="header__list"><a href="{{route('sermons-single')}}">Sermons single</a></li>

                            </ul>

                        </div><!-- .header__submenu ends -->
                    </li><!-- .header__list ends -->

                    {{-- <li class="header__list">
                        <a href="" class="dropdown-link caret">Events</a>

                        <div class="header__submenu">
                            <ul>

                                <li class="header__list"><a href="events-layout.html">Events layout</a></li>
                                <li class="header__list"><a href="events-single.html">Events single</a></li>

                            </ul>
                        </div>
                        <!-- .header__submenu ends -->
                    </li> --}}
                    <!-- .header__list ends -->

                    {{-- <li class="header__list">
                        <a href="" class="dropdown-link caret">Causes</a>

                        <div class="header__submenu">
                            <ul>

                                <li class="header__list"><a href="causes-layout.html">Causes layout</a></li>
                                <li class="header__list"><a href="causes-single.html">Causes single</a></li>

                            </ul>
                        </div><!-- .header__submenu ends -->
                    </li> --}}
                    <!-- .header__list ends -->

                    {{-- <li class="header__list">
                        <a href="" class="dropdown-link caret">Pages</a>

                        <div class="header__submenu">
                            <ul>

                                <li class="header__list"><a href="{{route('donations')}}">Donations</a></li>
                                <li class="header__list"><a href="{{route('thankyou')}}">Thank you (Donations)</a>
                                </li>

                                <li class="header__list"><a href="{{route('coming_soon')}}">Coming soon</a></li>
                                <li class="header__list"><a href="{{route('single_staff')}}">Staffs single</a></li>

                            </ul>
                        </div><!-- .header__submenu ends -->
                    </li> --}}
                    <!-- .header__list ends -->
                    {{--
                    <li class="header__list">
                        <a href="" class="dropdown-link caret">Blog</a>

                        <div class="header__submenu">
                            <ul>

                                <li class="header__list"><a href="blog-layout.html">Blog list</a></li>
                                <li class="header__list"><a href="blog-single.html">Blog single</a></li>

                            </ul>
                        </div><!-- .header__submenu ends -->
                    </li> --}}
                    <!-- .header__list ends -->

                    <li class="header__list"><a href="{{route('contact')}}">Contact</a></li>
                    <!-- .header__list ends -->

                </ul><!-- .header__navitems ends -->

                <!-- Contains Search button and donation button -->
                <div class="header__extra desktop-version">
                    <div class="search">
                        <div class="search-icon">
                            <button class="modal-button" data-modal-target="site-search"><i
                                    class="ri-search-line"></i></button>
                        </div>
                    </div>

                    <div class="cta hide-on-sm show-on-lg">
                        <a href="{{route('donations')}}" class="button button--primary button--fill">Donate</a>
                    </div>
                </div><!-- .header__extra ends -->

            </div><!-- .header__nav ends -->

        </div><!-- .container -->

    </nav><!-- .bottom-nav ends -->

</header><!-- .header ends -->