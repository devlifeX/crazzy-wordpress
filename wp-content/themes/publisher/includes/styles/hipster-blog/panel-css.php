<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

$theme_color[] = array(
	'selector' =>
		array(
			0 => '.listing-classic-1 .post-meta:after',
			1 => '.listing-item-grid-1 .post-meta:after',
		),
	'prop'     =>
		array(
			'background-color' => '%%value%% !important',
		),
);

$theme_color[] = array(
	'selector' =>
		array(
			0 => '.listing-classic-1 .listing-inner a.read-more',
			1 => '.listing-item-grid-1 .listing-inner a.read-more',
		),
	'prop'     =>
		array(
			'color' => '%%value%% !important',
		),
);

$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory
