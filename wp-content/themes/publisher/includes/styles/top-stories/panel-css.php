<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';


// Remove current color
unset( $theme_color['color']['selector'][41] );
unset( $theme_color['color']['selector'][42] );
unset( $theme_color['color']['selector'][43] );
unset( $theme_color['color']['selector'][44] );
unset( $theme_color['color']['selector'][45] );

$theme_color[] = array(
	'selector' =>
		array(
			0 => '.pagination.bs-numbered-pagination .wp-pagenavi a:hover',
			1 => '.pagination.bs-numbered-pagination .page-numbers:hover',
			2 => '.pagination.bs-numbered-pagination .wp-pagenavi .current',
			3 => '.pagination.bs-numbered-pagination .current',
			4 => '.btn-bs-pagination:hover',
			5 => '.bs-pagination-in-loading',
		),
	'prop'     =>
		array(
			'background-color' => '%%value%% !important',
			'border-color' => '%%value%% !important',
		),
);

$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory