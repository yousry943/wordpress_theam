<?php

class Short
{


	function PipForm()
	{



		$content = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
		$content .= '<div class="container" style=" max-width: 55% !important; ">';
		$content .= '<h3>PIP VALUE CALCULATOR </h3>';
		$content .= '<form method="post">';
		$content .= '<div class="form-group">';
		$content .= '<label for="Current Price (EURUSD)">Current Conversion Price (EURUSD):</label>';
		$content .= '<input type="text" class="form-control" id="CurrentPrice" placeholder="Current Conversion Price (EURUSD)"';
		$content .= 'name="CurrentPrice">';
		$content .= '</div>';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="Margin Ratio:">Account Type:</label>';
		$content .= '<select class="form-control" aria-label="Default select example" id="AccountType" name="AccountType">';
		$content .= '<option value="5">5:1</option>';
		$content .= '<option value="10">10:1</option>';
		$content .= '<option value="20">20:1</option>';
		$content .= '<option value="25">25:1</option>';
		$content .= '<option value="30">30:1</option>';
		$content .= '<option value="33">33:1</option>';
		$content .= '<option value="40">40:1</option>';
		$content .= '<option value="50">50:1</option>';
		$content .= '<option value="66">66:1</option>';
		$content .= '<option value="100" selected="true">100:1</option>';
		$content .= '<option value="125">125:1</option>';
		$content .= '<option value="150">150:1</option>';
		$content .= '<option value="200">200:1</option>';
		$content .= '<option value="300">300:1</option>';
		$content .= '<option value="400">400:1</option>';
		$content .= '<option value="500">500:1</option>';
		$content .= '<option value="600">600:1</option>';
		$content .= '<option value="1000">1000:1</option>';
		$content .= '<option value="100000">100000:1</option>';
		$content .= '</select>';
		$content .= '</div>';
		$content .= '';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="Trade size: (Lots)">Volume in Lots : (Lots):</label>';
		$content .= '<input type="text" class="form-control" id="VolumeLots" name="VolumeLots"';
		$content .= 'placeholder="Volume in Lots: 5"';
		$content .= 'name="VolumeLots">';
		$content .= '</div>';
		$content .= '';
		$content .= '<hr>';
		$content .= ' <p><b id="Result">  <p></b>';
		$content .= '';

		$content .= '</form>';
		$content .= '';
		$content .= '</div>';






		$content .= wp_enqueue_script('pip', plugin_dir_url(__FILE__) . 'public/jscalculator/pip.js');

		return $content;
	}




	function MarginForm()
	{
		$content = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';

		$content .= '<div class="container" style=" max-width: 55%  !important; ">';
		$content .= '<h3>Margin Calculator </h3>';
		$content .= '<form method="post">';
		$content .= '<div class="form-group">';
		$content .= '<label for="Current Price (EURUSD)">Current Conversion Price (EURUSD):</label>';
		$content .= '<input type="text" class="form-control" id="CurrentPrice" placeholder="Current Conversion Price (EURUSD)"';
		$content .= 'name="CurrentPrice">';
		$content .= '</div>';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="Margin Ratio:">Account Type:</label>';
		$content .= '<select class="form-control" aria-label="Default select example" id="AccountType" name="AccountType">';
		$content .= '<option value="5">5:1</option>';
		$content .= '<option value="10">10:1</option>';
		$content .= '<option value="20">20:1</option>';
		$content .= '<option value="25">25:1</option>';
		$content .= '<option value="30">30:1</option>';
		$content .= '<option value="33">33:1</option>';
		$content .= '<option value="40">40:1</option>';
		$content .= '<option value="50">50:1</option>';
		$content .= '<option value="66">66:1</option>';
		$content .= '<option value="100" selected="true">100:1</option>';
		$content .= '<option value="125">125:1</option>';
		$content .= '<option value="150">150:1</option>';
		$content .= '<option value="200">200:1</option>';
		$content .= '<option value="300">300:1</option>';
		$content .= '<option value="400">400:1</option>';
		$content .= '<option value="500">500:1</option>';
		$content .= '<option value="600">600:1</option>';
		$content .= '<option value="1000">1000:1</option>';
		$content .= '</select>';
		$content .= '</div>';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="Margin Ratio:">Leverage:</label>';
		$content .= '<select class="form-control valid" name="leverage" id="leverage">';
		$content .= '<option value="">Please select</option>';
		$content .= '<option value="888">888</option>';
		$content .= '<option value="500">500</option>';
		$content .= '<option value="400">400</option>';
		$content .= '<option value="300">300</option>';
		$content .= '<option value="200">200</option>';
		$content .= '<option value="100">100</option>';
		$content .= '<option value="66">66</option>';
		$content .= '<option value="50">50</option>';
		$content .= '<option value="30">30</option>';
		$content .= '<option value="25">25</option>';
		$content .= '<option value="20">20</option>';
		$content .= '<option value="15">15</option>';
		$content .= '<option value="10">10</option>';
		$content .= '<option value="5">5</option>';
		$content .= '<option value="3">3</option>';
		$content .= '<option value="2">2</option>';
		$content .= '<option value="1">1</option>';
		$content .= '</select>';
		$content .= '</div>';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="Trade size: (Lots)">Volume in Lots : (Lots):</label>';
		$content .= '<input type="text" class="form-control" id="VolumeLots" name="VolumeLots"';
		$content .= 'placeholder="Volume in Lots: 5"';
		$content .= 'name="VolumeLots">';
		$content .= '</div>';
		$content .= 'Volume in Lots';
		$content .= '<hr>';
		$content .= ' <p><b id="Result">  <p></b>';

		$content .= '';

		$content .= '</form>';
		$content .= '</div>';

		$content .= wp_enqueue_script('margin', plugin_dir_url(__FILE__) . 'public/jscalculator/margin.js');
		return $content;
	}



	public function Positionsize()
	{
		$content = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';

		$content .= '<div class="container" style=" max-width: 55%  !important; ">';
		$content .= '<h3>Position Size CALCULATOR </h3>';
		$content .= '<form method="post">';
		$content .= '';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="AccountSize">Account Size:</label>';
		$content .= '<input type="text" class="form-control" id="AccountSize" placeholder="10000" name="AccountSize">';
		$content .= '</div>';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="RiskPerTrade">Risk Per Trade:</label>';
		$content .= '<input type="text" class="form-control" id="RiskPerTrade" placeholder="10%" name="RiskPerTrade">';
		$content .= '</div>';
		$content .= '';
		$content .= '';
		$content .= '<div class="form-group">';
		$content .= '<label for="AccountSize">Stop Loss (pips):</label>';
		$content .= '<input type="text" class="form-control" id="StopLossInPips" placeholder="0" name="StopLossInPips">';
		$content .= '</div>';
		$content .= '';
		$content .= '';
		$content .= '';
		$content .= '<hr>';
		$content .= '';
		$content .= '';
		$content .= '<p><b id="ResultStanderPositionSize">';
		$content .= '<p>';
		$content .= '</b>';
		$content .= '';
		$content .= '<p><b id="ResultMinPositionSize">';
		$content .= '<p>';
		$content .= '';
		$content .= '';
		$content .= '';
		$content .= '<p><b id="ResultMicroPositionSize">';
		$content .= '<p>';
		$content .= '';
		$content .= '';
		$content .= '';
		$content .= '';
		$content .= '';
		$content .= '';
		$content .= '</form>';
		$content .= '</div>';
		$content .= '';
		$content .= wp_enqueue_script('Positionsize', plugin_dir_url(__FILE__) . 'public/jscalculator/Positionsize.js');
		return $content;
	}
}
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              ayousry943@gmail.com
 * @since             1.0.0
 * @package           FCalculator
 *
 * @wordpress-plugin
 * Plugin Name:       Fcalculator
 * Plugin URI:        Fcalculator.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ahmed yousry
 * Author URI:        ayousry943@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Fcalculator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('CALCULATOR_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-calculator-activator.php
 */
function activate_calculator()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-calculator-activator.php';
	Calculator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-calculator-deactivator.php
 */
function deactivate_calculator()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-calculator-deactivator.php';
	Calculator_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_calculator');
register_deactivation_hook(__FILE__, 'deactivate_calculator');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-calculator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
$Calculator_Admin = new Short();

function run_calculator()
{
	$plugin = new Calculator();

	$plugin->run();
}








run_calculator();

add_shortcode('PipForm', array($Calculator_Admin, 'PipForm'));

add_shortcode('MarginForm', array($Calculator_Admin, 'MarginForm'));

add_shortcode('Positionsize', array($Calculator_Admin, 'Positionsize'));
