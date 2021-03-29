<?php
/**
 * View General
 *
 * @package Themehunk
 * @subpackage  Big Store
 * @since 1.0.0
 */
?>
<div class="big-store-container big-store-welcome">
		<div id="poststuff">
			<div id="post-body" class="columns-1">
				<div id="post-body-content">
					<!-- All WordPress Notices below header -->
					<h1 class="screen-reader-text"><?php esc_html_e( 'Big Store', 'big-store' ); ?> </h1>
					<div class="tabs-list">
					<a href="#big-store-recommend-plugins" class="tab active" data-id="recommend"><?php esc_html_e( 'Recommend Plugins', 'big-store' ); ?></a> 
					<a href="#big-store-useful-plugins" class="tab" data-id="useful"><?php esc_html_e( 'Useful Plugins', 'big-store' ); ?></a>
					</div>
						<?php do_action( 'big_store_welcome_page_content_before' ); ?>
                        <div class="big-store-content">
						<?php do_action( 'big_store_welcome_page_main_content' ); ?>
                         </div>
						<?php do_action( 'big_store_welcome_page_content_after' ); ?>
				</div>
			</div>
			<!-- /post-body -->
			<br class="clear">
		</div>


</div>
