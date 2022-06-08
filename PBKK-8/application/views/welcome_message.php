<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="WORDS">
    <meta name="author" content="syifaa">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Daisy</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#post">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quotes">Quotes</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>
                <span class="nav-item">
                        <a class="btn-outline-sm" href="log-in.html">Log in</a>
                    </span>
            </div>
            <!-- end of navbar-collapse -->
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">All about <span class="replace-me">You, Me, Us</span></h1>
                        <p class="p-large">Don't get too deep, it leads to over thinking, and over thinking leads to problems that doesn't even exist in the first place.</p>
                        <a class="btn-solid-lg" href="sign-up.html">Sign up for free</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header-illustration.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </header>
    <!-- end of header -->
    <!-- end of header -->


    <!-- Features -->
    <div id="post" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Past, Present, <span>Future</span></h2>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lie</h4>
                            <p>Et blandit nisl libero at arcu. Donec ac lectus sed tellus mollis viverra. Nullam pharetra ante at nunc elementum</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Love</h4>
                            <p>Vulputate nibh feugiat. Morbi pellent diam nec libero lacinia, sed ultrices velit scelerisque. Nunc placerat justo sem</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Laugh</h4>
                            <p>Ety suscipit metus sollicitudin euqu isq imperdiet nibh nec magna tincidunt, nec pala vehicula neque sodales verum</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Testimonials -->
    <div id="quotes" class="slider-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Some words that Embrace</h2>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Life is not measured by the number of breaths we take, but by the moments that take our breath away.</p>
                                            <p class="testimonial-author">Maya Angelou</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Together we can face any challenges as deep as the ocean and as high as the sky.</p>
                                            <p class="testimonial-author">Sonia Gandhi</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">You are only as free as you think you are and freedom will always be as real as you believe it to be.</p>
                                            <p class="testimonial-author">Robert M.Drake</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">One does not become enlightened by imagining figures of light, but by making the darkness conscious.</p>
                                            <p class="testimonial-author">Carl Jung</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Quisque nec turpis placerat, accumsan lorem lobortis, vestibulum elit. Fusce finibus nisl varius semper elementum vivamus</p>
                                            <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Vulputate sed tellus nec, imperdiet luctus purus. Morbi lobortis massa a mi interdum condimentum. Integer non gravida nisi</p>
                                            <p class="testimonial-author">Ann Blake - Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div>
                            <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div>
                        <!-- end of swiper-container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Invitation -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>No letter that could be sent deserves to go undelivered.” – Violet Evergarden</h4>
                    <a class="btn-outline-lg page-scroll" href="massage.html">Massage Me</a>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of invitation -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">

            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-lg-6">
                        <p class="p-small">Copyright © <a href="#your-link">syifaa</a></p>
                    </div>
                </center>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="js/replaceme.min.js"></script>
    <!-- ReplaceMe for rotating text -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
	</section>
    <script src="animation.js"></script>
    </section>
</body>

</html>