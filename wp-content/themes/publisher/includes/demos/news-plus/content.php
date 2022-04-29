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

	$style_id       = 'news-plus';
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
						'name'     => 'Baylor College',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.12',
					],
					[
						'name'      => 'Business',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-7',
							],
						],
						'the_id'    => 'taxonomy.primary.2',
					],
					[
						'name'     => 'cerebellum',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.14',
					],
					[
						'name'     => 'colleagues',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.15',
					],
					[
						'name'     => 'McNair',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.13',
					],
					[
						'name'      => 'Opinions',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-1',
							],
						],
						'the_id'    => 'taxonomy.primary.8',
					],
					[
						'name'      => 'Politics',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-15',
							],
						],
						'the_id'    => 'taxonomy.primary.5',
					],
					[
						'name'     => 'Rotterdam',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.16',
					],
					[
						'name'      => 'Science',
						'taxonomy'  => 'category',
						'term_meta' => [
							[
								'meta_key'   => 'better_slider_style',
								'meta_value' => 'style-17',
							],
						],
						'the_id'    => 'taxonomy.primary.6',
					],
					[
						'name'     => 'Sports',
						'taxonomy' => 'category',
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
						'post_title'        => 'Are liberals and populists just searching for a new master?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.128',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Trump administration to review human fetal tissue research',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.203',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Women fare well in this year’s round of NIH high-risk awards',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.209',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Trump on Weisselberg: ‘He Did Whatever Was Necessary’',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.257',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'It Would Take Exactly One Senator to Get Trump’s Taxes',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.254',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'How Ballet Dancer Misty Copeland Shattered Barriers',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.237',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Serena Williams Breaks Silence on U.S. Open Controversy',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.238',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Serena Williams Is One Step Closer to More Sporting Immortality',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.235',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'What You Need to Know About World Cup Player Jimmy Durmaz',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.233',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Trump’s EPA scraps air pollution science review panels',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.214',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'NASA climate mission Trump tried to kill moves forward',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.208',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => '‘Revolution based on evolution’ honored with chemistry Nobel',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.207',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'These workplace issues significantly up your odds of divorce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.206',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Neanderthals used their hands like tailors and painters',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.205',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Russia Fixation Fades with Report Trump Dodged Taxes',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.185',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Why Conservatives Should Beware a Roe v. Wade Repeal',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.262',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Is Trump Driving Women Away From the GOP for Good?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.184',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Alabama Loves Sessions, But Not Enough to Stand Up to Trump',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.181',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Kent Sorenson Was a Tea Party Hero. Then He Lost Everything.',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.180',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Michael Avenatti Is Winning the 2020 Democratic Primary',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.179',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'The Times Would Have Been Crazy Not to Publish That Op-Ed',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.176',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'I Read Every Bob Woodward Book. Here’s How They Stack Up.',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.174',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'The American dream doesn’t exist in many neighbourhoods',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.133',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Jodie Whittaker makes a charismatic start as the new Doctor Who',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.130',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Anglophones and Francophones still approach Islam differently',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.129',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'The Nobel chemistry prize goes for work that harnesses evolution',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.127',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'An ancient virus may promote addiction in modern people',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.126',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'An endangered frog takes centre stage at the Supreme Court',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.124',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'A referendum on Macedonia’s new name fails to settle anything',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.118',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Is This the Stupidest Book Ever Written About Socialism?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.259',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'What Is Trump Getting for Sucking Up to Saudi Arabia?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.258',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'How Soon Will the NYT’s Trump Resistance Writer Be Outed?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.264',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Like humans, octopuses want more hugs when high on ecstasy',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.200',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Trump May Not Be Crazy, But the Rest of Us Are Getting There Fast',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.187',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => '‘Humongous fungus’ is almost as big as the Mall of America',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.211',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => '‘He’s Unraveling’: Why Cohen’s Betrayal Terrifies Trump',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.252',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Trust Me, Mr. President, White South Africans Are Doing Just Fine',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.256',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'A referendum on Macedonia’s new name fails to settle anything',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.125',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'The ‘Neymar Challenge’ Is Spreading Laughter Across the World',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.236',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'The World America Made—and Trump Wants to Unmake',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.186',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'American Institutions Are Holding Up—But Are Americans?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.260',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Japanese spacecraft drops a third rover on asteroid Ryugu',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.210',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Son Heung-min Wants to Bring World Cup Glory to South Korea',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.231',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'How Iceland Became the World Cup’s Ultimate Underdog',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.230',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Trump Is Feuding With Harley-Davidson. Bikers Love Him Anyway.',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.265',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Britain’s Supreme Court rules in favour of two Christian bakers',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.132',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Ken Starr: Trump’s Defense Team Should Be ‘Very Concerned’',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.182',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Don’t Let NCAA Hypocrisy Ruin This Amazing March Madness',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.226',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'A right-wing populist is poised to become Brazil’s next president',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.131',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'How to Flood the Trump Administration With Investigations',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.261',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Conor McGregor Charged With Assault After UFC Bus Attack',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.228',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Venus Williams Is Still in the Game—On and Off the Court',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.234',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'How the U.S. Senate Became a Campus Kangaroo Court',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.183',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'The bird voice box is one of a kind in the animal kingdom',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.213',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'The Carolina Panthers Aren’t Heroes for Signing Eric Reid',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.239',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Basketball Game Devolves Into a Massive On-Court Brawl',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.7%%',
						],
						'the_id'            => 'posts.primary.232',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'The FBI will investigate accusations against Brett Kavanaugh',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.122',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Trump Has No Fear: ‘Makes Nixon Look Like a Cream Puff’',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.8%%',
						],
						'the_id'            => 'posts.primary.263',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'How an Unlikely Alliance Saved the Democrats 100 Years Ago',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.178',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Chemical spills put Italy’s underground physics lab in jeopardy',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.212',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'About Us',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt-1.txt',
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.279',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Front Page',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'post_excerpt_file' => $demo_path . 'post-excerpt-1.txt',
						'prepare_vc_css'    => true,
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.95',
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
						'the_id'     => 'posts.primary.365',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Single Banner',
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
						'the_id'     => 'posts.primary.290',
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
						'the_id'     => 'posts.primary.86',
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
								'meta_value' => '#e81919',
							],
							[
								'meta_key'   => 'text_after',
								'meta_value' => '',
							],
							[
								'meta_key'   => 'social_icons',
								'meta_value' => '0',
							],
						],
						'the_id'     => 'posts.primary.94',
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
						'option_value' => '%%posts.primary.95%%',
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
									'banner'    => '%%posts.primary.290%%',
									'count'     => '3',
									'columns'   => '3',
									'orderby'   => 'rand',
									'order'     => 'ASC',
									'align'     => 'left',
									'paragraph' => '6',
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
							'widget_id'       => 'bs-thumbnail-listing-2',
							'widget_settings' => [
								'title'                 => 'Popular Posts',
								'columns'               => '1',
								'pagination-show-label' => '1',
								'listing-settings'      => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '60',
									'excerpt'           => '0',
									'excerpt-limit'     => '115',
									'subtitle'          => '0',
									'subtitle-limit'    => '0',
									'subtitle-location' => 'after-title',
									'format-icon'       => '1',
									'term-badge'        => '1',
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
								'banner'               => '%%posts.primary.86%%',
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
							'widget_id'       => 'better-social-counter',
							'widget_settings' => [
								'title'                => '',
								'style'                => 'style-10',
								'order'                => [
									'facebook'  => '1',
									'twitter'   => '1',
									'youtube'   => '1',
									'pinterest' => '1',
									'rss'       => '1',
								],
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'columns'              => '4',
							],
						],
						[
							'widget_id'       => 'newsletter-pack',
							'widget_settings' => [
								'newsletter'           => '%%posts.primary.94%%',
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
								'link_facebook'        => '#',
								'link_twitter'         => '#',
								'link_google'          => '#',
								'link_instagram'       => '#',
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
								'title'                 => 'Latest News',
								'count'                 => '3',
								'columns'               => 1,
								'pagination-show-label' => '1',
								'listing-settings'      => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '55',
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
							'widget_id'       => 'bs-thumbnail-listing-1',
							'widget_settings' => [
								'title'                 => 'Editors\' Picks',
								'count'                 => '3',
								'columns'               => 1,
								'pagination-show-label' => '1',
								'listing-settings'      => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '55',
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
					'footer-4'        => [
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
					'file'   => $demo_image_url . $prefix . 'ads-index.jpeg',
					'the_id' => 'media.primary.ad-index',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x250-post-single.jpeg',
					'the_id' => 'media.primary.ad-single',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x250-sidebar-index.jpeg',
					'the_id' => 'media.primary.ad-sidebar',
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
						'the_id'        => 'menus.primary.1',
						'menu-name'     => 'Main Navigation',
						'recently-edit' => true,
						'items'         => [
							[
								'item_type' => 'page',
								'title'     => 'Home',
								'page_id'   => '%%posts.primary.95%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.5%%',
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
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.8%%',
								'taxonomy'  => 'category',
							],
						],
					],
					[
						'menu-location' => 'top-menu',
						'the_id'        => 'menus.primary.2',
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
								'page_id'   => '%%posts.primary.279%%',
							],
						],
					],
				],
			],
	];
}
