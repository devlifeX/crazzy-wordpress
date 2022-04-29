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

	$style_id       = 'games-plus';
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
                     'name' => 'Nintendo',
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
                     'name' => 'PC',
                     'taxonomy' => 'category',
                     'the_id' => 'taxonomy.primary.3',
                 ),
                 array(
                     'name' => 'PC',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.19',
                 ),
                 array(
                     'name' => 'Platform',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.16',
                 ),
                 array(
                     'name' => 'PlayStation 4',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.15',
                 ),
                 array(
                     'name' => 'Gallery',
                     'taxonomy' => 'post_format',
                     'the_id' => 'taxonomy.primary.12',
                 ),
                 array(
                     'name' => 'Video',
                     'taxonomy' => 'post_format',
                     'the_id' => 'taxonomy.primary.13',
                 ),
                 array(
                     'name' => 'PS3',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.7',
                 ),
                 array(
                     'name' => 'PS4',
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
                     'name' => 'Reviews',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'page_listing',
                             'meta_value' => 'grid-1',
                         ),
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-7',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.5',
                 ),
                 array(
                     'name' => 'Tomb Raider',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.18',
                 ),
                 array(
                     'name' => 'videos',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.20',
                 ),
                 array(
                     'name' => 'Wii U',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.8',
                 ),
                 array(
                     'name' => 'Xbox 360',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.9',
                 ),
                 array(
                     'name' => 'Xbox One',
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
                     'name' => 'Xbox One',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.17',
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
                     'post_title' => 'Fortnite v3.5.2 Update Introduces 50v50 Mode; Read Patch Notes Here',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.294',
                 ),
                 array(
                     'post_title' => 'PS4 Vs Xbox One - Which Console Has The Best Exclusive Games?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-10%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.318',
                 ),
                 array(
                     'post_title' => 'Steam PC Game Sale: Save On Darkest Dungeon, Dying Light, And More',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.299',
                 ),
                 array(
                     'post_title' => 'Assassin\'s Creed Origins',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-11%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'IGN',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'www.ign.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.351',
                 ),
                 array(
                     'post_title' => 'Fortnite: Battle Royale Review',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-12%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.352',
                 ),
                 array(
                     'post_title' => 'MLB The Show 18',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.357',
                 ),
                 array(
                     'post_title' => 'Extinction Review - A Giant Mess',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.358',
                 ),
                 array(
                     'post_title' => 'H1Z1 Review',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.353',
                 ),
                 array(
                     'post_title' => 'Splinter Cell\'s Sam Fisher Teased For New Ghost Recon Wildlands Update',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.310',
                 ),
                 array(
                     'post_title' => 'Spyro\'s Remastered Graphics Showcased In Reignited Trilogy Images',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.311',
                 ),
                 array(
                     'post_title' => 'We Absolutely Wrecked Far Cry 5\'s Graphics And Created A Trippy Mess',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.312',
                 ),
                 array(
                     'post_title' => 'Call Of Duty: WW2s Divisions Being Overhauled-Heres What\'s Changing',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.313',
                 ),
                 array(
                     'post_title' => 'PUBG, Fortnite Have New Battle Royale Competition - GameSpot Daily',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.315',
                 ),
                 array(
                     'post_title' => 'Top 10 UK Games Chart: Far Cry 5, Sea Of Thieves, FIFA 18 Remain At Top',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.316',
                 ),
                 array(
                     'post_title' => 'Why Overwatch\'s Retribution Mode Is Only Available For A Limited Time',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-11%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.314',
                 ),
                 array(
                     'post_title' => 'Far Cry 5 Last Of Us-Inspired Map Headlines Arcades Best Of The Week',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.320',
                 ),
                 array(
                     'post_title' => 'God Of War PS4 Almost Didn\'t Have One Of Its Best, Most Important Characters',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-12%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.288',
                 ),
                 array(
                     'post_title' => 'Call of Duty: WW2 Adds Free Coaching And Feedback Through Alexa',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.289',
                 ),
                 array(
                     'post_title' => 'God Of War PS4 Director Reacts To High Scores In Emotional Video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.291',
                 ),
                 array(
                     'post_title' => 'Top 10 UK Games Chart: God Of War PS4 Claims No.1 And Breaks Series Record',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.269',
                 ),
                 array(
                     'post_title' => 'Game Release Dates In April 2018 For Nintendo Switch, PS4, Xbox One',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.268',
                 ),
                 array(
                     'post_title' => 'Wolfenstein 2 On Nintendo Switch Requires An Internet Download',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.267',
                 ),
                 array(
                     'post_title' => '3 5 Top New Games Out This Week On Switch, PS4, Xbox One, And PC',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.275',
                 ),
                 array(
                     'post_title' => 'New Game Release Dates Of 2018: God of War, Super Smash Bros.',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.266',
                 ),
                 array(
                     'post_title' => 'Disgaea 1 Remake Releasing For Nintendo Switch And PS4 This Year',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.270',
                 ),
                 array(
                     'post_title' => 'Nintendo Switch Adding South Park And 15 More Games This Coming Week',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.271',
                 ),
                 array(
                     'post_title' => 'GameStop: Get More Cash For Trade-Ins For A Limited Time In The US',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-10%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.272',
                 ),
                 array(
                     'post_title' => 'Super Meat Boy Forever Brings Big Changes, But It\'s Still Hard As Hell',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-11%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.273',
                 ),
                 array(
                     'post_title' => 'Donkey Kong Plays Nintendo Switch When You Go Idle In Tropical Freeze',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-12%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.274',
                 ),
                 array(
                     'post_title' => 'God Of War PS4 Guide: How Armor, Skills, And Enchantments Work',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.508',
                 ),
                 array(
                     'post_title' => 'Need for Speed Payback',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-10%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'IGN',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'www.ign.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.350',
                 ),
                 array(
                     'post_title' => 'Here Is When God Of War PS4 Pre-Loading Begins; Unlock Time Confirmed',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.506',
                 ),
                 array(
                     'post_title' => '50 percent of all wars in EVE Online are started by just 5 groups',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.361',
                 ),
                 array(
                     'post_title' => 'Overwatch PTR Patch Notes Reveal New Update\'s Big Hero Changes',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.149',
                 ),
                 array(
                     'post_title' => 'Fortnite Week 10 Challenges Leaked: Skydive Through Floating Rings',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.293',
                 ),
                 array(
                     'post_title' => 'Warframe\'s Fortuna expansion will arrive on PC in November',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.347',
                 ),
                 array(
                     'post_title' => 'Free Monster Hunter-Like RPG Dauntless Gets Open Beta Next Month',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.298',
                 ),
                 array(
                     'post_title' => 'Disgaea 1 Remake Releasing For Nintendo Switch And PS4 This Year',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.292',
                 ),
                 array(
                     'post_title' => 'Fortnite Players Get Free Pickaxe And Skin Available With Amazon',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                         'post_tag' => '%%taxonomy.primary.20%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_featured_embed_code',
                             'meta_value' => 'https://www.youtube.com/watch?v=T6hM5aDU6wE',
                         ),
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-12',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.297',
                 ),
                 array(
                     'post_title' => 'GTA 5: What\'s New For GTA Online On PS4, Xbox One, And PC This Week',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.296',
                 ),
                 array(
                     'post_title' => 'Artifact\'s beta appears to have been delayed until November 19',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-10%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.349',
                 ),
                 array(
                     'post_title' => 'Which Baseball Video Game Is Right For You? Here\'s All The Key Info',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-11%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.295',
                 ),
                 array(
                     'post_title' => 'Some GTA 4 Songs Being Removed, But New Ones Will Take Their Place',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-12%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                         'post_tag' => '%%taxonomy.primary.20%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_featured_embed_code',
                             'meta_value' => 'https://www.youtube.com/watch?v=T6hM5aDU6wE',
                         ),
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-12',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.509',
                 ),
                 array(
                     'post_title' => 'The Witcher 3\'s Geralt Gets A New Figure, And It Comes With His Bathtub',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.151',
                 ),
                 array(
                     'post_title' => 'Big Call Of Duty: WW2 Update Is Out Now On PS4, Xbox One, And PC',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.20,9%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_featured_embed_code',
                             'meta_value' => 'https://www.youtube.com/watch?v=T6hM5aDU6wE',
                         ),
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-12',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.308',
                 ),
                 array(
                     'post_title' => 'New Fortnite Freebies Available Now To Make Up For Recent Server',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.290',
                 ),
                 array(
                     'post_title' => 'New Xbox One Games Sale Includes Discounts On Many Add-Ons',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.319',
                 ),
                 array(
                     'post_title' => 'Final Fantasy 15, Shadow Of The Tomb Raider Crossover Announced',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-12%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.519',
                 ),
                 array(
                     'post_title' => 'Attack on Titan 2 Review',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.355',
                 ),
                 array(
                     'post_title' => 'We’re Giving Away A Limited Edition God Of War PS4 Pro For Free',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-4%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'IGN',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'www.ign.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.507',
                 ),
                 array(
                     'post_title' => 'After Fortnite Update, Freebies Now Available To Make Up For Server Problems',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-3%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.521',
                 ),
                 array(
                     'post_title' => 'MGS 5 For $5, And More PC Games On Sale At The Humble Store In The US',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-5%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.510',
                 ),
                 array(
                     'post_title' => 'Splinter Cell\'s Sam Fisher Comes To Ghost Recon Wildlands Update This Week',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-1%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.522',
                 ),
                 array(
                     'post_title' => 'Ghost Recon Wildlands Update Is Out With Splinter Cell Mission And More',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-2%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.3%%',
                     ),
                     'the_id' => 'posts.primary.520',
                 ),
                 array(
                     'post_title' => 'Switch Weekly Roundup: Sneak Peek at Dark Souls Remastered Footage',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-11%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.276',
                 ),
                 array(
                     'post_title' => 'Fortnite Challenges For Week 4: All Ice Cream Truck Locations And More',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-10%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                         'post_tag' => '%%taxonomy.primary.9%%',
                     ),
                     'the_id' => 'posts.primary.317',
                 ),
                 array(
                     'post_title' => 'Detective Pikachu Review',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-9%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                         'post_tag' => '%%taxonomy.primary.20%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_featured_embed_code',
                             'meta_value' => 'https://www.youtube.com/watch?v=T6hM5aDU6wE',
                         ),
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-12',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.354',
                 ),
                 array(
                     'post_title' => 'Nintendo Switch\'s Labo Is Already Letting People Do Some Cool Stuff',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-8%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                         'post_tag' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.265',
                 ),
                 array(
                     'post_title' => 'Battle Brothers is getting some scary-ass monsters in its first DLC',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-7%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                         'post_tag' => '%%taxonomy.primary.20%%',
                         'post_format' => '%%taxonomy.primary.13%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => '_featured_embed_code',
                             'meta_value' => 'https://www.youtube.com/watch?v=T6hM5aDU6wE',
                         ),
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-12',
                         ),
                         array(
                             'meta_key' => '_bs_source_name',
                             'meta_value' => 'gameinformer.com',
                         ),
                         array(
                             'meta_key' => '_bs_source_url',
                             'meta_value' => 'gameinformer.com',
                         ),
                     ),
                     'the_id' => 'posts.primary.356',
                 ),
                 array(
                     'post_title' => 'Star Wars Battlefront 2 Taught EA A Lesson It Says It Won\'t Forget',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_excerpt' => 'Everyone is looking to lose weight these days, but most people miss the one key to just how easy it really is',
                     'thumbnail_id' => '%%media.primary.thumb-6%%',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.4%%',
                         'post_tag' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.518',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.129',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Contact us',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_excerpt_file' => $demo_path . 'post-excerpt.txt',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.128',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Banner Inline Index',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'type',
                             'meta_value' => 'image',
                         ),
                         array(
                             'meta_key' => 'img',
                                'meta_value' => '%%bf_product_demo_media_url:{media.primary.ad-inline}:\'full\'%%',
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
                     'the_id' => 'posts.primary.31',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Single Banner - 300 x 250',
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
                     'the_id' => 'posts.primary.30',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Banner After X Posts - 332 x 295',
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
                     'the_id' => 'posts.primary.28',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Baner Single X Paragraph',
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
                             'meta_value' => 'dfsg',
                         ),
                         array(
                             'meta_key' => 'style',
                             'meta_value' => 'style-4',
                         ),
                         array(
                             'meta_key' => 'color',
                             'meta_value' => '#e81042',
                         ),
                         array(
                             'meta_key' => 'text_desc',
                             'meta_value' => 'Sign up here to get the latest news and updates delivered directly to your inbox.',
                         ),
                         array(
                             'meta_key' => 'social_icons_sites',
                             'meta_value' => array(
                                 'facebook' => '1',
                                 'twitter' => '1',
                                 'google' => '1',
                                 'vimeo' => '1',
                                 'rss' => '1',
                             ),
                         ),
                     ),
                     'the_id' => 'posts.primary.26',
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
                     'option_value' => '%%posts.primary.129%%',
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
                                 'banner' => '%%posts.primary.27%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'right',
                                 'paragraph' => '6',
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
                             'banner' => '%%posts.primary.30%%',
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
                         'widget_id' => 'newsletter-pack',
                         'widget_settings' => array(
                             'newsletter' => '%%posts.primary.26%%',
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
                             'title' => 'LATEST VIDEOS',
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
                                     'author' => '1',
                                     'date' => '0',
                                     'date-format' => 'readable',
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
                             'pagination-show-label' => '0',
                         ),
                     ),
                     array(
                         'widget_id' => 'bs-thumbnail-listing-1',
                         'widget_settings' => array(
                             'title' => 'COMING SOON',
                             'columns' => 1,
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '50',
                                 'subtitle' => '0',
                                 'subtitle-limit' => '0',
                                 'subtitle-location' => 'before-meta',
                                 'show-ranking' => '',
                                 'meta' => array(
                                     'show' => '1',
                                     'author' => '0',
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
                             'paginate' => 'next_prev',
                             'pagination-show-label' => '0',
                         ),
                     ),
                 ),
                 'footer-1' => array(
                     'remove_all_widgets' => true,
                     array(
                         'widget_id' => 'bs-about',
                         'widget_settings' => array(
                             'content' => 'Publisher is the useful and powerful WordPress Newspaper, Magazine and Blog theme with great attention to details, incredible features, an intuitive user interface and everything else you need to create outstanding websites. It does not matter if you want to create news website, online magazine or personal blog, review website ...
                  
                  Contact us: <a href="mailto:info@yoursite.com">info@yoursite.com</a>',
                                'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
                             'link_facebook' => '#',
                             'link_twitter' => '#',
                             'link_google' => '#',
                             'link_vimeo' => '#',
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
                             'title' => 'reviews',
                             'category' => '%%taxonomy.primary.5%%',
                             'count' => '3',
                             'order_by' => 'rand',
                             'columns' => 1,
                             'pagination-show-label' => '1',
                             'bs-text-color-scheme' => 'light',
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '52',
                                 'subtitle' => '0',
                                 'subtitle-limit' => '0',
                                 'subtitle-location' => 'before-meta',
                                 'show-ranking' => '',
                                 'meta' => array(
                                     'show' => '1',
                                     'author' => '0',
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
                             'title' => 'FEATURED',
                             'count' => '3',
                             'order_by' => 'popular',
                             'columns' => 1,
                             'pagination-show-label' => '1',
                             'listing-settings' => array(
                                 'thumbnail-type' => 'featured-image',
                                 'title-limit' => '52',
                                 'subtitle' => '0',
                                 'subtitle-limit' => '0',
                                 'subtitle-location' => 'before-meta',
                                 'show-ranking' => '',
                                 'meta' => array(
                                     'show' => '1',
                                     'author' => '0',
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
                'file'   => $demo_image_url . $prefix . '728x90-index.jpeg',
                'the_id' => 'media.primary.ad-inline',
            ],
            [
                'file'   => $demo_image_url . $prefix . '300x250-sidebar.jpeg',
                'the_id' => 'media.primary.ad-sidebar',
            ],
            [
                'file'   => $demo_image_url . $prefix . 'ad-single.jpeg',
                'the_id' => 'media.primary.ad-single',
            ],
            [
                'file'   => $demo_image_url . $prefix . '300x250-post.jpeg',
                'the_id' => 'media.primary.ad-post',
            ],
            [
                'file'   => $demo_image_url . $prefix . 'Header-Logo.png',
                'the_id' => 'media.primary.logo-main',
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
                     'menu-name' => 'Main Navigation',
                     'recently-edit' => true,
                     'items' => array(
                         array(
                             'item_type' => 'page',
                             'title' => 'News',
                             'page_id' => '%%posts.primary.129%%',
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
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.6%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'custom',
                             'target' => '',
                             'title' => 'More',
                             'url' => '#',
                         ),
                     ),
                 ),
                 array(
                     'menu-location' => 'footer-menu',
                     'menu-name' => 'Footer Navigation',
                     'items' => array(
                         array(
                             'item_type' => 'page',
                             'title' => 'News',
                             'page_id' => '%%posts.primary.129%%',
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
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.4%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.6%%',
                             'taxonomy' => 'category',
                         ),
                         array(
                             'item_type' => 'term',
                             'term_id' => '%%taxonomy.primary.2%%',
                             'taxonomy' => 'category',
                         ),
                     ),
                 ),
             ),
         ),	);
}
