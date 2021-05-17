<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       ayousry943@gmail.com
 * @since      1.0.0
 *
 * @package    Calculator
 * @subpackage Calculator/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Calculator
 * @subpackage Calculator/admin
 * @author     Ahmed yousry <ayousry943@gmail.com>
 */
class Calculator_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Calculator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Calculator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/calculator-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Calculator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Calculator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/calculator-admin.js', array('jquery'), $this->version, false);
	}





	public function Fcalculator_menu()
	{

		add_menu_page(
			'Fcalculator Menu', //page  title
			'Fcalculator Menu', //menu Title
			'manage_options',
			'my-top-level-handle', // name of submenu
			'Fcalculator_Menu_plugin' //call back function
		);

		add_submenu_page('my-top-level-handle', 'Form 1 ', 'Form 1', 'manage_options', 'Form1',  array($this, "Form1"));
		add_submenu_page('my-top-level-handle', 'Form 2', 'Form 2', 'manage_options', 'Form2',  array($this, "Form2"));

		add_submenu_page('my-top-level-handle', 'Form 3 ', 'Form 3', 'manage_options', 'Form3',  array($this, "Form3"));



		// add_menu_page("Fcalculator Menu", "Fcalculator Menu", "manage_options", "Fcalculator_Menu_plugin", array($this, "Fcalculator_Menu_plugin"));
	}





	public function Form1()
	{
		echo "form 1 ";
	}





	public function Form2()
	{
		echo "form 2 ";
	}




	public function Form3()
	{
		echo "form 3 ";
	}
}
