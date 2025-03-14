
<!doctype html>
<html lang="en">

<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nguetobaye's Farm</title>
 
    <link href="http://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
</head>

<body>

    <main>

        @yield('content')


    </main>

    <footer class="w3l-footer">
        <div class="w3l-footer-16 py-5">
            <div class="container py-md-5 py-3 pb-0">
                <div class="row footer-p right-side">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.html">
                                <span class="w3yellow">Poultry</span> Field
                            </a></h2>
                        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia ipsam autem
                            ipsam.dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Links</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>

                                    <li><a href="about.html">Team</a></li>
                                    <li><a href="blog.html">Blog Posts</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-6 column">
                                <h3>Services</h3>
                                <ul class="footer-gd-16">

                                    <li><a href="#care">
                                            Brown Eggs</a></li>
                                    <li><a href="#meal">Chicken Broiler</a></li>
                                    <li><a href="#clean">
                                            Free Shipping</a></li>
                                    <li><a href="#medicine">
                                            Quality Matters</a></li>
                                    <li><a href="#setting">
                                            Poultry Cages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Instagram Feed</h3>
                        <div class="end-column row">
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g1.jpg" class="img-fluid radius-image"
                                        alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g2.jpg" class="img-fluid radius-image"
                                        alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g3.jpg" class="img-fluid radius-image"
                                        alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g4.jpg" class="img-fluid radius-image"
                                        alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g5.jpg" class="img-fluid radius-image"
                                        alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g6.jpg" class="img-fluid radius-image"
                                        alt="poultryfield">
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; 2022 Poultry Field. All rights reserved. Design by <a
                            href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                    <ul class="footer-gd-16 d-flex justify-content-center">
                        <li><a href="#terms">Terms
                            </a></li>
                        <li class="mx-2">/
                        </li>
                        <li><a href="#policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>


 
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->
    <!--//footer-9 -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- Lightbox -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/simpleLightbox.js"></script>
    <script>
        $('.w3layouts_gallery_grid a').simpleLightbox();

    </script>
    <!-- //Lightbox -->
    <!-- owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    667: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })

    </script>
    <!-- //script -->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })

    </script>
    <!-- video popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>
    <!-- //video popup -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>


<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'91f527d04d392161',t:'MTc0MTgwMjA1My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/f3b948d8acb8/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/13-03-2022/poultry-field-demo_Free/632323331/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Mar 2025 17:55:08 GMT -->
</html>
