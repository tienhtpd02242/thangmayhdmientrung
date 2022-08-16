<?php
/**
 * ThangMayMienTrung Sample.
 *
 * This file adds functions to the ThangMayMienTrung Sample Theme.
 *
 * @package ThangMayMienTrung Sample
 * @author  Tien
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

require_once get_stylesheet_directory() . '/package-main/init-load.php';

function font_thangmayhd( $content, $default_editor ) {
    if ( 'tinymce' == $default_editor ) {
        $content = '<div style="font-family: Arial, Helvetica, sans-serif">' . $content . '</div>';
    }
    return $content;
}
if ( is_admin() ) {
    add_filter( 'the_editor_content', 'font_thangmayhd', 10, 2 );
}
