<?php
//
// Custom default values for future-mag Demo
// 


$std_id = $this->get_std_id();


$fields['section_heading_style'][ $std_id ] = 't3-s1';
$fields['layout-2-col'][ $std_id ] = array (
  'width' => '1180',
  'content' => '69',
  'primary' => '31',
);
$fields['layout-3-col'][ $std_id ] = array (
  'width' => '1320',
  'content' => '50',
  'primary' => '25',
  'secondary' => '25',
);
$fields['layout_columns_space'][ $std_id ] = '20';
$fields['sticky_sidebar'][ $std_id ] = 'enable';
$fields['post_author_box_posts'][ $std_id ] = 'hide';
$fields['post_author_box_comments'][ $std_id ] = 'hide';
$fields['author_comments'][ $std_id ] = 'hide';
$fields['author_posts'][ $std_id ] = 'hide';
$fields['header_layout'][ $std_id ] = 'out-stretched';
$fields['header_style'][ $std_id ] = 'style-8';
$fields['topbar_style'][ $std_id ] = 'hidden';
$fields['off_canvas'][ $std_id ] = '1';
$fields['off_canvas_position'][ $std_id ] = 'left';
$fields['off_canvas_skin'][ $std_id ] = 'skin-dark';
$fields['footer_layout'][ $std_id ] = 'out-full-width';
$fields['footer_widgets'][ $std_id ] = '3-column';
$fields['footer_widgets_heading_style'][ $std_id ] = 't1-s1';
$fields['footer_social'][ $std_id ] = 'hide';
$fields['theme_color'][ $std_id ] = '#05adbc';
$fields['site_bg_color'][ $std_id ] = '#f0f0f0';
$fields['header_top_border'][ $std_id ] = '0';
$fields['header_menu_text_color'][ $std_id ] = '#d9d9d9';
$fields['header_menu_text_h_color'][ $std_id ] = '#ffffff';
$fields['header_bg_color'][ $std_id ] = '#0b0b0b';
$fields['footer_copy_bg_color'][ $std_id ] = '#292929';
$fields['footer_social_bg_color'][ $std_id ] = '';
$fields['footer_bg_color'][ $std_id ] = '#363636';
$fields['section_title_color'][ $std_id ] = '#000000';
$fields['section_title_bg_color'][ $std_id ] = 'rgba(0,0,0,0.1)';
$fields['listings_readmore_color'][ $std_id ] = '#ffffff';
$fields['listings_readmore_color_hover'][ $std_id ] = '#ffffff';
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
  'family' => 'Montserrat',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'inherit',
  'letter-spacing' => '',
);
$fields['typo_meta'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'transform' => 'capitalize',
  'size' => '12',
  'letter-spacing' => '',
  'color' => '#afafaf',
);
$fields['typo_meta_author'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'transform' => 'capitalize',
  'size' => '12',
  'letter-spacing' => '',
);
$fields['typo_badges'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '9',
  'letter-spacing' => '',
);
$fields['typo_post_heading'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '700',
  'subset' => 'latin',
  'transform' => 'capitalize',
  'letter-spacing' => '',
);
$fields['typo_post_tp10_heading'][ $std_id ] = '34px';
$fields['typo_entry_content'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'initial',
  'size' => '19',
  'line_height' => '34',
  'letter-spacing' => '',
  'color' => '#222222',
);
$fields['typo_post_summary'][ $std_id ] = array (
  'family' => 'Open Sans',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'initial',
  'size' => '13',
  'line_height' => '20',
  'letter-spacing' => '',
  'color' => '#888888',
);
$fields['typo_post_summary_single'][ $std_id ] = array (
  'family' => 'Open Sans',
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
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '13',
  'letter-spacing' => '',
);
$fields['typo_archive_title_pre'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '14',
  'letter-spacing' => '',
);
$fields['typo_archive_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '600',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '28',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_classic_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '25',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_classic_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '28',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_classic_3_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '28',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_mg_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_3_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'left',
  'transform' => 'capitalize',
  'size' => '15',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_4_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '600',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'letter-spacing' => '',
);
$fields['typo_mg_5_title_big'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '21',
  'letter-spacing' => '',
);
$fields['typo_mg_5_title_small'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '16',
  'letter-spacing' => '',
);
$fields['typo_mg_6_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_7_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_8_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_9_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_mg_10_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '23',
  'letter-spacing' => '',
  'color' => '#ffffff',
);
$fields['typo_listing_grid_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '21',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_grid_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '21',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_tall_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_tall_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '22',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_slider_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '30',
  'letter-spacing' => '',
);
$fields['typo_listing_slider_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '30',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_slider_3_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '22',
  'line_height' => '30',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_box_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '15',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_box_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '14',
  'line_height' => '16',
  'letter-spacing' => '',
);
$fields['typo_listing_box_3_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '15',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_box_4_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'uppercase',
  'size' => '15',
  'line_height' => '28',
  'letter-spacing' => '',
);
$fields['typo_listing_blog_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '18',
  'line_height' => '23',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_blog_5_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'capitalize',
  'size' => '18',
  'line_height' => '23',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_thumbnail_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '13',
  'line_height' => '17',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_listing_thumbnail_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => 'regular',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'none',
  'size' => '13',
  'line_height' => '17',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_text_listing_1_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'center',
  'transform' => 'capitalize',
  'size' => '16',
  'line_height' => '21',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_text_listing_2_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '16',
  'line_height' => '21',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_text_listing_3_title'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '500',
  'subset' => 'latin',
  'align' => 'inherit',
  'transform' => 'inherit',
  'size' => '15',
  'line_height' => '20',
  'letter-spacing' => '',
  'color' => '#000000',
);
$fields['typo_section_heading'][ $std_id ] = array (
  'family' => 'Montserrat',
  'variant' => '600',
  'subset' => 'latin',
  'transform' => 'uppercase',
  'size' => '16',
  'line_height' => '23',
  'letter-spacing' => '',
);
$fields['listing-modern-grid-3'][ $std_id ] = array (
  'title-limit' => '45',
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
$fields['listing-modern-grid-4'][ $std_id ] = array (
  'title-limit' => '65',
  'subtitle' => '0',
  'subtitle-limit' => '0',
  'subtitle-location' => 'before-meta',
  'format-icon' => '1',
  'term-badge' => '1',
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
    'comment' => '1',
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
$fields['listing-mix-4-8'][ $std_id ] = array (
  'big-title-limit' => '0',
  'big-excerpt-limit' => '155',
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
  'big-read-more' => '0',
  'small-title-limit' => '100',
  'small-excerpt-limit' => '90',
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
    'comment' => '0',
    'review' => '1',
  ),
);
$fields['listing-grid-1'][ $std_id ] = array (
  'title-limit' => '82',
  'excerpt-limit' => '115',
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
$fields['listing-thumbnail-1'][ $std_id ] = array (
  'thumbnail-type' => 'featured-image',
  'title-limit' => '60',
  'subtitle' => '0',
  'subtitle-limit' => '0',
  'subtitle-location' => 'before-meta',
  'show-ranking' => '0',
  'meta' => 
  array (
    'show' => '0',
    'author' => '0',
    'date' => '1',
    'date-format' => 'standard',
    'view' => '0',
    'share' => '0',
    'comment' => '0',
    'review' => '1',
  ),
);
$fields['listing-thumbnail-2'][ $std_id ] = array (
  'thumbnail-type' => 'featured-image',
  'title-limit' => '60',
  'excerpt' => '0',
  'excerpt-limit' => '115',
  'subtitle' => '0',
  'subtitle-limit' => '0',
  'subtitle-location' => 'after-title',
  'format-icon' => '1',
  'term-badge' => '0',
  'term-badge-count' => '1',
  'term-badge-tax' => 'category',
  'show-ranking' => '',
  'meta' => 
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