<?php
/*
Plugin Name: shortcode for My Mitsu Estimation Form
Plugin URI:
Description: You can embed an estimation(calculation) form by filling in a shortcode. An estimation form is provided by a webservice in Japan called My Mitsu.
Version: 1.1
Author: Fumito MIZUNO
Author URI: https://my-mitsu.com/
License: GPL ver.2 or later
*/

function mymitsu_function( $atts, $content = NULL ) {
    // URL for My Mitsu, a webservice for creating estimation forms.
    $mymitsuurl = 'https://my-mitsu.jp/estimation/';

    $default_atts = apply_filters( 'mymitsu_default_atts', array(
        'id' => 'mymitsu',
        'width' => 640,
        'height' => 480
    ));

    $atts = shortcode_atts( $default_atts, $atts, 'mymitsu' );

    // Default Url which shows a sample form for My Mitsu.
    $url = apply_filters( 'mymitsu_default_url', 'https://my-mitsu.jp/estimation/274' );

    // check if $content is valid url or not.
    if ( filter_var( $content, FILTER_VALIDATE_URL )) {
        $url = $content;
    } elseif (!empty( $content ) && filter_var( $mymitsuurl . ltrim( $content, '/' ), FILTER_VALIDATE_URL )) {
        $url = $mymitsuurl . ltrim($content, '/');
    } else {
        // Do something when $content is either invalid or empty.
        do_action( 'mymitsu_invalid_content', $content );
    }

    // outputs iframe
    $format = '<iframe src="%s" id="%s" width="%d" height="%d"></iframe>';

    return sprintf( $format,
        esc_url( $url ),
        sanitize_html_class( $atts['id'], 'mymitsu' ),
        intval( $atts['width'] ),
        intval( $atts['height'] )
    );
}
add_shortcode( 'mymitsu', 'mymitsu_function' );
