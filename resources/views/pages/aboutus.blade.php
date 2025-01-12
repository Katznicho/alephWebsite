<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- use asset -->
    <link rel="stylesheet" href="{{asset('template/dist/css/main.css')}}">

    <!-- Your page title -->
    <title>About | Aleph Ministries</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" type="image/png">

</head>

<body>



    <!-- =================== SITE HEADER BEGINS ============================= -->

    @include("components.header")

    <!-- =================== SITE HEADER ENDS ============================= -->



    <!-- =================== MAIN SECTION BEGINS ============================= -->

    <main>

        <!-- BANNER SECTION STARTS -->
        <section class="banner full-width">

            <div class="container">

                <div class="banner__content">

                    <div class="section-heading">
                        <span class="section-intro">Aleph Ministries</span>
                        <h1>About us</h1>
                    </div><!-- .section-heading ends -->

                    <div class="breadcrumb">
                        <div class="breadcrumb__home--link"><a href="{{route('home')}}">Home</a></div>
                        <span>/</span>
                        <div class="breadcrumb__current--page-link">About</div>
                    </div><!-- .breadcrumb ends -->

                </div><!-- .banner__content ends -->

            </div><!-- .container ends -->

        </section><!-- .banner ends -->
        <!-- BANNER SECTION ENDS -->


        <!-- WELCOME SECTION STARTS -->
        <section class="welcome welcome--2 welcome--about pad-t-sm-2 pad-b-sm-2 pad-t-lg-4 pad-b-lg-4">

            <div class="welcome__content">

                <div class="container">

                    <div class="row align-items-center default-section-spacing pad-b-sm-0 mar-b-lg-4">

                        <div class="flex-lg-10">

                            <div class="section-heading">
                                <span class="section-intro">Welcome</span>
                                <h2>{{ $aboutus?->title }}</h2>
                            </div><!-- .section-heading ends -->

                            <p>
                                {{ $aboutus?->description }}
                            </p>


                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->

            </div><!-- .welcome__content ends -->

        </section><!-- .welcome ends -->
        <!-- WELCOME SECTION ENDS -->


        <!-- OUR MISSION & VISION SECTION STARTS -->
        <section class="mission-vision default-section-spacing">

            <div class="mission-vision__content">

                <div class="container">

                    <div class="section-heading text-center-md color-off-white">
                        <span class="section-intro color-off-white">Mission</span>
                        <h2>Our mission and vision</h2>
                    </div><!-- .section-heading ends -->

                    <div class="row">

                        <div class="flex-md-6">

                            <div class="mission-vision__box mission">
                                <h3 class="mar-b-sm-2">Our mission</h3>
                                <p>
                                    {{ $aboutus?->our_mission }}
                                </p>
                            </div><!-- .mission-vision__box ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-6">

                            <div class="mission-vision__box mission">
                                <h3 class="mar-b-sm-2">Our vision</h3>
                                <p>
                                   {{ $aboutus?->our_vision }}
                                </p>

                            </div><!-- .mission-vision__box ends -->

                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->

            </div><!-- .mission-vision__content ends -->

        </section><!-- .mission-vision ends -->
        <!-- OUR MISSION & VISION SECTION ENDS -->


        <!-- OUR LEADERS SECTION STARTS -->
        <section class="our-leaders default-section-spacing text-center-sm">
            <div class="container">
                <div class="section-heading">
                    <span class="section-intro">Staffs</span>
                    <h2>Some of our leaders</h2>
                </div><!-- .section-heading ends -->
        
                @if ($leaders && $leaders->count() > 0)
                    <!-- Carousel controlled by Owl Carousel plugin -->
                    <div id="our-leaders-carousel" class="our-leaders__carousel owl-carousel">
                        @foreach ($leaders as $leader)
                            <div class="card staff">
                                <div class="card__header no-overlay">
                                    <img src="{{ $leader->image ?? asset('template/images/default-user.png') }}" alt="{{ $leader->name }}" class="card__image">
                                </div><!-- .card__header ends -->
        
                                <div class="card__body">
                                    <h3 class="cause__tile mar-b-sm-2">{{ $leader->name }}</h3>
                                    <p>{{ $leader->role }}</p>
                                </div><!-- .card__body ends -->
        
                                <div class="card__footer justify-align-center">
                                    <div class="card__share">
                                        <a href="{{ $leader->facebook_url }}" target="_blank" class="transparent button button--primary button--outline share-button">
                                            <i class="ri-facebook-line"></i>
                                        </a>
                                    </div><!-- .card__share ends -->
                                    <div class="card__share">
                                        <a href="{{ $leader->linkedin_url }}" target="_blank" class="transparent button button--primary button--outline share-button">
                                            <i class="ri-linkedin-line"></i>
                                        </a>
                                    </div><!-- .card__share ends -->
                                    <div class="card__share">
                                        <a href="{{ $leader->twitter_url }}" target="_blank" class="transparent button button--primary button--outline share-button">
                                            <i class="ri-twitter-line"></i>
                                        </a>
                                    </div><!-- .card__share ends -->
                                </div><!-- .card__footer ends -->
                            </div><!-- .card ends -->
                        @endforeach
                    </div><!-- #our-leaders-carousel ends -->
                @else
                    <p>No leaders available</p>
                @endif
            </div><!-- .container ends -->
        </section><!-- .our-leaders ends -->
        
        <!-- .rour-leaders ends -->
        <!-- OUR LEADERS SECTION ENDS -->


        <!-- OUR BELIEF SECTION STARTS -->
        <section class="our-belief">

            <div class="our-belief__content">

                <div class="row no-gutter">

                    <div class="flex-md-6 flex-lg-3">

                        <div class="belief background-primary color-off-white">
                            <h3 class="mar-b-sm-2">We believe in the Bible</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam totam tempore eum alias
                                consequuntur recusandae dolorum, tempora libero neque aliquam cum impedit dicta
                                explicabo, magnam
                                officiis suscipit itaque, voluptate fuga a? Molestias modi qui optio possimus,
                                laudantium consectetur
                                architecto ullam</p>
                        </div>

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3">

                        <div class="belief background-secondary">
                            <h3 class="mar-b-sm-2">We believe in the Holy Trinity</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam totam tempore eum alias
                                consequuntur recusandae
                                dolorum, tempora libero neque aliquam cum impedit dicta explicabo, magnam officiis
                                suscipit itaque,
                                voluptate fuga
                                a? Molestias modi qui optio possimus, laudantium consectetur architecto ullam</p>
                        </div>

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3">

                        <div class="belief background-body-text color-off-white">
                            <h3 class="mar-b-sm-2">We believe in the Blessed Hope</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam totam tempore eum alias
                                consequuntur recusandae
                                dolorum, tempora libero neque aliquam cum impedit dicta explicabo, magnam officiis
                                suscipit itaque,
                                voluptate fuga
                                a? Molestias modi qui optio possimus, laudantium consectetur architecto ullam</p>
                        </div>

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3">

                        <div class="belief background-primary color-off-white">
                            <h3 class="mar-b-sm-2">We believe in the Sanctification</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam totam tempore eum alias
                                consequuntur recusandae
                                dolorum, tempora libero neque aliquam cum impedit dicta explicabo, magnam officiis
                                suscipit itaque,
                                voluptate fuga
                                a? Molestias modi qui optio possimus, laudantium consectetur architecto ullam</p>
                        </div>

                    </div><!-- .flex-* ends -->

                </div><!-- .row ends -->

            </div><!-- .our-belief__content ends -->

        </section><!-- .our-belief ends -->
        <!-- OUR BELIEF SECTION ENDS -->


    </main><!-- main ends -->

    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- SCROLL BACK TO TOP BEGINS -->
    <div class="scroll-to-top"><i class="ri-arrow-up-line"></i></div>
    <!-- SCROLL BACK TO TOP ENDS -->




    <!-- =================== SITE FOOTER BEGINS ============================= -->
    @include('components.footer')

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    @include("components.scripts")

</body>

</html>