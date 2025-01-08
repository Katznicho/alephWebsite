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
        <section class="banner banner--thankyou full-width text-center-sm">

            <div class="container">

                <div class="banner__content">

                    <div class="section-heading">
                        <span class="section-intro">Jesus is Lord</span>
                        <h1 class="special">Thank you</h1>
                    </div><!-- .section-heading ends -->

                </div><!-- .banner__content ends -->

            </div><!-- .container ends -->

        </section><!-- .banner ends -->
        <!-- BANNER SECTION ENDS -->


        <div class="thank-you-donations default-section-spacing text-center-sm printable">

            <div class="container">

                <h1 class="mar-b-sm-4">
                    <span class="regular-weight">Your donation ID</span>
                    <span>235790012</span>
                </h1>

                <h2 class="regular-weight mar-b-sm-2">Thank you very much for your donation.</h2>
                <h2 class="regular-weight mar-b-sm-2">Your donation of <span class="bold">$245.56</span> towards
                    <span class="bold">Clean water and food in Syria</span> is received.
                </h2>
                <h2 class="regular-weight">An email with a receipt is sent to the email you provided: <span
                        class="bold">donor@example.com</span>
                </h2>

            </div><!-- .container ends -->

        </div><!-- .thank-you-donations ends -->

        <div class="text-center-sm pad-b-sm-4">
            <button class="button button--primary button--fill printable-button">Print</button>
        </div>

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