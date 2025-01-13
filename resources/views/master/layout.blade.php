<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="author" content="colorlib">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>I-Walk</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
</head>
<body>
    <!-- Navbar Section -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#faq">Faq</a></li>
                        <li><a href="{{route('feedbacks.index')}}">Feedback</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="generic.html">Generic</a>
                                <a class="dropdown-item" href="elements.html">Elements</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Banner Section -->
    <section class="banner-area" id="home">
        <!-- Content omitted for brevity -->
    </section>

    <!-- Footer Section -->
    <footer class="footer-area section-gap">
        <!-- Footer Content omitted for brevity -->
    </footer>

    <!-- Scripts -->
    <script src="{{url('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{url('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/jquery.sticky.js')}}"></script>
    <script src="{{url('js/slick.js')}}"></script>
    <script src="{{url('js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>

    <!-- Smooth Scrolling -->
    <script>
        $(document).ready(function () {
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($.attr(this, 'href')).offset().top - 70
                }, 500);
            });
        });
    </script>
</body>
</html>
