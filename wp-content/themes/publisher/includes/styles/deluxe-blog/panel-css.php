<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

$theme_color[] = array(
	'selector' =>
		array(
			0 => 'a.read-more',
		),
	'prop'     =>
		array(
			'color' => '%%value%% !important',
		),
);

$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory
