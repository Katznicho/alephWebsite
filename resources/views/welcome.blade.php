<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- use asset -->
    <link rel="stylesheet" href="{{asset('template/dist/css/main.css')}}">

    <!-- Your page title -->
    <title>Aleph Ministries</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" type="image/png">

</head>

<body class="regular-homepage">

    <!-- =================== SITE HEADER BEGINS ============================= -->

    @include("components.header")
    <!-- =================== SITE HEADER ENDS ============================= -->



    <!-- =================== MAIN SECTION BEGINS ============================= -->

    <main>

        <!-- HERO SECTION STARTS -->
        <section class="hero hero--regular full-width display-flex justify-align-center">

            <div class="hero__content full-width text-center-sm">

                <div class="container">

                    <div class="heading mar-b-sm-2">
                        <span class="section-intro mar-b-sm-2">Jesus is Lord</span>
                        <h1 class="color-off-white">Welcome to Aleph Ministries. <br>We hope you enjoy your visit
                            and
                            worship with us</h1>
                    </div>

                    <div class="hero__cta"><a href="#" class="button button--primary button--fill">Learn more</a></div>

                </div><!-- .container ends -->

            </div><!-- .hero__content ends -->

        </section><!-- .hero ends -->
        <!-- HERO SECTION ENDS -->




        <!-- WELCOME SECTION STARTS -->
        <section class="welcome text-center-sm default-section-spacing">

            <div class="welcome__content">

                <div class="container">

                    <div class="section-heading">
                        <span class="section-intro">Welcome</span>
                        <h2>A warm welcome from us</h2>
                    </div><!-- .section-heading ends -->

                    <p> We are delighted to extend our warmest greetings to you. Whether you are a first-time visitor or
                        a longtime member of our congregation, we consider you part of our church family.

                        At Aleph Ministries, we are more than just a community of believers; we are a fellowship that
                        values love, faith, and unity. Our doors are always open to those seeking spiritual growth,
                        connection, and a place to call home.

                        As you explore our website, you'll discover the various programs, services, and events that make
                        our church a vibrant and welcoming place. We offer worship services, community outreach,
                        inspiring sermons, and opportunities for personal and collective growth.


                        .</p>

                    <div class="welcome__image">
                        <img src="{{asset('template/aleph_images/tonny_three-removebg-preview.png')}}"
                            alt="Aleph Ministries">
                    </div>

                </div><!-- .container ends -->

            </div><!-- .welcome__content ends -->

        </section><!-- .welcome ends -->
        <!-- WELCOME SECTION ENDS -->


        <!-- RECENT SERMONS SECTION STARTS -->
        <section class="recent-sermon default-section-spacing background-off-white">

            <div class="recent-sermon__content">

                <div class="container">

                    <div class="row mar-b-sm-4">

                        <div class="flex-md-8 flex-lg-9">
                            <div class="section-heading mar-b-sm-0">
                                <span class="section-intro">Sermons</span>
                                <h2>Recent sermons</h2>
                            </div><!-- .section-heading ends -->
                        </div><!-- .flex-* ends -->

                        <div class="flex-md-4 flex-lg-3 text-right-md">
                            <a href="sermons-layout.html" class="button button--primary button--fill">View all
                                sermons</a>
                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                    <div class="row">

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card sermon">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_three.jpeg')}}" alt="Church building"
                                        class="card__image">

                                    <div class="card__details">

                                        <div class="label uppercase"><i class="ri-headphone-line"></i></div>

                                        <div class="avatar-name mar-t-sm-2">
                                            <div class="avatar avatar--small">
                                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                                            </div>
                                            <div class="name">Pastor Mutebi Tonny</div>
                                        </div><!-- .avatar-name -->

                                        <div class="sermon__details mar-t-sm-2">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-calendar-line"></i></span>
                                                <span class="text">02/28/2020</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-eye-line"></i></span>
                                                <span class="text">232</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-time-line"></i></span>
                                                <span class="text">33:45</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .sermon__details ends -->

                                    </div><!-- .card__details ends -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="sermon__tile mar-b-sm-2">The church before vs. church now</h3>
                                    <p class="excerpt">
                                        Good morning, dear brothers and sisters in Christ. It is a blessing to gather
                                        here today to reflect on an important topic that has been on the minds of many:
                                        "The Church Before vs. The Church Now." In a world that is rapidly changing,
                                        it's essential for us to explore how our faith community has evolved while
                                        remaining steadfast in our commitment to Christ.

                                    </p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="sermons-single.html" class="button button--primary button--fill">Listen
                                            now</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-6 flex-lg-4">

                            <div class="card sermon">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_five.jpeg')}}"
                                        alt="A man sitting down" class="card__image">

                                    <div class="card__details">

                                        <div class="label uppercase"><i class="ri-file-list-line"></i></div>

                                        <div class="avatar-name mar-t-sm-2">
                                            <div class="avatar avatar--small">
                                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                                            </div>
                                            <div class="name">Pastor Tonny Mutebi</div>
                                        </div><!-- .avatar-name -->

                                        <div class="sermon__details mar-t-sm-2">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-calendar-line"></i></span>
                                                <span class="text">02/28/2020</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-eye-line"></i></span>
                                                <span class="text">232</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-time-line"></i></span>
                                                <span class="text">10:45 of reading</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .sermon__details ends -->

                                    </div><!-- .card__details ends -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="sermon__tile mar-b-sm-2">The suffering &amp; sacrifice of Christ</h3>
                                    <p class="excerpt">
                                        Good morning, dear brothers and sisters in Christ. It is a blessing to gather
                                        here today to reflect on an important topic that has been on the minds of many:
                                        "The Church Before vs. The Church Now." In a world that is rapidly changing,
                                        it's essential for us to explore how our faith community has evolved while
                                        remaining steadfast in our commitment to Christ.
                                    </p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="sermons-single.html" class="button button--primary button--fill">Read
                                            more</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-12 flex-lg-4 mar-t-md-2 mar-t-lg-0">

                            <div class="card sermon">

                                <div class="card__header">

                                    <img src="{{asset('template/aleph_images/tonny_four.jpeg')}}"
                                        alt="A woman holding Bible" class="card__image">

                                    <div class="card__details">

                                        <div class="label uppercase"><i class="ri-video-line"></i></div>

                                        <div class="avatar-name mar-t-sm-2">
                                            <div class="avatar avatar--small">
                                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                                            </div>
                                            <div class="name">Pastor Tonny Mutebi</div>
                                        </div><!-- .avatar-name -->

                                        <div class="sermon__details mar-t-sm-2">

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-calendar-line"></i></span>
                                                <span class="text">02/28/2020</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-eye-line"></i></span>
                                                <span class="text">232</span>
                                            </div><!-- .icon-text ends -->

                                            <div class="icon-text">
                                                <span class="icon"><i class="ri-time-line"></i></span>
                                                <span class="text">43:15</span>
                                            </div><!-- .icon-text ends -->

                                        </div><!-- .sermon__details ends -->

                                    </div><!-- .card__details -->

                                </div><!-- .card__header ends -->

                                <div class="card__body">

                                    <h3 class="sermon__tile mar-b-sm-2">It is important to put kingdom over culture</h3>
                                    <p class="excerpt">
                                        Good morning, dear brothers and sisters in Christ. It is a blessing to gather
                                        here today to reflect on an important topic that has been on the minds of many:
                                        "The Church Before vs. The Church Now." In a world that is rapidly changing,
                                        it's essential for us to explore how our faith community has evolved while
                                        remaining steadfast in our commitment to Christ.
                                    </p>

                                </div><!-- .card__body ends -->

                                <div class="card__footer">

                                    <div class="card__cta">
                                        <a href="sermons-single.html" class="button button--primary button--fill">Watch
                                            now</a>
                                    </div><!-- .card__cta ends -->

                                    <div class="card__share text-right-sm">
                                        <button
                                            class="transparent button button--primary button--outline share-button"><i
                                                class="ri-share-line"></i></button>
                                    </div><!-- .card__share ends -->

                                </div><!-- .card__footer ends -->

                            </div><!-- .card ends -->

                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->

            </div><!-- .recent-sermon__content ends -->

        </section><!-- .recent-sermon ends -->
        <!-- RECENT SERMONS SECTION ENDS -->


        <!-- TESTIMONIAL SECTION STARTS -->
        <section class="testimonial default-section-spacing text-center-sm">

            <div class="container">

                <div class="section-heading">
                    <span class="section-intro">Testimonial</span>
                    <h2>It is all smile at Aleph Ministries</h2>
                </div><!-- .section-heading ends -->

                <!-- Carousel using Owl carousel plugin (See the main.js file) -->
                <div id="testimonial-carousel" class="testimonial__carousel owl-carousel">

                    <div class="testimonial__element">

                        <div class="testimonial__picture">

                            <div class="avatar avatar--large">
                                <img src="{{asset('template/aleph_images/tonny_one.jpeg')}}" alt="">
                            </div>

                        </div><!-- .testimonial__picture ends -->

                        <div class="testimonial__text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio temporibus vitae
                                architecto at
                                harum hic autem facilis veniam. Adipisci, quibusdam. Tempore quasi eum incidunt
                                asperiores illo
                                consequatur perspiciatis, laboriosam ipsam, doloribus enim repellendus quo dolorum.</p>
                        </div><!-- .testimonial__ptext ends -->

                        <div class="testimonial__author bold leading">Pastor Mutebi Tonny</div>
                        <!-- .testimonial__author ends -->

                    </div><!-- .testimonial__element ends -->

                    <div class="testimonial__element">

                        <div class="testimonial__picture">

                            <div class="avatar avatar--large">
                                <img src="{{asset('template/aleph_images/tonny_five.jpeg')}}" alt="">
                            </div>

                        </div><!-- .testimonial__picture ends -->

                        <div class="testimonial__text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio temporibus vitae
                                architecto at
                                harum hic autem facilis veniam. Adipisci, quibusdam. Tempore quasi eum incidunt
                                asperiores illo
                                consequatur perspiciatis, laboriosam ipsam, doloribus enim repellendus quo dolorum.</p>
                        </div><!-- .testimonial__ptext ends -->

                        <div class="testimonial__author bold leading">Miss Namusoke Allen</div>
                        <!-- .testimonial__author ends -->

                    </div><!-- .testimonial__element ends -->

                    <div class="testimonial__element">

                        <div class="testimonial__picture">

                            <div class="avatar avatar--large">
                                <img src="{{asset('template/aleph_images/tonny_two.jpeg')}}" alt="">
                            </div>

                        </div><!-- .testimonial__picture ends -->

                        <div class="testimonial__text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio temporibus vitae
                                architecto at
                                harum hic autem facilis veniam. Adipisci, quibusdam. Tempore quasi eum incidunt
                                asperiores illo
                                consequatur perspiciatis, laboriosam ipsam, doloribus enim repellendus quo dolorum.</p>
                        </div><!-- .testimonial__ptext ends -->

                        <div class="testimonial__author bold leading">Sherika H. Hyuas</div>
                        <!-- .testimonial__author ends -->

                    </div><!-- .testimonial__element ends -->

                </div><!-- #testimonial-carousel ends -->

            </div><!-- .container ends -->

        </section><!-- .testimonial ends -->
        <!-- TESTIMONIAL SECTION ENDS -->


        <!-- SEPARATOR STARTS -->
        <div class="separator background-primary"></div>
        <!-- SEPARATOR ENDS -->









    </main><!-- main ends -->

    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- SCROLL BACK TO TOP BEGINS -->
    <div class="scroll-to-top"><i class="ri-arrow-up-line"></i></div>
    <!-- SCROLL BACK TO TOP ENDS -->

    <!-- =================== ALL MODALS ============================= -->

    <div id="site-search" class="modal modal--search modal--overlay text-center-sm">

        <div class="modal__content">
            <h3 class="mar-b-sm-2">Search our site</h3>

            <div class="container">

                <form class="form form--search">

                    <div class="row">

                        <div class="flex-lg-9">
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Search...">
                            </div>
                        </div><!-- .flex-* ends -->

                        <div class="flex-lg-3">
                            <button type="submit" class="button--fill button--primary button-block-lg">Search our
                                site</button>
                        </div><!-- .flex-* ends -->

                    </div><!-- .row ends -->

                </form><!-- .form ends -->

            </div><!-- .container ends -->

        </div><!-- .modal__content ends -->

    </div><!-- .modal--search ends -->

    <!-- =================== ALL MODALS END ============================= -->


    <!-- =================== SITE FOOTER BEGINS ============================= -->

    @include("components.footer")

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    @include("components.scripts")


</body>

</html>