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

		add_menu_page("Fcalculator Menu", "Fcalculator Menu", "manage_options", "Fcalculator_Intro_plugin", array($this, "WelcomePage"));
	}








	public function WelcomePage()
	{
?>
		<div class="wrap about-wrap">
			<h1><?php _e('Welcome to My Custom Dashboard Page'); ?></h1>

			<div class="about-text">
				<?php _e('Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'); ?>
			</div>

			<h2 class="nav-tab-wrapper">
				<div id="nav-links">
					<a href="#!b0" class="nav-tab nav-tab-active">
						<?php _e('Welcome'); ?>
					</a>

					<a href="#!b1" class="nav-tab nav-tab">
						<?php _e('Step 1'); ?>
					</a>
					<a href="#!b2" class="nav-tab">
						<?php _e('Step 2'); ?>
					</a>
					<a href="#!b3" class="nav-tab">
						<?php _e('Step 3'); ?>
					</a>
				</div>
			</h2>

			<div class="changelog" id='b0'>
				<h3><?php _e('Morbi leo risus, porta ac consectetur'); ?></h3>

				<div class="feature-section images-stagger-right">
					<img src="<?php echo esc_url(admin_url('images/screenshots/theme-customizer.png')); ?>" class="image-50" />
					<h4><?php _e('Risus Consectetur Elit Sollicitudin'); ?></h4>
					<p><?php _e('Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.'); ?></p>

					<h4><?php _e('Mattis Justo Purus'); ?></h4>

				</div>
			</div>




			<div class="changelog" id='b1'>
				<h3><?php _e('Morbi leo risus, porta ac consectetur'); ?></h3>
				<p> [Positionsize]</p>


			</div>

			<div class="changelog" id='b2'>
				<h3> page 2 </h3>
				<p> [PipForm]</p>


			</div>
			<div class="changelog" id='b3'>
				<h3> page 3 </h3>
				<p> [MarginForm]</p>


			</div>





		</div>

		<script type="text/javascript">
			var links = document.getElementById('nav-links').getElementsByTagName('a');
			for (var i = 0, link; link = links[i]; i++) {
				link.onclick = showContent;
				// Hide content divs by default
				getContentDiv(link).style.display = 'none';
			}
			// Show the first content div
			if (links.length > 0) showContent.apply(links[0]);

			var current;

			function showContent() {

				// hide old content
				if (current) current.style.display = 'none';

				current = getContentDiv(this);
				if (!current) return true;

				//current.innerHTML = "This is where the xml variable content should go";
				current.style.display = 'block';

				return true;

			}

			function getContentDiv(link) {

				var linkTo = link.getAttribute('href');

				// Make sure the link is meant to go to a div
				if (linkTo.substring(0, 2) != '#!') return;
				linkTo = linkTo.substring(2);

				return document.getElementById(linkTo);

			}
		</script>
<?php
	}
}
