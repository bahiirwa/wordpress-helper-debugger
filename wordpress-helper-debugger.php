<?php
/**
 * Plugin Name: Wordpress Helper Debugger
 * Plugin URI: https://omukiguy.com
 * Author: Omukiguy c/o Highrise Digital
 * Author URI: https://omukiguy.com
 * Description: Debugging functions sourced from Highrise Digital.
 * Version: 0.1.0
 * License: 0.1.0
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: wordpress-helper-debugger
*/


/**
 * Var dump results with Pre tags
 *
 * @param mixed $data Data returned.
 * @param string $label Give a title to the dump.
 * @return void
 */
function pre_var_dump( $data, $label = '' ) {
    echo '<div style="background-color: #f2f2f2; padding: 12px;">';

    if ( ! empty( $label ) ) {
        echo '<h3>' . $label . '</h3>';
    }

    echo '<pre>';
        var_dump( $data );
    echo '</pre>';

    echo '</div>';

    return;
}

/**
 * Write errors to a log file named debug.log in wp-content.
 *
 * @param mixed $log The thing you want to log.
 * @return void
 */
function pre_write_log( $log ) {
    if ( true === WP_DEBUG ) {
        if ( is_array( $log ) || is_object( $log ) ) {
            error_log( print_r( $log, true ) );
        } else {
            error_log( $log );
        }
    }
}