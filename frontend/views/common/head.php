<?php

use yii\helpers\Url;

?>
<div id="preloader">
    <div id="loading-animation">&nbsp;</div>
</div>

<!-- Navbar
================================================== -->
<header class="clearfix">
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="header-top-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <span><i class="fa fa-phone"></i> +102655874624</span>
                        <span><i class="fa fa-envelope"></i> contact@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img alt="" src="images/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="megadrop"><a class="active" href="index.html">Home</a>
                        <div class="megadrop-down">
                            <div class="container">
                                <div class="dropdown">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="index.html">Home 1 - Default</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li><a href="index-7.html">Home 7</a></li>
                                                <li><a href="index-8.html">Home 8</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="index-portfolio.html">Home Portfolio</a></li>
                                                <li><a href="index-landing.html">Landing page</a></li>
                                                <li><a href="index-app.html">App Landing Page</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul class="last-child">
                                                <li><a href="index-one-page.html">One page 1</a></li>
                                                <li><a href="index-one-page2.html">One page 2</a></li>
                                                <li><a href="index-one-page3.html">One page 3</a></li>
                                                <li><a href="index-one-page4.html">One page 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="megadrop"><a href="index.html">Pages</a>
                        <div class="megadrop-down">
                            <div class="container">
                                <div class="dropdown">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="pages-about.html">About us 1</a></li>
                                                <li><a href="pages-about-2.html">About us 2</a></li>
                                                <li><a href="pages-about-3.html">About us 3</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="pages-services.html">Services 1</a></li>
                                                <li><a href="pages-services-2.html">Services 2</a></li>
                                                <li><a href="pages-services-3.html">Services 3</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="pages-team.html">Team members 1</a></li>
                                                <li><a href="pages-team-2.html">Team members 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul class="last-child">
                                                <li><a href="#.html">Error 404 (next update)</a></li>
                                                <li><a href="#html.html">Under construction (next update)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="drop"><a href="blog-grid-3col.html">Blog</a>
                        <ul class="drop-down">
                            <li><a href="blog-grid-3col.html">Grid<i class="fa fa-angle-right"></i></a>
                                <ul class="drop-down level3">
                                    <li><a href="blog-grid-3col.html">3 Colums</a>
                                    <li><a href="blog-grid-4col.html">4 Colums</a>
                                    <li><a href="blog-grid-leftsidebar.html">Left Sidebar</a>
                                    <li><a href="blog-grid-rightsidebar.html">Right Sidebar</a>
                                </ul>
                            </li>
                            <li><a href="blog-standard.html">Standart<i class="fa fa-angle-right"></i></a>
                                <ul class="drop-down level3">
                                    <li><a href="blog-fullwidth.html">Fullwidth</a>
                                    <li><a href="blog-leftsidebar.html">Left Sidebar</a>
                                    <li><a href="blog-rightsidebar.html">Right Sidebar</a>
                                </ul>
                            </li>
                            <li><a href="blog-masonry.html">Masonry<i class="fa fa-angle-right"></i></a>
                                <ul class="drop-down level3">
                                    <li><a href="blog-masonry.html">Fullwidth</a>
                                    <li><a href="blog-masonry-leftsidebar.html">Left Sidebar</a>
                                    <li><a href="blog-masonry-rightsidebar.html">Right Sidebar</a>
                                </ul>
                            </li>
                            <li><a href="single-post.html">Single Post</a></li>
                        </ul>
                    </li>

                    <li class="drop"><a href="portfolio-standart-3col.html">Portfolio</a>
                        <ul class="drop-down">

                            <li><a href="portfolio-standart-3col.html">Portfolio 3 Col<i class="fa fa-angle-right"></i></a>
                                <ul class="drop-down level3">
                                    <li><a href="pportfolio-standart-3col-fullwidth.html">Fullwidth</a>
                                    <li><a href="portfolio-standart-3col.html">Boxed</a>
                                    <li><a href="portfolio-description-3col.html">With describtion</a>
                                </ul>
                            </li>

                            <li><a href="portfolio-standart-4col.html">Portfolio 4 Col<i class="fa fa-angle-right"></i></a>
                                <ul class="drop-down level3">
                                    <li><a href="pportfolio-standart-4col-fullwidth.html">Fullwidth</a>
                                    <li><a href="portfolio-standart-4col.html">Boxed</a>
                                    <li><a href="portfolio-description-4col.html">With describtion</a>
                                </ul>
                            </li>

                            <li><a href="portfolio-masonry.html">Masonry<i class="fa fa-angle-right"></i></a>
                                <ul class="drop-down level3">
                                    <li><a href="portfolio-masonry.html">Standard</a>
                                    <li><a href="portfolio-masonry-fullscreen.html">Fullscreen</a>
                                    <li><a href="portfolio-masonry-fullwidth.html">Fullwidth</a>
                                    <li><a href="portfolio-masonry-fullwidth-2.html">Fullwidth 2</a>
                                </ul>
                            </li>
                            <li><a href="single-project.html">Single Project<i class="fa fa-angle-right"></i></a>
                                <ul class="drop-down level3">
                                    <li><a href="single-project.html">Single Project 1</a>
                                    <li><a href="single-project-2.html">Single Project 2</a>
                                    <li><a href="single-project-3.html">Single Project 3</a>
                                    <li><a href="single-video-project.html">Single Project 4</a>
                                    <li><a href="single-video-project-2.html">Single Project 4</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="drop"><a href="shop.html">Shop</a>
                        <ul class="drop-down">
                            <li><a href="shop.html">Shop homepage</a></li>
                            <li><a href="shop-with-sidebar.html">With Left Sidebar - Grid</a></li>
                            <li><a href="shop-with-sidebar-list.html">With Left Sidebar - List</a></li>
                            <li><a href="shop-single-product.html">Product Page</a></li>
                            <li><a href="shop-cart.html">Shopping Cart</a></li>
                            <li><a href="shop-checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="megadrop"><a href="#.html">Shortcodes</a>
                        <div class="megadrop-down">
                            <div class="container">
                                <div class="dropdown">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="shortcodes-buttons.html">Buttons</a></li>
                                                <li><a href="shortcodes-typography.html">Typography</a></li>
                                                <li><a href="shortcodes-icon-list.html">Icon lists</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="shortcodes-icon-box.html">Icon boxes</a></li>
                                                <li><a href="shortcodes-promo-box.html">Promo boxes</a></li>
                                                <li><a href="shortcodes-lightbox.html">Lightbox</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul>
                                                <li><a href="shortcodes-sliders.html">Sliders</a></li>
                                                <li><a href="shortcodes-tabs.html">Tabs</a></li>
                                                <li><a href="shortcodes-alerts.html">Alert boxes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul class="last-child">
                                                <li><a href="shortcodes-toggles.html">Toggles &amp; accordions</a></li>
                                                <li><a href="shortcodes-modal.html">Modal &amp; popovers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="drop"><a href="contact.html">Contact</a>
                        <ul class="drop-down right-side">
                            <li><a href="contact.html">Contact Page 1</a></li>
                            <li><a href="contact2.html">Contact Page 2</a></li>
                        </ul>
                    </li>

                    <li class="drop"><a href="<?=Url::to(['main/login'])?>">Login</a>

                    </li>
                </ul>
            </div> <!-- end navbar-collapse -->
        </div>
    </nav>
</header>
<!-- End Header -->