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

	$style_id       = 'news-time';
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
                     'the_id' => 'taxonomy.primary.15',
                 ),
                 array(
                     'name' => 'Allergies',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.17',
                 ),
                 array(
                     'name' => 'Aromatherapy',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.18',
                 ),
                 array(
                     'name' => 'Artificial Sweeteners',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.19',
                 ),
                 array(
                     'name' => 'Body Clock',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.16',
                 ),
                 array(
                     'name' => 'Economy',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-17',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.2',
                 ),
                 array(
                     'name' => 'Opinions',
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
                     'name' => 'Politics',
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
                     'name' => 'Video',
                     'taxonomy' => 'post_format',
                     'the_id' => 'taxonomy.primary.20',
                 ),
                 array(
                     'name' => 'Science',
                     'taxonomy' => 'category',
                     'term_meta' => array(
                         array(
                             'meta_key' => 'better_slider_style',
                             'meta_value' => 'style-1',
                         ),
                     ),
                     'the_id' => 'taxonomy.primary.6',
                 ),
                 array(
                     'name' => 'Videos',
                     'taxonomy' => 'post_tag',
                     'the_id' => 'taxonomy.primary.9',
                 ),
                 array(
                     'name' => 'World',
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
                     'post_title' => 'The World America Made—and Trump Wants to Unmake',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.205',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'How Ballet Dancer Misty Copeland Shattered Barriers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.258',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'A referendum on Macedonia’s new name fails to settle anything',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.165',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => '‘Revolution based on evolution’ honored with chemistry Nobel',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.295',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Jodie Whittaker makes a charismatic start as the new Doctor Who',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.143',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'NASA climate mission Trump tried to kill moves forward',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.294',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Trump administration to review human fetal tissue research',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.298',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Women fare well in this year’s round of NIH high-risk awards',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.293',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The bird voice box is one of a kind in the animal kingdom',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.290',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Conor McGregor Charged With Assault After UFC Bus Attack',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.268',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Son Heung-min Wants to Bring World Cup Glory to South Korea',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.266',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'What You Need to Know About World Cup Player Jimmy Durmaz',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.265',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Basketball Game Devolves Into a Massive On-Court Brawl',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.262',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Serena Williams Breaks Silence on U.S. Open Controversy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.261',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Trump on Weisselberg: ‘He Did Whatever Was Necessary’',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.239',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Japanese spacecraft drops a third rover on asteroid Ryugu',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.292',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Trust Me, Mr. President, White South Africans Are Doing Just Fine',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.237',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Is This the Stupidest Book Ever Written About Socialism?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.235',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Why Conservatives Should Beware a Roe v. Wade Repeal',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.234',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'How to Flood the Trump Administration With Investigations',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.232',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Trump Is Feuding With Harley-Davidson. Bikers Love Him Anyway.',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.227',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The Times Would Have Been Crazy Not to Publish That Op-Ed',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.210',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'How an Unlikely Alliance Saved the Democrats 100 Years Ago',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.209',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Michael Avenatti Is Winning the 2020 Democratic Primary',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.208',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Kent Sorenson Was a Tea Party Hero. Then He Lost Everything.',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.207',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Ken Starr: Trump’s Defense Team Should Be ‘Very Concerned’',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.204',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Russia Fixation Fades with Report Trump Dodged Taxes',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.202',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Trump May Not Be Crazy, But the Rest of Us Are Getting There Fast',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.197',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'The Nobel chemistry prize goes for work that harnesses evolution',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.146',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'How Soon Will the NYT’s Trump Resistance Writer Be Outed?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.231',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'The American dream doesn’t exist in many neighbourhoods',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.137',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Neanderthals used their hands like tailors and painters',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.297',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'The FBI will investigate accusations against Brett Kavanaugh',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.151',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'How Iceland Became the World Cup’s Ultimate Underdog',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.267',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'I Read Every Bob Woodward Book. Here’s How They Stack Up.',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.211',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'What Is Trump Getting for Sucking Up to Saudi Arabia?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.236',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'The Carolina Panthers Aren\'t Heroes for Signing Eric Reid',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.254',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Is Trump Driving Women Away From the GOP for Good?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.200',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'American Institutions Are Holding Up—But Are Americans?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.233',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Like humans, octopuses want more hugs when high on ecstasy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.299',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'These workplace issues significantly up your odds of divorce',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.296',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'A right-wing populist is poised to become Brazil’s next president',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.145',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'Trump Has No Fear: ‘Makes Nixon Look Like a Cream Puff’',
                     'post_format' => 'video',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                         'post_format' => '%%taxonomy.primary.20%%',
                     ),
                     'post_meta' => array(
                         array(
                             'meta_key' => 'post_template',
                             'meta_value' => 'style-10',
                         ),
                     ),
                     'the_id' => 'posts.primary.229',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'The \'Neymar Challenge\' Is Spreading Laughter Across the World',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.263',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'How the U.S. Senate Became a Campus Kangaroo Court',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.203',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => '‘He’s Unraveling’: Why Cohen’s Betrayal Terrifies Trump',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.240',
                     'thumbnail_id'      => '%%media.primary.thumb-8%%',
                 ),
                 array(
                     'post_title' => 'Don\'t Let NCAA Hypocrisy Ruin This Amazing March Madness',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.269',
                     'thumbnail_id'      => '%%media.primary.thumb-3%%',
                 ),
                 array(
                     'post_title' => 'Alabama Loves Sessions, But Not Enough to Stand Up to Trump',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.5%%',
                     ),
                     'the_id' => 'posts.primary.206',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Serena Williams Is One Step Closer to More Sporting Immortality',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.260',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'Are liberals and populists just searching for a new master?',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.144',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
                 ),
                 array(
                     'post_title' => 'It Would Take Exactly One Senator to Get Trump’s Taxes',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.8%%',
                     ),
                     'the_id' => 'posts.primary.238',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_title' => 'An endangered frog takes centre stage at the Supreme Court',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.149',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => '‘Humongous fungus’ is almost as big as the Mall of America',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.288',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'Venus Williams Is Still in the Game—On and Off the Court',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.7%%',
                     ),
                     'the_id' => 'posts.primary.264',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'A referendum on Macedonia’s new name fails to settle anything',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.152',
                     'thumbnail_id'      => '%%media.primary.thumb-9%%',
                 ),
                 array(
                     'post_title' => 'Anglophones and Francophones still approach Islam differently',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.148',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_title' => 'Britain’s Supreme Court rules in favour of two Christian bakers',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.135',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
                 ),
                 array(
                     'post_title' => 'An ancient virus may promote addiction in modern people',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.2%%',
                     ),
                     'the_id' => 'posts.primary.147',
                     'thumbnail_id'      => '%%media.primary.thumb-1%%',
                 ),
                 array(
                     'post_title' => 'Chemical spills put Italy’s underground physics lab in jeopardy',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.291',
                     'thumbnail_id'      => '%%media.primary.thumb-7%%',
                 ),
                 array(
                     'post_title' => 'Trump’s EPA scraps air pollution science review panels',
                     'post_content_file' => $demo_path . 'post-content.txt',
                     'post_terms' => array(
                         'category' => '%%taxonomy.primary.6%%',
                     ),
                     'the_id' => 'posts.primary.285',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Front Page',
                     'post_content_file' => $demo_path . 'post-content-1.txt',
                     'prepare_vc_css' => true,
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.46',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_type' => 'page',
                     'post_title' => 'Contact Us',
                     'post_content_file' => $demo_path . 'post-content-2.txt',
                     'post_meta' => array(
                         array(
                             'meta_key' => 'page_layout',
                             'meta_value' => '1-col',
                         ),
                     ),
                     'the_id' => 'posts.primary.10',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Single Banner',
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
                     'the_id' => 'posts.primary.311',
                     'thumbnail_id'      => '%%media.primary.thumb-4%%',
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
                     'the_id' => 'posts.primary.15',
                     'thumbnail_id'      => '%%media.primary.thumb-2%%',
                 ),
                 array(
                     'post_type' => 'better-banner',
                     'post_title' => 'Sidebar Banner - 300x600',
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
                     'the_id' => 'posts.primary.13',
                     'thumbnail_id'      => '%%media.primary.thumb-5%%',
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
                             'meta_value' => '#2a53c1',
                         ),
                     ),
                     'the_id' => 'posts.primary.12',
                     'thumbnail_id'      => '%%media.primary.thumb-6%%',
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
                     'option_value' => '%%posts.primary.46%%',
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
                                 'banner' => '%%posts.primary.311%%',
                                 'count' => '3',
                                 'columns' => '3',
                                 'orderby' => 'rand',
                                 'order' => 'ASC',
                                 'align' => 'right',
                                 'paragraph' => '3',
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
                             'banner' => '%%posts.primary.13%%',
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
                             'title' => 'Opinions',
                             'count' => '4',
                             'columns' => 1,
                             'pagination-slides-count' => '5',
                             'slider-control-dots' => 'style-1',
                             'slider-control-next-prev' => 'off',
                             'listing-settings' => array(
                                 'title-limit' => '70',
                                 'format-icon' => '1',
                                 'term-badge' => '0',
                                 'term-badge-count' => '1',
                                 'term-badge-tax' => 'category',
                                 'meta' => array(
                                     'show' => '0',
                                     'author' => '1',
                                     'date' => '1',
                                     'date-format' => 'standard',
                                     'view' => '0',
                                     'share' => '0',
                                     'comment' => '1',
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
                             'content' => '• Email: info@yoursite.com
         • Advertisement: 844-698-6394',
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
                         'widget_id' => 'nav_menu',
                         'widget_settings' => array(
                             'title' => 'Company',
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
                 'footer-3' => array(
                     'remove_all_widgets' => true,
                     array(
                         'widget_id' => 'nav_menu',
                         'widget_settings' => array(
                             'title' => 'Ads',
                             'nav_menu' => '%%menus.primary.2%%',
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
                 'footer-4' => array(
                     'remove_all_widgets' => true,
                     array(
                         'widget_id' => 'nav_menu',
                         'widget_settings' => array(
                             'title' => 'Links',
                             'nav_menu' => '%%menus.primary.2%%',
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
                'the_id' => 'media.primary.ad-single',
            ],
            [
                'file'   => $demo_image_url . $prefix . 'post-index.jpeg',
                'the_id' => 'media.primary.ad-index',
            ],
            [
                'file'   => $demo_image_url . $prefix . '300x600-sidebar.jpeg',
                'the_id' => 'media.primary.ad-sidebar',
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
                             'page_id' => '%%posts.primary.46%%',
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
                             'page_id' => '%%posts.primary.46%%',
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
                     ),
                 ),
             ),
         ),	);
}
