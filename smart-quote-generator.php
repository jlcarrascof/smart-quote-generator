<?php
/**
 * Plugin Name: Smart Quote Generator 
 * Plugin URI: https://github.com/jlcarrascof/smart-quote-generator.
 * Description: Generates embeddable quotes with shortcodes and REST API.
 * Version: 1.0.0
 * Author: Javier J. Martínez F.
 * License: GPL v2 or later
 * Text Domain: smart-quote
 *  
 */

if ( ! defined( 'ABSPATH')) exit;

// -- Cuando el ADMIN activa el plugin
register_activation_hook( __FILE__, 'sqg_activar');
function sqg_activar() {
    flush_rewrite_rules();
}



?>