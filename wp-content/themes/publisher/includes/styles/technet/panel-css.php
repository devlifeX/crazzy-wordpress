<?php

$css_id = $this->get_css_id();

/**
 * => Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

/* Pagination */
$theme_color['bg_color']['selector'][] = '.pagination.bs-numbered-pagination .current';
$theme_color['border_color']['selector'][] = '.pagination.bs-numbered-pagination .current';
$theme_color['border_color']['selector'][] = '.pagination.bs-numbered-pagination .current:hover';
$theme_color['border_color']['selector'][] = '.pagination.bs-numbered-pagination a.page-numbers:hover';
$theme_color['color']['selector'][] = '.pagination.bs-numbered-pagination a.page-numbers:hover';


// Remove current color
unset( $theme_color['color']['selector'][41] );
unset( $theme_color['color']['selector'][42] );
unset( $theme_color['color']['selector'][43] );
unset( $theme_color['color']['selector'][44] );
unset( $theme_color['color']['selector'][45] );

$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory
