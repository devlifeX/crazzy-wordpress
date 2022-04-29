<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

$theme_color[] = array(
	'selector' =>
		array(
			0 => '.search-container .search-handler',
			1 => '.about-icon-item a',
			2 => '.bs-about .about-icons-list .about-icon-item a:hover',
		),
	'prop'     =>
		array(
			'background-color' => '%%value%% !important',
		),
);

$theme_color[] = array(
	'selector' =>
		array(
			0 => '.listing-classic-2 .listing-inner a.read-more',
			1 => '.listing-item-grid-2 .listing-inner a.read-more',
			2 => '.pagination.bs-links-pagination a',
		),
	'prop'     =>
		array(
			'color' => '%%value%% !important',
		),
);


$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory
