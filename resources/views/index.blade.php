@extends('include.layout')

@section('content')
<div class="pull-right toggle-right-sidebar">

        @include('include.topnav')
        @include('include.banner')


        <!-- main-slider -->
       
        <!--/grids-->
        <section class="w3l-grids-3 py-5" id="about">
            <div class="container py-md-5 py-3">
                <div class="row w3home-ab-grids">
                    <div class="w3ab-right-top col-lg-6 py-3 pe-lg-5">
                        <img src="assets/images/g2.png" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="w3ab-left-top col-lg-6 mt-lg-0 mt-4 pt-lg-0 pt-2">
                        <h6 class="title-subw3hny mb-1">Get rather healthy.</h6>
                        <h3 class="title-w3l mb-2">Welcome to Our Farm</h3>
                        <p class="my-3">At Nguetobaye's Farm, we are dedicated to sustainable agriculture, cultivating high-quality maize, sorghum, millet, and raising healthy livestock. From nourishing crops to premium pork, we strive to provide fresh, locally grown products while empowering our community and promoting food security. Join us on our journey to grow a healthier, greener future for Zambia!  </p>
    
                        <a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a>
                    </div>
    
                </div>
            </div>
        </section>
        <!--//grids-->
        <!-- features-section -->
        <section class="w3l-features py-5" id="features">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="title-content text-center mb-lg-3 mb-4">
                    <h6 class="title-subw3hny mb-1">What We Do</h6>
                    <h3 class="title-w3l">Our Services</h3>
                </div>
                <div class="main-cont-wthree-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap">
                                <div class="icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">Quality Matters</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap">
                                <div class="icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">Free Shipping</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap">
                                <div class="icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">Customer Satisfaction</a></h4>
                                <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="w3l-passion-mid-sec py-5">
            <div class="container py-md-5 py-3">
                    <div class="row w3l-passion-mid-grids">
    
                        <div class="col-lg-6 passion-grid-item-info pe-lg-5 mb-lg-0 mb-5">
                            <h6 class="title-subw3hny mb-1">Our invention</h6>
                            <h3 class="title-w3l mb-4">Our invention is always the best </h3>
                            <p class="mt-3 pe-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
                                ligula. Semper at tempufddfel.Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia
                                cum ex ipsam autem!earum sequi amet.</p>
                            <div class="w3banner-content-btns">
                                <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4 me-2">Read More </a>
    
                            </div>
                        </div>
                        <div class="col-lg-6 passion-grid-item-info ps-lg-4">
                            <div class="w3lgrids-1 box-wrap">
                                <div class="icon">
                                    <i class="fab fa-buromobelexperte"></i>
                                </div>
                                <div class="icon-text">
                                    <h4><a href="#service" class="title-head">
                                            Breeder Management</a></h4>
                                    <p class="text-para mt-2">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula tempufddfel.</p>
                                </div>
                            </div>
                            <div class="w3lgrids-1 box-wrap mt-4">
                                <div class="icon">
                                    <i class="fas fa-american-sign-language-interpreting"></i>
                                </div>
                                <div class="icon-text">
                                    <h4><a href="#service" class="title-head">Residue Teatment</a></h4>
                                    <p class="text-para mt-2">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula tempufddfel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    
        <!--/Gallery-Section-->
        <section class="w3l-gallery-main py-5" id="gallery">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="title-content text-center mx-auto">
                    <h6 class="title-subw3hny mb-1">Gallery</h6>
                    <h3 class="title-w3l mb-4">Latest Gallery
                    </h3>
                </div>
                <div class="row gal-page-grids text-center">
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="assets/images/g1.jpg">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g1.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
    
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="assets/images/g2.jpg">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g2.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
    
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="assets/images/g3.jpg">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g3.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
    
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="assets/images/g4.jpg">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g4.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
    
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="assets/images/g5.jpg">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g5.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
    
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="assets/images/g6.jpg">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g6.jpg" alt=" " class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
    
                            </div>
                        </a>
                    </div>
    
                </div>
            </div>
        </section>
    
        <section class="w3l-clients py-5" id="testimonials">
            <div class="container pt-md-5 pt-4">
                <div class="w3-testimonial-grids align-items-center py-lg-5">
                    <div class="w3-testimonial-content-top">
                        <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-4">
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q><i class="fas fa-quote-left me-2"></i>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                                laudantium
                                                voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                                Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                                Success.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>John wilson</h3>
                                                <p class="indentity">Subtitle goes here</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q><i class="fas fa-quote-left me-2"></i>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                                laudantium
                                                voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                                Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                                Success.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid" alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Julia sakura</h3>
                                                <p class="indentity">Subtitle goes here</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q><i class="fas fa-quote-left me-2"></i>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                                laudantium
                                                voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                                Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                                Success.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid" alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Roy Mmdson</h3>
                                                <p class="indentity">Subtitle goes here</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q><i class="fas fa-quote-left me-2"></i>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                                laudantium
                                                voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                                Dolores molestias adipisci dolor sit amet! by the Desire to achieve
                                                Success.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid" alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Mike Thyson</h3>
                                                <p class="indentity">Subtitle goes here</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!--/w3l-blog-->
        <section class="w3l-blog">
            <div class="blog py-5" id="Newsblog">
                <div class="container py-lg-5 py-md-4 py-2">
                    <div class="title-content text-center mb-lg-3 mb-4">
                        <h6 class="title-subw3hny mb-1">Our Article</h6>
                        <h3 class="title-w3l mb-5">Our Recent News</h3>
                    </div>
    
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="blog.html" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/g1.jpg" alt="Card image cap">
                                    </a>
    
                                </div>
                                <div class="card-body blog-details">
                                    <div class="author align-items-center">
                                        <div href="#" class="blog_item_date">
                                            <h5>14.01.2022</h5>
                                        </div>
                                        <ul class="blog-meta d-flex mb-2">
                                            <li>
                                                <a href="#author" class="post-author">
                                                    <i class="fas fa-user-alt"></i>
                                                </a> <span class="meta-value">by</span><a href="#author"> David </a>
                                            </li>
                                            <li>
                                                <a href="#author" class="post-author">
                                                    <i class="fas fa-comments"></i>
                                                </a> <a href="#author"> 03 Comments</a>
                                            </li>
                                        </ul>
    
                                    </div>
                                    <a href="blog.html" class="blog-desc">It is good for health to eat light Chicken Wings.</a>
                                    <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
    
                                </div>
    
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 item mt-md-0 mt-5">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="blog.html" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/g2.jpg" alt="Card image cap">
                                    </a>
    
                                </div>
                                <div class="card-body blog-details">
                                    <div class="author align-items-center">
                                        <div href="#" class="blog_item_date">
                                            <h5>16.01.2022</h5>
                                        </div>
                                        <ul class="blog-meta d-flex mb-2">
                                            <li>
                                                <a href="#author" class="post-author">
                                                    <i class="fas fa-user-alt"></i>
                                                </a> <span class="meta-value">by</span><a href="#author"> David </a>
                                            </li>
                                            <li>
                                                <a href="#author" class="post-author">
                                                    <i class="fas fa-comments"></i>
                                                </a> <a href="#author"> 05 Comments</a>
                                            </li>
                                        </ul>
    
                                    </div>
                                    <a href="blog.html" class="blog-desc">Having fresh eggs with the unsurpassed price </a>
                                    <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
    
                                </div>
    
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 item mt-lg-0 mt-5">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="blog.html" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="assets/images/g3.jpg" alt="Card image cap">
                                    </a>
    
                                </div>
                                <div class="card-body blog-details">
                                    <div class="author align-items-center">
                                        <div href="#" class="blog_item_date">
                                            <h5>17.01.2022</h5>
                                        </div>
                                        <ul class="blog-meta d-flex mb-2">
                                            <li>
                                                <a href="#author" class="post-author">
                                                    <i class="fas fa-user-alt"></i>
                                                </a> <span class="meta-value">by</span><a href="#author"> Marks</a>
                                            </li>
                                            <li>
                                                <a href="#author" class="post-author">
                                                    <i class="fas fa-comments"></i>
                                                </a> <a href="#author"> 06 Comments</a>
                                            </li>
                                        </ul>
    
                                    </div>
                                    <a href="blog.html" class="blog-desc">It is good for health to eat light Chicken Wings.</a>
                                    <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
    
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <section class="w3l-newsletter">
            <div class="container">
                <div class="uphny-w3l-newsletter-inf">
                    <div class="row uphny-w3l-newsletter align-items-center">
                        <div class="col-lg-6 w3l-newsletter-left text-left">
                            <h3 class="titlehny">Don't miss our future updates! Get subscribed today!</h3>
                        </div>
                        <div class="col-lg-6 w3l-newsletter-form ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                            <form action="#" method="post" class="subscribe-wthree">
                                <div class="flex-wrap subscribe-wthree-field">
                                    <input class="form-control" type="email" placeholder="Type Your Email Address" name="email" required="">
                                    <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <footer class="w3l-footer">
            <div class="w3l-footer-16 py-5">
                <div class="container py-md-5 py-3 pb-0">
                    <div class="row footer-p right-side">
                        <div class="col-lg-4 col-md-6 pe-lg-5">
                            <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.html">
                                    <span class="w3yellow">Poultry</span> Field
                                </a></h2>
                            <p class="mt-3">Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia ipsam autem ipsam.dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
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
                                        <img src="assets/images/g1.jpg" class="img-fluid radius-image" alt="poultryfield">
                                    </a>
                                </div>
                                <div class="col-4 w3indta-grid">
                                    <a href="#insta">
                                        <img src="assets/images/g2.jpg" class="img-fluid radius-image" alt="poultryfield">
                                    </a>
                                </div>
                                <div class="col-4 w3indta-grid">
                                    <a href="#insta">
                                        <img src="assets/images/g3.jpg" class="img-fluid radius-image" alt="poultryfield">
                                    </a>
                                </div>
                                <div class="col-4 w3indta-grid mt-4">
                                    <a href="#insta">
                                        <img src="assets/images/g4.jpg" class="img-fluid radius-image" alt="poultryfield">
                                    </a>
                                </div>
                                <div class="col-4 w3indta-grid mt-4">
                                    <a href="#insta">
                                        <img src="assets/images/g5.jpg" class="img-fluid radius-image" alt="poultryfield">
                                    </a>
                                </div>
                                <div class="col-4 w3indta-grid mt-4">
                                    <a href="#insta">
                                        <img src="assets/images/g6.jpg" class="img-fluid radius-image" alt="poultryfield">
                                    </a>
                                </div>
    
    
                            </div>
                        </div>
                    </div>
                    <div class="below-section text-center pt-lg-4 mt-5">
                        <p class="copy-text">&copy; 2022 Poultry Field. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
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


        @endsection