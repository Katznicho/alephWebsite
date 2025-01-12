<footer class="footer">

    <div class="footer__upper">
        <!-- See _time-location.scss for the styling of this block -->
        <div class="time-location">

            <div class="prayer-request default-section-spacing text-center-sm">

                <div class="container">

                    <div class="row justify-content-end">

                        <div class="flex-lg-8">
                            <h2 class="mar-b-sm-2">Feeling down, distracted, lost or distanced from God and need
                                prayers? We will
                                pray for you!</h2>
                            <a href="contact.html" class="button button--primary button--fill">Request a prayer</a>
                        </div><!-- .flex-* -->

                    </div><!-- .row ends -->

                </div><!-- .container ends -->
            </div><!-- .prayer-request ends -->

            <div class="time-location__content">

                <div class="container">



                    </div><!-- .row -->

                </div><!-- .container ends -->


            </div><!-- .time-location__content ends -->

        </div><!-- .time-location ends -->

    </div><!-- .footer__upper ends -->

    <!-- See _footer.scss for the styling of both footer__middle and footer__lower -->
    <div class="footer__middle default-section-spacing">

        <div class="container">

            <div class="row">

                <div class="flex-md-6 flex-lg-3">

                    <div class="footer__widget color-off-white">

                        <h3>About us</h3>
                        <p class="mar-t-sm-2 mar-b-sm-2">
                            Welcome to Aleph Ministries – a place of worship, community, and spiritual growth.
                            We are a diverse and welcoming congregation dedicated to spreading the love of Christ
                            and serving our local community.
                        </p>

                        <div class="display-flex">

                            <div class="social">
                                <a href={{ $socialMedia?->facebook }} class="transparent button button--primary button--outline share-button"><i
                                        class="ri-facebook-line"></i></a>
                            </div><!-- .social ends -->

                            <div class="social">
                                <a href="{{ $socialMedia?->linkedin }}" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-linkedin-line"></i></a>
                            </div><!-- .social ends -->

                            <div class="social">
                                <a href="{{ $socialMedia?->x }}" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-twitter-line"></i></a>
                            </div><!-- .social ends -->

                            <div class="social">
                                <a href="{{ $socialMedia?->instagram }}" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-instagram-line"></i></a>
                            </div><!-- .social ends -->

                            <div class="social">
                                <a href="{{ $socialMedia?->youtube }}" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-youtube-line"></i></a>
                            </div><!-- .social ends -->

                            {{-- tiktok --}}
                            <div class="social">
                                <a href="{{ $socialMedia?->tiktok }}" class="transparent button button--primary button--outline share-button"><i
                                        class="ri-tiktok-line"></i></a>
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
                    <p class="copyright">&copy; {{ date('Y')  }} - Aleph Ministries - All Rights Reserved</p>
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
                    <p>Developed by <span class="bold underline">Aleph IT Team</span></p>
                </div><!-- .flex-* ends -->

            </div><!-- .row ends -->

        </div><!-- .container ends -->

    </div><!-- .footer__lower ends -->

    <style>
        .whatsapp-float {

            position: fixed;

            bottom: 20px;

            right: 20px;

            background-color: #25d366;

            color: #fff;

            padding: 10px 15px;

            border-radius: 50px;

            text-decoration: none;

            z-index: 9999;

        }
    </style>

    <a href="https://api.whatsapp.com/send?phone=+256 783 177808" target="_blank" class="whatsapp-float">

        <i class="fa fa-whatsapp"></i> Contact via WhatsApp

    </a>

</footer><!-- footer ends -->