<?php
//*** supoport title tage  */
add_theme_support('title-tage');

/** Enqueue FlipMarl Scripts */
function flipmart_enqueue_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('Main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0'); 
    wp_enqueue_style('blue', get_template_directory_uri() . '/assets/css/blue.css', array(), '1.0');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0');
    wp_enqueue_style('animate.min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0');
    wp_enqueue_style('rateit', get_template_directory_uri() . '/assets/css/rateit.css', array(), '1.0');
    wp_enqueue_style('rateit', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '1.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0');
    wp_enqueue_style('core', get_template_directory_uri() . '/style.css', false); 
    
    //Theam stylesheet

    //add js files 
    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0' ,true);
    wp_enqueue_script('bootstrap-hover-dropdown', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array(), '1.0.0', true);
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('echo.min', get_template_directory_uri() . '/assets/js/echo.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-slider.min', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery.rateit.min', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lightbox.min', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), '1.0.0', true);
    wp_enqueue_script('wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true);

    

    
}
add_action('wp_enqueue_scripts','flipmart_enqueue_scripts');
//WoowCommerce Theam Support  


function woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'woocommerce_support');

//woocommerce product per row
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 3; // 3 products per row
    }
}


/**
 * Change several of the breadcrumb defaults
 */
add_filter('woocommerce_breadcrumb_defaults', 'flipmart_woocommerce_breadcrumbs');
function flipmart_woocommerce_breadcrumbs()
{
    return array(
        'delimiter'   => ' &#47; ',
        'wrap_before' => '<div class="breadcrumb-inner"> <ul class="list-inline list-unstyled">',
        'wrap_after'  => '</ul> </div>',
        'before'      => '',
        'after'       => '',
        'home'        => _x('Home', 'breadcrumb', 'woocommerce'),
    );
}

add_action('init', 'woo_remove_wc_breadcrumbs');
function woo_remove_wc_breadcrumbs()
{
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
}


add_action('init', 'flipmart_woocommerce_result_count');
function flipmart_woocommerce_result_count()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);
}



add_action('init', 'flipmart_woocommerce_catalog_ordering');
function flipmart_woocommerce_catalog_ordering()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0);
}

function flipmart_pagination()
{

    global $wp_query;

    if ($wp_query->max_num_pages <= 1) return;

    $big = 999999999; // need an unlikely integer

    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_text' => true,
        'prev_text' => __('<< Previous'),
        'next_text' => __('Next >>'),
    ));
    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<div class="pagination-container"><ul class="list-inline list-unstyled">';
        foreach ($pages as $page) {
            echo "<li>$page</li>";
        }
        echo '</ul></div>';
    }
}







add_action('init', 'flipmart_woocommerce_pagination');
function flipmart_woocommerce_pagination()
{
    remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10, 0);
}






function flipmart_selectbox()
{
    $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);
    echo '<div class="woocommerce-perpage">';
    echo '<select onchange="if (this.value) window.location.href=this.value">';
    $orderby_options = array(
        '9' => '9', 
        '300' => 'All'
    );
    foreach ($orderby_options as $value => $label) {
        echo "<option " . selected($per_page, $value) . " value='?perpage=$value'>$label</option>";
    }
    echo '</select>';
    echo '</div>';
}
add_action('pre_get_posts', 'pro_pre_get_products_query');
function pro_pre_get_products_query($query)
{
    $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);
    if ($query->is_main_query() && !is_admin() && is_post_type_archive('product')) {
        $query->set('posts_per_page', $per_page);
    }
}






add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'lift-sidebar',
            'name'          => __('Lift Sidebar', 'FlipaMart'),
            'description'   => __('A short description of the  Lift sidebar.'),
            'before_widget' => '<div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="section-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}




add_action('widgets_init', 'my_register_CATEGORIES');
function my_register_CATEGORIES()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'lift-sidebar-categores',
            'name'          => __('Lift Sidebar CATEGORIES', 'FlipaMart'),
            'description'   => __('A short description of the  Lift sidebar.'),
            'before_widget' => '<div class="col-sm-12 col-md-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<ul class="links list-unstyled">',
            'after_title'   => '</ul>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'my-custom-menu' => __('My Custom Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'wpb_custom_new_menu');



//show proudact catagiroues 
function big_store_product_list_categories($args = '')
{
    $term = get_theme_mod('big_store_exclde_category');
    if (!empty($term[0])) {
        $exclude_id = $term;
    } else {
        $exclude_id = '';
    }
    $defaults = array(
            'child_of'            => 0,
            'current_category'    => 0,
            'depth'               => 5,
            'echo'                => 0,
            'exclude'             => $exclude_id,
            'exclude_tree'        => '',
            'feed'                => '',
            'feed_image'          => '',
            'feed_type'           => '',
            'hide_empty'          => 1,
            'hide_title_if_empty' => false,
            'hierarchical'        => true,
            'order'               => 'ASC',
            'orderby'             => 'menu_order',
            'separator'           => '<br />',
            'show_count'          => 0,
            'show_option_all'     => '',
            'show_option_none'    => __('No categories', 'big-store'),
            'style'               => 'list',
            'taxonomy'            => 'product_cat',
            'title_li'            => '',
            'use_desc_for_title'  => 0,
        );
    $html = wp_list_categories($defaults);



    echo '<li class="dropdown menu-item">  ' . $html . '</li>';
}

add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3);

function remove_thumbnail_dimensions($html, $post_id, $post_image_id)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}





add_action('init', 'custom_bootstrap_slider');
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider()
{
    $labels = array(
        'name'               => _x('Slider', 'post type general name'),
        'singular_name'      => _x('Slide', 'post type singular name'),
        'menu_name'          => _x('Bootstrap Slider', 'admin menu'),
        'name_admin_bar'     => _x('Slide', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Slide'),
        'add_new_item'       => __('Name'),
        'new_item'           => __('New Slide'),
        'edit_item'          => __('Edit Slide'),
        'view_item'          => __('View Slide'),
        'all_items'          => __('All Slide'),
        'featured_image'     => __('Featured Image', 'text_domain'),
        'search_items'       => __('Search Slide'),
        'parent_item_colon'  => __('Parent Slide:'),
        'not_found'          => __('No Slide found.'),
        'not_found_in_trash' => __('No Slide found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'menu_icon'         => 'dashicons-star-half',
        'description'        => __('Description.'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail')
    );

    register_post_type('slider', $args);
}
