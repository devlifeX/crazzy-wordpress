<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

/**
 * -> Topbar Colors
 */
$fields['topbar_bg_color'][ $css_id ] = array(
	array(
		'selector' => array(
			'.site-header .topbar',
		),
		'prop'     => array(
			'background-color' => '%%value%% !important'
		)
	),
);


/* Search-handler */
$fields['header_menu_text_color'][ $css_id ] = array(
	array(
		'selector' => array(
			0 => '.site-header .shop-cart-container .cart-handler',
			1 => '.site-header .search-container .search-handler',
			2 => '.site-header .main-menu > li > a',
			3 => '.site-header .search-container .search-box .search-form .search-field',
			4 => '.site-header .search-container:hover .search-handler',
		),
		'prop'     => array(
			'color' => '%%value%%',
		)
	),
	array(
		'selector' => array(
			4 => '.site-header .search-container:hover .search-handler',
		),
		'prop'     => array(
			'color' => '%%value%% !important',
		)
	),
);


/* Pagination */
$theme_color['bg_color']['selector'][]     = '.pagination.bs-numbered-pagination .current';
$theme_color['border_color']['selector'][] = '.pagination.bs-numbered-pagination .current';
$theme_color['border_color']['selector'][] = '.pagination.bs-numbered-pagination a.page-numbers:hover';
$theme_color['color']['selector'][]        = '.pagination.bs-numbered-pagination a.page-numbers:hover';


// Remove current color
unset( $theme_color['color']['selector'][41] );
unset( $theme_color['color']['selector'][42] );
unset( $theme_color['color']['selector'][43] );
unset( $theme_color['color']['selector'][44] );
unset( $theme_color['color']['selector'][45] );

$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory
