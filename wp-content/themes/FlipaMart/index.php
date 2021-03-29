<!DOCTYPE html>
<html lang="<?php language_attributes();  ?>">

<head>
	<!-- Meta -->
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="MediaCenter, Template, eCommerce">
	<meta name="robots" content="all">

	<title> <?php bloginfo('name') ?> | <?php bloginfo('description'); ?></title>


	<?php get_header(); ?>

	<!-- ============================================== HEADER : END ============================================== -->
	<div class="body-content outer-top-xs" id="top-banner-and-menu">
		<div class="container">
			<div class="row">
				<!-- ============================================== SIDEBAR ============================================== -->
				<?php get_template_part('left-sidebar'); ?>
				<!-- ============================================== SIDEBAR : END ============================================== -->

				<!-- ============================================== CONTENT ============================================== -->
				<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
					<!-- ========================================== SECTION – HERO ========================================= -->

					<div id="hero">
						<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

							<div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/sliders/01.jpg);">
								<div class="container-fluid">
									<div class="caption bg-color vertical-center text-left">
										<div class="slider-header fadeInDown-1">Top Brands</div>
										<div class="big-text fadeInDown-1">
											New Collections
										</div>

										<div class="excerpt fadeInDown-2 hidden-xs">

											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

										</div>
										<div class="button-holder fadeInDown-3">
											<a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
										</div>
									</div><!-- /.caption -->
								</div><!-- /.container-fluid -->
							</div><!-- /.item -->

							<div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/sliders/02.jpg);">
								<div class="container-fluid">
									<div class="caption bg-color vertical-center text-left">
										<div class="slider-header fadeInDown-1">Spring 2016</div>
										<div class="big-text fadeInDown-1">
											Women <span class="highlight">Fashion</span>
										</div>

										<div class="excerpt fadeInDown-2 hidden-xs">

											<span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span>

										</div>
										<div class="button-holder fadeInDown-3">
											<a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
										</div>
									</div><!-- /.caption -->
								</div><!-- /.container-fluid -->
							</div><!-- /.item -->



						</div><!-- /.owl-carousel -->
					</div>

					<!-- ========================================= SECTION – HERO : END ========================================= -->

					<!-- ============================================== INFO BOXES ============================================== -->
					<div class="info-boxes wow fadeInUp">
						<div class="info-boxes-inner">
							<div class="row">
								<div class="col-md-6 col-sm-4 col-lg-4">
									<div class="info-box">
										<div class="row">

											<div class="col-xs-12">
												<h4 class="info-box-heading green">money back</h4>
											</div>
										</div>
										<h6 class="text">30 Days Money Back Guarantee</h6>
									</div>
								</div><!-- .col -->

								<div class="hidden-md col-sm-4 col-lg-4">
									<div class="info-box">
										<div class="row">

											<div class="col-xs-12">
												<h4 class="info-box-heading green">free shipping</h4>
											</div>
										</div>
										<h6 class="text">Shipping on orders over $99</h6>
									</div>
								</div><!-- .col -->

								<div class="col-md-6 col-sm-4 col-lg-4">
									<div class="info-box">
										<div class="row">

											<div class="col-xs-12">
												<h4 class="info-box-heading green">Special Sale</h4>
											</div>
										</div>
										<h6 class="text">Extra $5 off on all items </h6>
									</div>
								</div><!-- .col -->
							</div><!-- /.row -->
						</div><!-- /.info-boxes-inner -->

					</div><!-- /.info-boxes -->
					<!-- ============================================== INFO BOXES : END ============================================== -->
					<!-- ============================================== SCROLL TABS ============================================== -->
					<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
						<div class="more-info-tab clearfix ">
							<h3 class="new-product-title pull-left">New Products</h3>
							<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
								<li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
								<li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
								<li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
								<li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
							</ul><!-- /.nav-tabs -->
						</div>

						<div class="tab-content outer-top-xs">
							<div class="tab-pane in active" id="all">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p1.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag new"><span>new</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p2.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p4.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag sale"><span>sale</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p3.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag sale"><span>sale</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p30.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p29.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag new"><span>new</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->
									</div><!-- /.home-owl-carousel -->
								</div><!-- /.product-slider -->
							</div><!-- /.tab-pane -->

							<div class="tab-pane" id="smartphone">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
										<?php
										$params = array(
											'posts_per_page' => 5,
											'post_type' => 'product'
										);
										$wc_query = new WP_Query($params);
										?>
										<?php if ($wc_query->have_posts()) : ?>
											<?php while ($wc_query->have_posts()) :
												$wc_query->the_post(); ?>

												<div class="item item-carousel">
													<div class="products">

														<div class="product">

															<div class="product-image">
																<div class="image">
																	<?php the_post_thumbnail(); ?>

																</div><!-- /.image -->

																<div class="tag sale"><span>sale</span></div>
															</div><!-- /.product-image -->


															<div class="product-info text-left">
																<h3 class="name"><a href="detail.html"><?php the_title(); ?></a></h3>
																<div class="rating rateit-small"></div>
																<div class="description"></div>

																<div class="product-price">
																	<span class="price">
																		<?php $price = get_post_meta(get_the_ID(), '_price', true); ?>
																		<p><?php echo wc_price($price); ?></p>


																	</span>


																</div><!-- /.product-price -->

															</div><!-- /.product-info -->
															<div class="cart clearfix animate-effect">
																<div class="action">
																	<ul class="list-unstyled">
																		<li class="add-cart-button btn-group">
																			<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																				<i class="fa fa-shopping-cart"></i>
																			</button>
																			<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																		</li>

																		<li class="lnk wishlist">
																			<a class="add-to-cart" href="detail.html" title="Wishlist">
																				<i class="icon fa fa-heart"></i>
																			</a>
																		</li>

																		<li class="lnk">
																			<a class="add-to-cart" href="detail.html" title="Compare">
																				<i class="fa fa-signal" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div><!-- /.action -->
															</div><!-- /.cart -->


														</div><!-- /.product -->

													</div><!-- /.products -->
												</div><!-- /.item -->
											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>
										<?php else :  ?>

											<?php _e('No Products'); ?>

										<?php endif; ?>

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p6.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag new"><span>new</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p7.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag sale"><span>sale</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->



									</div><!-- /.home-owl-carousel -->
								</div><!-- /.product-slider -->
							</div><!-- /.tab-pane -->

							<div class="tab-pane" id="laptop">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p11.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag new"><span>new</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p12.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag new"><span>new</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p13.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag sale"><span>sale</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p14.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p15.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p16.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag sale"><span>sale</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->
									</div><!-- /.home-owl-carousel -->
								</div><!-- /.product-slider -->
							</div><!-- /.tab-pane -->

							<div class="tab-pane" id="apple">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p18.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag sale"><span>sale</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p18.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p17.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag sale"><span>sale</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p16.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag new"><span>new</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p13.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag new"><span>new</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->

										<div class="item item-carousel">
											<div class="products">

												<div class="product">
													<div class="product-image">
														<div class="image">
															<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p14.jpg" alt=""></a>
														</div><!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div><!-- /.product-image -->


													<div class="product-info text-left">
														<h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">
															<span class="price">
																$450.99 </span>
															<span class="price-before-discount">$ 800</span>

														</div><!-- /.product-price -->

													</div><!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="add-cart-button btn-group">
																	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																		<i class="fa fa-shopping-cart"></i>
																	</button>
																	<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

																</li>

																<li class="lnk wishlist">
																	<a class="add-to-cart" href="detail.html" title="Wishlist">
																		<i class="icon fa fa-heart"></i>
																	</a>
																</li>

																<li class="lnk">
																	<a class="add-to-cart" href="detail.html" title="Compare">
																		<i class="fa fa-signal" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div><!-- /.action -->
													</div><!-- /.cart -->
												</div><!-- /.product -->

											</div><!-- /.products -->
										</div><!-- /.item -->
									</div><!-- /.home-owl-carousel -->
								</div><!-- /.product-slider -->
							</div><!-- /.tab-pane -->

						</div><!-- /.tab-content -->
					</div><!-- /.scroll-tabs -->
					<!-- ============================================== SCROLL TABS : END ============================================== -->
					<!-- ============================================== WIDE PRODUCTS ============================================== -->
					<div class="wide-banners wow fadeInUp outer-bottom-xs">
						<div class="row">
							<div class="col-md-7 col-sm-7">
								<div class="wide-banner cnt-strip">
									<div class="image">
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-banner1.jpg" alt="">
									</div>

								</div><!-- /.wide-banner -->
							</div><!-- /.col -->
							<div class="col-md-5 col-sm-5">
								<div class="wide-banner cnt-strip">
									<div class="image">
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-banner2.jpg" alt="">
									</div>

								</div><!-- /.wide-banner -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.wide-banners -->

					<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
					<!-- ============================================== FEATURED PRODUCTS ============================================== -->
					<section class="section featured-product wow fadeInUp">
						<h3 class="section-title">Featured products</h3>
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


							<?php
							$args = array(
								'posts_per_page' => -1,
								'post_type'      => 'product',
								'post_status'    => 'publish',
								'tax_query'      => array(
									array(
										'taxonomy' => 'product_visibility',
										'field'    => 'name',
										'terms'    => 'featured',
										'operator' => 'IN',
									),
								)
							);
							$featured_product = new WP_Query($args);

							if ($featured_product->have_posts()) :



								while ($featured_product->have_posts()) : $featured_product->the_post();

									$post_thumbnail_id     = get_post_thumbnail_id();
									$product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'shop-feature');
									$product_thumbnail_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
							?>

									<div class="item item-carousel">
										<div class="products">

											<div class="product">
												<div class="product-image">
													<div class="image">


														<a href="<?php echo $product_thumbnail[0]; ?>"><img src="<?php echo $product_thumbnail[0]; ?>" alt="<?php echo $product_thumbnail_alt; ?>"></a>

													</div><!-- /.image -->

													<div class="tag hot"><span>hot</span></div>
												</div><!-- /.product-image -->


												<div class="product-info text-left">
													<h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
													<div class="rating rateit-small"></div>
													<div class="description"></div>

													<div class="product-price">
														<span class="price">
															$450.99 </span>
														<span class="price-before-discount">$ 800</span>

													</div><!-- /.product-price -->

												</div><!-- /.product-info -->

												<div class="cart clearfix animate-effect">
													<div class="action">
														<ul class="list-unstyled">
															<li class="add-cart-button btn-group">
																<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																	<i class="fa fa-shopping-cart"></i>
																</button>
																<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

															</li>

															<li class="lnk wishlist">
																<a class="add-to-cart" href="detail.html" title="Wishlist">
																	<i class="icon fa fa-heart"></i>
																</a>
															</li>

															<li class="lnk">
																<a class="add-to-cart" href="detail.html" title="Compare">
																	<i class="fa fa-signal" aria-hidden="true"></i>
																</a>
															</li>
														</ul>
													</div><!-- /.action -->
												</div><!-- /.cart -->

											</div><!-- /.product -->

										</div><!-- /.products -->
									</div><!-- /.item -->

							<?php
								endwhile;



							endif;

							wp_reset_query();
							?>



						</div><!-- /.home-owl-carousel -->
					</section><!-- /.section -->
					<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
					<!-- ============================================== WIDE PRODUCTS ============================================== -->
					<div class="wide-banners wow fadeInUp outer-bottom-xs">
						<div class="row">

							<div class="col-md-12">
								<div class="wide-banner cnt-strip">
									<div class="image">
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-banner.jpg" alt="">
									</div>
									<div class="strip strip-text">
										<div class="strip-inner">
											<h2 class="text-right">New Mens Fashion<br>
												<span class="shopping-needs">Save up to 40% off</span>
											</h2>
										</div>
									</div>
									<div class="new-label">
										<div class="text">NEW</div>
									</div><!-- /.new-label -->
								</div><!-- /.wide-banner -->
							</div><!-- /.col -->

						</div><!-- /.row -->
					</div><!-- /.wide-banners -->
					<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
					<!-- ============================================== BEST SELLER ============================================== -->

					<div class="best-deal wow fadeInUp outer-bottom-xs">
						<h3 class="section-title">Best seller</h3>
						<div class="sidebar-widget-body outer-top-xs">
							<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">



								<div class="item">
									<div class="products best-product">

										<?php
										$args = array(
											'post_type' => 'product',
											'meta_key' => 'total_sales',
											'orderby' => 'meta_value_num',
											'posts_per_page' => 1,
										);
										$loop = new WP_Query($args);
										while ($loop->have_posts()) : $loop->the_post();
											global $product; ?>
											<div class="product">
												<div class="product-micro">
													<div class="row product-micro-row">
														<div class="col col-xs-5">
															<div class="product-image">
																<div class="image">
																	<a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">



																		<?php if (has_post_thumbnail($loop->post->ID))
																			echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
																		else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="product placeholder Image" width="65px" height="115px" />'; ?>







																	</a>
																</div><!-- /.image -->



															</div><!-- /.product-image -->
														</div><!-- /.col -->
														<div class="col2 col-xs-7">
															<div class="product-info">
																<h3 class="name"><a href="#"><?php the_title(); ?></a></h3>
																<div class="rating rateit-small"></div>
																<div class="product-price">

																	<span class="price">
																		$450.99 </span>

																</div><!-- /.product-price -->

															</div>
														</div><!-- /.col -->
													</div><!-- /.product-micro-row -->
												</div><!-- /.product-micro -->

											</div>

										<?php endwhile; ?>
										<?php wp_reset_query(); ?>

									</div>
								</div>








							</div>
						</div><!-- /.sidebar-widget-body -->
					</div><!-- /.sidebar-widget -->
					<!-- ============================================== BEST SELLER : END ============================================== -->

					<!-- ============================================== BLOG SLIDER ============================================== -->
					<section class="section latest-blog outer-bottom-vs wow fadeInUp">
						<h3 class="section-title">latest form blog</h3>
						<div class="blog-slider-container outer-top-xs">
							<div class="owl-carousel blog-slider custom-carousel">



								<?php
								$args = array(
									'posts_per_page' => 3, /* how many post you need to display */
									'offset' => 0,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post', /* your post type name */
									'post_status' => 'publish'
								);
								$query = new WP_Query($args);
								?>


								<?php
								if ($query->have_posts()) :
									while ($query->have_posts()) : $query->the_post();
								?>
										<div class="item">
											<div class="blog-post">
												<div class="blog-post-image">
													<div class="image">
														<a href="<?php the_permalink(); ?>">
													<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                                                  <img src="<?php echo $url ?>" />
														</a>
													</div>
												</div><!-- /.blog-post-image -->


												<div class="blog-post-info text-left">
													<h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
													<span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
													<p class="text"> <?php echo get_the_post_thumbnail('thumbnail'); ?></p>
													<a href="<?php the_permalink(); ?>" class="lnk btn btn-primary">Read more</a>
												</div><!-- /.blog-post-info -->


											</div><!-- /.blog-post -->
										</div><!-- /.item -->
								<?php
									endwhile;
								endif;


								?>



							</div><!-- /.owl-carousel -->
						</div><!-- /.blog-slider-container -->
					</section><!-- /.section -->
					<!-- ============================================== BLOG SLIDER : END ============================================== -->

					<!-- ============================================== FEATURED PRODUCTS ============================================== -->
					<section class="section wow fadeInUp new-arriavls">
						<h3 class="section-title">New Arrivals</h3>
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

							<div class="item item-carousel">
								<div class="products">

									<div class="product">
										<div class="product-image">
											<div class="image">
												<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p19.jpg" alt=""></a>
											</div><!-- /.image -->

											<div class="tag new"><span>new</span></div>
										</div><!-- /.product-image -->


										<div class="product-info text-left">
											<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>

											<div class="product-price">
												<span class="price">
													$450.99 </span>
												<span class="price-before-discount">$ 800</span>

											</div><!-- /.product-price -->

										</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="add-cart-button btn-group">
														<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
															<i class="fa fa-shopping-cart"></i>
														</button>
														<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

													</li>

													<li class="lnk wishlist">
														<a class="add-to-cart" href="detail.html" title="Wishlist">
															<i class="icon fa fa-heart"></i>
														</a>
													</li>

													<li class="lnk">
														<a class="add-to-cart" href="detail.html" title="Compare">
															<i class="fa fa-signal" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div><!-- /.action -->
										</div><!-- /.cart -->
									</div><!-- /.product -->

								</div><!-- /.products -->
							</div><!-- /.item -->

							<div class="item item-carousel">
								<div class="products">

									<div class="product">
										<div class="product-image">
											<div class="image">
												<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p28.jpg" alt=""></a>
											</div><!-- /.image -->

											<div class="tag new"><span>new</span></div>
										</div><!-- /.product-image -->


										<div class="product-info text-left">
											<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>

											<div class="product-price">
												<span class="price">
													$450.99 </span>
												<span class="price-before-discount">$ 800</span>

											</div><!-- /.product-price -->

										</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="add-cart-button btn-group">
														<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
															<i class="fa fa-shopping-cart"></i>
														</button>
														<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

													</li>

													<li class="lnk wishlist">
														<a class="add-to-cart" href="detail.html" title="Wishlist">
															<i class="icon fa fa-heart"></i>
														</a>
													</li>

													<li class="lnk">
														<a class="add-to-cart" href="detail.html" title="Compare">
															<i class="fa fa-signal" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div><!-- /.action -->
										</div><!-- /.cart -->
									</div><!-- /.product -->

								</div><!-- /.products -->
							</div><!-- /.item -->

							<div class="item item-carousel">
								<div class="products">

									<div class="product">
										<div class="product-image">
											<div class="image">
												<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p30.jpg" alt=""></a>
											</div><!-- /.image -->

											<div class="tag hot"><span>hot</span></div>
										</div><!-- /.product-image -->


										<div class="product-info text-left">
											<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>

											<div class="product-price">
												<span class="price">
													$450.99 </span>
												<span class="price-before-discount">$ 800</span>

											</div><!-- /.product-price -->

										</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="add-cart-button btn-group">
														<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
															<i class="fa fa-shopping-cart"></i>
														</button>
														<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

													</li>

													<li class="lnk wishlist">
														<a class="add-to-cart" href="detail.html" title="Wishlist">
															<i class="icon fa fa-heart"></i>
														</a>
													</li>

													<li class="lnk">
														<a class="add-to-cart" href="detail.html" title="Compare">
															<i class="fa fa-signal" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div><!-- /.action -->
										</div><!-- /.cart -->
									</div><!-- /.product -->

								</div><!-- /.products -->
							</div><!-- /.item -->

							<div class="item item-carousel">
								<div class="products">

									<div class="product">
										<div class="product-image">
											<div class="image">
												<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p1.jpg" alt=""></a>
											</div><!-- /.image -->

											<div class="tag hot"><span>hot</span></div>
										</div><!-- /.product-image -->


										<div class="product-info text-left">
											<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>

											<div class="product-price">
												<span class="price">
													$450.99 </span>
												<span class="price-before-discount">$ 800</span>

											</div><!-- /.product-price -->

										</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="add-cart-button btn-group">
														<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
															<i class="fa fa-shopping-cart"></i>
														</button>
														<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

													</li>

													<li class="lnk wishlist">
														<a class="add-to-cart" href="detail.html" title="Wishlist">
															<i class="icon fa fa-heart"></i>
														</a>
													</li>

													<li class="lnk">
														<a class="add-to-cart" href="detail.html" title="Compare">
															<i class="fa fa-signal" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div><!-- /.action -->
										</div><!-- /.cart -->
									</div><!-- /.product -->

								</div><!-- /.products -->
							</div><!-- /.item -->

							<div class="item item-carousel">
								<div class="products">

									<div class="product">
										<div class="product-image">
											<div class="image">
												<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p2.jpg" alt=""></a>
											</div><!-- /.image -->

											<div class="tag sale"><span>sale</span></div>
										</div><!-- /.product-image -->


										<div class="product-info text-left">
											<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>

											<div class="product-price">
												<span class="price">
													$450.99 </span>
												<span class="price-before-discount">$ 800</span>

											</div><!-- /.product-price -->

										</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="add-cart-button btn-group">
														<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
															<i class="fa fa-shopping-cart"></i>
														</button>
														<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

													</li>

													<li class="lnk wishlist">
														<a class="add-to-cart" href="detail.html" title="Wishlist">
															<i class="icon fa fa-heart"></i>
														</a>
													</li>

													<li class="lnk">
														<a class="add-to-cart" href="detail.html" title="Compare">
															<i class="fa fa-signal" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div><!-- /.action -->
										</div><!-- /.cart -->
									</div><!-- /.product -->

								</div><!-- /.products -->
							</div><!-- /.item -->

							<div class="item item-carousel">
								<div class="products">

									<div class="product">
										<div class="product-image">
											<div class="image">
												<a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p3.jpg" alt=""></a>
											</div><!-- /.image -->

											<div class="tag sale"><span>sale</span></div>
										</div><!-- /.product-image -->


										<div class="product-info text-left">
											<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>

											<div class="product-price">
												<span class="price">
													$450.99 </span>
												<span class="price-before-discount">$ 800</span>

											</div><!-- /.product-price -->

										</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="add-cart-button btn-group">
														<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
															<i class="fa fa-shopping-cart"></i>
														</button>
														<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

													</li>

													<li class="lnk wishlist">
														<a class="add-to-cart" href="detail.html" title="Wishlist">
															<i class="icon fa fa-heart"></i>
														</a>
													</li>

													<li class="lnk">
														<a class="add-to-cart" href="detail.html" title="Compare">
															<i class="fa fa-signal" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div><!-- /.action -->
										</div><!-- /.cart -->
									</div><!-- /.product -->

								</div><!-- /.products -->
							</div><!-- /.item -->
						</div><!-- /.home-owl-carousel -->
					</section><!-- /.section -->
					<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

				</div><!-- /.homebanner-holder -->
				<!-- ============================================== CONTENT : END ============================================== -->
			</div><!-- /.row -->
			<!-- ============================================== BRANDS CAROUSEL ============================================== -->
			<div id="brands-carousel" class="logo-slider wow fadeInUp">

				<div class="logo-slider-inner">
					<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
						<div class="item m-t-15">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item m-t-10">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand2.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand3.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand4.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand5.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand6.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand2.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand4.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand1.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->
					</div><!-- /.owl-carousel #logo-slider -->
				</div><!-- /.logo-slider-inner -->

			</div><!-- /.logo-slider -->
			<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
		</div><!-- /.container -->
	</div><!-- /#top-banner-and-menu -->





	<?php get_footer() ?>