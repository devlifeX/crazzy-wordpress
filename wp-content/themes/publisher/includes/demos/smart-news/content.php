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

	$style_id       = 'smart-news';
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
                     'name' => 'Design',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.13',
                 ),
                 array(
                     'name' => 'fashion',
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
                     'name' => 'Finance',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.10',
                 ),
                 array(
                     'name' => 'food',
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
                     'name' => 'lifestyle',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-15',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.4',
                 ),
                 array(
                     'name' => 'Make money',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.11',
                 ),
                 array(
                     'name' => 'photography',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-17',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.5',
                 ),
                 array(
                     'name' => 'Video',
                     'taxonomy' => 'post_format',
                     'the_id' => 'taxonomy.primary.14',
                 ),
                 array(
                     'name' => 'Services',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.9',
                 ),
                 array(
                     'name' => 'travel',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.6',
                 ),
                 array(
                     'name' => 'video',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.7',
                 ),
                 array(
                     'name' => 'Wordpress',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.12',
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
                     'post_title' => 'Save Your Dry Winter Hair With These DIY Masks',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.77',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => '7 Things That Might Happen If You Stop Wearing Makeup',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.107',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Thailand: Alternative Bangkok and spiritual Chiang Mai',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.186',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Too early for a new year’s resolution? Not at Aldi!',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.132',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Indulge in an extra special Sunday with this wine event',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.130',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Jack(fruit) of all trades – what you need to know',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.129',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'How to find a taste of old Ireland in modern-day Dublin',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.128',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => '11 reasons you’ll want to devour Easy Food September',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.127',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'All about fibre: the tips and tricks you need to know',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.125',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'This new Dalkey gastropub has everything you want',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.123',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Forget Diet And Exercise–Do You Have The Fit Gene?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.110',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Dr. Oz: 5 Tips For Lasting Love, Health, And Happiness',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_format' => '%%taxonomy.primary.14%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'www.smartblogger.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'www.smartblogger.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.111',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Everything You Need To Know About Leaky Gut Syndrome',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.109',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The Best Foods To Eat When You’re On Your Period',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.108',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'BREAKING: Serena Williams Is 20 Weeks Pregnant!',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.103',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'The best new addition to the Dublin bakery scene',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.135',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => '9 Ways To Fight Depression–Besides Taking Pills',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.104',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Asking For A Friend: Can I Skip The Post-Workout Shower?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.105',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '3 Butt And Thigh Moves Celebrity Trainers Swear By',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.102',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Beginner’s Guide To Starting Your Own Fitness Studio',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.98',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => '13 Apps That Can Help Ease Depression And Anxiety',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.85',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => '5 Masturbation Tips For A Mind-Blowing Solo Session',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.84',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Why Sleep Is More Important Than We Ever Thought',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.82',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The Absolute Worst Running Mistake I’ve Ever Made',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.78',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'How To Be Friendly (Not Flirty!) With Male Friends',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.79',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Do These Yoga Poses When You’re Super Pissed Off',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.80',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Why You Should Never Eat Lunch At Your Desk Again',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.81',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'The 50 Hottest Players At The 2018 World Cup',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.75',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'How To Apply Foundation For Flawless, Even Skin',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.72',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'New fine-dining chapter for life in a Dublin nursing home',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.134',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'How to live well? Less hassle and more healthy foods!',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.133',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Caffeine cultures and how to order a coffee abroad',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.152',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Rasa Gurukul: a new eco spiritual retreat in Kerala, India',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.184',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The Food Eva Mendes Won’t Start Her Day Without',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.106',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Top 10 things to see and do in Nothern Ethiopia',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.154',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => '10 High-Tech Beauty Products Worth Every Penny',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                     ),
                     'the_id' => 'posts.primary.100',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Gastein and Grossarl – two ski valleys in Austria',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.159',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Steal These Strength Moves From Star Trainer Emily Skye',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_format' => '%%taxonomy.primary.14%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'www.smartblogger.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'www.smartblogger.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.83',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Top National Trust gardens where to see snowdrops',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.136',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => '50 Must-Know Fitness Facts To Shape Your Dream Body',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.86',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Q&A: Can I carry Christmas dinner in my hand luggage?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.148',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Travel Guide: 24 hours in Freetown, Sierra Leone',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.150',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Introducing the Dublin venue that’s all about comfort food',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.131',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Review: Adventure Yogi – Yoga Retreat in East Sussex, UK',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.153',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => '10 of the best places to see Britain’s Autumn colours',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.185',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Dunkirk, France: in the footsteps of its military history',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.179',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Where to experience the Dutch Golden Age in Amsterdam',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.183',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Melissa McCarthy Shows Off 45-Pound Weight Loss',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.161',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Celebrity interview: 1 minute travel with Helen Lederer',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.155',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'The Olivier da Costa restaurant experience in Lisbon',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.156',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Top 10 remote destinations to see in your lifetime',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.157',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Discovering Uzbekistan: At the centre of the Silk Road',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.182',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Is That Normal? 9 Surprising Changes With Age',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.160',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'St. Moritz: an adventure in fine dining and gastronomy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.158',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'How to celebrate the Chinese New Year in Hong Kong',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.173',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'South Africa: Knysna forests and mythical elephants',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.175',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Why I took my date to Club Chinois in Mayfair, London',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.177',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Top 10 things to do and see in San Diego, California',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.178',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Surfing in the Philippines: riding the Cloud 9 in Siargao',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.181',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Airport delays in Europe – your questions answered',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.180',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Contact Us',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.200',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how is:…',
                     'prepare_vc_css' => true,
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
                     'post_title' => 'Banner Post Content',
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
                     'the_id' => 'posts.primary.206',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Sidebar Single',
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
                     'the_id' => 'posts.primary.205',
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
                             'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-sidebar2}:\'full\'%%',
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
                     'the_id' => 'posts.primary.49',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Inline Header Banner',
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
                             'meta_value' => '#d6526e',
                         ),
                     ),
                     'the_id' => 'posts.primary.340',
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
                                 'banner' => '%%posts.primary.206%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'left',
                                 'paragraph' => '6',
                             ),
                         ),
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
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'Popular posts',
                             'order_by' => 'popular',
                             'columns' => 1,
                             'pagination-show-label' => '1',
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '60',
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
                         'widget_id' => 'better-ads',
                         'widget_settings' => array(
                             'type' => 'banner',
                             'banner' => '%%posts.primary.205%%',
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
         • Phone: 844-698-6394
         ',
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
                             'title' => 'Popular posts',
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
                             'title' => 'categories',
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
                'file'   => $demo_image_url . $prefix . '728x90-header.jpeg',
                'the_id' => 'media.primary.ad-header',
            ],
            [
                'file'   => $demo_image_url . $prefix . '300x600-sidebar-single.jpeg',
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
                 array(
                     'menu-location' => 'footer-menu',
                     'menu-name' => 'Main Navigation',
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
