<?php

$std_id = $this->get_std_id();

/**
 * =>Color & Style
 */
$fields['section_heading_style'][ $std_id ] = 't3-s1';
$fields['theme_color'][ $std_id ]           = '#e62929';
$fields['site_bg_color'][ $std_id ]         = '';


/**
 * -> Topbar Colors
 */
$fields['topbar_date_bg'][ $std_id ]          = '';
$fields['topbar_date_color'][ $std_id ]       = '';
$fields['topbar_text_color'][ $std_id ]       = '#9c9c9c';
$fields['topbar_text_hcolor'][ $std_id ]      = '';
$fields['topbar_bg_color'][ $std_id ]         = '#2b2b2b';
$fields['topbar_border_color'][ $std_id ]     = '#1d1d1d';
$fields['topbar_icon_text_color'][ $std_id ]  = '#ffffff';
$fields['topbar_icon_text_hcolor'][ $std_id ] = '#ffffff';
$fields['topbar_icon_bg'][ $std_id ]          = '#e62929';
$fields['topbar_icon_bg_hover'][ $std_id ]    = '#d61a1a';


/**
 * -> Header Colors
 */
$fields['header_menu_bg_color'][ $std_id ]          = '#2f2f2f';
$fields['header_menu_text_color'][ $std_id ]        = '#ffffff';
$fields['resp_scheme'][ $std_id ]                   = 'dark';
$fields['header_bg_color'][ $std_id ]               = '#2f2f2f';
$fields['header_menu_btop_color'][ $std_id ]        = '#232323';
$fields['header_menu_st1_bbottom_color'][ $std_id ] = '#232323';
$fields['header_menu_st2_bbottom_color'][ $std_id ] = '#232323';
$fields['header_menu_st3_bbottom_color'][ $std_id ] = '#232323';
$fields['header_menu_st4_bbottom_color'][ $std_id ] = '#232323';
$fields['header_menu_st5_bbottom_color'][ $std_id ] = '#232323';
$fields['header_menu_st6_bbottom_color'][ $std_id ] = '#232323';
$fields['header_menu_st7_bbottom_color'][ $std_id ] = '#232323';
$fields['header_menu_st8_bbottom_color'][ $std_id ] = '#232323';
$fields['header_top_border_color'][ $std_id ]       = '';
$fields['header_top_border'][ $std_id ]             = 0;
$fields['cat_topposts_bg_color'][ $std_id ]         = '#292929';


/**
 * -> Heading
 */
$fields['section_title_color'][ $std_id ]    = '#2d2d2d';
$fields['section_title_bg_color'][ $std_id ] = '#2d2d2d';


/**
 * => Template Options
 */
$fields['general_listing'][ $std_id ] = 'grid-1';


/**
 * -> Posts
 **/
$fields['post_template'][ $std_id ] = 'style-12';


/**
 * -> Categories Archive
 **/
$fields['cat_top_posts'][ $std_id ] = 'style-3';


/**
 * => Header Options
 */
$fields['header_layout'][ $std_id ] = 'full-width';
$fields['header_style'][ $std_id ]  = 'style-5';


/**
 * -> Topbar
 */
$fields['topbar_style'][ $std_id ]             = 'style-1';
$fields['topbar_show_date'][ $std_id ]         = 'hide';
$fields['topbar_show_social_icons'][ $std_id ] = 'show';


/**
 * => Footer Options
 */
$fields['footer_social'][ $std_id ]      = 'show';
$fields['footer_social_feed'][ $std_id ] = 'hide';


/**
 * => Typography
 */

$fields['typo_body'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'inherit',
	'size'           => '13',
	'letter-spacing' => '',
	'color'          => '#7b7b7b',
);

$fields['typo_heading'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'inherit',
	'letter-spacing' => '',
);

$fields['typo_meta'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'transform'      => 'none',
	'size'           => '12',
	'letter-spacing' => '',
	'color'          => '#adb5bd',
);

$fields['typo_meta_author'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'uppercase',
	'size'           => '12',
	'letter-spacing' => ''
);

$fields['typo_badges'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'uppercase',
	'size'           => '10',
	'letter-spacing' => '',
);

$fields['typo_post_heading'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'capitalize',
	'letter-spacing' => '',
);

$fields['typo_post_tp1_heading'][ $std_id ] = '24px';

$fields['typo_post_tp2_heading'][ $std_id ] = '26px';

$fields['typo_post_tp3_heading'][ $std_id ] = '26px';

$fields['typo_post_tp4_heading'][ $std_id ] = '26px';

$fields['typo_post_tp5_heading'][ $std_id ] = '26px';

$fields['typo_post_tp6_heading'][ $std_id ] = '24px';

$fields['typo_post_tp7_heading'][ $std_id ] = '24px';

$fields['typo_post_tp8_heading'][ $std_id ] = '24px';

$fields['typo_post_tp9_heading'][ $std_id ] = '24px';

$fields['typo_post_tp10_heading'][ $std_id ] = '24px';

$fields['typo_post_tp11_heading'][ $std_id ] = '23px';

$fields['typo_post_tp12_heading'][ $std_id ] = '22px';

$fields['typo_post_tp13_heading'][ $std_id ] = '22px';

$fields['typo_post_tp14_heading'][ $std_id ] = '22px';

$fields['typo_post_subtitle'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => 'italic',
	'subset'         => 'latin',
	'transform'      => 'inherit',
	'size'           => '16',
	'letter-spacing' => '',
);

$fields['typo_entry_content'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'initial',
	'size'           => '15',
	'letter-spacing' => '',
	'color'          => '#222222',
);

$fields['typo_post_summary'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'initial',
	'size'           => '13',
	'line_height'    => '19',
	'letter-spacing' => '',
	'color'          => '#888888',
);

$fields['typo_post_summary_single'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'initial',
	'size'           => '15',
	'line_height'    => '22',
	'letter-spacing' => '',
);

$fields['typ_header_menu'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'uppercase',
	'size'           => '14',
	'letter-spacing' => '',
);

$fields['typ_header_sub_menu'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '13',
	'letter-spacing' => '',
);

$fields['typo_topbar_menu'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '12',
	'letter-spacing' => '',
);

$fields['typo_topbar_sub_menu'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '13',
	'letter-spacing' => '',
);

$fields['typo_topbar_date'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'uppercase',
	'size'           => '11',
	'letter-spacing' => '',
);

$fields['typo_archive_title_pre'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '14',
	'letter-spacing' => '',
);

$fields['typo_archive_title'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'uppercase',
	'size'           => '30',
	'letter-spacing' => '',
);

$fields['typo_listing_classic_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '18',
	'line_height'    => '25',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_classic_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '18',
	'line_height'    => '27',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_classic_3_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '18',
	'line_height'    => '25',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_mg_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '20',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_mg_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '20',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_mg_3_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '17',
	'letter-spacing' => '',
);

$fields['typo_mg_4_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '16',
	'letter-spacing' => '',
);

$fields['typo_mg_5_title_big'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'center',
	'transform'      => 'none',
	'size'           => '18',
	'letter-spacing' => '',
);

$fields['typo_mg_5_title_small'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'center',
	'transform'      => 'none',
	'size'           => '14',
	'letter-spacing' => '',
);

$fields['typo_mg_6_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '20',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_mg_7_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '20',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_mg_8_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '20',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_mg_9_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '20',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_mg_10_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '20',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_listing_grid_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '15',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_grid_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '17',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_tall_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '15',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_tall_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'center',
	'transform'      => 'none',
	'size'           => '15',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_slider_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '22',
	'line_height'    => '28',
	'letter-spacing' => '',
);

$fields['typo_listing_slider_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '19',
	'line_height'    => '28',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_slider_3_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '19',
	'line_height'    => '28',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_box_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '22',
	'line_height'    => '28',
	'letter-spacing' => '',
);

$fields['typo_listing_box_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '13',
	'line_height'    => '16',
	'letter-spacing' => '',
);

$fields['typo_listing_box_3_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '17',
	'line_height'    => '28',
	'letter-spacing' => '',
);

$fields['typo_listing_box_4_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '17',
	'line_height'    => '28',
	'letter-spacing' => '',
);

$fields['typo_listing_blog_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '17',
	'line_height'    => '19',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_blog_5_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '18',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_thumbnail_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '13',
	'line_height'    => '17',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_listing_thumbnail_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '13',
	'line_height'    => '16',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_text_listing_1_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'center',
	'transform'      => 'capitalize',
	'size'           => '14',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_text_listing_2_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '13',
	'line_height'    => '18',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_text_listing_3_title'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '13',
	'line_height'    => '18',
	'letter-spacing' => '',
	'color'          => '#383838',
);

$fields['typo_section_heading'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'uppercase',
	'size'           => '16',
	'line_height'    => '30',
	'letter-spacing' => '',
);

$fields['typo_footer_menu'][ $std_id ] = array(
	'family'         => 'Lato',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'transform'      => 'capitalize',
	'size'           => '14',
	'line_height'    => '28',
	'letter-spacing' => '',
	'color'          => '#ffffff',
);

$fields['typo_footer_copy'][ $std_id ] = array(
	'family'         => 'Noto Sans',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'size'           => '11',
	'line_height'    => '18',
	'letter-spacing' => '',
);

$fields['typo_blocks_subtitle'][ $std_id ]              = array(
	'family'         => 'Lato',
	'variant'        => 'italic',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'inherit',
	'line_height'    => '18',
	'letter-spacing' => '',
	'color'          => '#565656',
);
$fields['typo_listing_classic_1_subtitle'][ $std_id ]   = 17;
$fields['typo_listing_classic_2_subtitle'][ $std_id ]   = 17;
$fields['typo_listing_classic_3_subtitle'][ $std_id ]   = 17;
$fields['typo_mg_1_subtitle'][ $std_id ]                = 16;
$fields['typo_mg_2_subtitle'][ $std_id ]                = 16;
$fields['typo_mg_3_subtitle'][ $std_id ]                = 16;
$fields['typo_mg_4_subtitle'][ $std_id ]                = 15;
$fields['typo_mg_5_subtitle'][ $std_id ]                = 16;
$fields['typo_mg_6_subtitle'][ $std_id ]                = 16;
$fields['typo_mg_7_subtitle'][ $std_id ]                = 16;
$fields['typo_mg_8_subtitle'][ $std_id ]                = 16;
$fields['typo_mg_9_subtitle'][ $std_id ]                = 15;
$fields['typo_mg_10_subtitle'][ $std_id ]               = 16;
$fields['typo_listing_grid_1_subtitle'][ $std_id ]      = 16;
$fields['typo_listing_grid_2_subtitle'][ $std_id ]      = 16;
$fields['typo_listing_tall_1_subtitle'][ $std_id ]      = 16;
$fields['typo_listing_tall_2_subtitle'][ $std_id ]      = 16;
$fields['typo_listing_slider_1_subtitle'][ $std_id ]    = 17;
$fields['typo_listing_slider_2_subtitle'][ $std_id ]    = 17;
$fields['typo_listing_slider_3_subtitle'][ $std_id ]    = 17;
$fields['typo_listing_blog_1_subtitle'][ $std_id ]      = 16;
$fields['typo_listing_blog_5_subtitle'][ $std_id ]      = 17;
$fields['typo_listing_thumbnail_1_subtitle'][ $std_id ] = 14;
$fields['typo_listing_thumbnail_2_subtitle'][ $std_id ] = 14;
$fields['typo_text_listing_1_subtitle'][ $std_id ]      = 14;
$fields['typo_text_listing_2_subtitle'][ $std_id ]      = 14;
$fields['typo_text_listing_3_subtitle'][ $std_id ]      = 14;

unset( $std_id );