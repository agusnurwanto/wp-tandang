<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/agusnurwanto
 * @since             1.0.0
 * @package           Wp_Tandang
 *
 * @wordpress-plugin
 * Plugin Name:       WP Tandang
 * Plugin URI:        https://github.com/agusnurwanto/wp-tandang
 * Description:       WP Tandang adalah plugin wordpress untuk ekosistem crowd-sourced service yang mempertemukan kebutuhan masyarakat dengan talenta berdasarkan keterampilan, portofolio, ketersediaan waktu, dan riwayat pekerjaan
 * Version:           1.0.0
 * Author:            Agus Nurwanto
 * Author URI:        https://github.com/agusnurwanto/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-tandang
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_TANDANG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-tandang-activator.php
 */
function activate_wp_tandang() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-tandang-activator.php';
	Wp_Tandang_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-tandang-deactivator.php
 */
function deactivate_wp_tandang() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-tandang-deactivator.php';
	Wp_Tandang_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_tandang' );
register_deactivation_hook( __FILE__, 'deactivate_wp_tandang' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-tandang.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_tandang() {

	$plugin = new Wp_Tandang();
	$plugin->run();

}
run_wp_tandang();
