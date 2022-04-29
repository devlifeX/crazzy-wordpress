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

	$style_id       = 'top-stories';
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
						'name'     => 'Business',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.2',
					],
					[
						'name'     => 'Culture',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.3',
					],
					[
						'name'     => 'EPA',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.15',
					],
					[
						'name'     => 'Glyphosate',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.11',
					],
					[
						'name'     => 'Lifestyle',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.4',
					],
					[
						'name'     => 'Monsanto',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.12',
					],
					[
						'name'     => 'Video',
						'taxonomy' => 'post_format',
						'the_id'   => 'taxonomy.primary.16',
					],
					[
						'name'     => 'Roundup',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.13',
					],
					[
						'name'     => 'Tech',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.6',
					],
					[
						'name'     => 'Toxic Tort',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.14',
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
						'post_title'        => 'How Early Should You Get to the Airport? Here’s What Travel Experts Say',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.189',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Guam Legislators Approve Measures to Speed up Medical Cannabis Access',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.165',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Cellular Cyborgs: How Programmable DNA Strands Might Control Healing',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
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
						'the_id'            => 'posts.primary.214',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'With Its New IPhones, Apple Shows Slowness Has Become A Strength',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.219',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Samsung Q900 8K TV Review: An Amazing Glimpse Of 8K’s Potential',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.217',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'How To Tell If You’re In a Toxic Relationship — And What To Do About It',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.190',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'The U.S. Just Issued a Travel Warning for a Popular Mexican Resort Town',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.192',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'How Long Does It Take to Get a Passport? Here’s What You Need to Know',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.193',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'U.S. Customs Walks Back Ban on Canadians who Work in Cannabis Industry',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.170',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Study Finds Whole-Plant Medicines More Effective Than CBD-Only Extracts',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.169',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Michigan Could Collect $130 Million in Recreational Cannabis Revenue',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.167',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Volunteer Period Opens for Foria Study on Cannabis Menstrual Suppositories',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.163',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'How The New Samsung Galaxy Note 9 Compares To The S9 And Note 8',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.220',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Los Angeles Launches Crackdown on 105 Unlicensed Cannabis Businesses',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.161',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Former Los Angeles County Deputy Pleads Guilty To Drug Trafficking Charge',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.157',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'The History of Augmented and Virtual Reality, From 1838 to the Present',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.144',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => '‘Social Credit’ Tech Is Coming: 5 Ways for U.S. Entrepreneurs to Capitalize',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.143',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'There’s an Economic Case for Diversity in Tech. Do You Know What It Is?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.142',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => '10 Inspirational and Motivational YouTube Channels You Should Watch',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.138',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Entrepreneurial Stocks Continue to Tumble, but Market Bullish on Lingerie',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.140',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => '6 Things You Need to Know About Your Investors Before You Ask for Money',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.141',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'What This Business-Savvy ‘Artrepreneur’ Did to Become a Millionaire by 24',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.136',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'The 4 Types of Business Identities and How to Determine Which You Are',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.132',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Model Who Breastfed on the Runway Is ‘Proud’ to Represent Working Moms',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.195',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'The One Simple Trick to Get Special Treatment From a Flight Attendant',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.4%%',
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
						'the_id'            => 'posts.primary.188',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Mormon Church Voices Support For Medical Cannabis But Not Prop. 2',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.168',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'No Limits on the Number of Cannabis Dispensaries in Ontario, Canada',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
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
						'the_id'            => 'posts.primary.166',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Micromechanics Is Creating A New Breed Of Impossibly Thin Watches',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.212',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Mormon Church Speaks Publicly Against Utah Medical Cannabis Initiative',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.162',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Do All Superheroes Wear Capes? No, But Anyone Can Still Be a Hero.',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.137',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'The 10 Best Places to Spend the Holidays, According to Travel Experts',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.194',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Segway’s E-Skates Are A Whole New Way To Look Cool While Falling Over',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.208',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Wall Street Analyst Estimates U.S. Cannabis Market Will Reach $47 Billion',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.159',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Pringles Made Chips Flavored Like Every Course of a Thanksgiving Dinner',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.187',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Google Home Max Is Finally Coming To The UK, But Should You Buy It?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.221',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Logitech’s MX Vertical Mouse Will Save You From RSI Desk Job Woes',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.216',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'What Every Entrepreneur Needs to Get Right About the Customer Experience',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.145',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Term Loans vs. Lines of Credit: Which One Is Right for Your Business?',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.134',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => '5 of Modern History’s Most Persistent Myths About the Gender Wage Gap',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.191',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'This Is Bobby Flay’s Number One Restaurant Etiquette Rule He Never Breaks',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.185',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'The Most Fulfilling Way to Enjoy Your Success Is to Create a Lasting Legacy',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.139',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => '16 Ways to Get People to Like You Immediately, According to Psychology',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.182',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Thursday Briefing: Facebook Announces Wireless Oculus Quest VR Headset',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
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
						'the_id'            => 'posts.primary.218',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Nest’s Hello Video Doorbell Is The Only Security Camera Worth Buying',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.210',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Tennessee Health Department Issues Warning About Dangers of CBD Products',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.164',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'What’s The Best Camera Phone Of 2018? We Asked A Pro To Test Them',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.213',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'The Pixel 3 Vs The Pixel 2 And Why You Should Really Buy A Pixel 2 XL',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.215',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'More Than Half of Teens Think They Spend Too Much Time on Their Phones',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.196',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'About Us',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.110',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Front Page',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'post_excerpt'      => 'While we know the singer isn’t afraid to take major beauty risks, her latest hairstyle takes things to a whole ...',
						'prepare_vc_css'    => true,
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.108',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Banner Content Post',
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
						'the_id'     => 'posts.primary.282',
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
						'the_id'     => 'posts.primary.67',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Header Banner',
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
						'the_id'     => 'posts.primary.25',
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
								'meta_key'   => 'social_icons',
								'meta_value' => '0',
							],
						],
						'the_id'     => 'posts.primary.105',
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
						'option_value' => '%%posts.primary.108%%',
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
									'banner'    => '%%posts.primary.282%%',
									'count'     => '3',
									'columns'   => '3',
									'orderby'   => 'rand',
									'order'     => 'ASC',
									'align'     => 'left',
									'paragraph' => '2',
								],
							],
							'header_aside_logo_type'   => 'banner',
							'header_aside_logo_banner' => '%%posts.primary.25%%',
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
								'banner'               => '%%posts.primary.67%%',
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
								'title'                => 'STAY CONNECTED ',
								'order'                => [
									'facebook'   => '1',
									'twitter'    => '1',
									'youtube'    => '1',
									'vimeo'      => '1',
									'soundcloud' => '1',
									'pinterest'  => '1',
									'instagram'  => '1',
									'rss'        => '1',
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
							'widget_id'       => 'bs-mix-listing-3-1',
							'widget_settings' => [
								'title'                 => 'popular week',
								'count'                 => '5',
								'pagination-show-label' => '1',
								'listing-settings'      => [
									'big-title-limit'         => '55',
									'big-excerpt'             => '0',
									'big-excerpt-limit'       => '115',
									'big-subtitle'            => '0',
									'big-subtitle-limit'      => '0',
									'big-subtitle-location'   => 'before-meta',
									'big-format-icon'         => '1',
									'big-term-badge'          => '0',
									'big-term-badge-count'    => '1',
									'big-term-badge-tax'      => 'category',
									'big-meta'                => [
										'show'        => '1',
										'author'      => '1',
										'date'        => '1',
										'date-format' => 'standard',
										'view'        => '0',
										'share'       => '0',
										'comment'     => '0',
										'review'      => '1',
									],
									'small-thumbnail-type'    => 'featured-image',
									'small-title-limit'       => '55',
									'small-subtitle'          => '0',
									'small-subtitle-limit'    => '0',
									'small-subtitle-location' => 'before-meta',
									'small-meta'              => [
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
								'columns'               => 1,
							],
						],
						[
							'widget_id'       => 'bs-subscribe-newsletter',
							'widget_settings' => [
								'feedburner-id'            => '#',
								'meta_value'               => '%%bf_product_demo_media_url:{media.primary.newsletter}:\'full\'%%',
								'show-powered'             => '0',
								'bf-widget-bg-color'       => '#ffffff',
								'bf-widget-title-bg-color' => '#e59727',
								'bf-widget-title-icon'     => [
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
								'link_instagram'       => '$',
								'link_email'           => 'betterstudio.com@gmail.com',
								'link_youtube'         => '#',
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
								'title'                    => 'popular posts',
								'count'                    => '3',
								'columns'                  => 1,
								'pagination-show-label'    => '1',
								'listing-settings'         => [
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
								'disable_duplicate'        => '0',
								'bf-widget-title-color'    => '#000000',
								'bf-widget-title-bg-color' => '#ffffff',
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
					],
					'footer-3'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'nav_menu',
							'widget_settings' => [
								'title'                    => 'Useful links',
								'nav_menu'                 => '%%menus.primary.1%%',
								'bf-widget-title-color'    => '#0a0a0a',
								'bf-widget-title-bg-color' => '#ffffff',
								'bf-widget-title-icon'     => [
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
					'file'   => $demo_image_url . $prefix . '300x250-sidebar-index.jpeg',
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
				[
					'file'   => $demo_image_url . $prefix . 'newsletter.png',
					'the_id' => 'media.primary.newsletter',
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
								'page_id'   => '%%posts.primary.108%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.4%%',
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
						'the_id'        => 'menus.primary.2',
						'menu-name'     => 'Top Navigation',
						'items'         => [
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'page',
								'title'     => 'About Us',
								'page_id'   => '%%posts.primary.110%%',
							],
						],
					],
					[
						'menu-location' => 'footer-menu',
						'the_id'        => 'menus.primary.3',
						'menu-name'     => 'Main Navigation',
						'items'         => [
							[
								'item_type' => 'page',
								'title'     => 'Home',
								'page_id'   => '%%posts.primary.108%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.4%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.3%%',
								'taxonomy'  => 'category',
							],
						],
					],
				],
			],
	];
}
