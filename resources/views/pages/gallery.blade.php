<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS -->
    <!-- use asset -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/main.css') }}">

    <!-- Your page title -->
    <title>Gallery | Aleph Ministries Contact Us</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }}" type="image/png">
    <style>
        .gallery-item {
            margin-bottom: 20px;
            text-align: center;
        }

        .gallery-item img {
            width: 100%;
            border-radius: 10px;
        }

        .gallery-caption h3 {
            font-size: 18px;
            margin-top: 10px;
            font-weight: bold;
        }

        .gallery-caption p {
            font-size: 14px;
            color: #666;
        }

        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .pagination .page-link {
            margin: 0 5px;
            padding: 10px 15px;
            border-radius: 5px;
            background: #f8f8f8;
            color: #333;
            text-decoration: none;
        }

        .pagination .page-link:hover {
            background: #007bff;
            color: #fff;
        }
    </style>
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
                        <h1>Our Gallery</h1>
                    </div><!-- .section-heading ends -->

                    <div class="breadcrumb">
                        <div class="breadcrumb__home--link"><a href="{{ route('home') }}">Home</a></div>
                        <span>/</span>
                        <div class="breadcrumb__current--page-link">Contact</div>
                    </div><!-- .breadcrumb ends -->

                </div><!-- .banner__content ends -->

            </div><!-- .container ends -->

        </section><!-- .banner ends -->
        <!-- BANNER SECTION ENDS -->

        <section class="gallery pad-t-sm-2 pad-b-sm-2 pad-t-lg-4 pad-b-lg-4">
            <div class="container">
                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-md-4">
                            <div class="gallery-item">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->caption }}"
                                    class="img-fluid">
                                <div class="gallery-caption">
                                    <h3>{{ $gallery->caption }}</h3>
                                    <p>{{ $gallery->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination Links -->
                <div class="pagination">
                    {{ $galleries->links() }}
                </div>
            </div>
        </section>

    </main><!-- main ends -->

    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- SCROLL BACK TO TOP BEGINS -->
    <div class="scroll-to-top"><i class="ri-arrow-up-line"></i></div>
    <!-- SCROLL BACK TO TOP ENDS -->


    <!-- =================== SITE FOOTER BEGINS ============================= -->
    @include('components.footer')

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    @include('components.scripts')

</body>

</html>
