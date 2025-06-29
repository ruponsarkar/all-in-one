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

     <!-- Bootstrap 4 CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

     <!-- Font Awesome Free -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
 

    <title>@yield('title')</title>

    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background-color: #003366;
        }

        .navbar-brand {
            font-size: 1.25rem;
            font-weight: 600;
            white-space: normal;
            color: #fff !important;
        }

        .navbar-toggler {
            border-color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #003366;
        }

        .sidebar .btn {
            text-align: left;
            margin-bottom: 10px;
            background-color: #005f99;
            color: #fff;
            border-radius: 0;
        }

        .sidebar .btn i {
            margin-right: 8px;
        }

        .sidebar .btn:hover {
            background-color: #004466;
        }

        .journal-desc {
            background: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .article-list li {
            margin-bottom: 10px;
        }

        .footer {
            background-color: #003366;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .footer a {
            color: #ffffff;
        }

        .doi {
            font-size: 0.9rem;
        }
    </style>
</head>

<body class="stripe-1">
    <div class="">

        <!-- Sticky Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    Journal of Information Technology Education: IIP
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-plus"></i> Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>





    <!-- navbar -->
    {{-- <div class="container-fluid"> --}}
    @yield('content')
    {{-- </div> --}}





    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
    </a>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>ISSN: 2165-316X</p>
            <p>
                <a href="#">Legal Disclaimer</a> |
                <a href="#">Privacy Policy</a> |
                <a href="#">Ethics Policy</a>
            </p>
            <p>
                All articles of this open access journal are licensed under the
                <a href="https://creativecommons.org/licenses/by-nc/4.0/">Creative Commons BY-NC 4.0</a>
            </p>
        </div>
    </div>

    <script>
        const hamburgerIcon = document.getElementById("hamburger-icon");
        const dropdownMenu = document.getElementById("dropdown-menu");

        hamburgerIcon.addEventListener("click", () => {
            dropdownMenu.classList.toggle("active"); // Toggle the "active" class
        });
    </script>



  <!-- Bootstrap + jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
