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

// -- Cuando el ADMIN desactiva el plugin
register_deactivation_hook( __FILE__, 'sqg_desactivar' );
function sqg_desactivar() {
    flush_rewrite_rules();
}

// -- El núcleo del plugin: Engancharse al momento 'init' --
add_action( 'init', 'sqg_registrar_cpt' );
function sqg_registrar_cpt() {
    error_log( 'sqg_registrar_cpt ejecutado!' );
}

?>