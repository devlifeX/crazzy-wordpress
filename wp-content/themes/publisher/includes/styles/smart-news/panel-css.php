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
			'.bs-slider-dots .bs-slider-active > .bts-bs-dots-btn',
		),
		'prop'     => array(
			'background-color' => '%%value%% !important'
		)
	),
	array(
		'selector' => array(
			'.sidebar-column .sidebar',
			'.bs-newsletter-pack + .next-prev-post',
			'.post-author + .next-prev-post',
			'.comments-template',
			'body.single .content-column > .bs-newsletter-pack',
			'.bs-newsletter-pack.bsnp-t1.bsnp-s9 input.bsnp-input',
		),
		'prop'     => array(
			'border-color' => '%%value%% !important',
		)
	),
	array(
		'selector' => array(
			'.post-share .share-handler:before',
		),
		'prop'     => array(
			'border-left-color' => '%%value%% !important',
		)
	),
);

$theme_color[] = array(
	'selector' =>
		array(
			0 => '.section-heading.sh-t5.sh-s1 .h-text:before',
		),
	'prop'     =>
		array(
			'background-color' => '%%value%% !important',
		),
);

// Remove current color
unset( $theme_color['color']['selector'][41] );
unset( $theme_color['color']['selector'][42] );
unset( $theme_color['color']['selector'][43] );
unset( $theme_color['color']['selector'][44] );
unset( $theme_color['color']['selector'][45] );

$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory
