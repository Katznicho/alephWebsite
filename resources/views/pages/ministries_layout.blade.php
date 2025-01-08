<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- use asset -->
    <link rel="stylesheet" href="{{asset('template/dist/css/main.css')}}">

    <!-- Your page title -->
    <title>Ministries Layout | Aleph Ministries</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" type="image/png">

</head>

<body>



    <!-- =================== SITE HEADER BEGINS ============================= -->
    @include('components.header')

    <!-- =================== SITE HEADER ENDS ============================= -->



    <!-- =================== MAIN SECTION BEGINS ============================= -->

    <main>

        <!-- BANNER SECTION STARTS -->
        <section class="banner full-width">

            <div class="container">

                <div class="banner__content">

                    <div class="section-heading">
                        <span class="section-intro">Jesus is Lord</span>
                        <h1>Ministries</h1>
                    </div><!-- .section-heading ends -->

                    <div class="breadcrumb">
                        <div class="breadcrumb__home--link"><a href="index.html">Home</a></div>
                        <span>/</span>
                        <div class="breadcrumb__current--page-link">Ministries</div>
                    </div><!-- .breadcrumb ends -->

                </div><!-- .banner__content ends -->

            </div><!-- .container ends -->

        </section><!-- .banner ends -->
        <!-- BANNER SECTION ENDS -->


        <!-- INNER PAGES HEADER STARTS -->
        <div class="inner-pages-header default-section-spacing">

            <div class="container">

                <div class="section-heading text-center-sm">
                    <span class="section-intro">Ministries</span>
                    <h2>Our ministries</h2>
                </div><!-- .section-heading ends -->

                <p>Showing 6 out of 22 ministries</p>

            </div><!-- .container ends -->


        </div><!-- .inner-pages-header ends -->
        <!-- INNER PAGES HEADER ENDS -->


        <!-- ALL RESULTS SECTION STARTS -->
        <section class="all-results all-results--ministries">

            <div class="container">

                <div class="row">

                    <div class="flex-md-6 flex-lg-4">

                        <div class="card ministry">

                            <div class="card__header">

                                <img src="images/ministry-men.jpg" alt="" class="card__image">

                                <div class="card__details">

                                    <div class="ministry__details">

                                        <div class="icon-text">
                                            <span class="icon"><i class="ri-group-line"></i></span>
                                            <span class="text color-off-white">25 brothers</span>
                                        </div><!-- .icon-text ends -->

                                    </div><!-- .ministry__details ends -->

                                </div><!-- .card__details ends -->

                            </div><!-- .card__header ends -->

                            <div class="card__body">

                                <h3 class="ministry__tile mar-b-sm-2">Men's ministry</h3>
                                <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt
                                    impedit
                                    cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                    repudiandae! Laborum
                                    reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                    voluptates dolores,
                                    earum sequi...</p>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="ministries-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right-sm">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-4">

                        <div class="card ministry">

                            <div class="card__header">

                                <img src="images/ministry-podcast.jpg" alt="" class="card__image">

                                <div class="card__details">

                                    <div class="ministry__details">

                                        <div class="icon-text">
                                            <span class="icon"><i class="ri-group-line"></i></span>
                                            <span class="text color-off-white">12 podcasters</span>
                                        </div><!-- .icon-text ends -->

                                    </div><!-- .ministry__details ends -->

                                </div><!-- .card__details ends -->

                            </div><!-- .card__header ends -->

                            <div class="card__body">

                                <h3 class="ministry__tile mar-b-sm-2">Podcast ministry</h3>
                                <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt
                                    impedit
                                    cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                    repudiandae! Laborum
                                    reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                    voluptates dolores,
                                    earum sequi...</p>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="ministries-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right-sm">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-4 mar-t-md-2 mar-t-lg-0">

                        <div class="card ministry">

                            <div class="card__header">

                                <img src="images/ministry-women-choir.jpg" alt="" class="card__image">

                                <div class="card__details">

                                    <div class="ministry__details">

                                        <div class="icon-text">
                                            <span class="icon"><i class="ri-group-line"></i></span>
                                            <span class="text color-off-white">15 sisters</span>
                                        </div><!-- .icon-text ends -->

                                    </div><!-- .ministry__details ends -->

                                </div><!-- .card__details ends -->

                            </div><!-- .card__header ends -->

                            <div class="card__body">

                                <h3 class="ministry__tile mar-b-sm-2">Women's choir ministry</h3>
                                <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt
                                    impedit
                                    cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                    repudiandae! Laborum
                                    reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                    voluptates dolores,
                                    earum sequi...</p>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="ministries-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right-sm">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-4 mar-t-md-2">

                        <div class="card ministry">

                            <div class="card__header">

                                <img src="images/ministry-children.jpg" alt="" class="card__image">

                                <div class="card__details">

                                    <div class="ministry__details">

                                        <div class="icon-text">
                                            <span class="icon"><i class="ri-group-line"></i></span>
                                            <span class="text color-off-white">15 children</span>
                                        </div><!-- .icon-text ends -->

                                    </div><!-- .ministry__details ends -->

                                </div><!-- .card__details ends -->

                            </div><!-- .card__header ends -->

                            <div class="card__body">

                                <h3 class="ministry__tile mar-b-sm-2">Children's ministry</h3>
                                <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt
                                    impedit
                                    cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                    repudiandae! Laborum
                                    reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                    voluptates dolores,
                                    earum sequi...</p>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="ministries-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right-sm">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-4 mar-t-md-2">

                        <div class="card ministry">

                            <div class="card__header">

                                <img src="images/ministry-homeless-outreach.jpg" alt="" class="card__image">

                                <div class="card__details">

                                    <div class="ministry__details">

                                        <div class="icon-text">
                                            <span class="icon"><i class="ri-group-line"></i></span>
                                            <span class="text color-off-white">35 brothers &amp; sisters</span>
                                        </div><!-- .icon-text ends -->

                                    </div><!-- .ministry__details ends -->

                                </div><!-- .card__details ends -->

                            </div><!-- .card__header ends -->

                            <div class="card__body">

                                <h3 class="ministry__tile mar-b-sm-2">Homeless outreach ministry</h3>
                                <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt
                                    impedit
                                    cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                    repudiandae! Laborum
                                    reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                    voluptates dolores,
                                    earum sequi...</p>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="ministries-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right-sm">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-4 mar-t-md-2">

                        <div class="card ministry">

                            <div class="card__header">

                                <img src="images/ministry-men-choir.jpg" alt="" class="card__image">

                                <div class="card__details">

                                    <div class="ministry__details">

                                        <div class="icon-text">
                                            <span class="icon"><i class="ri-group-line"></i></span>
                                            <span class="text color-off-white">15 brothers</span>
                                        </div><!-- .icon-text ends -->

                                    </div><!-- .ministry__details ends -->

                                </div><!-- .card__details ends -->

                            </div><!-- .card__header ends -->

                            <div class="card__body">

                                <h3 class="ministry__tile mar-b-sm-2">Men's choir ministry</h3>
                                <p class="excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt
                                    impedit
                                    cupiditate officiis commodi, autem ratione perspiciatis. Delectus, sed? Modi,
                                    repudiandae! Laborum
                                    reiciendis facere impedit suscipit tempora quasi commodi vitae deleniti harum
                                    voluptates dolores,
                                    earum sequi...</p>

                            </div><!-- .card__body ends -->

                            <div class="card__footer">

                                <div class="card__cta">
                                    <a href="ministries-single.html" class="button button--primary button--fill">Learn
                                        more</a>
                                </div><!-- .card__cta ends -->

                                <div class="card__share text-right-sm">
                                    <button class="transparent button button--primary button--outline share-button"><i
                                            class="ri-share-line"></i></button>
                                </div><!-- .card__share ends -->

                            </div><!-- .card__footer ends -->

                        </div><!-- .card ends -->

                    </div><!-- .flex-* ends -->

                </div><!-- .row ends -->

            </div><!-- .container ends -->

        </section><!-- .all-results -->
        <!-- ALL RESULTS SECTION ENDS -->

        <div class="inner-pages-navigation pad-t-sm-4 pad-b-sm-4">

            <div class="container">

                <div class="pagination">
                    <button
                        class="pagination__arrow arrow-left transparent button--primary button--outline button share-button"><i
                            class="ri-arrow-left-s-line"></i></button>

                    <div class="pagination__numbers">
                        <button
                            class="number transparent button--primary button--outline button share-button">1</button>
                        <button
                            class="number transparent button--primary button--outline button share-button active">2</button>
                        <button
                            class="number transparent button--primary button--outline button share-button">3</button>
                    </div>

                    <button
                        class="pagination__arrow arrow-right transparent button--primary button--outline button share-button"><i
                            class="ri-arrow-right-s-line"></i></button>
                </div><!-- .pagination ends -->

            </div><!-- .container ends -->

        </div><!-- .inner-pages-navigation ends -->

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
    @include('components.footer')

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    @include('components.scripts')

</body>

</html>