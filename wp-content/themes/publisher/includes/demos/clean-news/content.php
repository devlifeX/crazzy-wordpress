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

	$style_id       = 'clean-news';
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
                     'name' => 'Citibank',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.16',
                 ),
                 array(
                     'name' => 'Entertainment',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-7',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.5',
                 ),
                 array(
                     'name' => 'Gazprom',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.13',
                 ),
                 array(
                     'name' => 'OPEC',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.14',
                 ),
                 array(
                     'name' => 'PJSC',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.15',
                 ),
                 array(
                     'name' => 'Russian Energy',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.17',
                 ),
                 array(
                     'name' => 'Sport',
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
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-15',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.8',
                 ),
                 array(
                     'name' => 'World',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.4',
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
                     'post_title' => 'Here’s What You Need to Know About the Fed’s Big Interest Rate Decision',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.145',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'How The Simpsons Winks at a Spooky Theory True Superfans Will Recognize',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.176',
                    'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'How The New Samsung Galaxy Note 9 Compares To The S9 And Note 8',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.231',
                    'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'More Than Half of Teens Think They Spend Too Much Time on Their Phones',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.210',
                    'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '5 of Modern History’s Most Persistent Myths About the Gender Wage Gap',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.202',
                    'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'The U.S. Just Issued a Travel Warning for a Popular Mexican Resort Town',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.203',
                    'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'How Long Does It Take to Get a Passport? Here’s What You Need to Know',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.204',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The 10 Best Places to Spend the Holidays, According to Travel Experts',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.205',
                    'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The One Simple Trick to Get Special Treatment From a Flight Attendant',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.201',
                    'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '16 Ways to Get People to Like You Immediately, According to Psychology',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.196',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Unraveling the Mystery Behind the Red Room in The Haunting of Hill House',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.182',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Tina Turner Reveals Her Husband Donated a Kidney to Her for a Transplant',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.180',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Michelle Obama on What She Enjoys Most About Life After the White House',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.179',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'John Oliver Begs Brazil Not to Elect Their Own Version of Donald Trump',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.178',
                    'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Jane Fonda in Five Acts Is a Candid Portrait of a Hollywood Truth-Teller',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.168',
                    'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Segway’s E-Skates Are A Whole New Way To Look Cool While Falling Over',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.222',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Why the Wells Fargo Scandal Really Matters (Hint: It’s Not Just the Fraud)',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.154',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'President Trump to Order Review Visa Programs, Buy American Provisions',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.152',
                    'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '5 of Modern History’s Most Persistent Myths About the Gender Wage Gap',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.151',
                    'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'This Controversial Professor Says Bernie Sanders Will Save the Economy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.149',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The History of Augmented and Virtual Reality, From 1838 to the Present',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.104',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'There’s an Economic Case for Diversity in Tech. Do You Know What It Is?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.102',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'What Every Entrepreneur Needs to Get Right About the Customer Experience',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.101',
                    'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => '6 Things You Need to Know About Your Investors Before You Ask for Money',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.100',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Entrepreneurial Stocks Continue to Tumble, but Market Bullish on Lingerie',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.99',
                    'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'The Most Fulfilling Way to Enjoy Your Success Is to Create a Lasting Legacy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.98',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Do All Superheroes Wear Capes? No, But Anyone Can Still Be a Hero.',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.96',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'What This Business-Savvy ‘Artrepreneur’ Did to Become a Millionaire by 24',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.95',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Term Loans vs. Lines of Credit: Which One Is Right for Your Business?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.93',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Model Who Breastfed on the Runway Is ‘Proud’ to Represent Working Moms',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.207',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'How To Tell If You’re In a Toxic Relationship — And What To Do About It',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.209',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Nest’s Hello Video Doorbell Is The Only Security Camera Worth Buying',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.225',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'The Ultra-Wealthy World of Crazy Rich Asians Is a Real Thing. Here’s Why',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.156',
                    'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'What’s The Best Camera Phone Of 2018? We Asked A Pro To Test Them',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.228',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'The New Murphy Brown Feels Like Primal Scream Therapy for the Resistance',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.173',
                    'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Cellular Cyborgs: How Programmable DNA Strands Might Control Healing',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.236',
                    'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Stephen Colbert Says He Got a Hold of Brett Kavanaugh’s 1982 Day Planner',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.170',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'People Keep Using the Key and Peele Meme to Share Their Favorite Things',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.174',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'This Is Bobby Flay’s Number One Restaurant Etiquette Rule He Never Breaks',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.198',
                    'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Early American Colonists Had a Cash Problem. Here’s How They Solved It',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.153',
                    'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Reality TV Is Obsessed With Romance, But Only Terrace House Gets It Right',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.177',
                    'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Hillary Clinton to Target Donald Trump’s Economic Policy in Ohio Speech',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.147',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => '‘Social Credit’ Tech Is Coming: 5 Ways for U.S. Entrepreneurs to Capitalize',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.103',
                    'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Google Home Max Is Finally Coming To The UK, But Should You Buy It?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.230',
                    'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Stephen Colbert Really Lays Into Jeff Flake’s ‘What Have I Become’ Face',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.175',
                    'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'How Early Should You Get to the Airport? Here’s What Travel Experts Say',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.208',
                    'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Here\'s Why President Trump\'s Tweet About the Jobs Report Was So Risky',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.150',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Thursday Briefing: Facebook Announces Wireless Oculus Quest VR Headset',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.235',
                    'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The Pixel 3 Vs The Pixel 2 And Why You Should Really Buy A Pixel 2 XL',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.232',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Samsung Q900 8K TV Review: An Amazing Glimpse Of 8K’s Potential',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.234',
                    'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Women and Minority-Owned Small Businesses Still Struggle, Report Shows',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.142',
                    'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Micromechanics Is Creating A New Breed Of Impossibly Thin Watches',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.227',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Read Hillary Clinton’s Speech Attacking Donald Trump’s Economic Policies',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.155',
                    'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Americans Hit Pause on Baby – Making and It’s Going to Hurt the Economy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.148',
                    'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => '10 Inspirational and Motivational YouTube Channels You Should Watch',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.97',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'With Its New IPhones, Apple Shows Slowness Has Become A Strength',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.229',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Logitech\'s MX Vertical Mouse Will Save You From RSI Desk Job Woes',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.233',
                    'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Kristen Bell Reads Trump’s Tweets in the Scandalous Voice of Gossip Girl',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.172',
                    'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Pringles Made Chips Flavored Like Every Course of a Thanksgiving Dinner',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.206',
                    'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'The 4 Types of Business Identities and How to Determine Which You Are',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.91',
                    'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'About Us',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.252',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is...',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.250',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Banner Content Post',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'type',
                             'meta_value' => 'image',
                         ),
                         array(
                             'meta_key' => 'img',
                                'meta_value' => '%%bf_product_demo_media_url:{media.primary.content-post}:\'full\'%%',
                         ),
                         array(
                             'meta_key' => 'url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                         array(
                             'meta_key' => 'campaign',
                             'meta_value' => 'none',
                         ),
                     ),
                     'the_id' => 'posts.primary.262',
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
                                'meta_value' => '%%bf_product_demo_media_url:{media.primary.post-index}:\'full\'%%',
                         ),
                         array(
                             'meta_key' => 'url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                         array(
                             'meta_key' => 'campaign',
                             'meta_value' => 'none',
                         ),
                     ),
                     'the_id' => 'posts.primary.261',
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
                                'meta_value' => '%%bf_product_demo_media_url:{media.primary.sidebar-banner}:\'full\'%%',
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
                     'the_id' => 'posts.primary.64',
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
                            'meta_value' => '%%bf_product_demo_media_url:{media.primary.header-banner}:\'full\'%%',
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
                             'meta_value' => 'style-5',
                         ),
                     ),
                     'the_id' => 'posts.primary.88',
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
                        'logo_image'        => '%%bf_product_demo_media_url:{media.primary.logo-main}:\'full\'%%',
                        'logo_image_retina' => '%%bf_product_demo_media_url:{media.primary.logo-main-retina}:\'full\'%%',
                        'off_canvas_logo'   => '%%bf_product_demo_media_url:{media.primary.logo-off-canvas}:\'full\'%%',
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
                     'option_value' => '%%posts.primary.250%%',
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
                                 'banner' => '%%posts.primary.262%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'right',
                                 'paragraph' => '6',
                             ),
                         ),
                         'header_aside_logo_type' => 'banner',
                         'header_aside_logo_banner' => '%%posts.primary.27%%',
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
                             'title' => 'Recomended',
                             'count' => '5',
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
                             'paginate' => 'next_prev',
                         ),
                     ),
                     array(
                         'widget_id' => 'better-ads',
                         'widget_settings' => array(
                             'type' => 'banner',
                             'banner' => '%%posts.primary.64%%',
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
                             'style' => 'style-10',
                             'columns' => '1',
                             'order' => array(
                                 'facebook' => '1',
                                 'twitter' => '1',
                                 'youtube' => '1',
                                 'vimeo' => '1',
                                 'instagram' => '1',
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
                     array(
                         'widget_id' => 'bs-modern-grid-listing-3',
                         'widget_settings' => array(
                             'category' => '%%taxonomy.primary.5%%',
                             'columns' => 1,
                             'pagination-slides-count' => '5',
                             'slider-control-dots' => 'style-1',
                             'slider-control-next-prev' => 'off',
                             'listing-settings' => array(
                                 'title-limit' => '60',
                                 'format-icon' => '1',
                                 'term-badge' => '0',
                                 'term-badge-count' => '1',
                                 'term-badge-tax' => 'category',
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
                             'pagination-show-label' => '0',
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
                            'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
                             'link_facebook' => '#',
                             'link_twitter' => '#',
                             'link_google' => '#',
                             'link_instagram' => '#',
                             'link_email' => '#',
                             'link_youtube' => '#',
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
                             'title' => 'Featured Today',
                             'count' => '3',
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
                         'widget_id' => 'nav_menu',
                         'widget_settings' => array(
                             'title' => 'Links',
                             'nav_menu' => '%%menus.primary.1%%',
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
                'resize' => true,
                'the_id' => 'media.primary.content-post',
            ],
            [
                'file'   => $demo_image_url . $prefix . '728x90-post-index.jpeg',
                'resize' => true,
                'the_id' => 'media.primary.post-index',
            ],
            [
                'file'   => $demo_image_url . $prefix . '336x280-sidebar-index.jpeg',
                'resize' => true,
                'the_id' => 'media.primary.sidebar-banner',
            ],
            [
                'file'   => $demo_image_url . $prefix . '728x90-header.jpeg',
                'resize' => true,
                'the_id' => 'media.primary.header-banner',
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
                             'title' => 'Home',
                             'page_id' => '%%posts.primary.250%%',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.8%%',
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
                     ),
                 ),
                 array(
                     'menu-location' => 'top-menu',
                     'the_id'        => 'menus.primary.2',
                     'menu-name' => 'Top Navigation',
                     'items' => array(
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'page',
                             'title' => 'About Us',
                             'page_id' => '%%posts.primary.252%%',
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
                             'title' => 'Home',
                             'page_id' => '%%posts.primary.250%%',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.8%%',
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
                     ),
                 ),
             ),
         ),	);
}
