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

	$style_id       = 'technet';
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
						'name'     => 'Account',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.15',
					],
					[
						'name'     => 'CARS',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.2',
					],
					[
						'name'     => 'Deal',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.8',
					],
					[
						'name'      => 'GADGETS',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-7',
							],
						],
						'the_id'    => 'taxonomy.primary.4',
					],
					[
						'name'     => 'GAMES',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.5',
					],
					[
						'name'     => 'Google',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.14',
					],
					[
						'name'     => 'Kim said',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.12',
					],
					[
						'name'     => 'NEWS',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.7',
					],
					[
						'name'     => 'Organization',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.13',
					],
					[
						'name'     => 'Video',
						'taxonomy' => 'post_format',
						'the_id'   => 'taxonomy.primary.17',
					],
					[
						'name'     => 'Sensitive',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.16',
					],
					[
						'name'     => 'VIDEO',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.9',
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
						'post_title'        => '\'Teslaquila\': Elon Musk may soon be selling Tesla-themed booze',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.215',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Sega Forever on Android and iOS Isn’t the Netflix of Retro Gaming',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.161',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Combination treatment prevents HIV re-emergence in monkeys',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.8%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.cnet.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.cnet.com',
							],
						],
						'the_id'            => 'posts.primary.179',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'The Facebook Hack Could Haunt Its Victims for Years to Come',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.220',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Tech titans feud on Twitter over funding for homeless programs',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.218',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Audi and Huawei team up on self-driving car technology in China',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.217',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Japan\'s Abe pursues China thaw as U.S-Beijing ties in deep freeze',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.211',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Mnuchin Says He\'s Not Worried China Would Unload Treasuries',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.209',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Bodies of 11 infants found in ceiling of closed funeral home',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.206',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Role for the longevity protein SIRT6 in primate development',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.186',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Electric and magnetic domains inverted by a magnetic field',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.187',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Short proton bunches rapidly accelerate energetic electrons',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.185',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Carrier Billing Is Not Going to Help Indian Game Companies',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.163',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Pokemon Go Shows Augmented Reality Games Are the Future',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.162',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'PS4 Is a Best-Seller but Here Are 4 Reasons It\'s Far From Perfect',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.158',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'FIFA 17\'s The Journey Is a Half-Baked Addition That Needs Work',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.159',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Shadow of War Shows That Loot Boxes Aren\'t Ruining Games',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.157',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'How to Preload Call of Duty: Black Ops 4 PC Without a Code',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.154',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Call of Duty: Black Ops 4 Blackout Post-Launch Plans Revealed',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.131',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Facebook Now Lets You Post 3D Photos in News Feed and VR',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.126',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Asus ZenFone 4 Selfie Starts Receiving Android 8.1 Oreo Update',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.125',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Ford wants standard alerts on self-driving cars for pedestrians',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.104',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => '2019 Honda Pilot first drive: The family truckster gets new tech',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.105',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'The 2020 Ford Police Interceptor Utility hints at a potent Explorer',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.102',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Slideshow: 5 affordable crossovers that are still fun to drive',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.101',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => '2018 Porsche Panamera Turbo Sport Turismo: Yin to Gridlife Yang',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.99',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Hyundai Kona Electric crossover gets 258-mile range estimate',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.96',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Porsche\'s 70th anniversary auction is an enthusiast\'s dream',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.93',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => '\'Proving Grounds\' might be the ultimate driving enthusiast show',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.35',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Reflection forbidden and refraction reversed in an artificial crystal',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.190',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Facebook Groups Starts Supporting Up to 250 People in a Chat',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.124',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Female Ranger Taken By Crocodile While Fishing With Family',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.214',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Elusive mitochondrial connection to inflammation uncovered',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.8%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'www.cnet.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'https://www.cnet.com',
							],
						],
						'the_id'            => 'posts.primary.189',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Supercar: Watch a McLaren 720S drag race a Porsche 911 GT2 RS',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.97',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Microsoft\'s HoloLens Helping NASA Build New Spacecraft Faster',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.132',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Fortnite Mobile for Android Can Be Played Without an Invite Now',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.152',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Complex mechanical motion guided without external control',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.181',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Facebook Workplace to Get Safety Check Feature Next Year',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.127',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Mumbai Metro, PayPal Partner for Online Recharge Payments',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.128',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Lawyer: Missouri Farmer Was Leader of Organic Fraud Scheme',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.219',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Elimination of senescent cells prevents neurodegeneration in mice',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.183',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Alan Dershowitz on calls from the left to ignore due process',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.213',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'God of War\'s Combat Borrows From Dark Souls and Improves on It',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.156',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Russia May Bring Forward Manned Launch After Rocket Failure',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.120',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'iPhone Repair Fraud in China Cost Apple Billions of Dollars: Report',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.143',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Developing neurons are innately inclined to learn on the job',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.192',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => '1994: The US-built Camry wagon becomes the Scepter in Japan',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.103',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Jordan: If Democrats win Congress, we\'ll never get answers',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.216',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Topological states engineered in narrow strips of graphene',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.191',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'MobiKwik Acquires Wealth Management Startup Clearfunds',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.130',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Call of Duty: Black Ops 4 Blackout Post-Launch Plans Revealed',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.155',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Brexit will weaken Europe, isolate Britain and fuel global tensions',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.212',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'An alternative to controversial pesticides still harms bumblebees',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.188',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Record \'Fast Radio Bursts\' Detected From Deep Space: Study',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.129',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Google\'s Waze Expands Carpooling Service Throughout US',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.133',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Xbox Game Pass Exclusivity Hurts Microsoft More Than It Helps',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.160',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Machine learning improves forecasts of aftershock locations',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.184',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Hot-rod hero Gene Winfield, 91, recovering from broken hip',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.98',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Chevrolet Silverado with turbo I4 rated at 23 mpg on the highway',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.100',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'PM Modi Says AI, Blockchain Will Change the Nature of Jobs',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.122',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'About Us',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.71',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Fornt Page',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'prepare_vc_css'    => true,
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.69',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Single Post Banner',
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
						'the_id'     => 'posts.primary.294',
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
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-post}:\'full\'%%',
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
						'the_id'     => 'posts.primary.293',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Sidebar Banner - 300x600',
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
						'the_id'     => 'posts.primary.64',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'index Banner',
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
						'the_id'     => 'posts.primary.61',
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
								'meta_value' => 'style-4',
							],
							[
								'meta_key'   => 'color',
								'meta_value' => '#f52f2f',
							],
							[
								'meta_key'   => 'social_icons',
								'meta_value' => '0',
							],
						],
						'the_id'     => 'posts.primary.60',
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
						'option_value' => '%%posts.primary.69%%',
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
									'banner'    => '%%posts.primary.294%%',
									'count'     => '3',
									'columns'   => '3',
									'orderby'   => 'rand',
									'order'     => 'ASC',
									'align'     => 'left',
									'paragraph' => '4',
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
							'widget_id'       => 'bs-thumbnail-listing-1',
							'widget_settings' => [
								'title'                 => 'popular post',
								'count'                 => '5',
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
						[
							'widget_id'       => 'better-ads',
							'widget_settings' => [
								'type'                 => 'banner',
								'banner'               => '%%posts.primary.64%%',
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
							'widget_id'       => 'newsletter-pack',
							'widget_settings' => [
								'newsletter'           => '%%posts.primary.60%%',
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
								'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
								'link_facebook'        => '#',
								'link_twitter'         => '#',
								'link_google'          => '#',
								'link_instagram'       => '#',
								'link_email'           => '#',
								'link_youtube'         => '#',
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
					'file'   => $demo_image_url . $prefix . '728x90-post2-index.jpeg',
					'the_id' => 'media.primary.ad-post',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x600-sidebar-index.jpeg',
					'the_id' => 'media.primary.ad-sidebar',
				],
				[
					'file'   => $demo_image_url . $prefix . '728x90-post-index.jpeg',
					'the_id' => 'media.primary.ad-index',
				],
				[
					'file'   => $demo_image_url . $prefix . 'Header-Logo.png',
					'the_id' => 'media.primary.logo-main',
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
								'page_id'   => '%%posts.primary.69%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.8%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.7%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.5%%',
								'taxonomy'  => 'category',
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
						],
					],
					[
						'menu-location' => 'footer-menu',
						'menu-name'     => 'Footer Navigation',
						'items'         => [
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.8%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.7%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.5%%',
								'taxonomy'  => 'category',
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
						],
					],
				],
			],
	];
}
