<?php
defined( 'ABSPATH' ) || exit;

class Br_Gridlist_Customizer {
    static private $section = 'br_gridlist_options';

    private $settings = array(
        'br_gridlist_columns' => 3,
        'br_gridlist_style'   => 'grid',
    );

	public function __construct() {
		add_action( 'customize_register', array( $this, 'add_sections' ) );
		add_action( 'customize_controls_print_scripts', array( $this, 'add_scripts' ), 40 );
        add_action( 'customize_preview_init', array( $this, 'add_preview_scripts' ) );

        add_action( "wp_ajax_br_gridlist_customizer_save", array ( $this, 'br_gridlist_customizer_save' ) );
        add_action( "wp_ajax_nopriv_br_gridlist_customizer_save", array ( $this, 'br_gridlist_customizer_save' ) );
	}

    public static function get_section() {
        return self::$section; 
    }

    public function get_option( $option_name ) {
        $option = get_option($option_name);
        return empty( $option ) ? $this->settings[$option_name] : $option; 
    }

    public function get_all_options() {
        $options = array();
        foreach ( $this->settings as $key => $value ) {
            $options[$key] = $this->get_option($key);
        }
        return $options; 
    }

	public function add_sections( $wp_customize ) {
        $section = $wp_customize->add_section( self::$section, array(
            'title' => __( 'BeRocket Grid/List', 'BeRocket_LGV_domain' ),
            'description' => 
                __( 'The options for the notice panel of the BeRocet Grid/List plugin', 'BeRocket_LGV_domain' ),
            'panel' => 'woocommerce',
        ) );

        $this->add_gridlist_style( $wp_customize );
        $this->add_gridlist_columns( $wp_customize );
	}

    public function add_preview_scripts() {
        wp_enqueue_style( 'br-gridlist-sticky-css', plugins_url( '../css/customizer.css', __FILE__ ) );
        wp_enqueue_style( 'br_gridlist_customizer_section', plugins_url( '../css/customizer.css', __FILE__ ) );

        wp_enqueue_script( 'br_gridlist_customizer_preview', plugins_url( '../js/customizer.js', __FILE__ ), 
            array( 'jquery' ), true );

        wp_localize_script( 'br_gridlist_customizer_preview', 'br_gridlist_customizer_preview_helper',
            array(
                'plugin_dir' => plugins_url( '..', __FILE__ ),
                'settings'   => array_keys( $this->settings ),
            )
        );
    }

	public function add_scripts() {
        $args = array(
            'numberposts' => 1,
            'post_status' => 'published',
        );
        $product = wc_get_products( $args );

        wp_enqueue_style( 'br_gridlist_customizer_section', plugins_url( '../css/customizer_section.css', __FILE__ ) );
        wp_enqueue_script( 'br_gridlist_customizer_section', plugins_url( '../js/customizer_section.js', __FILE__ ), array( 'jquery' ), true );
        wp_localize_script( 'br_gridlist_customizer_section', 'br_gridlist_customizer_helper',
            array(
                'ajax_url'     => admin_url( 'admin-ajax.php' ),
                'section'      => self::$section,
                'cart_page'    => esc_js( wc_get_page_permalink( 'cart' ) ),
                'product_page' => esc_js( get_permalink( $product[0]->get_id() ) ),
                'shop_page'    => esc_js( wc_get_page_permalink( 'shop' ) ),
            )
        );
	}

    public function add_gridlist_columns( $wp_customize ) {
        $setting_name = 'br_gridlist_columns';
        $number_options = array(
            'capability' => 'manage_options',
            'type'       => 'option',
            'default'    => $this->settings[$setting_name],
            'transport'  => 'postMessage',
        );

        $wp_customize->add_setting( $setting_name, $number_options );
        $wp_customize->add_control( new WP_Customize_Number( $wp_customize, $setting_name, array(
            'label'    => __( 'Number of columns', 'BeRocket_LGV_domain' ),
            'type'     => 'number',
            'section'  => self::$section,
            'settings' => $setting_name,
        ) ) );
    }

    public function add_gridlist_style( $wp_customize ) {
        $setting_name = 'br_gridlist_style';
        $wp_customize->add_setting( $setting_name, array(
            'default'    => $this->settings[$setting_name],
            'capability' => 'manage_options',
            'transport'  => 'refresh',
            'type'       => 'option',
        ) );

        $wp_customize->add_control( $setting_name, array(
            'label'    => __( 'View type: Grid or list', 'BeRocket_LGV_domain' ),
            'settings' => $setting_name,
            'type'     => 'select',
            'section'  => self::$section,
            'choices'  => array(
                 'grid' => __('Grid', 'BeRocket_LGV_domain'),
                 'list' => __('List', 'BeRocket_LGV_domain'),
            ),
        ) );
    }

    public function br_gridlist_customizer_save() {
        $key = sanitize_text_field( $_REQUEST['key'] );
        $value = sanitize_text_field( $_REQUEST['value'] );
        update_option( $key, $value );
        wp_die();
    }
}
