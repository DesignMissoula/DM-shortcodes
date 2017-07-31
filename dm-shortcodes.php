<?php
/*
Plugin Name: DM Shortcodes
Plugin Script: dm-shortcodes.php
Plugin URI: https://github.com/DesignMissoula/DM-shortcodes
Description: Replaces shortcodes with html
Version: 1.0.3
Author: Bradford Knowlton
Author URI: http://bradknowlton.com/

This file is part of DM Shortcodes.

DM Shortcodes is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Locations is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Locations.  If not, see <http://www.gnu.org/licenses/>.
*/

function span_shortcode( $atts, $content = null ) {
	  $a = shortcode_atts( array(
        'class' => 'span',
		), $atts );
	return '<span class="'.$a['class'].'">' . $content . '</span>';
}
add_shortcode( 'span', 'span_shortcode' );

function a_shortcode( $atts, $content = null ) {
	  $a = shortcode_atts( array(
        'class' => 'a',
        'href' => '#',
		), $atts );
		
		$a['href'] = str_replace('"', "", $a['href']);
		$a['href'] = str_replace("'", "", $a['href']);
		
		$a['class'] = str_replace('"', "", $a['class']);
		$a['class'] = str_replace("'", "", $a['class']);
		
	return '<a class="'.$a['class'].'" href="'.$a['href'].'">' . $content . '</a>';
}
add_shortcode( 'a', 'a_shortcode' );


function img_shortcode( $atts, $content = null ) {
	  $a = shortcode_atts( array(
        'class' => 'a',
        'href' => '#',
        'src' => '#',
		), $atts );
		
		$a['href'] = str_replace('"', "", $a['href']);
		$a['href'] = str_replace("'", "", $a['href']);
		
		$a['class'] = str_replace('"', "", $a['class']);
		$a['class'] = str_replace("'", "", $a['class']);
		
		$a['src'] = str_replace('"', "", $a['src']);
		$a['src'] = str_replace("'", "", $a['src']);
		
	return '<img class="'.$a['class'].'" src="'.$a['src'].'" />';
}
add_shortcode( 'img', 'img_shortcode' );

function br_shortcode() {
	return '<br />';
}
add_shortcode( 'br', 'br_shortcode' );