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

	$style_id       = 'magly';
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
						'name'     => 'Designer',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.12',
					],
					[
						'name'     => 'Especially',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.11',
					],
					[
						'name'     => 'Express',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.13',
					],
					[
						'name'      => 'fashion',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'slider_type',
								'meta_value' => 'custom-blocks',
							],
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-1',
							],
						],
						'the_id'    => 'taxonomy.primary.2',
					],
					[
						'name'     => 'Fashion',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.10',
					],
					[
						'name'      => 'food',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'slider_type',
								'meta_value' => 'custom-blocks',
							],
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-7',
							],
						],
						'the_id'    => 'taxonomy.primary.3',
					],
					[
						'name'     => 'Funding',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.14',
					],
					[
						'name'      => 'lifestyle',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'slider_type',
								'meta_value' => 'custom-blocks',
							],
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-17',
							],
						],
						'the_id'    => 'taxonomy.primary.4',
					],
					[
						'name'     => 'travel',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.6',
					],
					[
						'name'     => 'Video',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.7',
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
						'post_title'        => '5 Masturbation Tips For A Mind-Blowing Solo Session',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.143',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Everything You Need To Know About Leaky Gut Syndrome',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.177',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Airport delays in Europe – your questions answered',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.234',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Top 10 things to do and see in San Diego, California',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.237',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Why I took my date to Club Chinois in Mayfair, London',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.232',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => '10 of the best places to see Britain’s Autumn colours',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.230',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Where to experience the Dutch Golden Age in Amsterdam',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.227',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Discovering Uzbekistan: At the centre of the Silk Road',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.225',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => '10 High-Tech Beauty Products Worth Every Penny',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.180',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => '9 Ways To Fight Depression--Besides Taking Pills',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.179',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Asking For A Friend: Can I Skip The Post-Workout Shower?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.178',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'The Food Eva Mendes Won\'t Start Her Day Without',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.174',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'New fine-dining chapter for life in a Dublin nursing home',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.257',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => '7 Things That Might Happen If You Stop Wearing Makeup',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.173',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Dr. Oz: 5 Tips For Lasting Love, Health, And Happiness',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.168',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'How To Apply Foundation For Flawless, Even Skin',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.151',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'The 50 Hottest Players At The 2018 World Cup',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.150',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Save Your Dry Winter Hair With These DIY Masks',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.149',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Why You Should Never Eat Lunch At Your Desk Again',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.148',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Do These Yoga Poses When You\'re Super Pissed Off',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.146',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Why Sleep Is More Important Than We Ever Thought',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.144',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Steal These Strength Moves From Star Trainer Emily Skye',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.142',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => '50 Must-Know Fitness Facts To Shape Your Dream Body',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.140',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Indulge in an extra special Sunday with this wine event',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.255',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Top National Trust gardens where to see snowdrops',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.253',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Too early for a new year’s resolution? Not at Aldi!',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.259',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Rasa Gurukul: a new eco spiritual retreat in Kerala, India',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.231',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => '3 Butt And Thigh Moves Celebrity Trainers Swear By',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.181',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Surfing in the Philippines: riding the Cloud 9 in Siargao',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.233',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'BREAKING: Serena Williams Is 20 Weeks Pregnant!',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.176',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Thailand: Alternative Bangkok and spiritual Chiang Mai',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.235',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'The Absolute Worst Running Mistake I\'ve Ever Made',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.147',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Beginner\'s Guide To Starting Your Own Fitness Studio',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.182',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'All about fibre: the tips and tricks you need to know',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.261',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Introducing the Dublin venue that’s all about comfort food',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.260',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Dunkirk, France: in the footsteps of its military history',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.229',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'How to celebrate the Chinese New Year in Hong Kong',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.238',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'How To Be Friendly (Not Flirty!) With Male Friends',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.145',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'The best new addition to the Dublin bakery scene',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.265',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Jack(fruit) of all trades – what you need to know',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.262',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Forget Diet And Exercise--Do You Have The Fit Gene?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.171',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => '11 reasons you’ll want to devour Easy Food September',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.264',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'How to find a taste of old Ireland in modern-day Dublin',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.263',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'This new Dalkey gastropub has everything you want',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.266',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'The Best Foods To Eat When You\'re On Your Period',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.175',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'How to live well? Less hassle and more healthy foods!',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.258',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => '13 Apps That Can Help Ease Depression And Anxiety',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.134',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'South Africa: Knysna forests and mythical elephants',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.236',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'About Us',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '3-col-0',
							],
						],
						'the_id'            => 'posts.primary.124',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Front Page',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'post_excerpt'      => 'Second, condolences to Lockheed Martin/Korea Aerospace and to Leonardo.  Losing the contest does not mean death for their respective entrants...',
						'prepare_vc_css'    => true,
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.10',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Post Content',
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
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
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
						'the_id'     => 'posts.primary.280',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Post Index',
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
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
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
						'the_id'     => 'posts.primary.279',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Sidebar Banner',
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
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
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
						'the_id'     => 'posts.primary.12',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Banner Header',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-header}:\'full\'%%',
							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
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
						'the_id'     => 'posts.primary.11',
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
								'meta_value' => 'style-2',
							],
							[
								'meta_key'   => 'color',
								'meta_value' => '#e91c2e',
							],
							[
								'meta_key'   => 'social_icons',
								'meta_value' => '0',
							],
						],
						'the_id'     => 'posts.primary.117',
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
						'option_value' => '%%posts.primary.10%%',
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
							'ad_post_inline'           => [
								[
									'type'      => 'banner',
									'campaign'  => 'none',
									'banner'    => '%%posts.primary.280%%',
									'count'     => '3',
									'columns'   => '3',
									'orderby'   => 'rand',
									'order'     => 'ASC',
									'align'     => 'left',
									'paragraph' => '2',
								],
							],
							'header_aside_logo_type'   => 'banner',
							'header_aside_logo_banner' => '%%posts.primary.11%%',
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
							'widget_id'       => 'better-social-counter',
							'widget_settings' => [
								'title'                    => 'FOLLOW US',
								'style'                    => 'box',
								'columns'                  => '3',
								'order'                    => [
									'facebook'  => '1',
									'twitter'   => '1',
									'youtube'   => '1',
									'instagram' => '1',
									'vimeo'     => '1',
									'rss'       => '1',
								],
								'bf-widget-title-color'    => '#ff7538',
								'bf-widget-title-bg-color' => '#ff7538',
								'bf-widget-title-icon'     => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						[
							'widget_id'       => 'better-ads',
							'widget_settings' => [
								'type'                 => 'banner',
								'banner'               => '%%posts.primary.12%%',
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
							'widget_id'       => 'bs-thumbnail-listing-1',
							'widget_settings' => [
								'title'                    => 'POPULAR POSTS',
								'columns'                  => 1,
								'pagination-show-label'    => '1',
								'listing-settings'         => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '50',
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
								'disable_duplicate'        => '0',
								'bf-widget-title-color'    => '#ff7538',
								'bf-widget-title-bg-color' => '#ff7538',
								'bf-widget-title-icon'     => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'paginate'                 => 'none',
							],
						],
						[
							'widget_id'       => 'bs-instagram',
							'widget_settings' => [
								'user_id'              => 'betterstudio',
								'photo_count'          => '9',
								'title'                => 'Our Instagram',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
						[
							'widget_id'       => 'bs-modern-grid-listing-3',
							'widget_settings' => [
								'title'                    => 'Featured Posts',
								'count'                    => '1',
								'columns'                  => 1,
								'slider-control-dots'      => 'style-1',
								'slider-control-next-prev' => 'off',
								'listing-settings'         => [
									'title-limit'      => '60',
									'format-icon'      => '1',
									'term-badge'       => '0',
									'term-badge-count' => '1',
									'term-badge-tax'   => 'category',
									'meta'             => [
										'show'        => '0',
										'author'      => '1',
										'date'        => '1',
										'date-format' => 'standard',
										'view'        => '0',
										'share'       => '0',
										'comment'     => '0',
										'review'      => '1',
									],
								],
								'disable_duplicate'        => '0',
								'bf-widget-title-icon'     => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'paginate'                 => 'slider',
								'pagination-show-label'    => '0',
							],
						],
						[
							'widget_id'       => 'newsletter-pack',
							'widget_settings' => [
								'newsletter'           => '%%posts.primary.117%%',
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
         
         • Email: info@yoursite.com',
								'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
								'link_facebook'        => '#',
								'link_twitter'         => '#',
								'link_google'          => '#',
								'link_instagram'       => '#',
								'link_email'           => '#',
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
								'title'                 => 'don’t miss',
								'count'                 => '3',
								'order_by'              => 'rand',
								'columns'               => 1,
								'pagination-show-label' => '1',
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
								'count'                => '7',
								'exclude'              => [
									'',
								],
								'title'                => 'Categories',
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
					'file'   => $demo_image_url . $prefix . '300x250-post-single.jpeg',
					'the_id' => 'media.primary.ad-content',
				],
				[
					'file'   => $demo_image_url . $prefix . 'post-index.jpeg',
					'the_id' => 'media.primary.ad-index',
				],
				[
					'file'   => $demo_image_url . $prefix . '336x280-siderbar-index.jpeg',
					'the_id' => 'media.primary.ad-sidebar',
				],
				[
					'file'   => $demo_image_url . $prefix . '728x90-header.jpeg',
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
					'file'   => $demo_image_url . $prefix . 'Off-Canvas-Logo.png',
					'the_id' => 'media.primary.logo-off-canvas',
				],

				[
					'file'   => $demo_image_url . $prefix . 'Footer-Logo.png',
					'the_id' => 'media.primary.logo-footer',
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
								'page_id'   => '%%posts.primary.10%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.4%%',
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
								'term_id'   => '%%taxonomy.primary.3%%',
								'taxonomy'  => 'category',
							],
						],
					],
					[
						'menu-location' => 'top-menu',
						'menu-name'     => 'Topbar Navigation',
						'items'         => [
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'page',
								'title'     => 'About Us',
								'page_id'   => '%%posts.primary.124%%',
							],
						],
					],
				],
			],
	];
}
