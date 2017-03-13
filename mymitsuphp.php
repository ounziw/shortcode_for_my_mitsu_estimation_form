<?php
/*
Plugin Name: shortcode for My Mitsu Estimation Form
Plugin URI:
Description: You can embed an estimation(calculation) form by filling in a shortcode. An estimation form is provided by a webservice in Japan called My Mitsu.
Version: 4.0
Author: Fumito MIZUNO
Author URI: https://my-mitsu.com/
License: GPL ver.2 or later
*/

function mymitsu_function( $atts, $content = "" ) {
    // URL for My Mitsu, a webservice for creating estimation forms.
    $mymitsuurl = 'https://my-mitsu.jp/estimation/';

    $atts = shortcode_atts( array(
        'id' => 'mymitsu',
        'width' => 640,
        'height' => 480
    ), $atts, 'mymitsu' );

    // Default Url which shows a sample form for My Mitsu.
    $url = 'https://my-mitsu.jp/estimation/274';
    // check if $content is valid url or not.
    if ( filter_var( $content, FILTER_VALIDATE_URL )) {
        $url = $content;
    } elseif (filter_var( $mymitsuurl . ltrim( $content, '/' ), FILTER_VALIDATE_URL )) {
        $url = $mymitsuurl . ltrim($content, '/');
    }

    // outputs iframe
    $format = '<iframe src="%s" id="%s" width="%d" height="%d"></iframe>';

    return sprintf( $format,
        $url,
        sanitize_html_class( $atts['id'],'mymitsu' ),
        intval( $atts['width'] ),
        intval( $atts['height'] )
    );
}
add_shortcode( 'mymitsu', 'mymitsu_function' );