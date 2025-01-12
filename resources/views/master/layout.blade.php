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
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
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
                        <li><a href="#feedback">Feedback</a></li>
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

    <!-- Banner Section -->
    <section class="banner-area" id="home">
        <!-- Content omitted for brevity -->
    </section>

    <!-- feedback Section -->
    <section class="feedback-area section-gap" id="feedback">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">If you need, Just drop us a line</h1>
                        <p>Who are in extremely love with eco-friendly system.</p>
                    </div>
                </div>
            </div>
            <form class="form-area" id="feedbackForm" action="mail.php" method="post">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <input name="name" placeholder="Enter your name" class="common-input mb-20 form-control" required="" type="text">
                        <input name="email" placeholder="Enter email address" class="common-input mb-20 form-control" required="" type="email">
                        <input name="subject" placeholder="Enter your subject" class="common-input mb-20 form-control" required="" type="text">
                    </div>
                    <div class="col-lg-6 form-group">
                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Message" required=""></textarea>
                        <button class="primary-btn mt-20" type="submit">Send Message<span class="lnr lnr-arrow-right"></span></button>
                        <div class="alert-msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-area section-gap">
        <!-- Footer Content omitted for brevity -->
    </footer>

    <!-- Scripts -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

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
