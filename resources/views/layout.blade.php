<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <!--<link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">-->


    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta name="author" content="PageUp Technologies" />

    <meta name="description" content="" />
    <!-- Google Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"> -->

    <!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> -->

    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> -->
    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet">

    <!-- CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>@yield('title')</title>

    <style>
        @media (max-width: 768px) {
            .img-fluid {
                width: 40% !important;
                /*padding: 25px 15px 25px 15px;*/

                /*max-width: 0 !important;*/
            }
        }

        body {
            background-image: url("assets/img/bg-image.png");
        }

        .footer-banner {
            padding: 30px 0px 30px 0px;
            background-image: url("assets/img/background-banner.png");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
        }

        .footer-banner a {
            color: #fff;
        }


        /* Style for the topbar */
        #topbar {
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        #topbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Contact Info (right-side links) */
        .contact-info {
            display: flex;
            gap: 10px;
            font-size: 1rem;
            color: rgba(0, 0, 0, 0.55);
        }

        /* Hide vertical divider on mobile */
        .contact-info .vr {
            border-left: 1px solid rgba(0, 0, 0, 0.1);
            /* height: 20px; */
        }

        .nav-link {
            padding: 10px;
            text-decoration: none;
            color: rgba(0, 0, 0, 0.55);
        }

        /* Hamburger Icon */
        .hamburger-icon {
            display: none;
            /* Hidden on larger screens */
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {

            /* Show hamburger icon and hide links */
            .hamburger-icon {
                display: block;
            }

            .contact-info {
                display: none;
                /* Initially hidden */
                flex-direction: column;
                background-color: #f8f9fa;
                border-top: 1px solid #ddd;
                padding: 10px;
                position: absolute;
                top: 60px;
                /* Adjust based on navbar height */
                right: 0;
                width: 100%;
                /* Full-width dropdown */
                z-index: 1000;
            }

            /* Show links when active */
            .contact-info.active {
                display: flex;
            }

            .contact-info .vr {
                display: none;
            }
        }
    </style>
</head>

<body class="stripe-1">
    <div class="">
        <!-- ======= Top Bar ======= -->
        <div class="">
            <div id="topbar">
                <div class="container">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <div>
                            {{-- <img src="/assets/img/logo.png" width="50" alt=""> --}}
                            <img src="/assets/homeAssets/{{$logo}}" width="50" alt="">
                        </div>
                        <div>
                            <h5 class="mb-0">UAS Publisher</h5>
                            <div>Universal Academic and Scientific Publisher</div>
                        </div>
                    </div>

                    <!-- Hamburger Icon for Mobile -->
                    <div id="hamburger-icon" class="hamburger-icon">
                        <i class="bi bi-list" style="font-size: 1.5rem;"></i>
                    </div>

                    <!-- Right Section (Links) -->
                    <div class="contact-info" id="dropdown-menu">
                        <a href="/" class="nav-link">
                            <i class="bi bi-house"> Home</i>
                        </a>
                        <div class="vr"></div>
                        <a href="/about-us" class="nav-link">
                            <i class="bi bi-info-circle"> About Us</i>
                        </a>
                        <div class="vr"></div>
                        <a href="/journal/IJAHSS/about" class="nav-link">
                            <i class="bi bi-stack"> Journals</i>
                        </a>
                        <div class="vr"></div>
                        <a href="/journal/IJAHSS" class="nav-link">
                            <i class="bi bi-server"> Archive</i>
                        </a>
                        <div class="vr"></div>
                        <a href="/manuscript" class="nav-link">
                            <i class="bi bi-send"> Submit Manuscript</i>
                        </a>
                    </div>
                </div>
            </div>

        </div>





        <!-- navbar -->
        {{-- <div class="container-fluid"> --}}
        @yield('content')
        {{-- </div> --}}





        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i>
        </a>
    </div>


    <footer id="footer">
        <div class="footer-banner">
            <div class="container">
                {{-- <div class="row" data-aos="zoom-in" data-aos-delay="100"> --}}
                <div class="row">

                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>About Us </h3>
                            <p>
                            Draft of the journal description, aims and scope, and other essential details for the Journal of Antibiotic Development and Clinical Practice to be used on your website.
                                ...<a href="{{ url('about') }}"> Read more</a>
                            </p>
                        </div>
                    </div> --}}
                    <div class="col-md-4">
                        <div class="footer-info">
                            <h4><b><u>Quick Links</u></b></h4>
                            <li>
                                <a href="{{ url('#') }}">
                                    ABOUT US
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('#') }}">
                                    JOURNALS
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('#') }}">
                                    FOR AUTHORS
                                </a>
                            </li>
                        </div>
                    </div>

                    {{-- <div class="col-md-3">
                        <div class="footer-info">
                            <h4><b><u>Join Us</u></b></h4>
                            <li>
                                <a href="{{ url('#') }}">
                                    JOIN AS EDITOR
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('#') }}">
                                    JOIN AS REVIEWER
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    PRIVACY POLICY
                                </a>
                            </li>
                        </div>
                    </div> --}}

                    <div class="col-md-4 footer-links">
                        <!-- <h4>Open Access Licence</h4> -->
                        <a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/"> <img
                                alt="Creative Commons License" style="border-width:0;float:left"
                                src="{{ url('assets/img/li.png') }}"></a><br>
                        <p class="about-us" style="text-align:left">
                            <br><i><small>
                                    work is licensed under a Creative Commons Attribution-NonCommercial 4.0
                                    International License.
                                </small></i>
                        </p>
                    </div>

                    <div class="col-md-4 footer-info">
                        <h4><b><u>Contact Information</u></b></h4>

                        <!--<p><i class="bi bi-people"></i>-->
                        <!--Publisher Contact     : 012, Islington , Coldbath Square, London -->
                        <!--Email      : info@ IRASSpublishers.com    -->
                        <!--Editor-in-Chief : mohammad.j@westford.org.uk-->

                        <!--Publisher : contact@IRASSpublishers.com -->
                        <!-- <br><br> -->
                        <!--<h6 style=" font-weight:bold;">Dilip Chanchal </h6>-->
                        <p><i class="bi bi-geo-alt-fill"></i>
                            xxxxxx, Hojai, Assam 782445(India)
                            <br>
                            <i class="bi bi-envelope"></i>
                            <strong>Email:</strong> editor@uas.com<br><br>
                            <!-- <strong>Principal Contact :</strong> Director, IRASS
                            <br><br>
                            <i class="bi bi-envelope"></i>
                            <strong>Email:</strong> director@IRASSpublishers.com<br><br> -->

                    </div>



                </div>
            </div>
        </div>

        <div class="container p-4">
            <div class="copyright">
                &copy; Copyright <strong><span>UAS publisher</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Developed by <a href="https://pageuptechnologies.com"><b> PageUpTechnologies </b></a>
            </div>
        </div>
    </footer>

    <script>
        const hamburgerIcon = document.getElementById("hamburger-icon");
        const dropdownMenu = document.getElementById("dropdown-menu");

        hamburgerIcon.addEventListener("click", () => {
            dropdownMenu.classList.toggle("active"); // Toggle the "active" class
        });
    </script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> -->

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
