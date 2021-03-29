(function ($){
    $(document).ready( function () {
		wp.customize.section( br_gridlist_customizer_helper.section, function( section ) {

			section.expanded.bind( function( isExpanded ) {
				if ( isExpanded ) {
					// show_options( wp.customize( br_gridlist_customizer_helper.section ).get() );
					wp.customize.previewer.previewUrl.set( br_gridlist_customizer_helper.shop_page );
				}
				// if ( wp.customize( 'br_gridlist_notices_style' ).get() == 'default' && !wp.customize( 'br_gridlist_fix_duplicate' ).get() ) {
				// 		$('#customize-control-br_gridlist_fix_duplicate_page').hide();
				// }
			} );
	
			wp.customize( 'br_gridlist_columns', function( setting ) {
				setting.bind( function( value ) {
					save_option( 'br_gridlist_columns', value, value );
				} );
			} );
		
			wp.customize( 'br_gridlist_style', function( setting ) {
				setting.bind( function( value ) {
					save_option( 'br_gridlist_style', value, value );
				} );
			} );

			function save_option( key, value, notice_style, show_page ) {
		        $.ajax({
		            type: 'POST',
		            url: br_gridlist_customizer_helper.ajax_url,
		            data: {
		            	'action': 'br_gridlist_customizer_save',
		            	'key': key,
		            	'value': value
		            },
		            success: function(result) {
						show_options();
		              	return false;
		            }
		        });
			}

			function show_options() {
			// 	var 
			// 		common_hooks = '#customize-control-br_gridlist_notices_top, #customize-control-br_gridlist_notices_bottom, #customize-control-br_gridlist_notices_right, #customize-control-br_gridlist_notices_left, #customize-control-br_gridlist_notices_color, #customize-control-br_gridlist_notices_bg_color, #customize-control-br_gridlist_notices_template',
			// 		notice_options = {
			// 			'default': '#customize-control-br_gridlist_fix_duplicate, #customize-control-br_gridlist_fix_duplicate_page',
			// 			'attach': common_hooks + ', #customize-control-br_gridlist_attach_notices',
			// 			'advanced_hook': common_hooks + ', #customize-control-br_gridlist_notices_cart_hook, #customize-control-br_gridlist_notices_shop_hook, #customize-control-br_gridlist_notices_product_hook'
			// 		};

			// 	$('[id^="customize-control-br_gridlist_"]').not('#customize-control-br_gridlist_notices_style').hide();
			// 	$( notice_options[notice_style] ).slideDown();
				wp.customize.previewer.previewUrl.set( br_gridlist_customizer_helper.shop_page );
			}

		} );
  	});

})(jQuery);
