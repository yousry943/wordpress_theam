(function ($){
    $(document).ready( function () {

		wp.customize.bind( 'ready', function() {
    		update_styles();
		} );
		
	});
	// 	wp.customize( 'br_gridlist_attach_notices', function( setting ) {
	// 		setting.bind( function( value ) {
	// 			var gridlist_block = $('.br_gridlist_block');

	// 			var css = br_gridlist_parseCSS( $('#br_gridlist_template_margins').html() );

	// 			switch ( value ) {
	// 				case 'attach_top':
	// 					gridlist_block.removeClass('attach_above_content').removeClass('sticky').removeAttr('style');
						
	// 					css['.br_gridlist_block']['margin-top'] = 0;
	// 					css['.br_gridlist_block']['margin-left'] = 0;
	// 					css['.br_gridlist_block']['margin-right'] = 0;
	// 					css['.br_gridlist_block']['top'] = wp.customize( 'br_gridlist_block_top' ).get() + 'px';
	// 					css['.br_gridlist_block']['bottom'] = 'auto';
	// 					css['.br_gridlist_block']['left'] = wp.customize( 'br_gridlist_block_left' ).get() + 'px';
	// 					css['.br_gridlist_block']['right'] = wp.customize( 'br_gridlist_block_right' ).get() + 'px';

	// 					$('#br_gridlist_template_margins').html( br_gridlist_restoreCSS(css) );
	// 				break;
					
	// 				case 'attach_bottom':
	// 					gridlist_block.removeClass('attach_above_content').removeClass('sticky').removeAttr('style');

	// 					css['.br_gridlist_block']['margin-left'] = 0;
	// 					css['.br_gridlist_block']['margin-right'] = 0;
	// 					css['.br_gridlist_block']['top'] = 'auto';
	// 					css['.br_gridlist_block']['bottom'] = wp.customize( 'br_gridlist_block_bottom' ).get() + 'px';
	// 					css['.br_gridlist_block']['left'] = wp.customize( 'br_gridlist_block_left' ).get() + 'px';
	// 					css['.br_gridlist_block']['right'] = wp.customize( 'br_gridlist_block_right' ).get() + 'px';

	// 					$('#br_gridlist_template_margins').html( br_gridlist_restoreCSS(css) );
	// 				break;
					
	// 				case 'attach_sticky':
	// 					$('.br_gridlist_block').addClass('attach_above_content').removeAttr('style');

	// 					css['.br_gridlist_block']['margin-top'] = wp.customize( 'br_gridlist_block_top' ).get() + 'px';
	// 					css['.br_gridlist_block']['margin-left'] = wp.customize( 'br_gridlist_block_left' ).get() + 'px';
	// 					css['.br_gridlist_block']['margin-right'] = wp.customize( 'br_gridlist_block_right' ).get() + 'px';
	// 					css['.br_gridlist_block']['top'] = 0;
	// 					css['.br_gridlist_block']['bottom'] = 'auto';
	// 					css['.br_gridlist_block']['left'] = 'auto';
	// 					css['.br_gridlist_block']['right'] = 'auto';
			
	// 					$('#br_gridlist_template_margins').html( br_gridlist_restoreCSS(css) );
	// 					br_gridlist_sticky_notes();
	// 				break;

	// 				default:
	// 				break;
	// 			}
	// 		} );
	// 	} );

	// 	wp.customize( 'br_gridlist_block_top', function( setting ) {
	// 		setting.bind( function( value ) {
	// 			if ( wp.customize( 'br_gridlist_attach_notices' ).get() != 'attach_bottom' ) {
	// 				set_margin( 'top', value );
	// 			}
	// 		} );
	// 	} );

	// 	wp.customize( 'br_gridlist_block_bottom', function( setting ) {
	// 		setting.bind( function( value ) {
	// 			if ( wp.customize( 'br_gridlist_attach_notices' ).get() == 'attach_bottom' ) {
	// 				var css = br_gridlist_parseCSS( $('#br_gridlist_template_margins').html() );
	// 				css['.br_gridlist_block']['bottom'] = value + 'px';
	// 				$('#br_gridlist_template_margins').html( br_gridlist_restoreCSS(css) );
	// 			} else if ( wp.customize( 'br_gridlist_block_style' ).get() != 'attach' ) {
	// 				var css = br_gridlist_parseCSS( $('#br_gridlist_template_margins').html() );
	// 				css['.br_gridlist_block']['margin-bottom'] = value + 'px';
	// 				$('#br_gridlist_template_margins').html( br_gridlist_restoreCSS(css) );
	// 			}
	// 		} );
	// 	} );

	// 	wp.customize( 'br_gridlist_block_right', function( setting ) {
	// 		setting.bind( function( value ) {
	// 			set_margin( 'right', value );
	// 		} );
	// 	} );

	// 	wp.customize( 'br_gridlist_block_left', function( setting ) {
	// 		setting.bind( function( value ) {
	// 			set_margin( 'left', value );
	// 		} );
	// 	} );

	// 	wp.customize( 'br_gridlist_block_bg_color', function( setting ) {
	// 		setting.bind( function() {
	// 			update_styles();
	// 		} );
	// 	} );

	// 	wp.customize( 'br_gridlist_block_color', function( setting ) {
	// 		setting.bind( function() {
	// 			update_styles();
	// 		} );
	// 	} );

	// 	wp.customize( 'br_gridlist_block_template', function( setting ) {
	// 		setting.bind( function() {
	// 			update_styles();
	// 		} );
	// 	} );

 //  	});

 //  	function set_margin( side, value ) {
	// 	var 
	// 		css = br_gridlist_parseCSS( $('#br_gridlist_template_margins').html() ),
	// 		style = ( wp.customize( 'br_gridlist_block_style' ).get() != 'attach' 
	// 			|| wp.customize( 'br_gridlist_attach_notices' ).get() == 'attach_sticky' ) 
	// 			? 'margin-' + side : side;

	// 	css['.br_gridlist_block'][style] = value + 'px';
	// 	$('#br_gridlist_template_margins').html( br_gridlist_restoreCSS(css) );
	// 	$(window).scrollTop(0);
	// 	$('.br_gridlist_block').removeClass('sticky').removeAttr('style');
	// 	br_gridlist_sticky_notes();
 //  	}

 //  	function update_styles() {
 //  		var 
 //  			template = { ...br_gridlist_customizer_preview_helper.templates[ wp.customize('br_gridlist_block_template').get() ]},
 //  			bg_color = wp.customize('br_gridlist_block_bg_color').get(),
 //  			text_color = wp.customize('br_gridlist_block_color').get(),
 //  			css = br_gridlist_parseCSS( $('#br_gridlist_template_styles').html() ),
 //  			core_css = css['.br_gridlist_block'],
 //  			template_style = '';

	// 	template['.br_gridlist_block'] = 
	// 		'background-color: ' + bg_color + ';' +
	// 		'color: ' + text_color + ';' + template['.br_gridlist_block'];

	// 	for ( var element in template ) {
	// 		let style_adjustments = template[element].match(/[^{]+(?=\})/g);

	// 		if ( style_adjustments !== null ) {
	// 			for ( let i = style_adjustments.length-1; i >= 0; i-- ) {
	// 				let style_adjustment = style_adjustments[i].split(" ");
	
	// 	          	switch ( style_adjustment[0] ) {
 //    		          	case 'adjust_brightness':
 //            		  		template[element] = template[element].replace( '{' + style_adjustments[i] + '}', 
 //              					adjust_brightness( bg_color, parseInt( style_adjustment[1] ) ) );
	// 	              	break;

	// 	              	case 'main_color':
 //    		          		template[element] = template[element].replace( '{' + style_adjustments[i] + '}', bg_color );
 //            		  	break;

	// 	              	case 'plugin_dir_url':
 //    		          		template[element] = template[element].replace( '{' + style_adjustments[i] + '}', 
 //            		  			br_gridlist_customizer_preview_helper.plugin_dir );
	// 	              	break;

 //    		          	case 'replace_brightness':
 //            		  		let color = adjust_brightness( bg_color, parseInt( style_adjustment[1] ) ).replace( '#', '%23' );
 //              					template[element] = template[element].replace( '{' + style_adjustments[i] + '}', color );
	// 	              	break;

 //    		          	default:
 //            		  	break;
 //          			}
	// 			}
	// 		}
	// 		template_style += element + ' {' + template[element] + ' }\r\n';
	// 	}
 //  		$('#br_gridlist_template_styles').html(template_style);
 //  	}

	// function adjust_brightness(hexcolor, steps){ // steps 0-255
	// 	return '#' + hexcolor.replace(/^#/, '').replace(/../g, hexcolor => ('0'+Math.min(255, Math.max(0, parseInt(hexcolor, 16) + steps)).toString(16)).substr(-2));
	// }

})(jQuery); 