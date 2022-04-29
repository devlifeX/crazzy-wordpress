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

	$style_id       = 'light-mag';
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
                     'name' => 'Acne',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.11',
                 ),
                 array(
                     'name' => 'Allergies',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.12',
                 ),
                 array(
                     'name' => 'Aromatherapy',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.13',
                 ),
                 array(
                     'name' => 'Artificial Sweeteners',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.14',
                 ),
                 array(
                     'name' => 'Back Pain',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.15',
                 ),
                 array(
                     'name' => 'Business',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-1',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.2',
                 ),
                 array(
                     'name' => 'Culture',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-7',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.3',
                 ),
                 array(
                     'name' => 'Entertainment',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-15',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.5',
                 ),
                 array(
                     'name' => 'Lifestyle',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-17',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.6',
                 ),
                 array(
                     'name' => 'Tech',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.7',
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
                     'post_title' => 'Cellular Cyborgs: How Programmable DNA Strands Might Control Healing',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.298',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Mormon Church Speaks Publicly Against Utah Medical Cannabis Initiative',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.170',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Samsung Q900 8K TV Review: An Amazing Glimpse Of 8K\'s Potential',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.305',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => '1 The One Simple Trick to Get Special Treatment From a Flight Attendant',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.284',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => '16 Ways to Get People to Like You Immediately, According to Psychology',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.285',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'The 10 Best Places to Spend the Holidays, According to Travel Experts',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.280',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The U.S. Just Issued a Travel Warning for a Popular Mexican Resort Town',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.278',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'How To Tell If You\'re In a Toxic Relationship — And What To Do About It',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.276',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'More Than Half of Teens Think They Spend Too Much Time on Their Phones',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.272',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'The New Murphy Brown Feels Like Primal Scream Therapy for the Resistance',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.255',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'People Keep Using the Key and Peele Meme to Share Their Favorite Things',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.251',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Stephen Colbert Really Lays Into Jeff Flake\'s \'What Have I Become\' Face',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.250',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Michelle Obama on What She Enjoys Most About Life After the White House',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.247',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Unraveling the Mystery Behind the Red Room in The Haunting of Hill House',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.242',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Wall Street Analyst Estimates U.S. Cannabis Market Will Reach $47 Billion',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.169',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'How The New Samsung Galaxy Note 9 Compares To The S9 And Note 8',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.308',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Michigan Could Collect $130 Million in Recreational Cannabis Revenue',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.166',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Mormon Church Voices Support For Medical Cannabis But Not Prop. 2',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.165',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Guam Legislators Approve Measures to Speed up Medical Cannabis Access',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.164',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Volunteer Period Opens for Foria Study on Cannabis Menstrual Suppositories',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.158',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'U.S. Customs Walks Back Ban on Canadians who Work in Cannabis Industry',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.154',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'The 4 Types of Business Identities and How to Determine Which You Are',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.141',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Term Loans vs. Lines of Credit: Which One Is Right for Your Business?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.138',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '10 Inspirational and Motivational YouTube Channels You Should Watch',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.137',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => '6 Things You Need to Know About Your Investors Before You Ask for Money',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.136',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Entrepreneurial Stocks Continue to Tumble, but Market Bullish on Lingerie',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.135',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'The Most Fulfilling Way to Enjoy Your Success Is to Create a Lasting Legacy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.134',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'What Every Entrepreneur Needs to Get Right About the Customer Experience',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.133',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'There\'s an Economic Case for Diversity in Tech. Do You Know What It Is?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.131',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'With Its New IPhones, Apple Shows Slowness Has Become A Strength',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.306',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Google Home Max Is Finally Coming To The UK, But Should You Buy It?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.309',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The History of Augmented and Virtual Reality, From 1838 to the Present',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.80',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Logitech\'s MX Vertical Mouse Will Save You From RSI Desk Job Woes',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.303',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Tennessee Health Department Issues Warning About Dangers of CBD Products',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.162',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'What\'s The Best Camera Phone Of 2018? We Asked A Pro To Test Them',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.310',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Tina Turner Reveals Her Husband Donated a Kidney to Her for a Transplant',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.248',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'How The Simpsons Winks at a Spooky Theory True Superfans Will Recognize',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.253',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'This Is Bobby Flay\'s Number One Restaurant Etiquette Rule He Never Breaks',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.283',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '\'Social Credit\' Tech Is Coming: 5 Ways for U.S. Entrepreneurs to Capitalize',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.126',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The Pixel 3 Vs The Pixel 2 And Why You Should Really Buy A Pixel 2 XL',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.300',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'How Long Does It Take to Get a Passport? Here\'s What You Need to Know',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.281',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Model Who Breastfed on the Runway Is \'Proud\' to Represent Working Moms',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.274',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'John Oliver Begs Brazil Not to Elect Their Own Version of Donald Trump',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.249',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'What This Business-Savvy \'Artrepreneur\' Did to Become a Millionaire by 24',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.139',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Study Finds Whole-Plant Medicines More Effective Than CBD-Only Extracts',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.168',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Stephen Colbert Says He Got a Hold of Brett Kavanaugh\'s 1982 Day Planner',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.254',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Nest’s Hello Video Doorbell Is The Only Security Camera Worth Buying',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.312',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Los Angeles Launches Crackdown on 105 Unlicensed Cannabis Businesses',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.167',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Thursday Briefing: Facebook Announces Wireless Oculus Quest VR Headset',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.307',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '5 of Modern History\'s Most Persistent Myths About the Gender Wage Gap',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.279',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Jane Fonda in Five Acts Is a Candid Portrait of a Hollywood Truth-Teller',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.256',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Do All Superheroes Wear Capes? No, But Anyone Can Still Be a Hero.',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.140',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Micromechanics Is Creating A New Breed Of Impossibly Thin Watches',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.311',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Pringles Made Chips Flavored Like Every Course of a Thanksgiving Dinner',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.282',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Kristen Bell Reads Trump\'s Tweets in the Scandalous Voice of Gossip Girl',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.252',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'No Limits on the Number of Cannabis Dispensaries in Ontario, Canada',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.163',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Reality TV Is Obsessed With Romance, But Only Terrace House Gets It Right',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.245',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Former Los Angeles County Deputy Pleads Guilty To Drug Trafficking Charge',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.171',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'How Early Should You Get to the Airport? Here\'s What Travel Experts Say',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.277',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Segway’s E-Skates Are A Whole New Way To Look Cool While Falling Over',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.313',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'About Us',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might ...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.112',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Injection Location: After Header',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might ...',
                     'prepare_vc_css' => true,
                     'the_id' => 'posts.primary.516',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-3.txt',
                     'post_excerpt' => 'If there\'s no general raise for federal employees in 2019, some employees might still receive within might ...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.10',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Content Banner',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'type',
                             'meta_value' => 'image',
                         ),
                         array(
                             'meta_key' => 'img',
                             'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-content}:\'full\'%%',
                         ),
                         array(
                             'meta_key' => 'url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
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
                     'the_id' => 'posts.primary.327',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Post Index',
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
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
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
                     'the_id' => 'posts.primary.328',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Sidebar Banner',
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
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
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
                     'the_id' => 'posts.primary.27',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Header Banner',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'type',
                             'meta_value' => 'image',
                         ),
                         array(
                             'meta_key' => 'img',
                             'meta_value' => 'http://demo.betterstudio.com/publisher/light-mag/wp-content/uploads/sites/467/2018/12/728x90-header.jpg',
                         ),
                         array(
                             'meta_key' => 'url',
                             'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-header}:\'full\'%%',
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
                     'the_id' => 'posts.primary.25',
                 ),
                 array(
                     'post_type' => 'bsnp-newsletter',
                     'post_title' => 'Newsletter',
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
                     ),
                     'the_id' => 'posts.primary.330',
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
                         'injection_after_header' => '%%posts.primary.516%%',
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
                     'option_value' => '%%posts.primary.10%%',
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
                                 'banner' => '%%posts.primary.327%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'right',
                                 'paragraph' => '6',
                             ),
                         ),
                         'header_aside_logo_type' => 'banner',
                         'header_aside_logo_banner' => '%%posts.primary.25%%',
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
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'Popular Posts',
                             'count' => '5',
                             'order_by' => 'popular',
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
                                     'show' => '1',
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
                         'widget_id' => 'better-ads',
                         'widget_settings' => array(
                             'type' => 'banner',
                             'banner' => '%%posts.primary.27%%',
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
                         'widget_id' => 'better-social-counter',
                         'widget_settings' => array(
                             'title' => 'STAY CONNECTED',
                             'style' => 'style-11',
                             'columns' => '1',
                             'order' => array(
                                 'facebook' => '1',
                                 'twitter' => '1',
                                 'youtube' => '1',
                                 'rss' => '1',
                             ),
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
         ',
                            'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
                             'link_facebook' => '#',
                             'link_twitter' => '#',
                             'link_google' => '#',
                             'link_instagram' => '#',
                             'link_email' => '#',
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
                             'title' => 'trending posts',
                             'count' => '3',
                             'order_by' => 'popular',
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
                                     'show' => '1',
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
                         'widget_id' => 'bs-popular-categories',
                         'widget_settings' => array(
                             'exclude' => array(
                                 '',
                             ),
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
                'file'   => $demo_image_url . $prefix . 'index-post.jpeg',
                'the_id' => 'media.primary.ad-index',
            ],
            [
                'file'   => $demo_image_url . $prefix . '300x250-sidebar.jpeg',
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
                     'menu-name' => 'Main Navigation',
                     'recently-edit' => true,
                     'items' => array(
                         array(
                             'item_type' => 'page',
                             'title' => 'Home',
                             'page_id' => '%%posts.primary.10%%',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.7%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
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
                             'term_id' => '%%taxonomy.primary.3%%',
                             'taxonomy' => 'category',
                         ),
                     ),
                 ),
                 array(
                     'menu-location' => 'top-menu',
                     'menu-name' => 'Topbar Navigation',
                     'items' => array(
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'page',
                             'title' => 'About Us',
                             'page_id' => '%%posts.primary.112%%',
                         ),
                     ),
                 ),
             ),
         ),	);
}
