<?php
/*
Plugin Name: Purple In memory of Rebecca
Plugin URL: http://www.zeldman.com/2014/06/10/the-color-purple/
Description: Life is better in purple
Version: 0
Author: Remi Corson
*/


add_filter( 'wp_print_styles' , 'rebecca_style' );
add_filter( 'wp_head' , 'rebecca_notice' );

/**
 * rebecca_style
 *
*/
function rebecca_style() {
	
	?>
	<style>
	html, header,body, footer, section, article, div, a, p, ul, ul li, ol li, h1, h2, h3, h4, h5, h6 { color: #663399 !important; background: none !important; background-color: #FFFFFF !important; }
	button, input, textarea { color: #FFFFFF !important; background: #663399 !important; background-color: #663399 !important; border: none !important; }
	.rebecca { color: #FFFFFF !important; background: #663399 !important; text-align: center !important; width: 100% !important; padding: 15px;}
	.rebecca a { color: #FFFFFF !important; text-decoration: none !important; font-weight: bold !important; background: none !important; background-color: none !important; }
	.rebecca a:hover { color: #FFFFFF !important; text-decoration: underline !important; }
	</style>
	<?
	
}

/**
 * rebecca_notice
 *
*/
function rebecca_notice() {
	
	echo '<div class="rebecca">' . __( 'Site turned into purple in memory of ' ) . ' <a href="http://www.zeldman.com/2014/06/10/the-color-purple/" target="_blank">Rebecca</a></div>';
}