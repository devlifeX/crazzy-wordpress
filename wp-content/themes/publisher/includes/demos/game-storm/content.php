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

	$style_id       = 'game-storm';
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
						'name'      => 'PC',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-1',
							],
						],
						'the_id'    => 'taxonomy.primary.4',
					],
					[
						'name'     => 'PC',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.8',
					],
					[
						'name'     => 'PlayStation 4',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.9',
					],
					[
						'name'     => 'Video',
						'taxonomy' => 'post_format',
						'the_id'   => 'taxonomy.primary.16',
					],
					[
						'name'      => 'PS4',
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
						'name'     => 'Red Dead Redemption 2',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.10',
					],
					[
						'name'      => 'Reviews',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-15',
							],
						],
						'the_id'    => 'taxonomy.primary.6',
					],
					[
						'name'     => 'Trailer',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.11',
					],
					[
						'name'      => 'Videos',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-17',
							],
						],
						'the_id'    => 'taxonomy.primary.3',
					],
					[
						'name'     => 'Videos',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.12',
					],
					[
						'name'     => 'Xbox One',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.7',
					],
					[
						'name'     => 'Xbox One',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.13',
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
						'post_title'        => 'Splinter Cell\'s Sam Fisher Comes To Ghost Recon Wildlands Update This Week',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.203',
					],
					[
						'post_title'        => 'Why Overwatch\'s Retribution Mode Is Only Available For A Limited Time',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.314',
					],
					[
						'post_title'        => 'Here Is When God Of War PS4 Pre-Loading Begins; Unlock Time Confirmed',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.5%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.153',
					],
					[
						'post_title'        => 'Google Going Head-to-Head Against Apple/iPhone With Its Own Smartphone',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.358',
					],
					[
						'post_title'        => 'Blizzard CEO Wants Warcraft 4, Says Smartphone Game Market’s Potential',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.353',
					],
					[
						'post_title'        => 'Smartphone Game Final Fantasy Agito Hitting Vita In Japan Next Year',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.354',
					],
					[
						'post_title'        => 'Sea Of Thieves Review',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.361',
					],
					[
						'post_title'        => 'Splinter Cell\'s Sam Fisher Teased For New Ghost Recon Wildlands Update',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.7%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'Publisher Theme',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
							],
						],
						'the_id'            => 'posts.primary.310',
					],
					[
						'post_title'        => 'Spyro\'s Remastered Graphics Showcased In Reignited Trilogy Images',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.311',
					],
					[
						'post_title'        => 'Call Of Duty: WW2s Divisions Being Overhauled-Heres What\'s Changing',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.313',
					],
					[
						'post_title'        => 'PUBG, Fortnite Have New Battle Royale Competition - GameSpot Daily',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.315',
					],
					[
						'post_title'        => 'Top 10 UK Games Chart: Far Cry 5, Sea Of Thieves, FIFA 18 Remain At Top',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.316',
					],
					[
						'post_title'        => 'New Xbox One Games Sale Includes Discounts On Many Add-Ons',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.319',
					],
					[
						'post_title'        => 'PS4 Vs Xbox One - Which Console Has The Best Exclusive Games?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.318',
					],
					[
						'post_title'        => 'Which Baseball Video Game Is Right For You? Here\'s All The Key Info',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.195',
					],
					[
						'post_title'        => 'Nintendo’s Next Smartphone Game Will Star Well-Known Character',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
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
						],
						'the_id'            => 'posts.primary.351',
					],
					[
						'post_title'        => 'GTA 5: What\'s New For GTA Online On PS4, Xbox One, And PC This Week',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.196',
					],
					[
						'post_title'        => 'Free Monster Hunter-Like RPG Dauntless Gets Open Beta Next Month',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.199',
					],
					[
						'post_title'        => 'Steam PC Game Sale: Save On Darkest Dungeon, Dying Light, And More',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.201',
					],
					[
						'post_title'        => 'Fortnite v3.5.2 Update Introduces 50v50 Mode; Read Patch Notes Here',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.190',
					],
					[
						'post_title'        => 'God Of War PS4 Director Reacts To High Scores In Emotional Video',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.5%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'Publisher Theme',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
							],
						],
						'the_id'            => 'posts.primary.156',
					],
					[
						'post_title'        => 'New Fortnite Freebies Available Now To Make Up For Recent Server',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.155',
					],
					[
						'post_title'        => 'Disgaea 1 Remake Releasing For Nintendo Switch And PS4 This Year',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.158',
					],
					[
						'post_title'        => 'Fortnite Week 10 Challenges Leaked: Skydive Through Floating Rings',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.160',
					],
					[
						'post_title'        => 'Game Release Dates In April 2018 For Nintendo Switch, PS4, Xbox One',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.111',
					],
					[
						'post_title'        => 'New Game Release Dates Of 2018: God of War, Super Smash Bros.',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.109',
					],
					[
						'post_title'        => 'Nintendo Switch Adding South Park And 15 More Games This Coming Week',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.114',
					],
					[
						'post_title'        => 'GameStop: Get More Cash For Trade-Ins For A Limited Time In The US',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.115',
					],
					[
						'post_title'        => 'Switch Weekly Roundup: Sneak Peek at Dark Souls Remastered Footage',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.3%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.119',
					],
					[
						'post_title'        => 'Nintendo’s First Smartphone Game, Miitomo, Has Arrived Worldwide',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.352',
					],
					[
						'post_title'        => 'Nintendo’s First Smartphone Game, Miitomo, Is Proving Popular',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.357',
					],
					[
						'post_title'        => 'Nintendo’s First Smartphone Game, Miitomo, Reaches 10 Million Users',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.349',
					],
					[
						'post_title'        => 'Nintendo’s First Smartphone Game Week in the US',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.356',
					],
					[
						'post_title'        => 'Nintendo Switch\'s Labo Is Already Letting People Do Some Cool Stuff',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.3%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.107',
					],
					[
						'post_title'        => 'Star Wars Battlefront 2 Taught EA A Lesson It Says It Won\'t Forget',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.5%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.157',
					],
					[
						'post_title'        => 'Ghost Recon Wildlands Update Is Out With Splinter Cell Mission And More',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.194',
					],
					[
						'post_title'        => 'Fallout 4 Gets Official Emojis, GIFs, and More for Your Smartphone',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.350',
					],
					[
						'post_title'        => 'Big Call Of Duty: WW2 Update Is Out Now On PS4, Xbox One, And PC',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.308',
					],
					[
						'post_title'        => 'Fortnite Players Get Free Pickaxe And Skin Available With Amazon',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.4%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.198',
					],
					[
						'post_title'        => 'Why Nintendo Chose Animal Crossing and Fire Emblem for Next Smartphone',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.347',
					],
					[
						'post_title'        => 'God Of War PS4 Almost Didn\'t Have One Of Its Best, Most Important Characters',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.152',
					],
					[
						'post_title'        => 'Far Cry 5 Last Of Us-Inspired Map Headlines Arcades Best Of The Week',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.7%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'Publisher Theme',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
							],
						],
						'the_id'            => 'posts.primary.320',
					],
					[
						'post_title'        => 'Overwatch PTR Patch Notes Reveal New Update\'s Big Hero Changes',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.149',
					],
					[
						'post_title'        => 'Some GTA 4 Songs Being Removed, But New Ones Will Take Their Place',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.193',
					],
					[
						'post_title'        => 'We Absolutely Wrecked Far Cry 5\'s Graphics And Created A Trippy Mess',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.312',
					],
					[
						'post_title'        => 'Call of Duty: WW2 Adds Free Coaching And Feedback Through Alexa',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.5%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.154',
					],
					[
						'post_title'        => 'Fortnite Challenges For Week 4: All Ice Cream Truck Locations And More',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.7%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.317',
					],
					[
						'post_title'        => 'After Fortnite Update, Freebies Now Available To Make Up For Server Problems',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.4%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.gamespot.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.gamespot.com',
							],
						],
						'the_id'            => 'posts.primary.197',
					],
					[
						'post_title'        => 'God Of War PS4 Guide: How Armor, Skills, And Enchantments Work',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.171',
					],
					[
						'post_title'        => 'The Witcher 3\'s Geralt Gets A New Figure, And It Comes With His Bathtub',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.151',
					],
					[
						'post_title'        => 'Google Announces $80 VR Headset, New Smartphone, Better Wifi System',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.355',
					],
					[
						'post_title'        => 'Top 10 UK Games Chart: God Of War PS4 Claims No.1 And Breaks Series Record',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.112',
					],
					[
						'post_title'        => 'MGS 5 For $5, And More PC Games On Sale At The Humble Store In The US',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.200',
					],
					[
						'post_title'        => 'We’re Giving Away A Limited Edition God Of War PS4 Pro For Free',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
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
						],
						'the_id'            => 'posts.primary.159',
					],
					[
						'post_title'        => 'Final Fantasy 15, Shadow Of The Tomb Raider Crossover Announced',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.192',
					],
					[
						'post_title'        => 'Super Meat Boy Forever Brings Big Changes, But It\'s Still Hard As Hell',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.116',
					],
					[
						'post_title'        => '3 5 Top New Games Out This Week On Switch, PS4, Xbox One, And PC',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.118',
					],
					[
						'post_title'        => 'Donkey Kong Plays Nintendo Switch When You Go Idle In Tropical Freeze',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.117',
					],
					[
						'post_title'        => 'Disgaea 1 Remake Releasing For Nintendo Switch And PS4 This Year',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.3%%',
							'post_format' => '%%taxonomy.primary.16%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'Publisher Theme',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
							],
						],
						'the_id'            => 'posts.primary.113',
					],
					[
						'post_title'        => 'Wolfenstein 2 On Nintendo Switch Requires An Internet Download',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.110',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Contact',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.541',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Front Page',
						'post_content_file' => $demo_path . 'post-content-3.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'prepare_vc_css'    => true,
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.510',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Post X Paragraph Banner',
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
						'the_id'     => 'posts.primary.604',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Single Sidebar banner',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-sidebar}:\'full\'%%',
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
						'the_id'     => 'posts.primary.603',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'index Sibar Bannerx',
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
						'the_id'     => 'posts.primary.542',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Banner Index',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-index2}:\'full\'%%',
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
						'the_id'     => 'posts.primary.534',
					],
					[
						'post_type'  => 'bsnp-newsletter',
						'post_title' => 'Newsletter',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'feedburner',
							],
							[
								'meta_key'   => 'feedburner_id',
								'meta_value' => '#',
							],
							[
								'meta_key'   => 'style',
								'meta_value' => 'style-3',
							],
							[
								'meta_key'   => 'color',
								'meta_value' => '#ca124a',
							],
						],
						'the_id'     => 'posts.primary.539',
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
						'option_value' => '%%posts.primary.510%%',
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
									'banner'    => '%%posts.primary.604%%',
									'count'     => '3',
									'columns'   => '3',
									'orderby'   => 'rand',
									'order'     => 'ASC',
									'align'     => 'left',
									'paragraph' => '2',
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
								'banner'               => '%%posts.primary.603%%',
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
								'title'                    => 'LATEST VIDEOS',
								'count'                    => '6',
								'pagination-show-label'    => '1',
								'listing-settings'         => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '48',
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
								'disable_duplicate'        => '0',
								'bf-widget-title-color'    => '#0a0a0a',
								'bf-widget-title-bg-color' => '#0a0a0a',
								'bf-widget-title-icon'     => [
									'icon'      => 'fa-youtube-play',
									'type'      => 'fontawesome',
									'height'    => '',
									'width'     => '',
									'font_code' => '\\f16a',
								],
								'paginate'                 => 'more_btn',
								'columns'                  => '2',
							],
						],
						[
							'widget_id'       => 'newsletter-pack',
							'widget_settings' => [
								'newsletter'           => '%%posts.primary.539%%',
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
								'content'              => 'Publisher is the useful and powerful WordPress Newspaper, Magazine and Blog theme with great attention to details, incredible features, an intuitive user interface and everything else you need to create outstanding websites.
         
         • Contact: info@yoursite.com
         • Advertising: ads@yoursite.com',
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
							'widget_id'       => 'bs-thumbnail-listing-1',
							'widget_settings' => [
								'title'                 => 'Most Viewed',
								'count'                 => '3',
								'columns'               => 1,
								'pagination-show-label' => '1',
								'bs-text-color-scheme'  => 'light',
								'listing-settings'      => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '60',
									'subtitle'          => '0',
									'subtitle-limit'    => '0',
									'subtitle-location' => 'before-meta',
									'show-ranking'      => '0',
									'meta'              => [
										'show'        => '1',
										'author'      => '0',
										'date'        => '1',
										'date-format' => 'standard',
										'view'        => '0',
										'share'       => '0',
										'comment'     => '0',
										'review'      => '1',
									],
								],
								'disable_duplicate'     => '0',
								'bf-widget-title-icon'  => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'paginate'              => 'none',
							],
						],
					],
					'footer-3'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'bs-popular-categories',
							'widget_settings' => [
								'exclude'              => [
									'',
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
					'file'   => $demo_image_url . $prefix . '336x280-post-single.jpeg',
					'the_id' => 'media.primary.ad-content',
				],

				[
					'file'   => $demo_image_url . $prefix . '300x250-sidebar-single.jpeg',
					'the_id' => 'media.primary.ad-sidebar',
				],

				[
					'file'   => $demo_image_url . $prefix . '300x250-index.jpeg',
					'the_id' => 'media.primary.ad-index',
				],

				[
					'file'   => $demo_image_url . $prefix . 'index.jpeg',
					'the_id' => 'media.primary.ad-index2',
				],
				[
					'file'   => $demo_image_url . $prefix . 'home.png',
					'the_id' => 'media.primary.icon-home',
				],
				[
					'file'   => $demo_image_url . $prefix . 'ps4-menu.png',
					'the_id' => 'media.primary.icon-ps4',
				],
				[
					'file'   => $demo_image_url . $prefix . 'x-box.png',
					'the_id' => 'media.primary.icon-xbox',
				],
				[
					'file'   => $demo_image_url . $prefix . 'pc-menu.png',
					'the_id' => 'media.primary.icon-pc',
				],
				[
					'file'   => $demo_image_url . $prefix . 'review-menu.png',
					'the_id' => 'media.primary.icon-review',
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
						'menu-name'     => 'Main Navigation',
						'recently-edit' => true,
						'items'         => [
							[
								'item_type' => 'page',
								'title'     => 'Home',
								'page_id'   => '%%posts.primary.510%%',
								'item_meta' => [
									14 => [
										'meta_key'   => 'menu_icon',
										'meta_value' => [
											'icon'      => '%%bf_product_demo_media_url:{media.primary.icon-home}:\'full\'%%',
											'type'      => 'custom-icon',
											'height'    => '',
											'width'     => '33',
											'font_code' => '',
										],
									],
								],
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.5%%',
								'taxonomy'  => 'category',
								'item_meta' => [
									14 => [
										'meta_key'   => 'menu_icon',
										'meta_value' => [
											'icon'      => '%%bf_product_demo_media_url:{media.primary.icon-ps4}:\'full\'%%',
											'type'      => 'custom-icon',
											'height'    => '',
											'width'     => '34',
											'font_code' => '',
										],
									],
								],
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.7%%',
								'taxonomy'  => 'category',
								'item_meta' => [
									14 => [
										'meta_key'   => 'menu_icon',
										'meta_value' => [
											'icon'      => '%%bf_product_demo_media_url:{media.primary.icon-xbox}:\'full\'%%',
											'type'      => 'custom-icon',
											'height'    => '',
											'width'     => '33',
											'font_code' => '',
										],
									],
								],
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.4%%',
								'taxonomy'  => 'category',
								'item_meta' => [
									14 => [
										'meta_key'   => 'menu_icon',
										'meta_value' => [
											'icon'      => '%%bf_product_demo_media_url:{media.primary.icon-pc}:\'full\'%%',
											'type'      => 'custom-icon',
											'height'    => '',
											'width'     => '33',
											'font_code' => '',
										],
									],
								],
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
								'item_meta' => [
									14 => [
										'meta_key'   => 'menu_icon',
										'meta_value' => [
											'icon'      => '%%bf_product_demo_media_url:{media.primary.icon-review}:\'full\'%%',
											'type'      => 'custom-icon',
											'height'    => '',
											'width'     => '34',
											'font_code' => '',
										],
									],
								],
							],
						],
					],
					[
						'menu-location' => 'top-menu',
						'menu-name'     => 'Topbar Navigation',
						'items'         => [
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'page',
								'title'     => 'Contact',
								'page_id'   => '%%posts.primary.541%%',
							],
						],
					],
				],
			],
	];
}
