<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

// Remove current color
unset( $theme_color['bg_color']['selector'][43] );


$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory