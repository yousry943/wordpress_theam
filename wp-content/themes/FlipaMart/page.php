<!DOCTYPE html>
<html lang="<?php language_attributes();  ?>">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title> <?php bloginfo('name') ?> | <?php bloginfo('description'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/blue.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/rateit.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap-select.min.css">




    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <?php get_header() ?>

    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Blog</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-9">


                        <?php
                        // Start the Loop.
                        while (have_posts()) :
                            the_post();
                        ?>
                            <div class="blog-post  wow fadeInUp">
                                <a href="blog-details.html"><img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog-post/blog_big_01.jpg" alt=""></a>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
                                <?php the_content() ?>
                            </div>
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }

                        endwhile; // End the loop.
                        ?>






                        <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">

                            <div class="text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul><!-- /.list-inline -->
                                </div><!-- /.pagination-container -->
                            </div><!-- /.text-right -->

                        </div><!-- /.filters-container -->

                    </div>

                    <?php get_template_part('right-sidebar') ?>
                </div>
            </div>
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand1.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand2.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand3.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand4.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand5.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand6.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand2.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand4.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand1.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brands/brand5.png" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
    </div>
    <!-- ============================================================= FOOTER ============================================================= -->
    <?php get_footer() ?>
    <!-- ============================================================= FOOTER : END============================================================= -->


    <!-- For demo purposes – can be removed on production -->


    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery-1.11.1.min.js"></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/owl.carousel.min.js"></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/echo.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/lightbox.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/scripts.js"></script>




</body>

</html>