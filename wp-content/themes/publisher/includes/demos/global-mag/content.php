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

	$style_id       = 'global-mag';
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
                     'the_id' => 'taxonomy.primary.13',
                 ),
                 array(
                     'name' => 'Aromatherapy',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.14',
                 ),
                 array(
                     'name' => 'Artificial Sweeteners',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.15',
                 ),
                 array(
                     'name' => 'Body Clock',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.12',
                 ),
                 array(
                     'name' => 'Fashion',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.3',
                 ),
                 array(
                     'name' => 'Lifestyle',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.4',
                 ),
                 array(
                     'name' => 'Music',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.5',
                 ),
                 array(
                     'name' => 'Photography',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.6',
                 ),
                 array(
                     'name' => 'Video',
                     'taxonomy' => 'post_format',
                     'the_id' => 'taxonomy.primary.16',
                 ),
                 array(
                     'name' => 'Travel',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.7',
                 ),
                 array(
                     'name' => 'Videos',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.8',
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
                     'post_title' => 'The Fruity Trend That’s Taking Over Our Wardrobe This Summer',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.212',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'This New Toronto Pop-Up Celebrates Home-Grown Talent',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.177',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Georgia May Jagger Takes the Rapid-Fire Question Challenge',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.118',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => '8 Canada Day Sales to Check Out Over the Long Weekend',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.210',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '20 Shirt Dresses to Keep you Cool and Collected This Summer',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.209',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'How To Style Denim for Summer With the Beckerman Twins',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.208',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Tropical Prints That Won’t Make You Look like a Dad on Vacation',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.207',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => '6 Body Positive Swimwear Brands to Shop This Summer',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.205',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Hudson’s Bay Is the Latest Retailer to Drop Ivanka Trump’s Line',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.200',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Chromat’s ‘Pool Rules’ Campaign Is Redefining Swimwear',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.198',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Meghan Markle’s Trench Dress Is by Canadian Designer NONIE',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.185',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Dior’s Saddle Bag Is the Latest Aughts Trend to Make a Comeback',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.184',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Ariana Grande Sports Grey Hair in Reebok’s Latest Campaign',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.183',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Find Your Perfect Bra Fit With Hamilton, Ont.’s Fairy Bra Mother',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.178',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Dress Like a Celeb With Style Tips From Stylist Micaela Erlanger',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.176',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Kim Kardashian Debuts Yeezy Season 8 on the Streets of Calabasas',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.227',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Ms. Lauryn Hill Stars in Her First Ever Fashion Campaign',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.171',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'A Brief History of Flower Crowns: From Antiquity to Queen B',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.158',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'This Easy Online Tool Will Help You Plan Your Next Vacation',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.157',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Street Style at Copenhagen Fashion Week Continues to Impress',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.154',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'The Best Red Carpet Looks at the 2018 Teen Choice Awards',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.155',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => '6 Celeb-Inspired Airport Outfits for Every Type of Traveler',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.156',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'The Epic Toronto Street Sale You Won’t Want to Miss',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.153',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Mimi Wade’s Polly Pocket Collection Is a ’90s Nostalgic Gem',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.151',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'This Campaign Is a Celebration of Canadian Diversity',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.146',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Meet the Makers: Nikki Wirthensohn Yassemi of NARCES',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.144',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'H&M Studio’s Latest Collection is an Homage to Twin Peaks',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.131',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Birks Celebrates This Year’s Women In Film During TIFF',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.132',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Lady Gaga Gives Us Our First Look at Hedi Slimane’s Céline',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.133',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Virgil Abloh Created a New Vocabulary for His Louis Vuitton Debut',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.211',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Lupita Nyong’o was Literal Sunshine at the ACE Awards 2018',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.229',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'This New H&M Kids Collection Is Sustainable and Adorable',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.126',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'This Fashion Insider Has Launched Her Own Accessories Line',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                         'post_format' => '%%taxonomy.primary.16%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'lifestyle.org',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://lifestyle.org',
                         ),
                     ),
                     'the_id' => 'posts.primary.236',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'You Can Now Buy a Bodysuit With Lisa Simpson’s Face On It',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.148',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Minimal Wedding Dresses to Channel Your Inner Meghan Markle',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                         'post_format' => '%%taxonomy.primary.16%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'lifestyle.org',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://lifestyle.org',
                         ),
                     ),
                     'the_id' => 'posts.primary.240',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Here’s Why Socks Should Be Your Most Important Accessory',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                         'post_format' => '%%taxonomy.primary.16%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'lifestyle.org',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://lifestyle.org',
                         ),
                     ),
                     'the_id' => 'posts.primary.128',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'A New York Souvenir Wholesaler Is Suing Balenciaga Over a Bag',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.173',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'These ’90’s hair accessories are back in style and perfect for fall',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                         'post_format' => '%%taxonomy.primary.16%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'lifestyle.org',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://lifestyle.org',
                         ),
                     ),
                     'the_id' => 'posts.primary.127',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '40 Stellar Photos From Operanation 2018: Into the Stars',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.241',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Kenneth Cole Opens Flagship Store in Downtown Toronto',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.182',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'All the Lessons Learned from Blake Lively’s Week of Suits',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_format' => '%%taxonomy.primary.16%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'lifestyle.org',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://lifestyle.org',
                         ),
                     ),
                     'the_id' => 'posts.primary.150',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Wear White and Practice Yoga for Peace This Thursday Evening',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.179',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Here’s What You Missed at Last Night’s American Music Awards',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.120',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Modest Fashion Festival Aims to Prove Modesty Isn’t a Trend',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.129',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'This Western-Inspired Shoe Line Is Finally Available in Canada',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.206',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The Stars at San Diego Comic-Con Were Surprisingly Well-Dressed',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.180',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Japanese Designer Doublet is Awarded the 2018 LVMH Prize',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.234',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Hilary MacMillan on What it Means to Be a Cruelty-Free Designer',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.123',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'India Hicks Will Show You How To Lead An Extraordinary Life',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_format' => '%%taxonomy.primary.16%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'lifestyle.org',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'https://lifestyle.org',
                         ),
                     ),
                     'the_id' => 'posts.primary.204',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Is Meghan Markle Not Allowed to Wear Formal Pants Anymore?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.181',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Georgia May Jagger Takes the Rapid-Fire Question Challenge',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.125',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'De Beers Has Announced It Will Start Selling Lab Diamonds',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.238',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'This $3 Bracelet Is Helping Fund Education in Kenya',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.152',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Toronto Fashion Week Will Return for the Spring 2019 Season',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.202',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Riccardo Tisci Makes his Burberry Debut at London Fashion Week',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.130',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '10 Affordable Bridesmaid Dresses That Won’t Make You Cringe',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.244',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Carven, the French Fashion Label, Has Filed for Bankruptcy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.243',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'The Bike Shorts Trend Kim Kardashian Can’t Get Enough Of',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.242',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Pride-Themed Clothing You Can Rock 365 Days of the Year',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.237',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Christopher Kane Just Released a Line of Extremely Quirky Rugs',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.239',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'About Us',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.49',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.41',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Post index',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'type',
                             'meta_value' => 'image',
                         ),
                         array(
                             'meta_key' => 'img',
                             'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-post}:\'full\'%%',
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
                     'the_id' => 'posts.primary.48',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Banner Single Post',
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
                             'meta_value' => '- Advertisement -',
                         ),
                         array(
                             'meta_key' => 'campaign',
                             'meta_value' => 'none',
                         ),
                     ),
                     'the_id' => 'posts.primary.252',
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
                     'the_id' => 'posts.primary.45',
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
                             'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-header}:\'full\'%%',
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
                     'the_id' => 'posts.primary.399',
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
                         array(
                             'meta_key' => 'color',
                             'meta_value' => '#074da3',
                         ),
                     ),
                     'the_id' => 'posts.primary.71',
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
                     'option_value' => '%%posts.primary.41%%',
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
                                 'banner' => '%%posts.primary.252%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'right',
                                 'paragraph' => '3',
                             ),
                         ),
                         'header_aside_logo_type' => 'banner',
                         'header_aside_logo_banner' => '%%posts.primary.399%%',
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
                             'title' => 'POPULAR POSTS',
                             'count' => '5',
                             'order_by' => 'popular',
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
                             'bf-widget-title-color' => '#111111',
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
                             'banner' => '%%posts.primary.45%%',
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
                             'title' => 'FOLLOW US',
                             'style' => 'style-11',
                             'columns' => '1',
                             'order' => array(
                                 'facebook' => '1',
                                 'twitter' => '1',
                                 'pinterest' => '1',
                                 'rss' => '1',
                             ),
                             'bf-widget-title-color' => '#111111',
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
                             'content' => 'Publisher is the useful and powerful WordPress Newspaper Magazine and Blog theme with great attention to details, incredible features, an intuitive user interface and everything else you need to create outstanding websites.',
                                'logo_img'         => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
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
                 ),
                 'footer-2' => array(
                     'remove_all_widgets' => true,
                     array(
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'LATEST POSTS',
                             'count' => '3',
                             'order_by' => 'rand',
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
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'POPULAR POSTS',
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
                    'file'   => $demo_image_url . $prefix . '336x280-post-index.jpeg',
                    'the_id' => 'media.primary.ad-post',
                ],     
                [
                    'file'   => $demo_image_url . $prefix . '300x250-post-single.jpeg',
                    'the_id' => 'media.primary.ad-single',
                ],     
                [
                    'file'   => $demo_image_url . $prefix . '336x280-sidebar-index.jpeg',
                    'the_id' => 'media.primary.ad-sidebar',
                ],     
                [
                    'file'   => $demo_image_url . $prefix . '728x90-Header.jpeg',
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
                             'page_id' => '%%posts.primary.41%%',
                         ),
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
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.5%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.6%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.7%%',
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
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'page',
                             'title' => 'About Us',
                             'page_id' => '%%posts.primary.49%%',
                         ),
                     ),
                 ),
             ),
         ),	);
}
