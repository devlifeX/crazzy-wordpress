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

	$style_id       = 'good-mag';
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
                     'name' => 'Breweries',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.13',
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
                     'name' => 'FASHION',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.4',
                 ),
                 array(
                     'name' => 'Intentional',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.16',
                 ),
                 array(
                     'name' => 'Lauren Grimm',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.12',
                 ),
                 array(
                     'name' => 'Video',
                     'taxonomy' => 'post_format',
                     'the_id' => 'taxonomy.primary.17',
                 ),
                 array(
                     'name' => 'RUNWAY',
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
                     'name' => 'Samesa',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.15',
                 ),
                 array(
                     'name' => 'SPORTS',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.7',
                 ),
                 array(
                     'name' => 'VIDEO',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.9',
                 ),
                 array(
                     'name' => 'Williamsburg',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.14',
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
                     'post_title' => 'Nina Dobrev Got a Chin-Length, Asymmetrical Bob For the CFDA Awards',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.90',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Guam Legislators Approve Measures to Speed up Medical Cannabis Access',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.142',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'See Max Mara’s Iconic Cube Jacket Reinterpreted by Three Photographers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.177',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'On and offstage brawls erupt after Khabib beats McGregor in UFC fight',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.226',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'We Spoke With Iris van Herpen About Envisioning the Future of Femininity',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_format' => '%%taxonomy.primary.17%%',
                     ),
                     'the_id' => 'posts.primary.178',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Turns Out Spring/Summer 2019 is Josep Font’s Last Collection for Delpozo',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.174',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'This Canadian Jewellery Brand Designed a Talisman for the British Museum',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.175',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'To Celebrate Bella Hadid’s 22nd, Here Are 22 of Her Best Red Carpet Moments',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.172',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Every Look Our Cover Girl Amber Witcomb Rocked on the Spring Runways',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.170',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Michael Kors is Back With Watch Hunger Stop: A Campaign to End World Hunger',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.169',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'The Top 10 Things We Learned About Fashion Month From Social Media',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.163',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Los Angeles Launches Crackdown on 105 Unlicensed Cannabis Businesses',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.148',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Study Finds Whole-Plant Medicines More Effective Than CBD-Only Extracts',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.145',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Former Los Angeles County Deputy Pleads Guilty To Drug Trafficking Charge',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.143',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Colorado’s Mandatory Pesticide Testing Poses a Problem for Cannabis Growers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.141',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Matt Doherty makes first start for Ireland as clash with Denmark gets underway',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.237',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'U.S. Customs Walks Back Ban on Canadians who Work in Cannabis Industry',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.136',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Bella Hadid\'s Hairstylist Chad Wood on the Rules of a Spring Hair Revamp',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.122',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Watch Out, Kylie Jenner: Serena Williams Is Launching Her Own Beauty Brand',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.121',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => '6 Over-the-Top Celebrity-Approved Facials That You Need to Know Exist',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.119',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Rachel Hilbert Shares Her Foolproof Hack for the Perfect Beach Waves',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.117',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Beauty Entrepreneur Bobbi Brown Is Reinventing Herself as a Wellness Guru',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.115',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Sasha Obama Debuted A Colorful New Hairstyle While Hanging Out With Cardi B',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.116',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Jennifer Lawrence\'s Hair Evolution: From Blonde to Brunette, Long to Short',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.109',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Halle Berry\'s Trainer Explains How to Make the Beach Your Gym This Summer',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.88',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Makeup Artist Joyce Bonelli Says She Wasn\'t Fired by the Kardashians',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.86',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Kylie Jenner, Bella Hadid, and More Celebrities Show Off Their Tiny Tattoos',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.85',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Paris Jackson Goes Back to the Same Hair Color She Had at 12-Years-Old',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.82',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Adwoa Aboah Opens Up About Her Suicide Attempt on World Mental Health Day',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.78',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Serena Williams wins US open match in designer tutu following catsuit ban',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.233',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Watch: British swimmer breaks world record for longest staged sea swim',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.232',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'O’Neill under pressure? Talking points ahead of Ireland’s clash with Denmark',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.238',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Kristen Stewart\'s Latest Punk Move on the Red Carpet Is Pure Comfort-Centric',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.79',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The Secret to Getting Kate Middleton\'s Hair Is Much Simpler Than You Think',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_format' => '%%taxonomy.primary.17%%',
                     ),
                     'the_id' => 'posts.primary.111',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Wall Street Analyst Estimates U.S. Cannabis Market Will Reach $47 Billion',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.149',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Scotland slump to Nations League defeat in Israel despite taking first-half lead',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.240',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Kim Kardashian Is Releasing Three New Mostly NSFW Kimoji Fragrances',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.91',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Turin out: Italy moves forward with joint-Milan and Cortina d’Ampezzo Olympic bid',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                         'post_format' => '%%taxonomy.primary.17%%',
                     ),
                     'the_id' => 'posts.primary.231',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Mormon Church Speaks Publicly Against Utah Medical Cannabis Initiative',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.147',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Volunteer Period Opens for Foria Study on Cannabis Menstrual Suppositories',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.138',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'L’Oréal’s Star-Studded Show at Paris Fashion Week Did Not Disappoint',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_format' => '%%taxonomy.primary.17%%',
                     ),
                     'the_id' => 'posts.primary.167',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Lila Moss, Kate Moss\'s Daughter, is the New Face of Marc Jacobs Beauty',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.83',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Paris Fashion Week: Street Style to Get You Through Fashion Month Withdrawals',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.173',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Leo Cullen delighted with Leinster\'s ruthless streak after Wasps trouncing',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.239',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Kim Kardashian Says Her Next Fragrance Bottle Will Be Shaped Like Her Body',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.114',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Depay shines as Netherlands thump Germany to heap pressure on Loew',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                         'post_format' => '%%taxonomy.primary.17%%',
                     ),
                     'the_id' => 'posts.primary.229',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Frank And Oak founders among the most “optimistic” influencers in fashion',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.176',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'A Victoria Beckham Model\'s Easy Drugstore Hack for Drying Out Pimples',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.118',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Chris Gunter believes Wales can cope with physical Republic of Ireland',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.235',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Stylist Kate Young\'s Favorite Beauty Tip Comes Courtesy of Sienna Miller',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.89',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Demi Lovato Just Cut Her Long Hair Into a Short, Sleek Asymmetrical Bob',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.120',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Tennessee Health Department Issues Warning About Dangers of CBD Products',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.140',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Margot Robbie\'s Hairstylist Explains Why Everyone Has a Lob Right Now',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_format' => '%%taxonomy.primary.17%%',
                     ),
                     'the_id' => 'posts.primary.87',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Defending champion Paul Dunne falls further behind British Masters leaders',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.236',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Ireland earn first point of Nations League in scoreless draw with Denmark',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.234',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Olivia Newton-John Continues to Battle Cancer with Medical Cannabis',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                         'post_format' => '%%taxonomy.primary.17%%',
                     ),
                     'the_id' => 'posts.primary.146',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Like a True Punk, Kristen Stewart Wore a Rattail on the Cannes Red Carpet',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.113',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Ricki Lake’s New Documentary Weed the People Shows Benefits of Cannabis',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.144',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Before and After: 9 Models Who Transformed Their Hair for Fashion Week',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.84',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Alexandre de Betak Set the Scene for All Your Favourite Shows and Designers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.171',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'About Us',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.28',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt' => 'The couple attended an engagement ceremony for Indian stars Isha Ambani and Anand Piramal in Lake Como in Italy this week...',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.77',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Post Banner 2',
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
                     'the_id' => 'posts.primary.255',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Index Block Banner',
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
                     'the_id' => 'posts.primary.76',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Index Sidebar Banner',
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
                     'the_id' => 'posts.primary.35',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Header Sidebar',
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
                     'the_id' => 'posts.primary.11',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
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
                             'meta_value' => '#19a6ff',
                         ),
                         array(
                             'meta_key' => 'social_icons',
                             'meta_value' => '0',
                         ),
                     ),
                     'the_id' => 'posts.primary.10',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
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
                     'option_value' => '%%posts.primary.77%%',
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
                         'header_aside_logo_type' => 'banner',
                         'header_aside_logo_banner' => '%%posts.primary.11%%',
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
                             'banner' => '%%posts.primary.35%%',
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
                             'title' => 'trending posts',
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
                             'paginate' => 'none',
                         ),
                     ),
                     array(
                         'widget_id' => 'better-social-counter',
                         'widget_settings' => array(
                             'title' => 'FOLLOW US',
                             'style' => 'clean',
                             'colored' => '0',
                             'columns' => '2',
                             'order' => array(
                                 'facebook' => '1',
                                 'twitter' => '1',
                                 'google' => '1',
                                 'youtube' => '1',
                                 'rss' => '1',
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
                             'newsletter' => '%%posts.primary.10%%',
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
         
         • Email: info@yoursite.com',
                             'logo_img'         => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
                             'link_facebook' => '#',
                             'link_twitter' => '#',
                             'link_google' => '#',
                             'link_instagram' => '#',
                             'link_email' => '#',
                             'link_youtube' => '#',
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
                             'title' => 'popular posts',
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
                         'widget_id' => 'bs-popular-categories',
                         'widget_settings' => array(
                             'exclude' => array(
                                 '',
                             ),
                             'title' => 'Categories',
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
                'file'   => $demo_image_url . $prefix . '728x90-post-index2.jpeg',
                'the_id' => 'media.primary.ad-post',
            ],   
            [
                'file'   => $demo_image_url . $prefix . '728x90-post-index.jpeg',
                'the_id' => 'media.primary.ad-index',
            ],   
            [
                'file'   => $demo_image_url . $prefix . '336x280-sidebar-index.jpeg',
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
                             'page_id' => '%%posts.primary.77%%',
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
                             'term_id' => '%%taxonomy.primary.7%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.6%%',
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
                             'term_id' => '%%taxonomy.primary.6%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'page',
                             'title' => 'About Us',
                             'page_id' => '%%posts.primary.28%%',
                         ),
                     ),
                 ),
             ),
         ),	);
}
