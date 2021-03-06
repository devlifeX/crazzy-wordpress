<?php


/**
 * Publisher -> Business Times
 */
class Publisher_Theme_Style_Business_Times extends Publisher_Theme_Style {

	/**
	 * Style initializer
	 */
	public function __construct() {

		$this->style_id = 'business-times';

		add_filter( 'better-framework/panel/' . publisher_get_theme_panel_id() . '/std', array(
			$this,
			'panel_std'
		), 20 );

		add_filter( 'better-framework/panel/' . publisher_get_theme_panel_id() . '/css', array(
			$this,
			'panel_css'
		), 20 );

		add_filter( 'better-framework/taxonomy/metabox/better-category-options/css', array(
			$this,
			'customize_category_fields'
		), 20 );


		if ( Publisher_Theme_Styles_Manager::$current_style === $this->style_id ) {
			add_filter( 'publisher-theme-core/page-templates/config', array(
				$this,
				'page_templates_config'
			) );
		}

		parent::__construct();
	}


	/**
	 * Demo panel STD's
	 *
	 * @param $fields
	 *
	 * @return mixed
	 */
	function panel_std( $fields ) {

		include PUBLISHER_THEME_PATH . 'includes/styles/business-times/panel-std.php';

		return $fields;
	}


	/**
	 * Demo panel STD's
	 *
	 * @param $fields
	 *
	 * @return mixed
	 */
	function panel_css( $fields ) {

		include PUBLISHER_THEME_PATH . 'includes/styles/business-times/panel-css.php';

		return $fields;
	}


	/**
	 * Adds custom functions of style
	 */
	function include_functions() {
	}


	/**
	 * Modify each style or demo category fields
	 *
	 * @param $fields array
	 *
	 * @return array
	 */
	function customize_category_fields( $fields ) {

		$term_css = include PUBLISHER_THEME_PATH . 'includes/options/category-css-term_color.php';

		unset( $term_css['color']['selector'][1] ); // menu hover color
		unset( $term_css['bg_color']['selector'][0] ); // menu hover color
		unset( $term_css['bg_color']['selector'][1] ); // menu hover color
		unset( $term_css['bg_color']['selector'][2] ); // menu hover color
		unset( $term_css['bg_color']['selector'][8] ); // Term Badge Background Color
		unset( $term_css['bg_color']['selector'][16] ); // Term Badge Background Color
		unset( $term_css['text_badges']['selector'][0] ); // Term Badge Color
		/**
		 * Categories
		 */
		// Border Color
		$term_css['border_color']['selector'][] = 'body.category-%%id%%';
		$term_css['border_color']['selector'][] = 'body.category-%%id%% .bs-pinning-block.pinned .main-menu-container';
		$term_css['border_color']['selector'][] = 'body.category-%%id%% .pagination.bs-numbered-pagination .page-numbers:hover';
		$term_css['border_color']['selector'][] = 'body.category-%%id%% .pagination.bs-numbered-pagination > span';
		// Text Color
		$term_css['color']['selector'][] = 'body.category-%%id%% .off-canvas-menu li.current-menu-item>a';
		$term_css['color']['selector'][] = 'body.category-%%id%% .pagination.bs-numbered-pagination .page-numbers:hover';
		$term_css['color']['selector'][] = 'body.category-%%id%% .off-canvas-menu ul.menu>li>a:hover';
		$term_css['color']['selector'][] = 'body.category-%%id%% .archive-title .rss-link';
		$term_css['color']['selector'][] = 'body.category-%%id%% .pagination.bs-numbered-pagination > span';
		// Background Color
		$term_css['bg_color']['selector'][] = 'body.category-%%id%% .archive-title .term-badges span.term-badge a:hover';
		$term_css['bg_color']['selector'][] = 'body.category-%%id%% .back-top';
		$term_css['bg_color']['selector'][] = 'body.category-%%id%% .site-header.header-style-2';
		$term_css['bg_color']['selector'][] = 'body.category-%%id%% .site-header.header-style-2';
		$term_css['bg_color']['selector'][] = 'body.category-%%id%% .topbar .topbar-date.topbar-date';
		$term_css['bg_color']['selector'][] = 'body.category-%%id%% .site-header.boxed.header-style-2 .main-menu-wrapper .main-menu-container';
		$term_css['bg_color']['selector'][] = 'body.category-%%id%% .term-badges.floated a';

		/**
		 * Single Page
		 */
		// Border Color
		$term_css['border_color']['selector'][] = 'body.single-prim-cat-%%id%% .btn-bs-pagination:hover';
		$term_css['border_color']['selector'][] = 'body.single-prim-cat-%%id%% .bs-pinning-block.pinned .main-menu-container';
		$term_css['border_color']['selector'][] = 'body.single-prim-cat-%%id%%';
		$term_css['border_color']['selector'][] = 'body.single-prim-cat-%%id%% .site-footer';
		// Text Color
		$term_css['color']['selector'][] = 'body.single-prim-cat-%%id%% .archive-title .rss-link';
		$term_css['color']['selector'][] = 'body.single-prim-cat-%%id%% ul.bs-shortcode-list li:before';
		$term_css['color']['selector'][] = 'body.single-prim-cat-%%id%% .next-prev-post .title a:hover';
		$term_css['color']['selector'][] = 'body.single-prim-cat-%%id%% .off-canvas-menu ul.menu>li>a:hover';
		$term_css['color']['selector'][] = 'body.single-prim-cat-%%id%% .term-badges.text-badges .term-badge a';
		$term_css['color']['selector'][] = 'body.single-prim-cat-%%id%% .bf-breadcrumb .bf-breadcrumb-item a:hover span';
		// Background Color
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .archive-title .term-badges span.term-badge a:hover';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .back-top';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .section-heading.sh-t7 .h-text:before';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% input[type="submit"]';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% input[type="submit"]:hover';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .ajax-search-results:after';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .off-canvas-inner:after';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .bs-subscribe-newsletter .newsletter-subscribe';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .btn-bs-pagination:hover';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .entry-terms.post-tags a:hover';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .bs-newsletter-pack.bs-newsletter-pack .bsnp-button';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .bs-newsletter-pack.bs-newsletter-pack:before';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .site-header.header-style-2';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .site-header.header-style-2';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .topbar .topbar-date.topbar-date';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .site-header.boxed.header-style-2 .main-menu-wrapper .main-menu-container';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .post-tp-1-header .term-badges a:hover';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .post-tp-1-header .term-badges a';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .btn:hover';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% .term-badges.floated a';
		$term_css['bg_color']['selector'][] = 'body.single-prim-cat-%%id%% blockquote.bs-quote.bsq-t1:after';
		//
		$term_css['selection']     = array(
			'selector' =>
				array(
					'body.single-prim-cat-%%id%% ::selection'
				),
			'prop'     =>
				array(
					'background' => '%%value%% !important',
				),
		);
		$term_css['moz_selection'] = array(
			'selector' =>
				array(
					'body.single-prim-cat-%%id%% ::-moz-selection'
				),
			'prop'     =>
				array(
					'background' => '%%value%% !important',
				),
		);


		$fields['term_color'][ $this->get_css_id() ] = $term_css;
		// Clear memory
		unset( $term_css );

		return $fields;
	}


	/**
	 * Enqueue current style css file
	 */
	function register_assets() {

		bf_enqueue_style(
			'publisher-theme-business-times',
			bf_append_suffix( Publisher_Theme_Styles_Manager::get_uri( 'business-times/style' ), '.css' ),
			array( 'publisher' ),
			bf_append_suffix( Publisher_Theme_Styles_Manager::get_path( 'business-times/style' ), '.css' ),
			Better_Framework()->theme()->get( 'Version' )
		);
	}


	/**
	 * TinyMCE Style
	 */
	public function register_tinymce_assets() {

		bf_enqueue_tinymce_style( 'registered', 'publisher-theme-business-times' );
	}


	/**
	 * Injects Page templates for current style
	 *
	 * @param $page_templates
	 *
	 * @return mixed
	 */
	function page_templates_config( $page_templates ) {

		publisher_set_global( 'style-page-template', $this->style_id );

		include PUBLISHER_THEME_PATH . 'includes/styles/' . $this->style_id . '/page-templates.php';

		publisher_unset_global( 'style-page-template' );

		return $page_templates;
	}

} // Publisher_Theme_Style_Business_Times
