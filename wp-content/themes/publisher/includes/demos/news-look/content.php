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

	$style_id       = 'news-look';
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
                     'name' => 'Economy',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-7',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.2',
                 ),
                 array(
                     'name' => 'Entertainment',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-1',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.4',
                 ),
                 array(
                     'name' => 'Video',
                     'taxonomy' => 'post_format',
                     'the_id' => 'taxonomy.primary.15',
                 ),
                 array(
                     'name' => 'Science',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-15',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.7',
                 ),
                 array(
                     'name' => 'Sports',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-17',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.8',
                 ),
                 array(
                     'name' => 'Video',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.11',
                 ),
                 array(
                     'name' => 'World',
                     'taxonomy' => 'category',
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
                     'post_title' => 'Theresa May faces the nation after her Salzburg humiliation',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.160',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'A Mom Speaks Out After Her Infant Contracts Herpes Simplex Virus',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.224',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Australia’s John Hastings puts career on hold due to lung condition',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.300',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Tajinderpal Singh Toor getting back on his feet after father’s death',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.305',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'WATCH: Usain Bolt fires two goals in Central Coast Mariners trial',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.302',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Shubhankar Sharma fires superb 64; lies third at CIMB Classic',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.301',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'After more than two decades: An India-China clash on football field',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.298',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Alexander Zverev blames ‘superstition’ for ridiculous use of towels',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.294',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Marco van Basten steps down from FIFA technical director role',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.291',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Australia coach Justin Langer hails new opening pair’s chemistry',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.289',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Youth Olympics 2018: Indian women’s hockey team reaches semifinals',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.286',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'All You Need Is a Hardcover Book to Do These 3 Total-Body Moves',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.227',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '5 Resistance Band Arm Moves From One of Rihanna\'s Trainers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.226',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Anna Victoria Was Once the Last Person You\'d Ever Catch In a Gym',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.225',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The 18 Best Running Shoes for Women, According to a Fitness Editor',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.222',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => '3 Moves You May Be Getting Wrong at the Gym Plus, How to Fix Them',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.229',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => '‘It’s not an easy conversation’: Mental health in the workplace',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.221',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Trauma is an Integrative Experience that Requires Integrative Healing',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.218',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'BlackBerry is set to build a new secure, global healthcare ecosystem',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.215',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Like humans, octopuses want more hugs when high on ecstasy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.197',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'First moon outside the solar system could be as big as Neptune',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.189',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'How some animals use the Earth’s magnetic field to navigate',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.161',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Britain and America were rivals, and partners, in the Middle East',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.156',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => '“Transcription” is an unsettling tale of war and deception',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.136',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The Democratic Party tries to regain control of state legislatures',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.132',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The American dream doesn’t exist in many neighbourhoods',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.131',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'A right-wing populist is poised to become Brazil’s next president',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.130',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => '“Bad Times at the El Royale” is fun, but utterly exhausting',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.127',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'What it means if Saudi Arabia murdered a journalist in Turkey',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.122',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'The 5 Best High-Protein Breakfast Ideas on Pinterest That Aren’t Eggs',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.223',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Feel the Burn With This Lower Body and Ab Workout by Emily Skye',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.220',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Mouse stem cells can self-organize into headless ‘little bananas’',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.190',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'How established firms are winning over millennial consumers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.129',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'A referendum on Macedonia’s new name fails to settle anything',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.154',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Once a prodigy, Yuja Wang is now at the height of her powers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.158',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The FBI will investigate accusations against Brett Kavanaugh',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.157',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The latest report on global warming makes grim reading',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.124',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Surprisingly, Congo’s election may take place in December',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.163',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Surging R&D spending in China narrows gap with United States',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.178',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'The Nobel committee shines a spotlight on rape in conflict',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.128',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Chemical spills put Italy’s underground physics lab in jeopardy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.187',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Why independence is not on the ballot in Quebec’s election',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.151',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'A rural school county in Virginia wants to arm its teachers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                     ),
                     'the_id' => 'posts.primary.164',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Growth can overcome the loss of faith in global co-operation',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.162',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'These workplace issues significantly up your odds of divorce',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.193',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'An ancient virus may promote addiction in modern people',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.135',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Former head of climate change panel to stand trial for harassment',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.198',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'AFC allows fourth substitution in extra-time at 2019 Asian Cup',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.304',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Turning lasers into versatile tools earns trio Nobel Prize in Physics',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.194',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'All You Need Are 2 Soup Cans to Do This 60-Second Arm Workout',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.228',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'More and more scientists are preregistering their studies. Should you?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.195',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'How long is Saturn’s day? Search reveals an even deeper mystery',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.191',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Alpine skiing-Speed queen Lindsey Vonn to retire at end of season',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.303',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Ancient Japanese wolf may be rare remnant of ice age wolves',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.196',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Pakistan vs Australia: Injured Imam-ul-Haq ruled out of second Test',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.306',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Geta Brătescu was a prolific and playful conceptual artist',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.134',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Anglophones and Francophones still approach Islam differently',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.133',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Behind the great Joan Jett was the support of Kenny Laguna',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.159',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Russia defers one crisis in Syria, but is embroiled in another',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.10%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.165',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => '‘Revolution based on evolution’ honored with chemistry Nobel',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                         'post_format' => '%%taxonomy.primary.15%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'Publisher Theme',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/',
                         ),
                     ),
                     'the_id' => 'posts.primary.192',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Contact Us',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.113',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt' => 'The Tour Championship is the last of four FedEx Cup play-off events that determine the season long champion on the PGA ',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.54',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Single Content Banner',
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
                     'the_id' => 'posts.primary.323',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Index Banner',
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
                     'the_id' => 'posts.primary.34',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Index Banner - 300x600',
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
                     'the_id' => 'posts.primary.33',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Sidebar Banner - 300x250',
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
                     'the_id' => 'posts.primary.29',
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
                     'option_value' => '%%posts.primary.54%%',
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
                                 'banner' => '%%posts.primary.323%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'left',
                                 'paragraph' => '4',
                             ),
                         ),
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
                         'widget_id' => 'bs-thumbnail-listing-2',
                         'widget_settings' => array(
                             'title' => 'Trending News',
                             'order_by' => 'popular',
                             'columns' => '1',
                             'pagination-show-label' => '1',
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '60',
                                 'excerpt' => '0',
                                 'excerpt-limit' => '115',
                                 'subtitle' => '0',
                                 'subtitle-limit' => '0',
                                 'subtitle-location' => 'after-title',
                                 'format-icon' => '1',
                                 'term-badge' => '1',
                                 'term-badge-count' => '1',
                                 'term-badge-tax' => 'category',
                                 'show-ranking' => '',
                                 'meta' => array(
                                     'show' => '0',
                                     'author' => '1',
                                     'date' => '1',
                                     'date-format' => 'standard',
                                     'view' => '0',
                                     'share' => '0',
                                     'comment' => '0',
                                     'review' => '0',
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
                             'show-powered' => '0',
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
                         'widget_id' => 'better-ads',
                         'widget_settings' => array(
                             'type' => 'banner',
                             'banner' => '%%posts.primary.33%%',
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
                             'title' => 'Trending',
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
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'Opinions',
                             'category' => '%%taxonomy.primary.7%%',
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
                 'footer-4' => array(
                     'remove_all_widgets' => true,
                     array(
                         'widget_id' => 'nav_menu',
                         'widget_settings' => array(
                             'title' => 'Quick Links',
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
                    'the_id' => 'media.primary.ad-content',
                ],
                [
                    'file'   => $demo_image_url . $prefix . 'index-banner.jpeg',
                    'the_id' => 'media.primary.ad-index',
                ],
                [
                    'file'   => $demo_image_url . $prefix . '300x600-sidebar-index.jpeg',
                    'the_id' => 'media.primary.ad-sidebar',
                ],
                [
                    'file'   => $demo_image_url . $prefix . '300x250-sidebar-index.jpeg',
                    'the_id' => 'media.primary.ad-sidebar2',
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
                     'the_id'        => 'menus.primary.1',
                     'menu-name' => 'Main Navigation',
                     'recently-edit' => true,
                     'items' => array(
                         array(
                             'item_type' => 'page',
                             'title' => 'Home',
                             'page_id' => '%%posts.primary.54%%',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.10%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.7%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.8%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                     ),
                 ),
                 array(
                     'menu-location' => 'footer-menu',
                     'the_id'        => 'menus.primary.2',
                     'menu-name' => 'Footer Navigation',
                     'items' => array(
                         array(
                             'item_type' => 'page',
                             'title' => 'Home',
                             'page_id' => '%%posts.primary.54%%',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.7%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.8%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.10%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'page',
                             'title' => 'Contact Us',
                             'page_id' => '%%posts.primary.113%%',
                         ),
                     ),
                 ),
             ),
         ),	);
}
