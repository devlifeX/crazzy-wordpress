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

	$style_id       = 'future-mag';
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
                     'name' => 'Christmas',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.10',
                 ),
                 array(
                     'name' => 'Family-Friendly',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.13',
                 ),
                 array(
                     'name' => 'Fashion',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.2',
                 ),
                 array(
                     'name' => 'Food',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.3',
                 ),
                 array(
                     'name' => 'Global Life',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.12',
                 ),
                 array(
                     'name' => 'Good Life',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.11',
                 ),
                 array(
                     'name' => 'Holiday',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.14',
                 ),
                 array(
                     'name' => 'Lifestyle',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.4',
                 ),
                 array(
                     'name' => 'Photography',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.5',
                 ),
                 array(
                     'name' => 'Travel',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.6',
                 ),
                 array(
                     'name' => 'Videos',
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
                     'post_title' => 'Demi Lovato Just Cut Her Long Hair Into a Short, Sleek Asymmetrical Bob',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.111',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Barack and Michelle Obama Are in Talks to Get Their Own Netflix Show',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.135',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '17 American Foods International Tourists Miss Most When They’re Back Home',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.196',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Virgin Atlantic Just Introduced Their Own Version of Basic Economy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.133',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'This Cold War-era Military Plane Is Going to Be Turned Into a Restaurant',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.191',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Frank And Oak founders among the most “optimistic” influencers in fashion',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.172',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'This Canadian Jewellery Brand Designed a Talisman for the British Museum',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.171',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'See Max Mara’s Iconic Cube Jacket Reinterpreted by Three Photographers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.168',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Michael Kors is Back With Watch Hunger Stop: A Campaign to End World Hunger',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.167',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'To Celebrate Bella Hadid’s 22nd, Here Are 22 of Her Best Red Carpet Moments',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.165',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'L’Oréal’s Star-Studded Show at Paris Fashion Week Did Not Disappoint',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.160',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'In-flight Beauty Rituals to Steal From Sports Illustrated Swimsuit Models',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.146',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'An Adorable Baby Bunny Was Rescued From a Storm at Dublin Airport',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.145',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => '12 Pairs of Celebrity-approved Leggings That Are Perfect for Travel',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.140',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Bella Hadid’s Hairstylist Chad Wood on the Rules of a Spring Hair Revamp',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.120',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The 25 Best Places for Comfort Food in the U.S., According to Yelp',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.198',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'A Victoria Beckham Model’s Easy Drugstore Hack for Drying Out Pimples',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.118',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Beauty Entrepreneur Bobbi Brown Is Reinventing Herself as a Wellness Guru',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.116',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Sasha Obama Debuted A Colorful New Hairstyle While Hanging Out With Cardi B',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.115',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The Secret to Getting Kate Middleton’s Hair Is Much Simpler Than You Think',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.113',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Rachel Hilbert Shares Her Foolproof Hack for the Perfect Beach Waves',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.110',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => '6 Over-the-Top Celebrity-Approved Facials That You Need to Know Exist',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.112',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Watch Out, Kylie Jenner: Serena Williams Is Launching Her Own Beauty Brand',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.108',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Bella Hadid’s Hairstylist Chad Wood on the Rules of a Spring Hair Revamp',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.106',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'The U.S. Just Issued a Travel Warning for a Popular Mexican Resort Town',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.93',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => '5 of Modern History’s Most Persistent Myths About the Gender Wage Gap',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.92',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'How To Tell If You’re In a Toxic Relationship — And What To Do About It',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.91',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'The 10 Best Places to Spend the Holidays, According to Travel Experts',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.87',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'This Is Bobby Flay’s Number One Restaurant Etiquette Rule He Never Breaks',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.83',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'How Amazon Prime Members Can Get a 5% Discount at Whole Foods',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.197',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'This Southern Food and Music Festival Is ‘Music to Your Mouth’',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.193',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Chip and Joanna Gaines’ Restaurant Is Your Newest Reason to Go to Waco',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.200',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'We Spoke With Iris van Herpen About Envisioning the Future of Femininity',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.173',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Kim Kardashian Says Her Next Fragrance Bottle Will Be Shaped Like Her Body',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.117',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'All the Restaurants Where You Can Get Free Food on Valentine’s Day',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.204',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'How Early Should You Get to the Airport? Here’s What Travel Experts Say',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.90',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => '16 Ways to Get People to Like You Immediately, According to Psychology',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.81',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Like a True Punk, Kristen Stewart Wore a Rattail on the Cannes Red Carpet',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.114',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Extreme Winter Weather Has Ireland on Red Alert, and It Looks Scary',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.143',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Chris Hemsworth Is on the Most Adorable Vacation With His Family',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.137',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'The U.S. Just Issued a Travel Warning for a Popular Mexican Resort Town',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.139',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Pringles Made Chips Flavored Like Every Course of a Thanksgiving Dinner',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.88',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Michelle Obama Was Brutally Honest About the Food at Buckingham Palace',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.201',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Every Look Our Cover Girl Amber Witcomb Rocked on the Spring Runways',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.164',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'This Cafe Across From the ‘Friends’ Apartment Is the Real-life Central Perk',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.195',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Amazon Prime Membership Just Became Cheaper for Millions of People',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.138',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '1 The One Simple Trick to Get Special Treatment From a Flight Attendant',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.85',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Alexandre de Betak Set the Scene for All Your Favourite Shows and Designers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.162',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Anthony Bourdain Celebrated Mardi Gras by Chasing Chickens in Louisiana',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.202',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Squid Ink Ice Cream Is the Most Surprisingly Delicious Dessert at the Olympics',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.203',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'More Than Half of Teens Think They Spend Too Much Time on Their Phones',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.94',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'People Are Really Excited That McDonald’s Shamrock Shakes Are Back',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.199',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'This 84-year-old Mayor, Bartender, and Librarian Is Her Town’s Only Resident',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.144',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Why Meghan Markle’s Mutt Might Not Be Welcomed by the Royal Family',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.141',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The Top 10 Things We Learned About Fashion Month From Social Media',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.158',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'How Long Does It Take to Get a Passport? Here’s What You Need to Know',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.86',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Turns Out Spring/Summer 2019 is Josep Font’s Last Collection for Delpozo',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.170',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Model Who Breastfed on the Runway Is ‘Proud’ to Represent Working Moms',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.89',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Kim, Kourtney, and Khloé Kardashian Are on a Girls’ Trip in Tokyo',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.142',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Paris Fashion Week: Street Style to Get You Through Fashion Month Withdrawals',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.166',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Content Post',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'the_id' => 'posts.primary.342',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'All Blocks',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.78',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'About',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'the_id' => 'posts.primary.12',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Contact',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.11',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-3.txt',
                     'post_excerpt' => 'With the Speaker of the House of Commons John Bercow amongst various senior MPs to have ...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '3-col-0',
                         ),
                     ),
                     'the_id' => 'posts.primary.10',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Content Post',
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
                     'the_id' => 'posts.primary.214',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
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
                             'meta_value' => '%%bf_product_demo_media_url:{media.primary.index-banner}:\'full\'%%',
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
                     'the_id' => 'posts.primary.68',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
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
                     'the_id' => 'posts.primary.53',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
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
                             'meta_key' => 'color',
                             'meta_value' => '#000000',
                         ),
                     ),
                     'the_id' => 'posts.primary.347',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
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
                         'logo_image' => '%%bf_product_demo_media_url:{media.primary.logo-main-retina}:\'full\'%%',
                         'off_canvas_logo' => '%%bf_product_demo_media_url:{media.primary.logo-off-canvas}:\'full\'%%',
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
                                 'banner' => '%%posts.primary.214%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'left',
                                 'paragraph' => '2',
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
                         'widget_id' => 'better-ads',
                         'widget_settings' => array(
                             'type' => 'banner',
                             'banner' => '%%posts.primary.53%%',
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
                         'widget_id' => 'bs-modern-grid-listing-3',
                         'widget_settings' => array(
                             'title' => 'LATEST REVIEWS',
                             'count' => '5',
                             'columns' => 1,
                             'slider-control-dots' => 'style-1',
                             'slider-control-next-prev' => 'off',
                             'listing-settings' => array(
                                 'title-limit' => '45',
                                 'format-icon' => '1',
                                 'term-badge' => '0',
                                 'term-badge-count' => '1',
                                 'term-badge-tax' => 'category',
                                 'meta' => array(
                                     'show' => '1',
                                     'author' => '1',
                                     'date' => '0',
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
                             'paginate' => 'slider',
                             'pagination-show-label' => '0',
                         ),
                     ),
                 ),
                 'footer-1' => array(
                     'remove_all_widgets' => true,
                     array(
                         'widget_id' => 'bs-about',
                         'widget_settings' => array(
                             'content' => 'Publisher is the useful and powerful WordPress Newspaper , Magazine and Blog theme with great attention to details, incredible features, an intuitive user interface and everything else you need to create outstanding websites.',
                             'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
                             'about_link_url' => '#',
                             'about_link_text' => 'Read More',
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
                     array(
                         'widget_id' => 'bs-subscribe-newsletter',
                         'widget_settings' => array(
                             'msg' => 'Subscribe now and receive exclusive content via email.',
                             'show-powered' => '0',
                             'title' => 'Subscribe Now',
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
                             'title' => 'latest posts',
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
                 ),
                 'footer-3' => array(
                     'remove_all_widgets' => true,
                     array(
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'popular posts',
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
                 ),
             ),
         ),
      //
      // ->Media
      //
      'media' => 
         array(
           'multi_steps' => true,

            array(
                'file'   => $demo_image_url . $prefix . '300x250-post-single.jpeg',
                'the_id' => 'media.primary.content-post',
            ),

            array(
                'file'   => $demo_image_url . $prefix . 'post-index.jpeg',
                'the_id' => 'media.primary.index-banner',
            ),

            array(
                'file'   => $demo_image_url . $prefix . '300x250-sidebar.jpeg',
                'the_id' => 'media.primary.sidebar-banner',
            ),
            array(
                'file'   => $demo_image_url . $prefix . 'Mobile-Logo.png',
                'the_id' => 'media.primary.logo-off-canvas',
            ),
            array(
                'file'   => $demo_image_url . $prefix . 'Header-Logo.png',
                'the_id' => 'media.primary.logo-main',
            ),

                array(
                    'file'   => $demo_image_url . $prefix . 'Header-Logo-Retina.png',
                    'the_id' => 'media.primary.logo-main-retina',
                ),

                array(
                    'file'   => $demo_image_url . $prefix . 'Footer-Logo.png',
                    'the_id' => 'media.primary.logo-footer',
                ),
               array(
                    'file'   => $demo_image_url . $prefix . 'thumb-1.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-1',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-2.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-2',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-3.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-3',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-4.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-4',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-5.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-5',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-6.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-6',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-7.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-7',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-8.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-8',
                ),
                array(
                    'file'   => $demo_image_url . $prefix . 'thumb-9.jpg',
                    'resize' => true,
                    'the_id' => 'media.primary.thumb-9',
                ),
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
             ),
         ),	);
}
