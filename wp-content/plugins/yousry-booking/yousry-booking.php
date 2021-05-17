<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              Yousry.com
 * @since             1.0.0
 * @package           Yousry_Booking
 *
 * @wordpress-plugin
 * Plugin Name:       YousryBooking
 * Plugin URI:        YousryBooking.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Yousry Booking
 * Author URI:        Yousry.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       yousry-booking
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
define('YOUSRY_BOOKING_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-yousry-booking-activator.php
 */
function activate_yousry_booking()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-yousry-booking-activator.php';
	Yousry_Booking_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-yousry-booking-deactivator.php
 */
function deactivate_yousry_booking()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-yousry-booking-deactivator.php';
	Yousry_Booking_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_yousry_booking');
register_deactivation_hook(__FILE__, 'deactivate_yousry_booking');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-yousry-booking.php';


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-yousry-management-tool.php';

/** 
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_yousry_booking()
{

	$plugin = new Yousry_Booking();
	$plugin->run();
}
run_yousry_booking();
