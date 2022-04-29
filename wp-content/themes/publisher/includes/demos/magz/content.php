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

	$style_id       = 'magz';
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
                     'name' => 'Beautiful',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.11',
                 ),
                 array(
                     'name' => 'BEAUTY',
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
                     'name' => 'CULTURE',
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
                     'name' => 'Dresses',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.10',
                 ),
                 array(
                     'name' => 'FASHION',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-17',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.4',
                 ),
                 array(
                     'name' => 'Makeup',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.13',
                 ),
                 array(
                     'name' => 'Natural',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.14',
                 ),
                 array(
                     'name' => 'Travel',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.5',
                 ),
                 array(
                     'name' => 'Undertone',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.12',
                 ),
                 array(
                     'name' => 'VIDEO',
                     'taxonomy' => 'post_tag',
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
                     'post_title' => 'Ibiza’s unspoilt little sister: why you should take it slow on Formentera',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.184',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'U.S. Customs Walks Back Ban on Canadians who Work in Cannabis Industry',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.137',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Adwoa Aboah Opens Up About Her Suicide Attempt on World Mental Health Day',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.111',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Like a True Punk, Kristen Stewart Wore a Rattail on the Cannes Red Carpet',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.160',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The Secret to Getting Kate Middleton’s Hair Is Much Simpler Than You Think',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.159',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Jennifer Lawrence’s Hair Evolution: From Blonde to Brunette, Long to Short',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.158',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Rachel Hilbert Shares Her Foolproof Hack for the Perfect Beach Waves',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.157',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Kim Kardashian Says Her Next Fragrance Bottle Will Be Shaped Like Her Body',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.155',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Demi Lovato Just Cut Her Long Hair Into a Short, Sleek Asymmetrical Bob',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.153',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Watch Out, Kylie Jenner: Serena Williams Is Launching Her Own Beauty Brand',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.151',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Bella Hadid’s Hairstylist Chad Wood on the Rules of a Spring Hair Revamp',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.149',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Guam Legislators Approve Measures to Speed up Medical Cannabis Access',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.136',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '6 Over-the-Top Celebrity-Approved Facials That You Need to Know Exist',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.163',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Volunteer Period Opens for Foria Study on Cannabis Menstrual Suppositories',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.134',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Olivia Newton-John Continues to Battle Cancer with Medical Cannabis',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.133',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Study Finds Whole-Plant Medicines More Effective Than CBD-Only Extracts',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.132',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Los Angeles Launches Crackdown on 105 Unlicensed Cannabis Businesses',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.128',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Mormon Church Speaks Publicly Against Utah Medical Cannabis Initiative',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.126',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Kristen Stewart’s Latest Punk Move on the Red Carpet Is Pure Comfort-Centric',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.112',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Lila Moss, Kate Moss\'s Daughter, is the New Face of Marc Jacobs Beauty',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.109',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Before and After: 9 Models Who Transformed Their Hair for Fashion Week',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.106',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Margot Robbie\'s Hairstylist Explains Why Everyone Has a Lob Right Now',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.105',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Halle Berry’s Trainer Explains How to Make the Beach Your Gym This Summer',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.101',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Beauty Entrepreneur Bobbi Brown Is Reinventing Herself as a Wellness Guru',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.162',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Sasha Obama Debuted A Colorful New Hairstyle While Hanging Out With Cardi B',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.161',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Adventure is a state of mind: this man might change the way you travel',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.174',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Nina Dobrev Got a Chin-Length, Asymmetrical Bob For the CFDA Awards',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.94',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Ricki Lake’s New Documentary Weed the People Shows Benefits of Cannabis',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.130',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Total eclipse of the heart (of America): where to see the 2017 solar eclipse',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.179',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Paris Jackson Goes Back to the Same Hair Color She Had at 12-Years-Old',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.108',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Tennessee Health Department Issues Warning About Dangers of CBD Products',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.135',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Makeup Artist Joyce Bonelli Says She Wasn’t Fired by the Kardashians',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.103',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'In pictures: brushing shoulders with bears in Finland’s newest national park',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.187',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Podcast: England’s Northeast – sea shanties, folk culture and audio tales',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.188',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Going underground in Hamburg: 6 ways to see the city’s alternative side',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.177',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Kylie Jenner, Bella Hadid, and More Celebrities Show Off Their Tiny Tattoos',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.107',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Former Los Angeles County Deputy Pleads Guilty To Drug Trafficking Charge',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.131',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'A Victoria Beckham Model’s Easy Drugstore Hack for Drying Out Pimples',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.156',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Sipping Savannah: a dispatch from America’s first prohibition museum',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.185',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'A postcard from San Pedro: finding life in one of the world’s driest deserts',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.180',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Colorado’s Mandatory Pesticide Testing Poses a Problem for Cannabis Growers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.129',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Dhows, donkeys and sundowners: why it’s time to return to Lamu, Kenya',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.183',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Podcast: the extraordinary life of Aboriginal storyteller Francis Firebrace',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.181',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Christmas markets in Paris: how to plan a festive foray to the French capital',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.182',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'L’Oréal’s Star-Studded Show at Paris Fashion Week Did Not Disappoint',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.212',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'The Top 10 Things We Learned About Fashion Month From Social Media',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.218',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Kim Kardashian Is Releasing Three New Mostly NSFW Kimoji Fragrances',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.98',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Meet the Black Mambas: South Africa’s first majority-female anti-poaching unit',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.186',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'About Us',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.51',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have been accused of bullying more junior staff in Parliament ...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.42',
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
                             'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
                         ),
                         array(
                             'meta_key' => 'caption',
                             'meta_value' => '-- Advertisement --',
                         ),
                         array(
                             'meta_key' => 'campaign',
                             'meta_value' => 'none',
                         ),
                     ),
                     'the_id' => 'posts.primary.244',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Banner Post Content',
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
                             'meta_value' => '-- Advertisement --',
                         ),
                         array(
                             'meta_key' => 'campaign',
                             'meta_value' => 'none',
                         ),
                     ),
                     'the_id' => 'posts.primary.243',
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
                     'the_id' => 'posts.primary.47',
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
                             'meta_value' => '%%bf_product_demo_media_url:\'\':\'full\'%%',
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
                     'the_id' => 'posts.primary.45',
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
                             'meta_value' => 'style-3',
                         ),
                         array(
                             'meta_key' => 'color',
                             'meta_value' => '#128ccb',
                         ),
                         array(
                             'meta_key' => 'social_icons',
                             'meta_value' => '0',
                         ),
                     ),
                     'the_id' => 'posts.primary.74',
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
                         'site_bg_image' => array(
                             'type' => 'parallax',
                             'img' => '%%bf_product_demo_media_url:{media.primary.bg}:\'full\'%%',
                         ),
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
                     'option_value' => '%%posts.primary.42%%',
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
                                 'banner' => '%%posts.primary.243%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'left',
                                 'paragraph' => '2',
                             ),
                         ),
                         'header_aside_logo_type' => 'banner',
                         'header_aside_logo_banner' => '%%posts.primary.45%%',
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
                             'banner' => '%%posts.primary.47%%',
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
                             'title' => 'POPULAR POSTS',
                             'count' => '5',
                             'columns' => 1,
                             'pagination-show-label' => '1',
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '50',
                                 'subtitle' => '0',
                                 'subtitle-limit' => '0',
                                 'subtitle-location' => 'before-meta',
                                 'show-ranking' => '1',
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
                         'widget_id' => 'better-social-counter',
                         'widget_settings' => array(
                             'title' => 'FOLLOW US',
                             'style' => 'big-button',
                             'columns' => '1',
                             'order' => array(
                                 'facebook' => '1',
                                 'twitter' => '1',
                                 'youtube' => '1',
                                 'instagram' => '1',
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
                         'widget_id' => 'newsletter-pack',
                         'widget_settings' => array(
                             'newsletter' => '%%posts.primary.74%%',
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
                            'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
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
                     array(
                         'widget_id' => 'bs-about',
                         'widget_settings' => array(
                             'link_facebook' => '#',
                             'link_twitter' => '#',
                             'link_google' => '#',
                             'link_instagram' => '#',
                             'link_email' => '#',
                             'link_youtube' => '#',
                             'title' => 'Follow us',
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
                             'title' => 'LATEST POSTS',
                             'order_by' => 'rand',
                             'columns' => 1,
                             'pagination-show-label' => '1',
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '50',
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
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'POPULAR POSTS',
                             'order_by' => 'rand',
                             'columns' => 1,
                             'pagination-show-label' => '1',
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '50',
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
                'file'   => $demo_image_url . $prefix . 'post-index.jpeg',
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
                'file'   => $demo_image_url . $prefix . '728x90-header.jpeg',
                'the_id' => 'media.primary.ad-header',
            ],
            [
                'file'   => $demo_image_url . $prefix . 'Footer-Logo.png',
                'the_id' => 'media.primary.logo-footer',
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
                'file'   => $demo_image_url . $prefix . 'bg.jpg',
                'the_id' => 'media.primary.bg',
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
                             'page_id' => '%%posts.primary.42%%',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.3%%',
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
                     'menu-name' => 'Top Navigation',
                     'items' => array(
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.3%%',
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
                             'page_id' => '%%posts.primary.51%%',
                         ),
                     ),
                 ),
             ),
         ),	);
}
