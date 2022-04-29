<?php

$style = publisher_get_global( 'style-page-template' );

$demo_url = 'http://demo.betterstudio.com/publisher/' . $style . '/';

$page_templates[ $style . '-homepage-1' ] = [
	'name'           => __( 'Homepage 1', 'publisher' ),
	'screenshot'     => 'http://cdn.betterstudio.com/publisher/page-templates/' . $style . '/homepage-1.jpg?v=' . PUBLISHER_THEME_VERSION,
	'preview'        => $demo_url,
	'category'       => [
		__( '2 Column', 'publisher' ),
	],
	'type'           => [
		__( 'Homepage', 'publisher' ),
	],
	'post_meta'      => [
		[
			'meta_key'   => 'page_layout',
			'meta_value' => '1-col',
		],
		[
			'meta_key'   => '_hide_title',
			'meta_value' => 1,
		],
		[
			'meta_key'   => '_bs_imported_template',
			'meta_value' => $style . '-homepage-1',
		],
		[
			'meta_key'   => 'post_breadcrumb',
			'meta_value' => 'hide',
		],
		[
			'meta_key'   => 'bam_disable_post_content',
			'meta_value' => 1,
		],
	],
	'prepare_vc_css' => TRUE,
];

$page_templates[ $style . '-contact-us-1' ] = [
	'name'           => 'Contact us 1',
	'screenshot'     => 'http://cdn.betterstudio.com/publisher/page-templates/' . $style . '/contact-us-1.jpg?v=' . PUBLISHER_THEME_VERSION,
	'preview'        => $demo_url . 'contact-us',
	'category'       => [
		__( 'Contact Form', 'publisher' ),
	],
	'type'           => [
		__( 'Contact Form', 'publisher' ),
	],
	'post_title'     => 'Contact us',
	'post_meta'      => [
		[
			'meta_key'   => 'page_layout',
			'meta_value' => '1-col',
		],
		[
			'meta_key'   => '_hide_title',
			'meta_value' => 1,
		],
		[
			'meta_key'   => '_bs_imported_template',
			'meta_value' => $style . '-contact-us-1',
		],
		[
			'meta_key'   => 'bam_disable_post_content',
			'meta_value' => 1,
		],
	],
	'prepare_vc_css' => TRUE,
];
