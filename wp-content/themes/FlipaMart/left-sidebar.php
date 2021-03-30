		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">

			<!-- ================================== TOP NAVIGATION ================================== -->
			<div class="side-menu animate-dropdown outer-bottom-xs">


				<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>

				<nav class="yamm megamenu-horizontal" role="navigation">



					<?php big_store_product_list_categories(); ?>

					<ul class="nav">
						<li class="dropdown menu-item">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Clothing</a>
						</li>
					</ul>



			</div>












			<!-- ============================================== HOT DEALS: END ============================================== -->


			<!-- ============================================== SPECIAL OFFER ============================================== -->





			<div class="sidebar-widget outer-bottom-small wow fadeInUp">
				<h3 class="section-title">Special Offer </h3>
				<div class="sidebar-widget-body outer-top-xs">
					<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">


						<div class="item">

							<?php
							$args = array(
								'post_type' => 'product',
								'meta_key'       => '_sale_price',
								'orderby' => 'meta_value_num',
								'posts_per_page' => 5,
								'order' => 'DESC',


							);
							$query = new WP_Query($args);
							global $product;


							?>


							<?php if ($query->have_posts()) : ?>
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<?php $product = wc_get_product(get_the_ID()); ?>
									<div class="products special-product">


										<div class="product">
											<div class="product-micro">
												<div class="row product-micro-row">
													<div class="col col-xs-5">
														<div class="product-image">
															<div class="image">
																<a href="<?php the_permalink(); ?>">
																	<?php the_post_thumbnail(); ?>
																</a>
															</div><!-- /.image -->



														</div><!-- /.product-image -->



													</div><!-- /.col -->

													<div class="col col-xs-7">
														<div class="product-info">
															<h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>

															<div class="product-price">
																<span class="price">
																	<?php echo wc_price(wc_get_price_including_tax($product)); ?> </span>

															</div><!-- /.product-price -->

														</div>
													</div><!-- /.col -->


												</div><!-- /.product-micro-row -->
											</div><!-- /.product-micro -->

										</div>





									</div>
								<?php endwhile; ?>

							<?php endif; ?>

						</div>



					</div>
				</div><!-- /.sidebar-widget-body -->
			</div><!-- /.sidebar-widget -->
			<!-- ============================================== SPECIAL OFFER : END ============================================== -->
			<!-- ============================================== PRODUCT TAGS ============================================== -->
			<div class="sidebar-widget product-tag wow fadeInUp">
				<h3 class="section-title">Product tags</h3>
				<div class="sidebar-widget-body outer-top-xs">



					<?php

					$term = get_queried_object();
					@$product_category = @$term->slug;

					//Iterate through all products in this category
					$query_args = array(

						'product_cat' => $product_category,
						'post_type' => 'product',

						//Grabs ALL post
						'posts_per_page' => -1
					);

					$query = new WP_Query($query_args);
					$term_array = array();

					while ($query->have_posts()) {
						$query->the_post();
						$terms = get_the_terms(get_the_ID(), 'product_tag');
						if (!empty($terms) && !is_wp_error($terms)) {
							foreach ($terms as $term) {
								$term_array[] = $term->name;
							}
						}
					}

					//Remove any duplicates.
					$tags_unique = array_unique($term_array);

					//Sort alphabetically
					asort($tags_unique);

					//Output
					echo '<div class="tag-list">';

					foreach ($tags_unique as $unique) {
						//it's faster to "guess" the tag slug by replacing spaces with dashes and stripping special chars
						$special_characters = array("=", "+", "/", "'", ")", "(");
						$tag_slug = str_replace(" ", "-", $unique);
						$tag_slug = strtolower(str_replace($special_characters, "", $tag_slug));
						echo '<a  class="item " > ' . $unique . '</a>';
					}
					echo '</div>';

					//Reset the query
					wp_reset_postdata();
					?>

				</div><!-- /.sidebar-widget-body -->
			</div><!-- /.sidebar-widget -->
			<!-- ============================================== PRODUCT TAGS : END ============================================== -->
			<!-- ============================================== SPECIAL DEALS ============================================== -->

			<div class="sidebar-widget outer-bottom-small wow fadeInUp">
				<h3 class="section-title">Special Deals</h3>
				<div class="sidebar-widget-body outer-top-xs">
					<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">


						<div class="item">
							<?php
							$args = array(
								'post_type' => 'product',
								'meta_key'       => '_sale_price',
								'orderby' => 'meta_value_num',
								'posts_per_page' => 5,
								'order' => 'ASC',


							);
							$query = new WP_Query($args);
							global $product;


							?>


							<?php if ($query->have_posts()) : ?>
								<?php while ($query->have_posts()) : $query->the_post(); ?>
									<?php $product = wc_get_product(get_the_ID()); ?>
									<div class="products special-product">

										<div class="product">
											<div class="product-micro">
												<div class="row product-micro-row">
													<div class="col col-xs-5">
														<div class="product-image">
															<div class="image">
																<a href="<?php the_permalink(); ?>">
																	<?php the_post_thumbnail(); ?>
																	<div class="zoom-overlay"></div>
																</a>
															</div><!-- /.image -->



														</div><!-- /.product-image -->
													</div><!-- /.col -->
													<div class="col col-xs-7">
														<div class="product-info">
															<h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
															<div class="rating rateit-small"></div>
															<div class="product-price">
																<span class="price">
																	<?php echo wc_price(wc_get_price_including_tax($product)); ?> </span>

															</div><!-- /.product-price -->

														</div>
													</div><!-- /.col -->
												</div><!-- /.product-micro-row -->
											</div><!-- /.product-micro -->

										</div>

									</div>
								<?php endwhile; ?>

							<?php endif; ?>

						</div>



					</div>
				</div><!-- /.sidebar-widget-body -->
			</div><!-- /.sidebar-widget -->
			<!-- ============================================== SPECIAL DEALS : END ============================================== -->
			<!-- ============================================== NEWSLETTER ============================================== -->
			<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
				<h3 class="section-title">Newsletters</h3>
				<div class="sidebar-widget-body outer-top-xs">
					<p>Sign Up for Our Newsletter!</p>
					<form role="form">
						<div class="form-group">
							<label class="sr-only" for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
						</div>
						<button class="btn btn-primary">Subscribe</button>
					</form>
				</div><!-- /.sidebar-widget-body -->
			</div><!-- /.sidebar-widget -->
			<!-- ============================================== NEWSLETTER: END ============================================== -->

			<!-- ============================================== Testimonials============================================== -->
			<div class="sidebar-widget  wow fadeInUp outer-top-vs ">
				<div id="advertisement" class="advertisement">
					<div class="item">
						<div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/member1.png" alt="Image"></div>
						<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
						<div class="clients_author">John Doe <span>Abc Company</span> </div><!-- /.container-fluid -->
					</div><!-- /.item -->

					<div class="item">
						<div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/member3.png" alt="Image"></div>
						<div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
						<div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
					</div><!-- /.item -->

					<div class="item">
						<div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/member2.png" alt="Image"></div>
						<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
						<div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div><!-- /.container-fluid -->
					</div><!-- /.item -->

				</div><!-- /.owl-carousel -->
			</div>

			<!-- ============================================== Testimonials: END ============================================== -->

			<div class="home-banner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/LHS-banner.jpg" alt="Image">
			</div>




		</div><!-- /.sidemenu-holder -->