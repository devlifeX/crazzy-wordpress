<?php
//
// Custom default values for smart-news Demo
// 


$std_id = $this->get_std_id();


$fields['section_heading_style'][ $std_id ] = 't3-s4';
$fields['layout-2-col'][ $std_id ] = array (
  'width' => '1130',
  'content' => '67',
  'primary' => '33',
);
$fields['layout_columns_space'][ $std_id ] = '35';
$fields['general_listing'][ $std_id ] = 'grid-1';
$fields['sticky_sidebar'][ $std_id ] = 'enable';
$fields['post_template'][ $std_id ] = 'style-1';
$fields['post_author_box_posts'][ $std_id ] = 'hide';
$fields['post_author_box_comments'][ $std_id ] = 'hide';
$fields['author_comments'][ $std_id ] = 'hide';
$fields['author_posts'][ $std_id ] = 'hide';
$fields['topbar_style'][ $std_id ] = 'style-2';
$fields['topbar_show_login'][ $std_id ] = 'hide';
$fields['header_top_padding'][ $std_id ] = '25';
$fields['header_bottom_padding'][ $std_id ] = '25';
$fields['off_canvas'][ $std_id ] = '1';
$fields['off_canvas_position'][ $std_id ] = 'left';
$fields['social_share_top_style'][ $std_id ] = 'style-7';
$fields['social_share_bottom_style'][ $std_id ] = 'style-8';
$fields['footer_layout'][ $std_id ] = 'out-full-width';
$fields['footer_widgets'][ $std_id ] = '3-column';
$fields['footer_widgets_heading_style'][ $std_id ] = 't5-s1';
$fields['footer_social'][ $std_id ] = 'hide';
$fields['theme_color'][ $std_id ] = '#d6526e';
$fields['topbar_bg_color'][ $std_id ] = '#f0f1f2';
$fields['topbar_icon_text_color'][ $std_id ] = '#959595';
$fields['topbar_icon_text_hcolor'][ $std_id ] = '#777777';
$fields['header_menu_btop_color'][ $std_id ] = 'rgba(222,222,222,0)';
$fields['header_menu_st2_bbottom_color'][ $std_id ] = 'rgba(222,222,222,0)';
$fields['header_menu_text_color'][ $std_id ] = '#ffffff';
$fields['header_menu_text_h_color'][ $std_id ] = '#ffffff';
$fields['header_menu_item_h_bg_color'][ $std_id ] = 'rgba(255,255,255,0.1)';
$fields['header_menu_bg_color'][ $std_id ] = '#0e1724';
$fields['cat_topposts_bg_color'][ $std_id ] = '#f0f1f2 ';
$fields['footer_menu_bg_color'][ $std_id ] = '#1e2632';
$fields['footer_copy_bg_color'][ $std_id ] = '#0e1724';
$fields['footer_social_bg_color'][ $std_id ] = '#0e1724';
$fields['footer_bg_color'][ $std_id ] = '#0e1724';
$fields['section_title_color'][ $std_id ] = '#ffffff';
$fields['section_title_bg_color'][ $std_id ] = '#0e1724';
$fields['typo_body'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '13',
  'letter-spacing' => '',
  'color' => '#7b7b7b',
);
$fields['typo_meta'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => 'regular',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '11',
  'letter-spacing' => '',
  'color' => '#a2a2a2',
);
$fields['typo_meta_author'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '11',
  'letter-spacing' => '',
);
$fields['typo_badges'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '11',
  'letter-spacing' => '.5px',
);
$fields['typo_post_heading'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'capitalize',
  'letter-spacing' => '',
);
$fields['typo_post_tp1_heading'][ $std_id ] = '36px';
$fields['typo_entry_content'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'initial',
  'size' => '18',
  'line_height' => '35',
  'letter-spacing' => '',
  'color' => '#222222',
);
$fields['typo_post_summary'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'initial',
  'size' => '13',
  'line_height' => '19',
  'letter-spacing' => '',
  'color' => '#939393',
);
$fields['typo_post_summary_single'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'initial',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '',
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
  'family' => 'Roboto',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '13',
  'letter-spacing' => '',
);
$fields['typ_header_sub_menu'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '13',
  'letter-spacing' => '',
);
$fields['typo_archive_title_pre'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '14',
  'letter-spacing' => '',
);
$fields['typo_archive_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '28',
  'letter-spacing' => '',
  'color' => '#383838',
);
$fields['typo_listing_classic_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '26',
  'line_height' => '33',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_classic_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '26',
  'line_height' => '33',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_classic_3_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '26',
  'line_height' => '33',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_mg_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '27',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '27',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_3_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'left',
  'transform' => 'capitalize',
  'size' => '17',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_4_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '17',
  'letter-spacing' => '',
);
$fields['typo_mg_5_title_big'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '20',
  'letter-spacing' => '',
);
$fields['typo_mg_5_title_small'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '15',
  'letter-spacing' => '',
);
$fields['typo_mg_6_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_7_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_8_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_9_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_10_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_listing_grid_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '17',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#1a1a1a',
);
$fields['typo_listing_grid_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '17',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_tall_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_tall_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_slider_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '24',
  'line_height' => '30',
  'letter-spacing' => '',
);
$fields['typo_listing_slider_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '20',
  'line_height' => '30',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_slider_3_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '20',
  'line_height' => '30',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_box_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '20',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_box_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '14',
  'line_height' => '16',
  'letter-spacing' => '',
);
$fields['typo_listing_box_3_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '18',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_box_4_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '18',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_blog_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '20',
  'line_height' => '24',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_blog_5_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '21',
  'line_height' => '26',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_thumbnail_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '13',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#1a1a1a',
);
$fields['typo_listing_thumbnail_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '14',
  'line_height' => '18',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_text_listing_1_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '15',
  'line_height' => '21',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_text_listing_2_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '15',
  'line_height' => '21',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_text_listing_3_title'][ $std_id ] = array (
  'family' => 'Roboto Slab',
  'variant' => '700',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '15',
  'line_height' => '20',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_section_heading'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => '500',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '13',
  'line_height' => '22',
  'letter-spacing' => '',
);
$fields['typo_footer_menu'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => '500',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '13',
  'line_height' => '40',
  'letter-spacing' => '.5px',
  'color' => '#ffffff',
);
$fields['typo_footer_copy'][ $std_id ] = array (
  'family' => 'Roboto',
  'variant' => 'regular',
  'subset' => 'latin',
  'size' => '13',
  'line_height' => '22',
  'letter-spacing' => '-.3px',
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
  'term-badge' => '1',
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
    'show' => '1',
    'author' => '1',
    'date' => '0',
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
$fields['listing-grid-1'][ $std_id ] = array (
  'title-limit' => '82',
  'excerpt-limit' => '95',
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
    'comment' => '1',
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
