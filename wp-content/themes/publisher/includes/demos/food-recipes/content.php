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

	$style_id       = 'food-recipes';
	$prefix         = $style_id . '-'; // prevent caching when user installs multiple demos continuously
	$demo_path      = PUBLISHER_THEME_PATH . 'includes/demos/' . $style_id . '/';
	$demo_image_url = publisher_get_demo_images_url( $style_id );

	return [

		//
		// ->Taxonomies
		//
		'taxonomy' =>
			[
				'multi_steps' => false,
				[
					[
						'name'     => 'Computer',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.14',
					],
					[
						'name'     => 'Dinner',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.2',
					],
					[
						'name'     => 'Hating Game',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.15',
					],
					[
						'name'     => 'Holidays',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.3',
					],
					[
						'name'     => 'Hostened',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.16',
					],
					[
						'name'     => 'Literature',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.12',
					],
					[
						'name'     => 'Photo',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.4',
					],
					[
						'name'     => 'Photos',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.7',
					],
					[
						'name'     => 'Video',
						'taxonomy' => 'post_format',
						'the_id'   => 'taxonomy.primary.17',
					],
					[
						'name'     => 'Protagonists',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.13',
					],
					[
						'name'     => 'Quick & Easy',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.5',
					],
					[
						'name'     => 'Recipes',
						'taxonomy' => 'category',
						'the_id'   => 'taxonomy.primary.6',
					],
					[
						'name'     => 'Videos',
						'taxonomy' => 'post_tag',
						'the_id'   => 'taxonomy.primary.8',
					],
				],
			],
		//
		// ->Posts
		//
		'posts'    =>
			[
				'multi_steps' => false,
				[
					[
						'post_title'        => 'Almond Kamut Granola + The Easy Vegetarian Kitchen',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.271',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'White Bean Gnocchi with Cauliflower and Cream Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.240',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Chipotle Butternut Squash Crepes with Cilantro Crema',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.202',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Curry Grilled Vegetables with Chickpeas and Creamy',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.289',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Broccoli Chickpea Bowl with Homemade Teriyaki Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.273',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Pesto Summer Squash Bruschetta with Poached Eggs',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.268',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Black Bean Tostadas with Chipotle Butternut Squash',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.269',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Butternut Squash Galette with Balsamic Onions and Ricotta',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.266',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Cheesy Millet Polenta with Roasted Asparagus',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.263',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Buffalo Chickpea Salad with Homemade Ranch',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.261',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Root Vegetable Enchiladas with Cilantro Avocado Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.244',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Radicchio Salad with Lentils and Roasted Acorn Squash',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.243',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Butternut Squash Stuffed Shells with Cream Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.242',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Butternut Squash Toast with Pistachios and Sage',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.241',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Cracked Einkorn Porridge with Stewed Blood Oranges',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.239',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Chipotle Sweet Potato and Brown Rice Egg Skillet',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.297',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Roasted Sweet Potato and Cabbage Summer Rolls',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.238',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Roasted Potatoes and Chickpeas with Green Harissa',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.237',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Raw Asparagus Fennel Salad and Khorsan Wheat',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.236',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Za’atar Spiced Pecans and Quinoa Breakfast Bowl',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.206',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Roasted Acorn Squash Salad with Pecan Vinaigrette',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.205',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Coriander Sweet Potato Soup with Buckwheat Granola',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.203',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Roasted Cauliflower Pasta with Poppy Seed Cream Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.201',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Sweet Potato Celeriac Pasta with Tarragon Butter Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.194',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Roasted Sweet Potato Spring Rolls with Spinach',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.171',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Vegetable Burger with Curried Ketchup and Avocado',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.170',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Roasted Delicata Squash with Honey Butter and Pistachios',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.169',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Chickpea Pasta with Chili-Butter Tomato Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.166',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Adobo Acorn Squash, Crispy Quinoa, and Chimichurri',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.164',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Thai Cauliflower with Pearl Couscous and Cilantro',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.296',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Cracked Rye Porridge with Roasted Molasses Cherries',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.293',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Homemade Veggie Burger with Brown Rice, Oat, and Nuts',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.299',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Curried Acorn Squash with Lemon-Arugula Salad',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.272',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Tomato Sandwich with Olive Tapenade and Hummus',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.2%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.172',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Spinach Asparagus Soup with Lemon Sunflower Cream',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.234',
						'thumbnail_id'      => '%%media.primary.thumb-7%%',
					],
					[
						'post_title'        => 'Fried Halloumi Toast with Dry-Farmed Tomato Bruschetta',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.291',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Spinach Salad with Avocado and Sesame Roasted',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.292',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Millet Porridge with Lemon Curd and Sunflower Seeds',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.295',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Roasted Butternut Squash, Quinoa, and Arugula Salad',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.285',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Grilled Halloumi Skewers with Cilantro-Tahini Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.294',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Einkorn Ricotta Gnocchi with Roasted Tomato Sauce',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.6%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.290',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Vegan Carrot Waffles from The Love and Lemons Cookbook',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.265',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Ricotta Stuffed Shells with Roasted Tomato Sauce',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.5%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.258',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Vegetarian Ramen Bowl with Spicy Brussels Sprouts',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.5%%',
						],
						'the_id'            => 'posts.primary.267',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Brown Rice Carrot Fritters with Chipotle Sunflower Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.204',
						'thumbnail_id'      => '%%media.primary.thumb-8%%',
					],
					[
						'post_title'        => 'Grilled Sriracha-Tahini Sweet Potato Skewers with Halloumi',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.5%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.270',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => '15 Vegetarian Butternut Squash Recipes For Late Winter',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.200',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Blueberry Chia Jam with Yogurt and Sunflower Crunch',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.2%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.174',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Whole Wheat Banana Bread with Chocolate Chips',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.6%%',
						],
						'the_id'            => 'posts.primary.287',
						'thumbnail_id'      => '%%media.primary.thumb-2%%',
					],
					[
						'post_title'        => 'Spiced Sweet Potato Skewers with Cilantro Yogurt Sauce',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.4%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.232',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Chickpea Tomato Bread Salad with Arugula Pesto',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.2%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.173',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Harissa Acorn Squash with Bulgur and Yogurt Sauce',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.196',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Roasted Radish Salad with Butter-Thyme Dressing',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.178',
						'thumbnail_id'      => '%%media.primary.thumb-4%%',
					],
					[
						'post_title'        => 'Black Bean Quesadillas with Garlicky Shishito Peppers',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.4%%',
						],
						'the_id'            => 'posts.primary.245',
						'thumbnail_id'      => '%%media.primary.thumb-9%%',
					],
					[
						'post_title'        => 'Potato Chickpea Croquettes with Garlicky Sunflower Dip',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.175',
						'thumbnail_id'      => '%%media.primary.thumb-5%%',
					],
					[
						'post_title'        => 'Beet Salad with Broiled Feta and Sesame Sunflower',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.2%%',
						],
						'the_id'            => 'posts.primary.176',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Avocado Romaine Wedge Salad with Pickled Radish',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.2%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.177',
						'thumbnail_id'      => '%%media.primary.thumb-1%%',
					],
					[
						'post_title'        => 'Carrot, Feta & Pistachio Salad with Orange Blossom Toss',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.208',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_title'        => 'Curry Chickpea Burgers with Coconut Cabbage Slaw',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category' => '%%taxonomy.primary.3%%',
						],
						'the_id'            => 'posts.primary.207',
						'thumbnail_id'      => '%%media.primary.thumb-3%%',
					],
					[
						'post_title'        => 'Creamy Millet Porridge with Roasted Strawberries',
						'post_format'       => 'video',
						'post_content_file' => $demo_path . 'post-content.txt',
						'post_terms'        => [
							'category'    => '%%taxonomy.primary.3%%',
							'post_format' => '%%taxonomy.primary.17%%',
						],
						'post_meta'         => [
							[
								'meta_key'   => '_bs_source_name',
								'meta_value' => 'theeverygirl.com',
							],
							[
								'meta_key'   => '_bs_source_url',
								'meta_value' => 'http://theeverygirl.com',
							],
						],
						'the_id'            => 'posts.primary.211',
						'thumbnail_id'      => '%%media.primary.thumb-6%%',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'About Us',
						'post_content_file' => $demo_path . 'post-content-1.txt',
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.131',
					],
					[
						'post_type'         => 'page',
						'post_title'        => 'Front Page',
						'post_content_file' => $demo_path . 'post-content-2.txt',
						'prepare_vc_css'    => true,
						'post_meta'         => [
							[
								'meta_key'   => 'page_layout',
								'meta_value' => '1-col',
							],
						],
						'the_id'            => 'posts.primary.19',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Content Banner',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.content-post}:\'full\'%%',

							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							],
							[
								'meta_key'   => 'caption',
								'meta_value' => '- Advertisement -',
							],
							[
								'meta_key'   => 'campaign',
								'meta_value' => 'none',
							],
						],
						'the_id'     => 'posts.primary.159',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Index Sidebar Banner',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.index-sidebar}:\'full\'%%',
							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							],
							[
								'meta_key'   => 'caption',
								'meta_value' => '- Advertisement -',
							],
							[
								'meta_key'   => 'campaign',
								'meta_value' => 'none',
							],
						],
						'the_id'     => 'posts.primary.12',
					],
					[
						'post_type'  => 'better-banner',
						'post_title' => 'Index Banner',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'image',
							],
							[
								'meta_key'   => 'img',
								'meta_value' => '%%bf_product_demo_media_url:{media.primary.index-banner}:\'full\'%%',
							],
							[
								'meta_key'   => 'url',
								'meta_value' => 'https://betterstudio.com/publisher-wp-theme/pricing/',
							],
							[
								'meta_key'   => 'caption',
								'meta_value' => '- Advertisement -',
							],
							[
								'meta_key'   => 'campaign',
								'meta_value' => 'none',
							],
						],
						'the_id'     => 'posts.primary.11',
					],
					[
						'post_type'  => 'bsnp-newsletter',
						'post_title' => 'Newsletter',
						'post_meta'  => [
							[
								'meta_key'   => 'type',
								'meta_value' => 'feedburner',
							],
							[
								'meta_key'   => 'feedburner_id',
								'meta_value' => '#',
							],
							[
								'meta_key'   => 'style',
								'meta_value' => 'style-7',
							],
							[
								'meta_key'   => 'social_icons',
								'meta_value' => '0',
							],
						],
						'the_id'     => 'posts.primary.10',
					],
				],
			],
		//
		// ->Options
		//
		'options'  =>
			[
				'multi_steps' => false,
				[
					[
						'type'              => 'option',
						'option_name'       => 'bs_' . 'publisher_theme_options',
						'option_value_file' => $demo_path . 'options.json',
					],
					[
						'type'          => 'option',
						'option_name'   => 'bs_' . 'publisher_theme_options',
						'option_value'  => [
							'logo_image'        => '%%bf_product_demo_media_url:{media.primary.logo-main}:\'full\'%%',
							'logo_image_retina' => '%%bf_product_demo_media_url:{media.primary.logo-main-retina}:\'full\'%%',
							'off_canvas_logo'   => '%%bf_product_demo_media_url:{media.primary.logo-off-canvas}:\'full\'%%',
							'site_bg_image'     => [
								'type' => 'repeat',
								'img'  => '%%bf_product_demo_media_url:{media.primary.bg}:\'full\'%%',
							],
							'header_bg_image'   => [
								'type' => 'cover',
								'img'  => '%%bf_product_demo_media_url:{media.primary.header-bg}:\'full\'%%',
							],
							'footer_bg_image'   => [
								'type' => 'cover',
								'img'  => '%%bf_product_demo_media_url:{media.primary.footer-bg}:\'full\'%%',
							],
						],
						'merge_options' => true,
					],
					[
						'type'         => 'option',
						'option_name'  => 'bs_' . 'publisher_theme_options_current_style',
						'option_value' => $style_id,
					],
					[
						'type'         => 'option',
						'option_name'  => 'bs_' . 'publisher_theme_options_current_demo',
						'option_value' => $style_id,
					],
					[
						'type'         => 'option',
						'option_name'  => 'page_on_front',
						'option_value' => '%%posts.primary.19%%',
					],
					[
						'type'         => 'option',
						'option_name'  => 'show_on_front',
						'option_value' => 'page',
					],
					[
						'type'          => 'option',
						'option_name'   => 'better_ads_manager',
						'option_value'  => [
							'ad_post_inline' => [
								[
									'type'      => 'banner',
									'campaign'  => 'none',
									'banner'    => '%%taxonomy.primary.159%%',
									'count'     => '3',
									'columns'   => '3',
									'orderby'   => 'rand',
									'order'     => 'ASC',
									'align'     => 'left',
									'paragraph' => '2',
								],
							],
						],
						'merge_options' => true,
					],
				],
			],
		//
		// ->Widgets
		//
		'widgets'  =>
			[
				'multi_steps' => false,
				[
					'primary-sidebar' => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'better-social-counter',
							'widget_settings' => [
								'title'                => 'Follow Us',
								'style'                => 'style-11',
								'order'                => [
									'facebook' => '1',
									'twitter'  => '1',
									'youtube'  => '1',
									'rss'      => '1',
								],
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'columns'              => '4',
							],
						],
						[
							'widget_id'       => 'better-ads',
							'widget_settings' => [
								'type'                 => 'banner',
								'banner'               => '%%posts.primary.12%%',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'columns'              => '1',
							],
						],
						[
							'widget_id'       => 'bs-thumbnail-listing-1',
							'widget_settings' => [
								'title'                 => 'How To',
								'count'                 => '6',
								'columns'               => 1,
								'pagination-show-label' => '1',
								'listing-settings'      => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '60',
									'subtitle'          => '0',
									'subtitle-limit'    => '0',
									'subtitle-location' => 'before-meta',
									'show-ranking'      => '0',
									'meta'              => [
										'show'        => '1',
										'author'      => '0',
										'date'        => '1',
										'date-format' => 'standard',
										'view'        => '0',
										'share'       => '0',
										'comment'     => '0',
										'review'      => '1',
									],
								],
								'disable_duplicate'     => '0',
								'bf-widget-title-icon'  => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'paginate'              => 'none',
							],
						],
						[
							'widget_id'       => 'newsletter-pack',
							'widget_settings' => [
								'newsletter'           => '%%posts.primary.10%%',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
					],
					'footer-1'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'bs-about',
							'widget_settings' => [
								'content'              => 'Publisher is the useful and powerful WordPress Newspaper Magazine and Blog theme with great attention to details, incredible features, an intuitive user interface and everything else you need to create outstanding websites.
         
         • Email: info@yoursite.com
         • Phone: 844-698-6394',
								'logo_img'             => '%%bf_product_demo_media_url:{media.primary.logo-footer}:\'full\'%%',
								'link_facebook'        => '#',
								'link_twitter'         => '#',
								'link_google'          => '#',
								'link_instagram'       => '#',
								'link_email'           => '#',
								'link_youtube'         => '#',
								'title'                => '',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
					],
					'footer-2'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'bs-thumbnail-listing-1',
							'widget_settings' => [
								'title'                 => 'Popular Recipes',
								'count'                 => '3',
								'columns'               => 1,
								'pagination-show-label' => '1',
								'listing-settings'      => [
									'thumbnail-type'    => 'featured-image',
									'title-limit'       => '60',
									'subtitle'          => '0',
									'subtitle-limit'    => '0',
									'subtitle-location' => 'before-meta',
									'show-ranking'      => '0',
									'meta'              => [
										'show'        => '1',
										'author'      => '0',
										'date'        => '1',
										'date-format' => 'standard',
										'view'        => '0',
										'share'       => '0',
										'comment'     => '0',
										'review'      => '1',
									],
								],
								'disable_duplicate'     => '0',
								'bf-widget-title-icon'  => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
								'paginate'              => 'none',
							],
						],
					],
					'footer-3'        => [
						'remove_all_widgets' => true,
						[
							'widget_id'       => 'nav_menu',
							'widget_settings' => [
								'title'                => 'Links',
								'nav_menu'             => '%%menus.primary.1%%',
								'bf-widget-title-icon' => [
									'icon'      => '',
									'type'      => '',
									'height'    => '',
									'width'     => '',
									'font_code' => '',
								],
							],
						],
					],
				],
			],
		//
		// ->Media
		//
		'media'    =>
			[
				'multi_steps' => true,
				[
					'file'   => $demo_image_url . $prefix . 'bg.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.bg',
				],
				[
					'file'   => $demo_image_url . $prefix . 'header-bg.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.header-bg',
				],
				[
					'file'   => $demo_image_url . $prefix . 'footer-bg.png',
					'resize' => true,
					'the_id' => 'media.primary.footer-bg',
				],
				[
					'file'   => $demo_image_url . $prefix . '300x250-post-single.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.content-post',
				],
				[
					'file'   => $demo_image_url . $prefix . '336x280-sidebar-index.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.index-sidebar',
				],
				[
					'file'   => $demo_image_url . $prefix . '728x90-post-index.jpeg',
					'resize' => true,
					'the_id' => 'media.primary.index-banner',
				],
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
			],
		//
		// ->Menus
		//
		'menus'    =>
			[
				'multi_steps' => false,
				[
					[
						'menu-location' => 'main-menu',
						'the_id'        => 'menus.primary.1',
						'menu-name'     => 'Main Navigation',
						'recently-edit' => true,
						'items'         => [
							[
								'item_type' => 'page',
								'title'     => 'Home',
								'page_id'   => '%%posts.primary.19%%',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.3%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.5%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.4%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
						],
					],
					[
						'menu-location' => 'top-menu',
						'the_id'        => 'menus.primary.2',
						'menu-name'     => 'Top Navigation',
						'items'         => [
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.6%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'term',
								'term_id'   => '%%taxonomy.primary.2%%',
								'taxonomy'  => 'category',
							],
							[
								'item_type' => 'page',
								'title'     => 'About Us',
								'page_id'   => '%%posts.primary.131%%',
							],
						],
					],
				],
			],
	];
}
