<?php
/**
 * Plugin Name:       JKWS Maintenance Helper
 * Description:       This plugin is used to run custom code that's used for maintaining your website by Jos Klever Web Support.
 * Version:           0.2.2
 * Requires at least: 5.3
 * Requires PHP:      7.0
 * Author:            Jos Klever
 * Author URI:        https://joskleverwebsupport.nl/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/** Don't remind admins to check if the admin email needs to be changed (WP 5.3) */ 
add_filter( 'admin_email_check_interval', '__return_zero' );

/** Disable the possibility to enable automatic updates (WP 5.5) */
add_filter( 'plugins_auto_update_enabled', '__return_false' );
add_filter( 'themes_auto_update_enabled', '__return_false' );

/** Disable the possibility to enable automatic updates for WP core (WP 5.6) */
add_filter( 'allow_major_auto_core_updates', '__return_false' );
