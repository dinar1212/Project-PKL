<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Absensi | PT.Albaqqi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('asset/img/logo a.png') }}" rel="icon">
    <link href="{{ asset('asset/img/logo a.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            
            <h1 class="logo me-auto"><a href="index.html">PT.Albaqqi</a></h1>
            
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('asset/img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
            {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
            <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTable').DataTable();
                });
            </script>

            <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">

            <!-- Navbar -->
            @include('layouts.isinavbar.navbar')
            <!--end Navbar-->

            <!-- ======= Hero Section ======= -->
            <!-- End Hero -->

            <main id="main">
                @yield('content')
               



                <!-- ======= Frequently Asked Questions Section ======= -->
                <!-- ======= Footer ======= -->
                <footer id="footer">

                    {{-- <div class="footer-newsletter">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <h4>Join Our Newsletter</h4>
                                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                    <form action="" method="post">
                                        <input type="email" name="email"><input type="submit" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <div class="footer ">
                        <div class="container clearfix">
                            <div class="row">



                            </div>
                        </div>
                    </div>

                    <div class="container footer-bottom clearfix">
                        <div class="copyright ">

                            &copy; Copyright <strong><span>Dinar</span></strong>. Arya Saputra

                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                        </div>



                    </div>
                </footer><!-- End Footer -->

                <div id="preloader"></div>
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>

                <!-- Vendor JS Files -->
                <script src="{{ asset('asset/vendor/aos/aos.js') }}"></script>
                <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
                <script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
                <script src="{{ asset('asset/vendor/php-email-form/validate.js') }}"></script>
                <script src="{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
                <script src="{{ asset('asset/vendor/waypoints/noframework.waypoints.js') }}"></script>

                <!-- Template Main JS File -->
                <script src="{{ asset('asset/js/main.js') }}"></script>

</body>

</html>
