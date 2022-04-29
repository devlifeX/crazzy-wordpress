<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

$theme_color['color']['selector'][] = 'a.read-more';
$theme_color['color']['selector'][] = '.listing-item a.read-more:hover';

$fields['topbar_border_color'][ $css_id ] = array(
	array(
		'selector' => array(
			'.site-header .topbar',
		),
		'prop'     => array(
			'border-bottom' => 'solid 1px %%value%%'
		)
	),
);


unset( $theme_color['color']['selector'][42] );
unset( $theme_color['color']['selector'][43] );
unset( $theme_color['color']['selector'][44] );
unset( $theme_color['color']['selector'][45] );

$theme_color['bg_color']['selector'][] = '.pagination.bs-numbered-pagination .current';
$theme_color['border_color']['selector'][] = '.pagination.bs-numbered-pagination .current';
$theme_color['border_color']['selector'][] = '.pagination.bs-numbered-pagination .page-numbers:hover';
$theme_color['color']['selector'][] = '.pagination.bs-numbered-pagination .page-numbers:hover';


$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory