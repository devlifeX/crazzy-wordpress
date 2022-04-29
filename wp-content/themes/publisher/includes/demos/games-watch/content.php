<?php
/**
 * Returns content for default demo
 *
 * ->Taxonomies
 * ->Posts
 * ->Options
 * ->Widgets
 * ->Media
 * ->Menus
 *
 *
 * @return array
 */
function publisher_demo_raw_content() {

	$style_id       = 'games-watch';
	$prefix         = $style_id . '-'; // prevent caching when user installs multiple demos continuously
	$demo_path      = PUBLISHER_THEME_PATH . 'includes/demos/' . $style_id . '/';
	$demo_image_url = publisher_get_demo_images_url( $style_id );

	return array(

		//
		// ->Taxonomies
		//
		'taxonomy' =>
			array(
				'multi_steps' => false,
				array(
					array(
						'name' => 'Deals',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.21',
					),
					array(
						'name' => 'Nintendo',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.22',
					),
					array(
						'name' => 'Owlboy',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.11',
					),
					array(
						'name' => 'PC',
						'taxonomy' => 'category',
						'term_meta' => array(
							array(
								'meta_key' => 'better_slider_style',
								'meta_value' => 'style-1',
							),
						),
						'the_id' => 'taxonomy.primary.3',
					),
					array(
						'name' => 'Platform',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.12',
					),
					array(
						'name' => 'Video',
						'taxonomy' => 'post_format',
						'the_id' => 'taxonomy.primary.23',
					),
					array(
						'name' => 'PS4',
						'taxonomy' => 'category',
						'the_id' => 'taxonomy.primary.5',
					),
					array(
						'name' => 'Reviews',
						'taxonomy' => 'category',
						'term_meta' => array(
							array(
								'meta_key' => 'better_slider_style',
								'meta_value' => 'style-7',
							),
						),
						'the_id' => 'taxonomy.primary.6',
					),
					array(
						'name' => 'Stardew Valleys',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.13',
					),
					array(
						'name' => 'Video',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.14',
					),
					array(
						'name' => 'VideoGame',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.15',
					),
					array(
						'name' => 'Videos',
						'taxonomy' => 'category',
						'term_meta' => array(
							array(
								'meta_key' => 'better_slider_style',
								'meta_value' => 'style-17',
							),
						),
						'the_id' => 'taxonomy.primary.7',
					),
					array(
						'name' => 'videos',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.24',
					),
					array(
						'name' => 'Vita',
						'taxonomy' => 'post_tag',
						'the_id' => 'taxonomy.primary.20',
					),
					array(
						'name' => 'Xbox One',
						'taxonomy' => 'category',
						'term_meta' => array(
							array(
								'meta_key' => 'better_slider_style',
								'meta_value' => 'style-15',
							),
						),
						'the_id' => 'taxonomy.primary.10',
					),
				),
			),
		//
		// ->Posts
		//
		'posts' =>
			array(
				'multi_steps' => false,
				array(
					array(
						'post_title' => 'Metal Gear Survive adds Silent Hill 2\'s Pyramid Head in event',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.20%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.361',
						'thumbnail_id' => '%%media.primary.thumb-9%%',
					),
					array(
						'post_title' => 'God Of War PS4 Guide: How Armor, Skills, And Enchantments Work',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.171',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_title' => 'Ghost Recon Wildlands Update Is Out With Splinter Cell Mission And More',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'the_id' => 'posts.primary.194',
						'thumbnail_id' => '%%media.primary.thumb-1%%',
					),
					array(
						'post_title' => 'Top 10 UK Games Chart: Far Cry 5, Sea Of Thieves, FIFA 18 Remain At Top',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.20%%',
						),
						'the_id' => 'posts.primary.316',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_title' => 'After Fortnite Update, Freebies Now Available To Make Up For Server Problems',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'the_id' => 'posts.primary.197',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_title' => 'MGS 5 For $5, And More PC Games On Sale At The Humble Store In The US',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.200',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_title' => 'Nintendo\'s First Smartphone Game Launches This Week in the US',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
						),
						'the_id' => 'posts.primary.234',
						'thumbnail_id' => '%%media.primary.thumb-9%%',
					),
					array(
						'post_title' => 'We’re Giving Away A Limited Edition God Of War PS4 Pro For Free',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'IGN',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'www.ign.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.159',
						'thumbnail_id' => '%%media.primary.thumb-1%%',
					),
					array(
						'post_title' => 'Google Announces $80 VR Headset, New Smartphone, Better Wifi System',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
						),
						'the_id' => 'posts.primary.240',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_title' => 'Nintendo\'s First Smartphone Game, Miitomo, Reaches 10 Million Users',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
						),
						'the_id' => 'posts.primary.237',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_title' => 'Attack on Titan 2 Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'Attack on Titan 2 Review',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'ALWAYS REWARDING, IT WILL EAT YOUR WEEKENDS AND SNACK ON THE EVENINGS',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Gameplay',
										'rate' => '89',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.355',
						'thumbnail_id' => '%%media.primary.thumb-1%%',
					),
					array(
						'post_title' => 'The Witcher 3\'s Geralt Gets A New Figure, And It Comes With His Bathtub',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
						),
						'the_id' => 'posts.primary.151',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'Here Is When God Of War PS4 Pre-Loading Begins; Unlock Time Confirmed',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
						),
						'the_id' => 'posts.primary.153',
						'thumbnail_id' => '%%media.primary.thumb-1%%',
					),
					array(
						'post_title' => 'Far Cry 5 Last Of Us-Inspired Map Headlines Arcades Best Of The Week',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
						),
						'the_id' => 'posts.primary.320',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_title' => 'Some GTA 4 Songs Being Removed, But New Ones Will Take Their Place',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.193',
						'thumbnail_id' => '%%media.primary.thumb-1%%',
					),
					array(
						'post_title' => 'Star Wars Battlefront 2 Taught EA A Lesson It Says It Won\'t Forget',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
						),
						'the_id' => 'posts.primary.157',
						'thumbnail_id' => '%%media.primary.thumb-8%%',
					),
					array(
						'post_title' => 'Call Of Duty: WW2 Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_box_style',
								'meta_value' => 'big-5',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'Far Cry 5',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'ALWAYS REWARDING, IT WILL EAT YOUR WEEKENDS AND SNACK ON THE EVENINGS',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Gameplay',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
							array(
								'meta_key' => '_pros',
								'meta_value' => array(
									array(
										'label' => 'More focused and less cluttered gameplay',
									),
									array(
										'label' => 'Great location to explore',
									),
									array(
										'label' => 'Interesting and varied side missions',
									),
								),
							),
							array(
								'meta_key' => '_cons',
								'meta_value' => array(
									array(
										'label' => 'Lackluster bad guys',
									),
									array(
										'label' => 'Few too many hostange missions',
									),
									array(
										'label' => 'Wolverines (so much worse than honey badgers)',
									),
								),
							),
						),
						'the_id' => 'posts.primary.349',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_title' => 'Assassin\'s Creed Origins',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'IGN',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'www.ign.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'Assassin\'s Creed Origins',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '7',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '6',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Adrenaline',
										'rate' => '5',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.351',
						'thumbnail_id' => '%%media.primary.thumb-5%%',
					),
					array(
						'post_title' => 'MLB The Show 18',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'MLB The Show Review',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '6',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.357',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'Splinter Cell\'s Sam Fisher Teased For New Ghost Recon Wildlands Update',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.310',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_title' => 'Spyro\'s Remastered Graphics Showcased In Reignited Trilogy Images',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.311',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_title' => 'We Absolutely Wrecked Far Cry 5\'s Graphics And Created A Trippy Mess',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.312',
						'thumbnail_id' => '%%media.primary.thumb-8%%',
					),
					array(
						'post_title' => 'PUBG, Fortnite Have New Battle Royale Competition - GameSpot Daily',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.315',
						'thumbnail_id' => '%%media.primary.thumb-6%%',
					),
					array(
						'post_title' => 'New Xbox One Games Sale Includes Discounts On Many Add-Ons',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.319',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'Which Baseball Video Game Is Right For You? Here\'s All The Key Info',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.195',
						'thumbnail_id' => '%%media.primary.thumb-8%%',
					),
					array(
						'post_title' => 'Steam PC Game Sale: Save On Darkest Dungeon, Dying Light, And More',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.201',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_title' => 'Fortnite v3.5.2 Update Introduces 50v50 Mode; Read Patch Notes Here',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.190',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_title' => 'God Of War PS4 Almost Didn\'t Have One Of Its Best, Most Important Characters',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.152',
						'thumbnail_id' => '%%media.primary.thumb-1%%',
					),
					array(
						'post_title' => 'God Of War PS4 Director Reacts To High Scores In Emotional Video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
							'post_tag' => '%%taxonomy.primary.22%%',
						),
						'the_id' => 'posts.primary.156',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_title' => 'Splinter Cell\'s Sam Fisher Comes To Ghost Recon Wildlands Update This Week',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'the_id' => 'posts.primary.203',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_title' => 'Fallout 4 Gets Official Emojis, GIFs, and More for Your Smartphone',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.243',
						'thumbnail_id' => '%%media.primary.thumb-8%%',
					),
					array(
						'post_title' => 'Final Fantasy 15, Shadow Of The Tomb Raider Crossover Announced',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.192',
						'thumbnail_id' => '%%media.primary.thumb-5%%',
					),
					array(
						'post_title' => 'GTA 5: What\'s New For GTA Online On PS4, Xbox One, And PC This Week',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
							'post_tag' => '%%taxonomy.primary.20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.196',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'Google Going Head-to-Head Against Apple/iPhone With Its Own Smartphone',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
							'post_tag' => '%%taxonomy.primary.20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.239',
						'thumbnail_id' => '%%media.primary.thumb-6%%',
					),
					array(
						'post_title' => 'Why Overwatch\'s Retribution Mode Is Only Available For A Limited Time',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.20%%',
						),
						'the_id' => 'posts.primary.314',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'Agony Unrated officially confirmed, will be cheap for existing owners',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'Surviving Mars Review',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '7',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Graphics',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.356',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_title' => 'Nintendo\'s First Smartphone Game, Miitomo, Has Arrived Worldwide',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
							'post_tag' => '%%taxonomy.primary.20%%',
						),
						'the_id' => 'posts.primary.235',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_title' => 'Fortnite\'s floating island is summoning something in the sky',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.20%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_box_style',
								'meta_value' => 'big-3',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'God Of War',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Kratos makes an epic comeback as The Nine Realms\' greatest dad.',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Graphics',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
							array(
								'meta_key' => '_pros',
								'meta_value' => array(
									array(
										'label' => 'Impeccable presentation',
									),
									array(
										'label' => 'An incredible spectacle of combat and action',
									),
									array(
										'label' => 'So much to see, investigate and do',
									),
								),
							),
							array(
								'meta_key' => '_cons',
								'meta_value' => array(
									array(
										'label' => 'N/A',
									),
								),
							),
						),
						'the_id' => 'posts.primary.347',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_title' => 'Commodore Making Comeback With Smartphone That Runs Classic Games',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
							'post_tag' => '%%taxonomy.primary.24,20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_featured_embed_code',
								'meta_value' => 'https://www.youtube.com/watch?v=CK0z1D-91dU',
							),
							array(
								'meta_key' => 'post_template',
								'meta_value' => 'style-12',
							),
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.231',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_title' => 'Why Nintendo Chose Animal Crossing and Fire Emblem for Next Smartphone',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
							'post_tag' => '%%taxonomy.primary.24,20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_featured_embed_code',
								'meta_value' => 'https://www.youtube.com/watch?v=CK0z1D-91dU',
							),
							array(
								'meta_key' => 'post_template',
								'meta_value' => 'style-12',
							),
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.238',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_title' => 'Blizzard CEO Wants Warcraft 4, Says Smartphone Game Market\'s Potential',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
							'post_tag' => '%%taxonomy.primary.24,20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_featured_embed_code',
								'meta_value' => 'https://www.youtube.com/watch?v=CK0z1D-91dU',
							),
							array(
								'meta_key' => 'post_template',
								'meta_value' => 'style-12',
							),
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.241',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_title' => 'Nintendo\'s First Smartphone Game, Miitomo, Is Proving Popular',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
							'post_tag' => '%%taxonomy.primary.24,20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_featured_embed_code',
								'meta_value' => 'https://www.youtube.com/watch?v=CK0z1D-91dU',
							),
							array(
								'meta_key' => 'post_template',
								'meta_value' => 'style-12',
							),
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.236',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_title' => 'Smartphone Game Final Fantasy Agito Hitting Vita In Japan Next Year',
						'post_format' => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
							'post_tag' => '%%taxonomy.primary.24,20%%',
							'post_format' => '%%taxonomy.primary.23%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_featured_embed_code',
								'meta_value' => 'https://www.youtube.com/watch?v=CK0z1D-91dU',
							),
							array(
								'meta_key' => 'post_template',
								'meta_value' => 'style-12',
							),
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.242',
						'thumbnail_id' => '%%media.primary.thumb-5%%',
					),
					array(
						'post_title' => 'Fortnite Players Get Free Pickaxe And Skin Available With Amazon',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
						),
						'the_id' => 'posts.primary.198',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_title' => 'Big Call Of Duty: WW2 Update Is Out Now On PS4, Xbox One, And PC',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.20%%',
						),
						'the_id' => 'posts.primary.308',
						'thumbnail_id' => '%%media.primary.thumb-9%%',
					),
					array(
						'post_title' => 'Tropico 5, Opus Magnum and six to Origin Access this month',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.20%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'Detective Pikachu Review',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Design',
										'rate' => '7',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.354',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'New Fortnite Freebies Available Now To Make Up For Recent Server',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
						),
						'the_id' => 'posts.primary.155',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'Overwatch PTR Patch Notes Reveal New Update\'s Big Hero Changes',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'the_id' => 'posts.primary.149',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_title' => 'Fortnite Week 10 Challenges Leaked: Skydive Through Floating Rings',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
						),
						'the_id' => 'posts.primary.160',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_title' => 'The Enclave are one of Fallout 76\'s factions, Bethesda confirms',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'H1Z1 Review',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '6',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.353',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_title' => 'Nintendo\'s Next Smartphone Game Will Star Well-Known Character',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.7%%',
						),
						'the_id' => 'posts.primary.233',
						'thumbnail_id' => '%%media.primary.thumb-6%%',
					),
					array(
						'post_title' => 'PS4 Vs Xbox One - Which Console Has The Best Exclusive Games?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'the_id' => 'posts.primary.318',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_title' => 'Free Monster Hunter-Like RPG Dauntless Gets Open Beta Next Month',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.3%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'the_id' => 'posts.primary.199',
						'thumbnail_id' => '%%media.primary.thumb-8%%',
					),
					array(
						'post_title' => 'Disgaea 1 Remake Releasing For Nintendo Switch And PS4 This Year',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'the_id' => 'posts.primary.158',
						'thumbnail_id' => '%%media.primary.thumb-9%%',
					),
					array(
						'post_title' => 'Fortnite: Battle Royale Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'Need for Speed Payback',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '7',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action9',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.352',
						'thumbnail_id' => '%%media.primary.thumb-9%%',
					),
					array(
						'post_title' => 'Extinction Review - A Giant Mess',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'A Giant Mess Reviews',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Graphics',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '10',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.358',
						'thumbnail_id' => '%%media.primary.thumb-9%%',
					),
					array(
						'post_title' => 'Need for Speed Payback Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.6%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_enabled',
								'meta_value' => '1',
							),
							array(
								'meta_key' => '_bs_review_box_style',
								'meta_value' => 'big-5',
							),
							array(
								'meta_key' => '_bs_review_heading',
								'meta_value' => 'Need for Speed Payback',
							),
							array(
								'meta_key' => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Game Play',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Story',
										'rate' => '7',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Characters',
										'rate' => '6',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
									array(
										'label' => 'Action',
										'rate' => '9',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.350',
						'thumbnail_id' => '%%media.primary.thumb-9%%',
					),
					array(
						'post_title' => 'Call Of Duty: WW2s Divisions Being Overhauled-Heres What\'s Changing',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'post_meta' => array(
							array(
								'meta_key' => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							),
							array(
								'meta_key' => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.313',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_title' => 'Fortnite Challenges For Week 4: All Ice Cream Truck Locations And More',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.10%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'the_id' => 'posts.primary.317',
						'thumbnail_id' => '%%media.primary.thumb-5%%',
					),
					array(
						'post_title' => 'Call of Duty: WW2 Adds Free Coaching And Feedback Through Alexa',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms' => array(
							'category' => '%%taxonomy.primary.5%%',
							'post_tag' => '%%taxonomy.primary.21%%',
						),
						'the_id' => 'posts.primary.154',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_type' => 'page',
						'post_title' => 'Contact us',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_meta' => array(
							array(
								'meta_key' => 'page_layout',
								'meta_value' => '1-col',
							),
						),
						'the_id' => 'posts.primary.653',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_type' => 'page',
						'post_title' => 'Front Page',
						'post_content_file' => $demo_path . 'post-content-3.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'prepare_vc_css' => true,
						'post_meta' => array(
							array(
								'meta_key' => 'page_layout',
								'meta_value' => '3-col-0',
							),
							array(
								'meta_key' => '_bs_review_criteria',
								'meta_value' => array(
									array(
										'label' => 'Design',
										'rate' => '8',
										'icon' => array(
											'icon' => '',
											'type' => '',
											'height' => '',
											'width' => '',
											'font_code' => '',
										),
										'color' => '',
									),
								),
							),
							array(
								'meta_key' => '_affiliate_icon',
								'meta_value' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
						'the_id' => 'posts.primary.652',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_type' => 'better-banner',
						'post_title' => 'Single banner Sidebar',
						'post_meta' => array(
							array(
								'meta_key' => 'type',
								'meta_value' => 'image',
							),
							array(
								'meta_key' => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-sidebar}:\'full\'%%',
							),
							array(
								'meta_key' => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							),
							array(
								'meta_key' => 'caption',
								'meta_value' => '- Advertisement -',
							),
							array(
								'meta_key' => 'campaign',
								'meta_value' => 'none',
							),
						),
						'the_id' => 'posts.primary.713',
						'thumbnail_id' => '%%media.primary.thumb-4%%',
					),
					array(
						'post_type' => 'better-banner',
						'post_title' => 'Banner X Paragraph.',
						'post_meta' => array(
							array(
								'meta_key' => 'type',
								'meta_value' => 'image',
							),
							array(
								'meta_key' => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-single}:\'full\'%%',
							),
							array(
								'meta_key' => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							),
							array(
								'meta_key' => 'caption',
								'meta_value' => '- Advertisement -',
							),
							array(
								'meta_key' => 'campaign',
								'meta_value' => 'none',
							),
						),
						'the_id' => 'posts.primary.711',
						'thumbnail_id' => '%%media.primary.thumb-0%%',
					),
					array(
						'post_type' => 'better-banner',
						'post_title' => 'Banner X Post',
						'post_meta' => array(
							array(
								'meta_key' => 'type',
								'meta_value' => 'image',
							),
							array(
								'meta_key' => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-index}:\'full\'%%',
							),
							array(
								'meta_key' => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							),
							array(
								'meta_key' => 'caption',
								'meta_value' => '- Advertisement -',
							),
							array(
								'meta_key' => 'campaign',
								'meta_value' => 'none',
							),
						),
						'the_id' => 'posts.primary.675',
						'thumbnail_id' => '%%media.primary.thumb-3%%',
					),
					array(
						'post_type' => 'better-banner',
						'post_title' => 'Banner Sidebar',
						'post_meta' => array(
							array(
								'meta_key' => 'type',
								'meta_value' => 'image',
							),
							array(
								'meta_key' => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-sidebar2}:\'full\'%%',
							),
							array(
								'meta_key' => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							),
							array(
								'meta_key' => 'caption',
								'meta_value' => '- Advertisement -',
							),
							array(
								'meta_key' => 'campaign',
								'meta_value' => 'none',
							),
						),
						'the_id' => 'posts.primary.660',
						'thumbnail_id' => '%%media.primary.thumb-7%%',
					),
					array(
						'post_type' => 'better-banner',
						'post_title' => 'Header Banner - 728 x 90',
						'post_meta' => array(
							array(
								'meta_key' => 'type',
								'meta_value' => 'image',
							),
							array(
								'meta_key' => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-header}:\'full\'%%',
							),
							array(
								'meta_key' => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							),
							array(
								'meta_key' => 'caption',
								'meta_value' => '- Advertisement -',
							),
							array(
								'meta_key' => 'campaign',
								'meta_value' => 'none',
							),
						),
						'the_id' => 'posts.primary.94',
						'thumbnail_id' => '%%media.primary.thumb-2%%',
					),
					array(
						'post_type' => 'bsnp-newsletter',
						'post_title' => 'Nesletter',
						'post_meta' => array(
							array(
								'meta_key' => 'type',
								'meta_value' => 'feedburner',
							),
							array(
								'meta_key' => 'feedburner_id',
								'meta_value' => '#',
							),
							array(
								'meta_key' => 'style',
								'meta_value' => 'style-4',
							),
							array(
								'meta_key' => 'color',
								'meta_value' => '#e00000',
							),
						),
						'the_id' => 'posts.primary.715',
						'thumbnail_id' => '%%media.primary.thumb-5%%',
					),
				),
			),
		//
		// ->Options
		//
		'options' =>
			array(
				'multi_steps' => false,
				array(
					array(
						'type' => 'option',
						'option_name' => 'bs_' . 'publisher_theme_options',
						'option_value_file' => $demo_path . 'options.json',
					),
					array(
						'type' => 'option',
						'option_name' => 'bs_' . 'publisher_theme_options',
						'option_value' => array(
							'logo_image' => '%%bf_product_demo_media_url:{media.primary.logo-main}:\'full\'%%',
							'logo_image_retina' => '%%bf_product_demo_media_url:{media.primary.logo-main-retina}:\'full\'%%',
							'off_canvas_logo' => '%%bf_product_demo_media_url:{media.primary.logo-off-canvas}:\'full\'%%',
						),
						'merge_options' => true,
					),
					array(
						'type' => 'option',
						'option_name' => 'bs_' . 'publisher_theme_options_current_style',
						'option_value' => $style_id,
					),
					array(
						'type' => 'option',
						'option_name' => 'bs_' . 'publisher_theme_options_current_demo',
						'option_value' => $style_id,
					),
					array(
						'type' => 'option',
						'option_name' => 'page_on_front',
						'option_value' => '%%posts.primary.652%%',
					),
					array(
						'type' => 'option',
						'option_name' => 'show_on_front',
						'option_value' => 'page',
					),
					array(
						'type' => 'option',
						'option_name' => 'better_ads_manager',
						'option_value' => array(
							'ad_post_inline' => array(
								array(
									'type' => 'banner',
									'campaign' => 'none',
									'banner' => '%%posts.primary.711%%',
									'count' => '3',
									'columns' => '3',
									'orderby' => 'rand',
									'order' => 'ASC',
									'align' => 'right',
									'paragraph' => '5',
								),
							),
							'header_aside_logo_type' => 'banner',
							'header_aside_logo_banner' => '%%posts.primary.94%%',
						),
						'merge_options' => true,
					),
				),
			),
		//
		// ->Widgets
		//
		'widgets' =>
			array(
				'multi_steps' => false,
				array(
					'primary-sidebar' => array(
						'remove_all_widgets' => true,
						array(
							'widget_id' => 'better-ads',
							'widget_settings' => array(
								'type' => 'banner',
								'banner' => '%%posts.primary.713%%',
								'bf-widget-title-icon' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
								'columns' => '1',
							),
						),
						array(
							'widget_id' => 'bs-thumbnail-listing-1',
							'widget_settings' => array(
								'title' => 'Popular Now',
								'columns' => 1,
								'pagination-show-label' => '1',
								'listing-settings' => array(
									'thumbnail-type' => 'featured-image',
									'title-limit' => '60',
									'subtitle' => '0',
									'subtitle-limit' => '0',
									'subtitle-location' => 'before-meta',
									'show-ranking' => '0',
									'meta' => array(
										'show' => '0',
										'author' => '0',
										'date' => '1',
										'date-format' => 'standard',
										'view' => '0',
										'share' => '0',
										'comment' => '0',
										'review' => '1',
									),
								),
								'disable_duplicate' => '0',
								'bf-widget-title-icon' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
								'paginate' => 'none',
							),
						),
						array(
							'widget_id' => 'bs-subscribe-newsletter',
							'widget_settings' => array(
								'feedburner-id' => '#',
								'msg' => 'Sign up for our Tech Daily newsletter to get the top tech and business news stories delivered to your inbox.',
								'image'         => '%%bf_product_demo_media_url:{media.primary.newsletter}:\'full\'%%',
								'show-powered' => '0',
								'title' => 'Tech Daily',
								'bf-widget-title-icon' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
					),
					'footer-1' => array(
						'remove_all_widgets' => true,
						array(
							'widget_id' => 'bs-about',
							'widget_settings' => array(
								'content' => 'Publisher is the useful and powerful WordPress Newspaper Magazine and Blog theme with great attention to details, incredible features, an intuitive user interface and everything else you need to create outstanding websites.
         
         • Email: info@yoursite.com
         • Phone: 844-698-6394',
								'logo_img'         => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
								'link_facebook' => '#',
								'link_twitter' => '#',
								'link_google' => '#',
								'link_instagram' => '#',
								'title' => '',
								'bf-widget-title-icon' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
					),
					'footer-2' => array(
						'remove_all_widgets' => true,
						array(
							'widget_id' => 'bs-thumbnail-listing-1',
							'widget_settings' => array(
								'title' => 'Must Read',
								'count' => '3',
								'order_by' => 'rand',
								'columns' => 1,
								'pagination-show-label' => '1',
								'listing-settings' => array(
									'thumbnail-type' => 'featured-image',
									'title-limit' => '60',
									'subtitle' => '0',
									'subtitle-limit' => '0',
									'subtitle-location' => 'before-meta',
									'show-ranking' => '0',
									'meta' => array(
										'show' => '0',
										'author' => '0',
										'date' => '1',
										'date-format' => 'standard',
										'view' => '0',
										'share' => '0',
										'comment' => '0',
										'review' => '1',
									),
								),
								'disable_duplicate' => '0',
								'bf-widget-title-icon' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
								'paginate' => 'none',
							),
						),
					),
					'footer-3' => array(
						'remove_all_widgets' => true,
						array(
							'widget_id' => 'nav_menu',
							'widget_settings' => array(
								'title' => 'Links',
								'nav_menu' =>  '%%menus.primary.1%%',
								'bf-widget-title-icon' => array(
									'icon' => '',
									'type' => '',
									'height' => '',
									'width' => '',
									'font_code' => '',
								),
							),
						),
					),
				),
			),
		//
		// ->Media
		//
		'media' =>
			array(
				'multi_steps' => true,
				[
					'file'   => $demo_image_url . $prefix . 'thumb-1.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-1',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-2.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-2',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-3.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-3',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-4.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-4',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-5.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-5',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-6.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-6',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-7.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-7',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-8.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-8',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-9.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-9',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x250-sidebar-single.jpeg',
					'the_id' => 'media.primary.ad-sidebar',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x250-post-single.jpeg',
					'the_id' => 'media.primary.ad-single',
				],
				[
					'file'   => $demo_image_url . $prefix . 'post-index.jpeg',
					'the_id' => 'media.primary.ad-index',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x600-post-index.jpeg',
					'the_id' => 'media.primary.ad-sidebar2',
				],
				[
					'file'   => $demo_image_url . $prefix . '728x90-header-index.jpeg',
					'the_id' => 'media.primary.ad-header',
				],
				[
					'file'   => $demo_image_url . $prefix . 'Header-Logo.png',
					'the_id' => 'media.primary.logo-main',
				],
				[
					'file'   => $demo_image_url . $prefix . 'Header-Logo-Retina.png',
					'the_id' => 'media.primary.logo-main-retina',
				],
				[
					'file'   => $demo_image_url . $prefix . 'Mobile-Logo.png',
					'the_id' => 'media.primary.logo-off-canvas',
				],
				[
					'file'   => $demo_image_url . $prefix . 'Footer-Logo.png',
					'the_id' => 'media.primary.logo-footer',
				],
				[
					'file'   => $demo_image_url . $prefix . 'email-illustration.png',
					'the_id' => 'media.primary.newsletter',
				],
			),
		//
		// ->Menus
		//
		'menus' =>
			array(
				'multi_steps' => false,
				array(
					array(
						'menu-location' => 'main-menu',
						'the_id'        => 'menus.primary.1',
						'menu-name' => 'Main Navigation',
						'recently-edit' => true,
						'items' => array(
							array(
								'item_type' => 'page',
								'title' => 'News',
								'page_id' => '%%posts.primary.652%%',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.6%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.5%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.10%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.3%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.7%%',
								'taxonomy' => 'category',
							),
						),
					),
					array(
						'menu-location' => 'top-menu',
						'the_id'        => 'menus.primary.2',
						'menu-name' => 'Topbar Navigation',
						'items' => array(
							array(
								'item_type' => 'page',
								'title' => 'Latest Post',
								'page_id' => '%%posts.primary.652%%',
							),
							array(
								'item_type' => 'page',
								'title' => 'Contact',
								'page_id' => '%%posts.primary.653%%',
							),
						),
					),
					array(
						'menu-location' => 'footer-menu',
						'the_id'        => 'menus.primary.3',
						'menu-name' => 'Main Navigation',
						'items' => array(
							array(
								'item_type' => 'page',
								'title' => 'News',
								'page_id' => '%%posts.primary.652%%',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.6%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.5%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.10%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.3%%',
								'taxonomy' => 'category',
							),
							array(
								'item_type' => 'term',
								'term_id' => '%%taxonomy.primary.7%%',
								'taxonomy' => 'category',
							),
						),
					),
				),
			),	);
}
