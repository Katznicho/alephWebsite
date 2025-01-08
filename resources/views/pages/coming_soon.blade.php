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

    @include('components.header')

    <!-- =================== SITE HEADER ENDS ============================= -->



    <!-- =================== MAIN SECTION BEGINS ============================= -->

    <main>

        <!-- BANNER SECTION STARTS -->
        <section class="coming-soon banner display-flex-column justify-align-center text-center-sm">

            <div class="container">

                <div class="banner__content">

                    <div class="section-heading">
                        <h1 class="special">Coming soon</h1>
                        <h1 class="mar-b-sm-4 mar-b-xl-6">We are currently working on something awesome and it will be
                            available
                            soon!</h1>
                        <h2 class="regular-weight">Please check back here soon or enter your email address and be
                            notified once we
                            go back online again</h2>
                    </div><!-- .section-heading ends -->

                    <form class="form form--subscription mar-b-sm-6 mar-b-xl-8">

                        <div class="row">

                            <div class="flex-lg-9 flex-xl-10">
                                <div class="form__group">
                                    <input type="email" placeholder="Enter your email address" class="form__input">
                                </div>
                            </div><!-- .flex-* ends -->

                            <div class="flex-lg-3 flex-xl-2">
                                <button type="submit" class="button--primary button--fill button-block-lg">Notify
                                    me</button>
                            </div><!-- .flex-* ends -->

                        </div><!-- .row ends -->

                    </form><!-- .form ends -->

                    <div class="single-page__share">

                        <div class="display-flex justify-align-center">

                            <div class="bold leading text">Follow us</div>

                            <div class="social">
                                <a href="" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-facebook-line"></i></a>
                            </div><!-- .social ends -->

                            <div class="social">
                                <a href="" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-linkedin-line"></i></a>
                            </div><!-- .social ends -->

                            <div class="social">
                                <a href="" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-twitter-line"></i></a>
                            </div><!-- .social ends -->

                            <div class="social">
                                <a href="" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-instagram-line"></i></a>
                            </div><!-- .social ends -->

                        </div><!-- .display-flex ends -->

                    </div><!-- .single-page__share ends -->

                </div><!-- .banner__content ends -->

            </div><!-- .container ends -->

        </section><!-- .banner ends -->
        <!-- BANNER SECTION ENDS -->

    </main><!-- main ends -->

    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- JQUERY -->
    @include('components.scripts')

</body>

</html>