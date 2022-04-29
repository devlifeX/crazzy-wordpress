<?php
//
// Custom default values for magly Demo
// 


$std_id = $this->get_std_id();


$fields['section_heading_style'][ $std_id ] = 't2-s1';
$fields['layout_style'][ $std_id ] = 'boxed';
$fields['layout-2-col'][ $std_id ] = array (
  'width' => '1120',
  'content' => '67',
  'primary' => '33',
);
$fields['layout_columns_space'][ $std_id ] = '25';
$fields['general_listing'][ $std_id ] = 'blog-5';
$fields['sticky_sidebar'][ $std_id ] = 'enable';
$fields['post_author_box_posts'][ $std_id ] = 'hide';
$fields['post_author_box_comments'][ $std_id ] = 'hide';
$fields['author_comments'][ $std_id ] = 'hide';
$fields['author_posts'][ $std_id ] = 'hide';
$fields['header_layout'][ $std_id ] = 'full-width';
$fields['resp_scheme'][ $std_id ] = 'light';
$fields['resp_bg_style'][ $std_id ] = 'color';
$fields['topbar_show_login'][ $std_id ] = 'hide';
$fields['header_top_padding'][ $std_id ] = '25';
$fields['header_bottom_padding'][ $std_id ] = '25';
$fields['off_canvas'][ $std_id ] = '1';
$fields['off_canvas_position'][ $std_id ] = 'left';
$fields['social_share_top_style'][ $std_id ] = 'style-5';
$fields['social_share_bottom_style'][ $std_id ] = 'style-6';
$fields['footer_widgets'][ $std_id ] = '3-column';
$fields['footer_widgets_heading_style'][ $std_id ] = 't1-s1';
$fields['footer_social'][ $std_id ] = 'hide';
$fields['theme_color'][ $std_id ] = '#ff7538';
$fields['site_bg_color'][ $std_id ] = '#f3f3f3';
$fields['topbar_date_bg'][ $std_id ] = 'rgba(255,255,255,0)';
$fields['topbar_date_color'][ $std_id ] = '#252525';
$fields['topbar_text_color'][ $std_id ] = '#858585';
$fields['topbar_text_hcolor'][ $std_id ] = '#686868';
$fields['topbar_icon_text_color'][ $std_id ] = '#858585';
$fields['header_top_border_color'][ $std_id ] = '#ff7538';
$fields['header_menu_st2_bbottom_color'][ $std_id ] = '#ff7538';
$fields['header_menu_text_color'][ $std_id ] = '#d9d9d9';
$fields['header_menu_text_h_color'][ $std_id ] = '#ffffff';
$fields['header_menu_item_h_bg_color'][ $std_id ] = '#ff7538';
$fields['header_menu_bg_color'][ $std_id ] = '#252525';
$fields['header_submenu_bg_color'][ $std_id ] = '#252525';
$fields['header_submenu_color'][ $std_id ] = '#d9d9d9';
$fields['footer_link_color'][ $std_id ] = '#9c9c9c';
$fields['footer_link_hover_color'][ $std_id ] = '#ffffff';
$fields['footer_widgets_bg_color'][ $std_id ] = '#2d2d2d';
$fields['footer_line_top_color'][ $std_id ] = '#ff7538';
$fields['footer_copy_bg_color'][ $std_id ] = '#242424';
$fields['footer_bg_color'][ $std_id ] = '#2d2d2d';
$fields['section_title_color'][ $std_id ] = '#000000';
$fields['section_title_bg_color'][ $std_id ] = '#c5c5c5';
$fields['listings_readmore_color'][ $std_id ] = '#565656';
$fields['listings_readmore_color_hover'][ $std_id ] = '#434343';
$fields['typo_body'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '13',
  'letter-spacing' => '',
  'color' => '#7b7b7b',
);
$fields['typo_heading'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'inherit',
  'letter-spacing' => '',
);
$fields['typo_meta'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'transform' => 'none',
  'size' => '11',
  'letter-spacing' => '',
  'color' => '#a9a9a9',
);
$fields['typo_meta_author'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'transform' => 'capitalize',
  'size' => '11',
  'letter-spacing' => '',
);
$fields['typo_badges'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '600',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '10',
  'letter-spacing' => '.4px',
);
$fields['typo_post_heading'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'capitalize',
  'letter-spacing' => '',
);
$fields['typo_post_tp10_heading'][ $std_id ] = '36px';
$fields['typo_entry_content'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'initial',
  'size' => '15',
  'line_height' => '28',
  'letter-spacing' => '',
  'color' => '#222222',
);
$fields['typo_post_summary'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'initial',
  'size' => '12',
  'line_height' => '19',
  'letter-spacing' => '',
  'color' => '#717171',
);
$fields['typ_header_logo'][ $std_id ] = array (
  'enable' => '0',
  'family' => 'Helvetica',
  'variant' => '700',
  'subset' => 'unknown',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '30',
  'letter-spacing' => '',
);
$fields['typ_header_menu'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '13',
  'letter-spacing' => '.4px',
);
$fields['typ_header_sub_menu'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '13',
  'letter-spacing' => '.4px',
);
$fields['typo_topbar_menu'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '11',
  'letter-spacing' => '',
);
$fields['typo_topbar_sub_menu'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '11',
  'letter-spacing' => '',
);
$fields['typo_topbar_date'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '11',
  'letter-spacing' => '',
);
$fields['typo_archive_title_pre'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '14',
  'letter-spacing' => '',
);
$fields['typo_archive_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '28',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_blocks_subtitle'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'line_height' => '18',
  'letter-spacing' => '',
  'color' => '#565656',
);
$fields['typo_listing_classic_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '27',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_listing_classic_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '27',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_listing_classic_3_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '27',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_mg_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '27',
  'letter-spacing' => '-.2px',
  'color' => '#ffffff',
);
$fields['typo_mg_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '26',
  'letter-spacing' => '-.2px',
  'color' => '#ffffff',
);
$fields['typo_mg_3_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '17',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_4_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '16',
  'letter-spacing' => '',
);
$fields['typo_mg_5_title_big'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '20',
  'letter-spacing' => '',
);
$fields['typo_mg_5_title_small'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '15',
  'letter-spacing' => '',
);
$fields['typo_mg_6_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_7_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_8_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_9_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_10_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_listing_grid_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '19',
  'line_height' => '24',
  'letter-spacing' => '-.1px',
  'color' => '#202020',
);
$fields['typo_listing_grid_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '19',
  'line_height' => '24',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_listing_tall_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '202020',
);
$fields['typo_listing_tall_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_listing_slider_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '25',
  'line_height' => '32',
  'letter-spacing' => '',
);
$fields['typo_listing_slider_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '25',
  'line_height' => '32',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_listing_slider_3_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'line_height' => '30',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_listing_box_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '20',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_box_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '14',
  'line_height' => '16',
  'letter-spacing' => '',
);
$fields['typo_listing_box_3_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '18',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_box_4_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '18',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_blog_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '19',
  'line_height' => '24',
  'letter-spacing' => '-.1px',
  'color' => '#202020',
);
$fields['typo_listing_blog_5_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '19',
  'line_height' => '24',
  'letter-spacing' => '-.1px',
  'color' => '#202020',
);
$fields['typo_listing_thumbnail_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '13',
  'line_height' => '17',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_listing_thumbnail_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '13',
  'line_height' => '17',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_text_listing_1_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '15',
  'line_height' => '19',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_text_listing_2_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '15',
  'line_height' => '19',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_text_listing_3_title'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '15',
  'line_height' => '19',
  'letter-spacing' => '',
  'color' => '#202020',
);
$fields['typo_section_heading'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '.4px',
);
$fields['typo_footer_menu'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'transform' => 'capitalize',
  'size' => '14',
  'line_height' => '28',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_footer_copy'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'size' => '13',
  'line_height' => '18',
  'letter-spacing' => '-.2px',
);
$fields['listing-modern-grid-1'][ $std_id ] = array (
  'item-1-title-limit' => '160',
  'item-2-title-limit' => '90',
  'item-3-title-limit' => '70',
  'item-4-title-limit' => '70',
  'subtitle' => '0',
  'subtitle-limit' => '0',
  'subtitle-location' => 'before-meta',
  'format-icon' => '1',
  'term-badge' => '0',
  'term-badge-count' => '1',
  'term-badge-tax' => 'category',
  'meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
);
$fields['listing-modern-grid-3'][ $std_id ] = array (
  'title-limit' => '60',
  'format-icon' => '1',
  'term-badge' => '0',
  'term-badge-count' => '1',
  'term-badge-tax' => 'category',
  'meta' => 
  array (
    'show' => '0',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
);
$fields['listing-mix-1-2'][ $std_id ] = array (
  'big-title-limit' => '82',
  'big-excerpt' => '1',
  'big-excerpt-limit' => '115',
  'big-subtitle' => '0',
  'big-subtitle-limit' => '0',
  'big-subtitle-location' => 'before-meta',
  'big-format-icon' => '1',
  'big-term-badge' => '0',
  'big-term-badge-count' => '1',
  'big-term-badge-tax' => 'category',
  'big-meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
  'small-thumbnail-type' => 'featured-image',
  'small-title-limit' => '60',
  'small-excerpt' => '0',
  'small-excerpt-limit' => '110',
  'small-subtitle' => '0',
  'small-subtitle-limit' => '0',
  'small-subtitle-location' => 'after-title',
  'small-format-icon' => '1',
  'small-term-badge' => '0',
  'small-term-badge-count' => '1',
  'small-term-badge-tax' => 'category',
  'small-meta' => 
  array (
    'show' => '0',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '0',
  ),
);
$fields['listing-mix-1-4'][ $std_id ] = array (
  'big-title-limit' => '82',
  'big-excerpt' => '1',
  'big-excerpt-limit' => '115',
  'big-subtitle' => '0',
  'big-subtitle-limit' => '0',
  'big-subtitle-location' => 'before-meta',
  'big-format-icon' => '1',
  'big-term-badge' => '0',
  'big-term-badge-count' => '1',
  'big-term-badge-tax' => 'category',
  'big-meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
  'small-thumbnail-type' => 'featured-image',
  'small-title-limit' => '80',
  'small-excerpt' => '0',
  'small-excerpt-limit' => '110',
  'small-subtitle' => '0',
  'small-subtitle-limit' => '0',
  'small-subtitle-location' => 'after-title',
  'small-format-icon' => '1',
  'small-term-badge' => '0',
  'small-term-badge-count' => '1',
  'small-term-badge-tax' => 'category',
  'small-meta' => 
  array (
    'show' => '0',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '0',
  ),
);
$fields['listing-mix-3-1'][ $std_id ] = array (
  'big-title-limit' => '82',
  'big-excerpt' => '1',
  'big-excerpt-limit' => '80',
  'big-subtitle' => '0',
  'big-subtitle-limit' => '0',
  'big-subtitle-location' => 'before-meta',
  'big-format-icon' => '1',
  'big-term-badge' => '0',
  'big-term-badge-count' => '1',
  'big-term-badge-tax' => 'category',
  'big-meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
  'small-thumbnail-type' => 'featured-image',
  'small-title-limit' => '50',
  'small-subtitle' => '0',
  'small-subtitle-limit' => '0',
  'small-subtitle-location' => 'before-meta',
  'small-meta' => 
  array (
    'show' => '1',
    'author' => '0',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
);
$fields['listing-mix-4-5'][ $std_id ] = array (
  'big-title-limit' => '0',
  'big-excerpt-limit' => '350',
  'big-subtitle' => '0',
  'big-subtitle-limit' => '0',
  'big-subtitle-location' => 'before-meta',
  'big-format-icon' => '1',
  'big-term-badge' => '1',
  'big-term-badge-count' => '1',
  'big-term-badge-tax' => 'category',
  'big-meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '1',
    'review' => '1',
  ),
  'big-read-more' => '1',
  'small-title-limit' => '60',
  'small-excerpt-limit' => '160',
  'small-subtitle' => '0',
  'small-subtitle-limit' => '0',
  'small-subtitle-location' => 'before-meta',
  'small-format-icon' => '1',
  'small-term-badge' => '1',
  'small-term-badge-count' => '1',
  'small-term-badge-tax' => 'category',
  'small-meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '1',
    'review' => '1',
  ),
  'small-read-more' => '1',
);
$fields['listing-blog-5'][ $std_id ] = array (
  'title-limit' => '100',
  'excerpt-limit' => '240',
  'subtitle' => '0',
  'subtitle-limit' => '0',
  'subtitle-location' => 'before-meta',
  'format-icon' => '1',
  'term-badge' => '0',
  'term-badge-count' => '1',
  'term-badge-tax' => 'category',
  'meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
  'read-more' => '1',
);
$fields['listing-thumbnail-1'][ $std_id ] = array (
  'thumbnail-type' => 'featured-image',
  'title-limit' => '50',
  'subtitle' => '0',
  'subtitle-limit' => '0',
  'subtitle-location' => 'before-meta',
  'show-ranking' => '0',
  'meta' => 
  array (
    'show' => '1',
    'author' => '0',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
);
$fields['listing-text-1'][ $std_id ] = array (
  'title-limit' => '56',
  'excerpt' => '0',
  'excerpt-limit' => '200',
  'subtitle' => '0',
  'subtitle-limit' => '0',
  'subtitle-location' => 'before-meta',
  'term-badge' => '1',
  'term-badge-count' => '1',
  'term-badge-tax' => 'category',
  'show-ranking' => '',
  'meta' => 
  array (
    'show' => '1',
    'author' => '1',
    'date' => '1',
    'date-format' => 'readable',
    'view' => '0',
    'share' => '0',
    'comment' => '1',
    'review' => '1',
  ),
);
