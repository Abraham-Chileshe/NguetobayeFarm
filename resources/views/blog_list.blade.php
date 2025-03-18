@extends('include.layout')

@section('content')
    <div class="pull-right toggle-right-sidebar">

        @include('include.topnav')

        <div class="inner-banner py-5">
            <section class="w3l-breadcrumb text-left py-sm-5 ">
                <div class="container">
                    <div class="w3breadcrumb-gids">
                        <div class="w3breadcrumb-left text-left">
                            <h2 class="inner-w3-title mt-lg-5 mt-4">
                                @lang('messages.blog')</h2>
                        </div>
                        <div class="w3breadcrumb-right">
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="{{ url('/') }}l"> @lang('messages.home')</a></li>
                                <li class="active"><span class="fas fa-arrow-right mx-2"></span> @lang('messages.blog')</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>


        <section class="w3l-blog">
            <div class="blog py-5">

                <div class="container py-lg-5 py-md-4 py-2">
                    <div class="row justify-content-center">
                        <!--/w3l-blopagew3-left-->
                        <div class="col-lg-8 blopagew3-left">
                            <div class="row">
                                <div class="col-md-6 item">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative">
                                            <a href="blog-left-single.html" class="zoom d-block">
                                                <img class="card-img-bottom d-block" src="assets/images/g1.jpg"
                                                    alt="Card image cap">
                                            </a>

                                        </div>
                                        <div class="card-body blog-details">
                                            <div class="author align-items-center">
                                                <div href="blog-left-single.html" class="blog_item_date">
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
                                            <a href="blog-left-single.html" class="blog-desc">It is good for health to eat
                                                light
                                                Chicken Wings.</a>
                                            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
                                            <a href="blog-left-single.html" class="btn btn-style btn-primary mt-4">Read
                                                More</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 item mt-md-0 mt-5">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative">
                                            <a href="blog-left-single.html" class="zoom d-block">
                                                <img class="card-img-bottom d-block" src="assets/images/g2.jpg"
                                                    alt="Card image cap">
                                            </a>

                                        </div>
                                        <div class="card-body blog-details">
                                            <div class="author align-items-center">
                                                <div href="blog-left-single.html" class="blog_item_date">
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
                                            <a href="blog-left-single.html" class="blog-desc">Having fresh eggs with the
                                                unsurpassed price </a>
                                            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
                                            <a href="blog-left-single.html" class="btn btn-style btn-primary mt-4">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item mt-5">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative">
                                            <a href="blog-left-single.html" class="zoom d-block">
                                                <img class="card-img-bottom d-block" src="assets/images/g3.jpg"
                                                    alt="Card image cap">
                                            </a>

                                        </div>
                                        <div class="card-body blog-details">
                                            <div class="author align-items-center">
                                                <div href="blog-left-single.html" class="blog_item_date">
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
                                            <a href="blog-left-single.html" class="blog-desc">It is good for health to eat
                                                light
                                                Chicken Wings.</a>
                                            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
                                            <a href="blog-left-single.html" class="btn btn-style btn-primary mt-4">Read
                                                More</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 item mt-5">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative">
                                            <a href="blog-left-single.html" class="zoom d-block">
                                                <img class="card-img-bottom d-block" src="assets/images/g4.jpg"
                                                    alt="Card image cap">
                                            </a>

                                        </div>
                                        <div class="card-body blog-details">
                                            <div class="author align-items-center">
                                                <div href="blog-left-single.html" class="blog_item_date">
                                                    <h5>18.01.2022</h5>
                                                </div>
                                                <ul class="blog-meta d-flex mb-2">
                                                    <li>
                                                        <a href="#author" class="post-author">
                                                            <i class="fas fa-user-alt"></i>
                                                        </a> <span class="meta-value">by</span><a href="#author"> David
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#author" class="post-author">
                                                            <i class="fas fa-comments"></i>
                                                        </a> <a href="#author"> 03 Comments</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <a href="blog-left-single.html" class="blog-desc">It is good for health to eat
                                                light Chicken Wings.</a>
                                            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
                                            <a href="blog-left-single.html" class="btn btn-style btn-primary mt-4">Read
                                                More</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 item mt-5">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative">
                                            <a href="blog-left-single.html" class="zoom d-block">
                                                <img class="card-img-bottom d-block" src="assets/images/g5.jpg"
                                                    alt="Card image cap">
                                            </a>

                                        </div>
                                        <div class="card-body blog-details">
                                            <div class="author align-items-center">
                                                <div href="blog-left-single.html" class="blog_item_date">
                                                    <h5>19.01.2022</h5>
                                                </div>
                                                <ul class="blog-meta d-flex mb-2">
                                                    <li>
                                                        <a href="#author" class="post-author">
                                                            <i class="fas fa-user-alt"></i>
                                                        </a> <span class="meta-value">by</span><a href="#author"> David
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#author" class="post-author">
                                                            <i class="fas fa-comments"></i>
                                                        </a> <a href="#author"> 05 Comments</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <a href="blog-left-single.html" class="blog-desc">Having fresh eggs with the
                                                unsurpassed price </a>
                                            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
                                            <a href="blog-left-single.html" class="btn btn-style btn-primary mt-4">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item mt-5">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative">
                                            <a href="blog-left-single.html" class="zoom d-block">
                                                <img class="card-img-bottom d-block" src="assets/images/g6.jpg"
                                                    alt="Card image cap">
                                            </a>

                                        </div>
                                        <div class="card-body blog-details">
                                            <div class="author align-items-center">
                                                <div href="blog-left-single.html" class="blog_item_date">
                                                    <h5>20.01.2022</h5>
                                                </div>
                                                <ul class="blog-meta d-flex mb-2">
                                                    <li>
                                                        <a href="#author" class="post-author">
                                                            <i class="fas fa-user-alt"></i>
                                                        </a> <span class="meta-value">by</span><a href="#author">
                                                            Marks</a>
                                                    </li>
                                                    <li>
                                                        <a href="#author" class="post-author">
                                                            <i class="fas fa-comments"></i>
                                                        </a> <a href="#author"> 06 Comments</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <a href="blog-left-single.html" class="blog-desc">It is good for health to eat
                                                light Chicken Wings.</a>
                                            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.</p>
                                            <a href="blog-left-single.html" class="btn btn-style btn-primary mt-4">Read
                                                More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//w3l-blopagew3-left-->
                        <!--/w3l-blopagew3-right-->
                        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5 order-lg-first order-last">
                            <aside class="sidebar pe-lg-4">
                                <div class="sidebar-blog-category">
                                    <!-- Popular Post Widget-->
                                    <div class="sidebar-widget popular-posts">
                                        <div class="sidebar-title">
                                            <h4>Latest Post</h4>
                                        </div>

                                        <article class="post">
                                            <figure class="post-thumb"><img src="assets/images/g4.jpg"
                                                    class="radius-image" alt=""></figure>
                                            <div class="text"><a href="blog-single.html">Lorem ipsum viverra feugiat
                                                    tesque.
                                                </a>
                                                <div class="post-info">Jan 19, 2022 - 2 comments</div>
                                            </div>
                                        </article>

                                        <article class="post">
                                            <figure class="post-thumb"><img src="assets/images/g2.jpg"
                                                    class="radius-image" alt=""></figure>
                                            <div class="text"><a href="blog-single.html">Lorem ipsum viverra feugiat
                                                    tesque.
                                                </a>
                                                <div class="post-info">Jan 20, 2022 - 3 comments</div>
                                            </div>
                                        </article>

                                        <article class="post">
                                            <figure class="post-thumb"><img src="assets/images/g3.jpg"
                                                    class="radius-image" alt=""></figure>
                                            <div class="text"><a href="blog-single.html">Lorem ipsum viverra feugiat
                                                    tesque.</a>
                                                <div class="post-info">Jan 21, 2022 - 4 comments</div>
                                            </div>
                                        </article>

                                    </div>
                                    <!--Blog Category Widget-->
                                    <div class="sidebar-widget sidebar-blog-category">
                                        <div class="sidebar-title">
                                            <h4>Blog Categories</h4>
                                        </div>
                                        <ul class="blog-cat">
                                            <li><a href="#url"><i class="fas fa-angle-double-right me-2"></i> Brown
                                                    Eggs
                                                </a></li>
                                            <li><a href="#url"><i class="fas fa-angle-double-right me-2"></i> Chicken
                                                    Broiler </a></li>
                                            <li><a href="#url"><i class="fas fa-angle-double-right me-2"></i> Free
                                                    Shipping</a></li>
                                            <li><a href="#url"><i class="fas fa-angle-double-right me-2"></i> Quality
                                                    Matters</a></li>
                                            <li><a href="#url"><i class="fas fa-angle-double-right me-2"></i> Poultry
                                                    Cages</a></li>
                                            <li><a href="#url"><i class="fas fa-angle-double-right me-2"></i>
                                                    Uncategorized</a></li>
                                        </ul>
                                    </div>

                                    <div class="sidebar-widget sidebar-blog-category">
                                        <div class="side-post-banner">
                                            <h3 class="title-left">Do you want to join our
                                                Farm?</h3>
                                            <a href="#read" class="btn-style btn btn-primary mt-4"> Get Started </a>
                                        </div>
                                    </div>

                                    <!-- sidebar sticky -->
                                    <div class="sidebar-sticky">
                                        <div class="sidebar-sticky-fix">
                                            <!-- Tags Widget-->
                                            <div class="sidebar-widget popular-tags">
                                                <div class="sidebar-title">
                                                    <h4>Tags</h4>
                                                </div>
                                                <a href="#url">Farm</a>
                                                <a href="#url">Poultry</a>
                                                <a href="#url">Chiken</a>
                                                <a href="#url">Eggs</a>
                                                <a href="#url">Fresh</a>
                                                <a href="#url">Healthy</a>
                                                <a href="#url">Field</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- //sidebar sticky -->
                                </div>
                            </aside>
                        </div>
                        <!--//w3l-blopagew3-right-->
                    </div>
                    <!--/page-pagination-->
                    <div class="pagination-wrapper mt-5 pt-lg-3  text-end">
                        <ul class="page-pagination">

                            <li><a class="page-numbers current" href="#url"><span class="fas fa-arrow-left">
                                    </span></a>
                            </li>
                            <li><a class="page-numbers" href="#url">1</a></li>
                            <li><a class="page-numbers" href="#url">2</a></li>
                            <li><a class="page-numbers" href="#url">3</a></li>
                            <li><a class="page-numbers" href="#url">...</a></li>
                            <li><a class="page-numbers" href="#url">15</a></li>
                            <li><a class="next" href="#url"><span class="fas fa-arrow-right"></span></a></li>
                        </ul>
                    </div>
                    <!--//page-pagination-->
                </div>
            </div>
        </section>
    </div>
@endsection
