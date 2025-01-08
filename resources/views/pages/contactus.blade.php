<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS -->
    <!-- use asset -->
    <link rel="stylesheet" href="{{asset('template/dist/css/main.css')}}">

    <!-- Your page title -->
    <title>About | Aleph Ministries Contact Us</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" type="image/png">

</head>

<body class="video-bg-homepage">



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
                        <h1>Contact</h1>
                    </div><!-- .section-heading ends -->

                    <div class="breadcrumb">
                        <div class="breadcrumb__home--link"><a href="index.html">Home</a></div>
                        <span>/</span>
                        <div class="breadcrumb__current--page-link">Contact</div>
                    </div><!-- .breadcrumb ends -->

                </div><!-- .banner__content ends -->

            </div><!-- .container ends -->

        </section><!-- .banner ends -->
        <!-- BANNER SECTION ENDS -->


        <!-- TIME & LOCATION STARTS HERE -->
        <!-- See _time-location.scss for the styling of this block -->
        <div class="time-location">

            <div class="prayer-request default-section-spacing text-center-sm">

                <div class="container">

                    <div class="row justify-content-end">

                        <div class="flex-lg-8">
                            <h2 class="mar-b-sm-2">Feeling down, distracted, lost or distanced from God and need
                                prayers? We will
                                pray for you!</h2>
                            <a href="" class="button button--primary button--fill">Request a prayer using the form
                                below</a>
                        </div><!-- .flex-* -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->

            </div><!-- .prayer-request ends -->

            <div class="time-location__content">

                <div class="container">

                    <div class="row">

                        <div class="flex-lg-4 position">

                            <div class="box-details">

                                <div class="section-heading">
                                    <span class="section-intro">Visit</span>
                                    <h2>Come fellowship with us</h2>
                                </div><!-- .section-heading ends -->

                                <div class="display-flex mar-b-sm-2">
                                    <div class="left-side">
                                        <span class="leading bold">Sunday:</span>
                                    </div><!-- .left-side -->
                                    <div class="right-side">
                                        <span class="leading mar-b-sm-06">9:00am - 10:30am (Sunday school)</span>
                                        <span class="leading mar-b-sm-06">11:00am - 1:30pm (Morning worship)</span>
                                        <span class="leading">4:00pm - 5:30pm (Evening worship)</span>
                                    </div><!-- .right-side -->
                                </div><!-- .display-flex ends -->

                                <div class="display-flex mar-b-sm-06">
                                    <div class="left-side">
                                        <span class="leading bold">Location:</span>
                                    </div><!-- .left-side -->
                                    <div class="right-side">
                                        <span class="leading">123 Jay St, Albany, NY 12345</span>
                                    </div><!-- .right-side -->
                                </div><!-- .display-flex ends -->

                                <div class="display-flex mar-b-sm-06">
                                    <div class="left-side">
                                        <span class="leading bold">Telephone:</span>
                                    </div><!-- .left-side -->
                                    <div class="right-side">
                                        <span class="leading">(555) 555-5555</span>
                                    </div><!-- .right-side -->
                                </div><!-- .display-flex ends -->

                                <div class="display-flex">
                                    <div class="left-side">
                                        <span class="leading bold">Email:</span>
                                    </div><!-- .left-side -->
                                    <div class="right-side">
                                        <span class="leading">example@faithinchristchurch.com</span>
                                    </div><!-- .right-side -->
                                </div><!-- .display-flex ends -->

                            </div><!-- .box-details ends -->

                        </div><!-- .flex-* -->

                    </div><!-- .row -->

                </div><!-- .container ends -->

                <div class="time-location__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.500392314035!2d-73.76198333429348!3d42.650750424686215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de0a3cdc54f8b3%3A0x369f717b85d43cfc!2sMadison%20Ave%20%26%20Empire%20State%20Plaza!5e0!3m2!1sen!2sus!4v1583133727681!5m2!1sen!2sus"></iframe>
                </div><!-- .time-location__map ends -->

            </div><!-- .time-location__content ends -->

        </div><!-- .time-location ends -->
        <!-- TIME & LOCATION STARTS ENDS -->


        <!-- CONTACT FORM STARTS -->
        <section class="contact default-section-spacing">

            <div class="container">

                <form action="#" class="form contact__form">

                    <div class="row">

                        <div class="flex-md-6">

                            <div class="form__group">
                                <label for="fname" class="form__label">Your first name <span
                                        class="color-danger">*</span></label>
                                <input type="text" id="fname" class="form__input" name="fname"
                                    placeholder="Enter your full name">
                            </div><!-- .form__group ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-6 mar-b-md-2">

                            <div class="form__group">
                                <label for="email-2" class="form__label">Your email address <span
                                        class="color-danger">*</span></label>
                                <input type="email" id="email-2" class="form__input" name="email"
                                    placeholder="Enter your email address">
                            </div><!-- .form__group ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-12 mar-b-md-2">

                            <div class="form__group">
                                <label for="subject" class="form__label">Subject <span
                                        class="color-danger">*</span></label>
                                <input type="text" id="subject" class="form__input" name="subject"
                                    placeholder="Enter your subject">
                            </div><!-- .form__group ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-12 mar-b-md-2">

                            <div class="form__group">
                                <label for="message-2" class="form__label">Message <span
                                        class="color-danger">*</span></label>
                                <textarea name="message" id="message-2" class="form__textarea form__input"
                                    placeholder="Enter your message..."></textarea>
                            </div><!-- .form__group ends -->

                        </div><!-- .flex-* ends -->

                        <div class="flex-md-12">

                            <button class="button--primary button--fill" type="submit" name="submit">Send
                                message</button>

                        </div><!-- .flex-* ends -->


                    </div><!-- .row ends -->

                </form><!-- .form ends -->

            </div><!-- .container ends -->

        </section><!-- .contact ends -->
        <!-- CONTACT FORM ENDS -->

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

    <footer class="footer">

        <!-- See _footer.scss for the styling of both footer__middle and footer__lower -->
        <div class="footer__middle default-section-spacing">

            <div class="container">

                <div class="row">

                    <div class="flex-md-6 flex-lg-3">

                        <div class="footer__widget color-off-white">

                            <h3>About us</h3>
                            <p class="mar-t-sm-2 mar-b-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Placeat iusto
                                distinctio
                                inventore accusantium laborum dolorem doloremque rerum voluptatum voluptates excepturi
                            </p>

                            <div class="display-flex">

                                <div class="social">
                                    <a href=""
                                        class="transparent button button--primary button--outline share-button"><i
                                            class="ri-facebook-line"></i></a>
                                </div><!-- .social ends -->

                                <div class="social">
                                    <a href=""
                                        class="transparent button button--primary button--outline share-button"><i
                                            class="ri-linkedin-line"></i></a>
                                </div><!-- .social ends -->

                                <div class="social">
                                    <a href=""
                                        class="transparent button button--primary button--outline share-button"><i
                                            class="ri-twitter-line"></i></a>
                                </div><!-- .social ends -->

                                <div class="social">
                                    <a href=""
                                        class="transparent button button--primary button--outline share-button"><i
                                            class="ri-instagram-line"></i></a>
                                </div><!-- .social ends -->

                            </div><!-- .display-flex ends -->

                        </div><!-- .footer__widget ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3">

                        <div class="footer__widget color-off-white">

                            <h3>Causes</h3>

                            <ul class="causes-list mar-t-sm-2">

                                <li><a href="causes-single.html">Education for all children</a></li>
                                <li><a href="causes-single.html">No hungry neighborhood</a></li>
                                <li><a href="causes-single.html">No child left behind</a></li>
                                <li><a href="causes-single.html">Clean water &amp; food in Syria</a></li>
                                <li><a href="causes-single.html">Shelters for the homeless</a></li>
                                <li><a href="causes-single.html">Giving hope to the depressed</a></li>
                                <li><a href="causes-single.html">Substance abused recovery</a></li>

                            </ul><!-- .causes-list ends -->

                        </div><!-- .footer__widget ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3 mar-t-md-2 mar-t-lg-0">

                        <div class="footer__widget color-off-white">

                            <h3>Latest podcasts</h3>

                            <ul class="podcast-list mar-t-sm-2">

                                <li class="icon-text">
                                    <span class="icon"><i class="ri-video-line"></i></span>
                                    <span class="text"><a href="#">Overcoming fear through
                                            Christ</a></span>
                                </li>

                                <li class="icon-text">
                                    <span class="icon"><i class="ri-video-line"></i></span>
                                    <span class="text"><a href="#">Ep.10 - Understanding
                                            forgiveness</a></span>
                                </li>

                                <li class="icon-text">
                                    <span class="icon"><i class="ri-video-line"></i></span>
                                    <span class="text"><a href="#">Ep.11 - Biblical forgiveness vs wordly
                                            forgiveness</a></span>
                                </li>

                                <li class="icon-text">
                                    <span class="icon"><i class="ri-video-line"></i></span>
                                    <span class="text"><a href="#">Ep.12 - Forgiveness can take time to
                                            happen</a></span>
                                </li>

                                <li class="icon-text">
                                    <span class="icon"><i class="ri-headphone-line"></i></span>
                                    <span class="text"><a href="#">Understanding Jeremiah 29:11</a></span>
                                </li>

                                <li class="icon-text">
                                    <span class="icon"><i class="ri-headphone-line"></i></span>
                                    <span class="text"><a href="#">Jesus is The Way, Truth, and Life</a></span>
                                </li>

                            </ul><!-- .causes-list ends -->

                        </div><!-- .footer__widget ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-3 mar-t-md-2 mar-t-lg-0">

                        <div class="footer__widget color-off-white">

                            <h3>Join our newsletter</h3>

                            <div class="newsletter mar-t-sm-2">

                                <form class="form">

                                    <div class="form__group mar-b-sm-2">
                                        <input type="email" class="form__input" placeholder="Enter your email address">
                                    </div><!-- .form__group ends -->

                                    <button type="submit" class="button button--primary button--fill">Join
                                        newsletter</button>

                                </form><!-- .form ends -->

                            </div><!-- .causes-list ends -->

                        </div><!-- .footer__widget ends -->

                    </div><!-- .flex-* ends -->

                </div><!-- .row ends -->

            </div><!-- .container ends -->

        </div><!-- .footer__middle ends -->

        <div class="footer__lower background-off-white pad-t-sm-2 pad-b-sm-2">

            <div class="container">

                <div class="row">

                    <div class="flex-md-6 flex-lg-4">
                        <p class="copyright">&copy; 2020 - Faith in Christ Church - All Rights Reserved</p>
                    </div><!-- .flex-* ends -->

                    <div class="flex-md-6 flex-lg-4 text-center-lg">

                        <nav class="footer__nav">
                            <ul class="display-flex justify-content-between">
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Privacy policy</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </nav><!-- .footer__nav ends -->

                    </div><!-- .flex-* ends -->

                    <div class="flex-md-12 flex-lg-4 mar-t-md-2 mar-t-lg-0 text-right-lg">
                        <p>Template designed and developed by <span class="bold underline">Blazythemes</span></p>
                    </div><!-- .flex-* ends -->

                </div><!-- .row ends -->

            </div><!-- .container ends -->

        </div><!-- .footer__lower ends -->

    </footer><!-- footer ends -->

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- loading in JQuery locally if CDN failed -->
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')
    </script>
    <!-- Owl Carousel script -->
    <script src="js/plugins/owl.carousel.min.js"></script>
    <!-- Main (custom) script -->
    <script src="dist/js/main.min.js"></script>

</body>

</html>