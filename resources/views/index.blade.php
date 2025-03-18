@extends('include.layout')

@section('content')
    <div class="pull-right toggle-right-sidebar">

        @include('include.topnav')
        @include('include.banner')

        <!--/grids-->
        <section class="w3l-grids-3 py-5" id="about">
            <div class="container py-md-5 py-3">
                <div class="row w3home-ab-grids">
                    <div class="w3ab-right-top col-lg-6 py-3 pe-lg-5">
                        <img src="assets/images/g2.png" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="w3ab-left-top col-lg-6 mt-lg-0 mt-4 pt-lg-0 pt-2">
                        <h3 class="title-w3l mb-2">@lang('messages.welcome')</h3>
                        <p class="my-3">@lang('messages.welcome_info') </p>

                        <a href="about.html" class="btn btn-style btn-primary mt-4">@lang('messages.read_more')</a>
                    </div>

                </div>
            </div>
        </section>
        <!--//grids-->
        
        <!-- features-section -->
        <section class="w3l-features py-5" id="features">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="title-content text-center mb-lg-3 mb-4">
                    <h6 class="title-subw3hny mb-1">@lang('messages.sm_text')</h6>
                    <h3 class="title-w3l">@lang('messages.what_we_do')</h3>
                </div>
                <div class="main-cont-wthree-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap">
                                <div class="icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">@lang('messages.first_card_title')</a></h4>
                                <p class="text-para">@lang('messages.first_card_text')</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap">
                                <div class="icon">
                                    <i class="fas fa-piggy-bank"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">@lang('messages.second_card_title')</a></h4>
                                <p class="text-para">
                                <p class="text-para">@lang('messages.second_card_text')</p>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap">
                                <div class="icon">
                                    <i class="fa fa-water"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">@lang('messages.third_card_title')</a></h4>
                                <p class="text-para">
                                <p class="text-para">@lang('messages.third_card_text')</p>
                                </p>
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
                                <p class="text-para mt-2">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                                    ultrices in ligula tempufddfel.</p>
                            </div>
                        </div>
                        <div class="w3lgrids-1 box-wrap mt-4">
                            <div class="icon">
                                <i class="fas fa-american-sign-language-interpreting"></i>
                            </div>
                            <div class="icon-text">
                                <h4><a href="#service" class="title-head">Residue Teatment</a></h4>
                                <p class="text-para mt-2">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                                    ultrices in ligula tempufddfel.</p>
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
                    <h6 class="title-subw3hny mb-1"> @lang('messages.gallery')</h6>
                    <h3 class="title-w3l mb-4">@lang('messages.latest_gallery')
                    </h3>
                </div>
                <div class="row gal-page-grids text-center">
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="" href="assets/images/g1.png">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g1.png" alt=""
                                    style="width:100%; height:300px; object-fit: cover;" class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="" href="assets/images/g2.png">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g2.png" alt=" "
                                    style="width:100%; height:300px; object-fit: cover;" class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="" href="assets/images/g3.png">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g3.png" alt=" "
                                    style="width:100%; height:300px; object-fit: cover;" class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="" href="assets/images/g4.png">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g4.png" alt=" "
                                    style="width:100%; height:300px; object-fit: cover;" class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="" href="assets/images/g5.png">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g5.png" alt=" "
                                    style="width:100%; height:300px; object-fit: cover;" class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                        <a title="" href="assets/images/g6.png">
                            <div class="w3layouts_team_grid">
                                <img src="assets/images/g6.png" alt=" "
                                    style="width:100%; height:300px; object-fit: cover;" class="img-fluid radius-image" />
                                <div class="w3layouts_team_grid_pos">
                                    <div class="wthree_text">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <a href="{{ route('gallery') }}" class="btn btn-style btn-primary mt-4">@lang('messages.see_more')</a>

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
                                                @lang('messages.ceo_quote_one')    
                                            </q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3> Massengar Rongar Nguetobaye</h3>
                                                <p class="indentity">CEO</p>
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
                                                @lang('messages.ceo_quote_two')    
                                            </q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3> Massengar Rongar Nguetobaye</h3>
                                                <p class="indentity">CEO</p>
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

        <section class="w3l-team-main team py-5" id="team">
            <div class="container py-lg-5">
                <div class="title-content text-center mb-2">
                    <h6 class="title-subw3hny mb-1">  @lang('messages.meet') </h6>
                    <h3 class="title-w3l">  @lang('messages.our_team') </h3>
                </div>
                <div class="row team-row justify-content-center">
                    <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="assets/images/team1.jpg" alt="" class="radius-image">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#url">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                            <a href="#url">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                            <a href="#url">
                                                <span class="fab fa-linkedin-in"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#url" class="team-title">
                                @lang('messages.ceo')
                            </a>
                            <p>CEO</p>
                        </div>
                    </div>
                    <!-- end team member -->
                    <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="assets/images/team.jpg" alt="" class="radius-image">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#url">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                            <a href="#url">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                            <a href="#url">
                                                <span class="fab fa-linkedin-in"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#url" class="team-title"></a>
                            <p></p>
                        </div>
                    </div>
                    <!-- end team member -->
                    <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="assets/images/team.jpg" alt="" class="radius-image">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#url">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                            <a href="#url">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                            <a href="#url">
                                                <span class="fab fa-linkedin-in"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#url" class="team-title"></a>
                            <p></p>
                        </div>
                    </div>
                    <!-- end team member -->
                </div>

            </div>
        </section>
    @endsection
