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

	$style_id       = 'game-report';
	$prefix         = $style_id . '-'; // prevent caching when user installs multiple demos continuously
	$demo_path      = PUBLISHER_THEME_PATH . 'includes/demos/' . $style_id . '/';
	$demo_image_url = publisher_get_demo_images_url( $style_id );

	return [

		//
		// ->Taxonomies
		//
		'taxonomy' =>
			[
				'multi_steps' => false,
				[
					[
						'name'     => 'Adam Badowski',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.16',
					],
					[
						'name'     => 'Animation',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.17',
					],
					[
						'name'     => 'CP2077',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.20',
					],
					[
						'name'     => 'Cyberpunk',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.19',
					],
					[
						'name'     => 'Events',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.2',
					],
					[
						'name'     => 'glitches',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.18',
					],
					[
						'name'      => 'Heroes',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-7',
							],
						],
						'the_id'    => 'taxonomy.primary.5',
					],
					[
						'name'     => 'HUGE',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.15',
					],
					[
						'name'      => 'Matches',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-1',
							],
						],
						'the_id'    => 'taxonomy.primary.6',
					],
					[
						'name'     => 'Video',
						'taxonomy' => 'post_format',
						'the_id'   => 'taxonomy.primary.21',
					],
					[
						'name'      => 'Updates',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-19',
							],
						],
						'the_id'    => 'taxonomy.primary.7',
					],
					[
						'name'      => 'Videos',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-15',
							],
						],
						'the_id'    => 'taxonomy.primary.10',
					],
				],
			],
		//
		// ->Posts
		//
		'posts'    =>
			[
				'multi_steps' => false,
				[
					[
						'post_title'        => 'GameStop: Get More Cash For Trade-Ins For A Limited Time In The US',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.115',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Nintendo\'s First Smartphone Game, Miitomo, Has Arrived Worldwide',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.235',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Google Announces $80 VR Headset, New Smartphone, Better Wifi System',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.240',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Fortnite: Battle Royale Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.352',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'MLB The Show 18',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.357',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Extinction Review - A Giant Mess',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.358',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'H1Z1 Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.353',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Detective Pikachu Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.354',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Sea Of Thieves Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.361',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Splinter Cell\'s Sam Fisher Teased For New Ghost Recon Wildlands Update',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.10%%',
						],
						'the_id'            => 'posts.primary.310',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Call Of Duty: WW2s Divisions Being Overhauled-Heres What\'s Changing',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.10%%',
						],
						'the_id'            => 'posts.primary.313',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'New Xbox One Games Sale Includes Discounts On Many Add-Ons',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.10%%',
						],
						'the_id'            => 'posts.primary.319',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Why Overwatch\'s Retribution Mode Is Only Available For A Limited Time',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.10%%',
						],
						'the_id'            => 'posts.primary.314',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Nintendo\'s Next Smartphone Game Will Star Well-Known Character',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.233',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Nintendo\'s First Smartphone Game, Miitomo, Is Proving Popular',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.236',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Big Call Of Duty: WW2 Update Is Out Now On PS4, Xbox One, And PC',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.10%%',
						],
						'the_id'            => 'posts.primary.308',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Blizzard CEO Wants Warcraft 4, Says Smartphone Game Market\'s Potential',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.241',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Smartphone Game Final Fantasy Agito Hitting Vita In Japan Next Year',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.242',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Commodore Making Comeback With Smartphone That Runs Classic Games',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.231',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'God Of War PS4 Almost Didn\'t Have One Of Its Best, Most Important Characters',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.152',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'God Of War PS4 Director Reacts To High Scores In Emotional Video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.156',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'New Fortnite Freebies Available Now To Make Up For Recent Server',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.155',
					],
					[
						'post_title'        => 'Wolfenstein 2 On Nintendo Switch Requires An Internet Download',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.110',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => '3 5 Top New Games Out This Week On Switch, PS4, Xbox One, And PC',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.118',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Disgaea 1 Remake Releasing For Nintendo Switch And PS4 This Year',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.113',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Nintendo Switch Adding South Park And 15 More Games This Coming Week',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.114',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Super Meat Boy Forever Brings Big Changes, But It\'s Still Hard As Hell',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.116',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Donkey Kong Plays Nintendo Switch When You Go Idle In Tropical Freeze',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.117',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Switch Weekly Roundup: Sneak Peek at Dark Souls Remastered Footage',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.119',
					],
					[
						'post_title'        => 'Far Cry 5 Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_review_enabled',
								'meta_value' => '1',
							],
							[
								'meta_key'   => '_bs_review_box_style',
								'meta_value' => 'big-5',
							],
							[
								'meta_key'   => '_bs_review_heading',
								'meta_value' => 'Far Cry 5',
							],
							[
								'meta_key'   => '_bs_review_verdict_summary',
								'meta_value' => 'ALWAYS REWARDING, IT WILL EAT YOUR WEEKENDS AND SNACK ON THE EVENINGS',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Gameplay',
										'rate'  => '9',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Story',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Characters',
										'rate'  => '10',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Action',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
							[
								'meta_key'   => '_pros',
								'meta_value' => [
									[
										'label' => 'More focused and less cluttered gameplay',
									],
									[
										'label' => 'Great location to explore',
									],
									[
										'label' => 'Interesting and varied side missions',
									],
								],
							],
							[
								'meta_key'   => '_cons',
								'meta_value' => [
									[
										'label' => 'Lackluster bad guys',
									],
									[
										'label' => 'Few too many hostange missions',
									],
									[
										'label' => 'Wolverines (so much worse than honey badgers)',
									],
								],
							],
						],
						'the_id'            => 'posts.primary.349',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Need for Speed Payback',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'IGN',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'www.ign.com',
							],
							[
								'meta_key'   => '_bs_review_enabled',
								'meta_value' => '1',
							],
							[
								'meta_key'   => '_bs_review_box_style',
								'meta_value' => 'big-5',
							],
							[
								'meta_key'   => '_bs_review_heading',
								'meta_value' => 'Need for Speed Payback',
							],
							[
								'meta_key'   => '_bs_review_verdict_summary',
								'meta_value' => 'Life as a pirate starts strong ... and then you enter the doldrums',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Game Play',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Story',
										'rate'  => '7',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Characters',
										'rate'  => '6',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Action',
										'rate'  => '9',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.350',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'God Of War PS4 Guide: How Armor, Skills, And Enchantments Work',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.171',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Call of Duty: WW2 Adds Free Coaching And Feedback Through Alexa',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.154',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Attack on Titan 2 Review',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.355',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Overwatch PTR Patch Notes Reveal New Update\'s Big Hero Changes',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.149',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Disgaea 1 Remake Releasing For Nintendo Switch And PS4 This Year',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.5%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.158',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Nintendo\'s First Smartphone Game, Miitomo, Reaches 10 Million Users',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.237',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'New Game Release Dates Of 2018: God of War, Super Smash Bros.',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.109',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Fallout 4 Gets Official Emojis, GIFs, and More for Your Smartphone',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.7%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.243',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'We’re Giving Away A Limited Edition God Of War PS4 Pro For Free',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'IGN',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'www.ign.com',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.159',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Surviving Mars Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.356',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Google Going Head-to-Head Against Apple/iPhone With Its Own Smartphone',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.7%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.239',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Fortnite Week 10 Challenges Leaked: Skydive Through Floating Rings',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.160',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Assassin\'s Creed Origins',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'IGN',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'www.ign.com',
							],
							[
								'meta_key'   => '_bs_review_enabled',
								'meta_value' => '1',
							],
							[
								'meta_key'   => '_bs_review_heading',
								'meta_value' => 'Assassin\'s Creed Origins',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Game Play',
										'rate'  => '7',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Story',
										'rate'  => '6',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Characters',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Adrenaline',
										'rate'  => '5',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.351',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Far Cry 5 Last Of Us-Inspired Map Headlines Arcades Best Of The Week',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.10%%',
						],
						'the_id'            => 'posts.primary.320',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Why Nintendo Chose Animal Crossing and Fire Emblem for Next Smartphone',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.238',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Game Release Dates In April 2018 For Nintendo Switch, PS4, Xbox One',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.2%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.111',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Spyro\'s Remastered Graphics Showcased In Reignited Trilogy Images',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.10%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.311',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Here Is When God Of War PS4 Pre-Loading Begins; Unlock Time Confirmed',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.153',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'The Witcher 3\'s Geralt Gets A New Figure, And It Comes With His Bathtub',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.151',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Nintendo\'s First Smartphone Game Launches This Week in the US',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.234',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Nintendo Switch\'s Labo Is Already Letting People Do Some Cool Stuff',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.107',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Fortnite Challenges For Week 4: All Ice Cream Truck Locations And More',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.10%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.317',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Star Wars Battlefront 2 Taught EA A Lesson It Says It Won\'t Forget',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.157',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'PS4 Vs Xbox One - Which Console Has The Best Exclusive Games?',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.10%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.318',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Top 10 UK Games Chart: Far Cry 5, Sea Of Thieves, FIFA 18 Remain At Top',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.10%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.316',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'PUBG, Fortnite Have New Battle Royale Competition - GameSpot Daily',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.10%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.315',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'We Absolutely Wrecked Far Cry 5\'s Graphics And Created A Trippy Mess',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.10%%',
							'post_format' => '%%taxonomy.primary.21%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'pcgamer.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://pcgamer.com/',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.312',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Top 10 UK Games Chart: God Of War PS4 Claims No.1 And Breaks Series Record',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.112',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'God Of War Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_review_enabled',
								'meta_value' => '1',
							],
							[
								'meta_key'   => '_bs_review_box_style',
								'meta_value' => 'big-3',
							],
							[
								'meta_key'   => '_bs_review_heading',
								'meta_value' => 'God Of War',
							],
							[
								'meta_key'   => '_bs_review_verdict_summary',
								'meta_value' => 'Kratos makes an epic comeback as The Nine Realms\' greatest dad.',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Game Play',
										'rate'  => '10',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Graphics',
										'rate'  => '10',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Story',
										'rate'  => '10',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Characters',
										'rate'  => '10',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
									[
										'label' => 'Action',
										'rate'  => '10',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
							[
								'meta_key'   => '_pros',
								'meta_value' => [
									[
										'label' => 'Impeccable presentation',
									],
									[
										'label' => 'An incredible spectacle of combat and action',
									],
									[
										'label' => 'So much to see, investigate and do',
									],
								],
							],
							[
								'meta_key'   => '_cons',
								'meta_value' => [
									[
										'label' => 'N/A',
									],
								],
							],
						],
						'the_id'            => 'posts.primary.347',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Contact',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.511',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Front Page',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'post_excerpt'      => 'Cleary buoyed by his last statement on Bitcoin Peter Boockvar is one of these such people. He has come out again saying ...',
						'prepare_vc_css'    => true,
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
							[
								'meta_key'   => '_bs_review_criteria',
								'meta_value' => [
									[
										'label' => 'Design',
										'rate'  => '8',
										'icon'  => [
											'icon'      => '',
											'type'      => '',
											'height'    => '',
											'width'     => '',
											'font_code' => '',
										],
										'color' => '',
									],
								],
							],
							[
								'meta_key'   => '_affiliate_icon',
								'meta_value' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						'the_id'            => 'posts.primary.509',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Banner Single Sidebar',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-content}:\'full\'%%',
							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							],
							[
								'meta_key'   => 'caption',
								'meta_value' => '- Advertisement -',
							],
							[
								'meta_key'   => 'campaign',
								'meta_value' => 'none',
							],
						],
						'the_id'     => 'posts.primary.567',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Banner X Paragraph',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-single}:\'full\'%%',
							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							],
							[
								'meta_key'   => 'caption',
								'meta_value' => '- Advertisement -',
							],
							[
								'meta_key'   => 'campaign',
								'meta_value' => 'none',
							],
						],
						'the_id'     => 'posts.primary.565',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Banner X Post',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-single2}:\'full\'%%',
							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							],
							[
								'meta_key'   => 'caption',
								'meta_value' => '- Advertisement -',
							],
							[
								'meta_key'   => 'campaign',
								'meta_value' => 'none',
							],
						],
						'the_id'     => 'posts.primary.524',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Index Banner Sidebar',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-index}:\'full\'%%',
							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							],
							[
								'meta_key'   => 'caption',
								'meta_value' => '- Advertisement -',
							],
							[
								'meta_key'   => 'campaign',
								'meta_value' => 'none',
							],
						],
						'the_id'     => 'posts.primary.515',
					],
				],
			],
		//
		// ->Options
		//
		'options'  =>
			[
				'multi_steps' => false,
				[
					[
						'type'              => 'option',
						'option_name'       => 'bs_' . 'publisher_theme_options',
						'option_value_file' => $demo_path . 'options.json',
					],
					[
						'type'          => 'option',
						'option_name'   => 'bs_' . 'publisher_theme_options',
						'option_value'  => [
							'logo_image'        => '%%bf_product_demo_media_url:{media.primary.logo-main}:\'full\'%%',
							'logo_image_retina' => '%%bf_product_demo_media_url:{media.primary.logo-main-retina}:\'full\'%%',
							'off_canvas_logo'   => '%%bf_product_demo_media_url:{media.primary.logo-off-canvas}:\'full\'%%',
							'site_bg_image'     => [
								'type' => 'fit-cover',
								'img'  => '%%bf_product_demo_media_url:{media.primary.bg}:\'full\'%%',
							],
							'header_bg_image'   => [
								'type' => 'top-center',
								'img'  => '%%bf_product_demo_media_url:{media.primary.header-bg}:\'full\'%%',
							],
							'footer_bg_image'   => [
								'type' => 'cover',
								'img'  => '%%bf_product_demo_media_url:{media.primary.footer-bg}:\'full\'%%',
							],
						],
						'merge_options' => true,
					],
					[
						'type'         => 'option',
						'option_name'  => 'bs_' . 'publisher_theme_options_current_style',
						'option_value' => $style_id,
					],
					[
						'type'         => 'option',
						'option_name'  => 'bs_' . 'publisher_theme_options_current_demo',
						'option_value' => $style_id,
					],
					[
						'type'         => 'option',
						'option_name'  => 'page_on_front',
						'option_value' => '%%posts.primary.509%%',
					],
					[
						'type'         => 'option',
						'option_name'  => 'show_on_front',
						'option_value' => 'page',
					],
					[
						'type'          => 'option',
						'option_name'   => 'better_ads_manager',
						'option_value'  => [
							'ad_post_inline' => [
								[
									'type'      => 'banner',
									'campaign'  => 'none',
									'banner'    => '%%posts.primary.565%%',
									'count'     => '3',
									'columns'   => '3',
									'orderby'   => 'rand',
									'order'     => 'ASC',
									'align'     => 'center',
									'paragraph' => '5',
								],
							],
						],
						'merge_options' => true,
					],
				],
			],
		//
		// ->Widgets
		//
		'widgets'  =>
			[
				'multi_steps' => false,
				[
					'primary-sidebar' => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'better-ads',
							'widget_settings' => [
								'type'                 => 'banner',
								'banner'               => '%%posts.primary.567%%',
								'bf-widget-bg-color'   => '#e5e5e5',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'columns'              => '1',
							],
						],
						[
							'widget_id'       => 'bs-thumbnail-listing-2',
							'widget_settings' => [
								'title'                 => 'TRENDING NOW',
								'count'                 => '6',
								'pagination-show-label' => '1',
								'bs-text-color-scheme'  => 'light',
								'listing-settings'      => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '60',
									'excerpt'           => '0',
									'excerpt-limit'     => '115',
									'subtitle'          => '0',
									'subtitle-limit'    => '0',
									'subtitle-location' => 'after-title',
									'format-icon'       => '1',
									'term-badge'        => '0',
									'term-badge-count'  => '1',
									'term-badge-tax'    => 'category',
									'show-ranking'      => '',
									'meta'              => [
										'show'        => '0',
										'author'      => '1',
										'date'        => '1',
										'date-format' => 'standard',
										'view'        => '0',
										'share'       => '0',
										'comment'     => '0',
										'review'      => '0',
									],
								],
								'disable_duplicate'     => '0',
								'bf-widget-bg-color'    => '#323232',
								'bf-widget-title-icon'  => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'paginate'              => 'none',
								'columns'               => '2',
							],
						],
						[
							'widget_id'       => 'bs-likebox',
							'widget_settings' => [
								'url'                  => 'https://www.facebook.com/dota2/',
								'bs-text-color-scheme' => 'light',
								'bf-widget-bg-color'   => '#d23939',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
					],
					'footer-1'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'bs-about',
							'widget_settings' => [
								'content'              => 'Publisher is the useful and powerful WordPress Newspaper Magazine and Blog theme with great attention to details, incredible features, an intuitive user interface and everything else you need to create outstanding websites.
         
         • Email: info@yoursite.com
         • Phone: 844-698-6394',
								'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
								'title'                => '',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
					],
					'footer-2'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'better-social-counter',
							'widget_settings' => [
								'title'                => 'CONNECT',
								'style'                => 'style-8',
								'colored'              => '0',
								'columns'              => '1',
								'order'                => [
									'facebook' => '1',
									'twitter'  => '1',
									'google'   => '1',
									'youtube'  => '1',
									'rss'      => '1',
								],
								'bs-text-color-scheme' => 'light',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
					],
					'footer-3'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'nav_menu',
							'widget_settings' => [
								'title'                => 'Links',
								'nav_menu'             => '%%menus.primary.1%%',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
					],
				],
			],
		//
		// ->Media
		//
		'media'    =>
			[
				'multi_steps' => true,
				[
					'file'   => $demo_image_url . $prefix . 'thumb-1.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-1',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-2.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-2',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-3.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-3',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-4.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-4',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-5.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-5',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-6.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-6',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-7.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-7',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-8.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-8',
				],
				[
					'file'   => $demo_image_url . $prefix . 'thumb-9.jpg',
					'resize' => true,
					'the_id' => 'media.primary.thumb-9',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x250-sidebar-index.jpeg',
					'the_id' => 'media.primary.ad-index',
				],
				[
					'file'   => $demo_image_url . $prefix . 'post-index.jpeg',
					'the_id' => 'media.primary.ad-single2',
				],
				[
					'file'   => $demo_image_url . $prefix . '750x300-post-single.jpeg',
					'the_id' => 'media.primary.ad-single',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x250-sidebar-single.jpeg',
					'the_id' => 'media.primary.ad-content',
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
					'file'   => $demo_image_url . $prefix . 'Off-Canvas-Logo.png',
					'the_id' => 'media.primary.logo-off-canvas',
				],
				[
					'file'   => $demo_image_url . $prefix . 'Footer-Logo.png',
					'the_id' => 'media.primary.logo-footer',
				],
				[
					'file'   => $demo_image_url . $prefix . 'bg.png',
					'the_id' => 'media.primary.bg',
				],
				[
					'file'   => $demo_image_url . $prefix . 'header-bg.png',
					'the_id' => 'media.primary.header-bg',
				],
				[
					'file'   => $demo_image_url . $prefix . 'footer-bg.png',
					'the_id' => 'media.primary.footer-bg',
				],
			],
		//
		// ->Menus
		//
		'menus'    =>
			[
				'multi_steps' => false,
				[
					[
						'menu-location' => 'main-menu',
						'the_id'        => 'menus.primary.1',
						'menu-name'     => 'Main Navigation',
						'recently-edit' => true,
						'items'         => [
							[
								'item_type' => 'page',
								'title'     => 'News',
								'page_id'   => '%%posts.primary.509%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.5%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.10%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.7%%',
								'taxonomy'  => 'category',
							],
						],
					],
					[
						'menu-location' => 'footer-menu',
						'the_id'        => 'menus.primary.1',
						'menu-name'     => 'Footer Navigation',
						'items'         => [
							[
								'item_type' => 'page',
								'title'     => 'Home',
								'page_id'   => '%%posts.primary.509%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.5%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.10%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.7%%',
								'taxonomy'  => 'category',
							],
						],
					],
				],
			],
	];
}
