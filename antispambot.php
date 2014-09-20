<?php
/*
Plugin Name: Anti-Spambot Email Shortcode
Version: 0.1-alpha
Description: Obfuscation of email via the <code>[email]...[/email]</code> shortcode syntax using built-in <a href="http://codex.wordpress.org/Function_Reference/antispambot#Examples" target="_blank">Wordpress Codex</a> functionality.
Author: Robert Peake
Author URI: http://www.peakepro.com/
Plugin URI: https://wordpress.org/plugins/antispambot
Text Domain: antispambot
Domain Path: /languages
*/
/**
 * Hide email from Spam Bots using a shortcode.
 *
 * @param array  $atts    Shortcode attributes. Not used.
 * @param string $content The shortcode content. Should be an email address.
 *
 * @return string The obfuscated email address. 
 */
function wpcodex_hide_email_shortcode( $atts , $content = null ) {
	if ( ! is_email( $content ) ) {
		return $content;
	}
        extract( shortcode_atts( array(
                    'hex_encoding' => 0,
                ), $atts, 'antispambot' ) );

	return '<a href="mailto:' . antispambot( $content, $hex_encoding ) . '">' . antispambot( $content, $hex_encoding ) . '</a>';
}
add_shortcode( 'email', 'wpcodex_hide_email_shortcode' );
