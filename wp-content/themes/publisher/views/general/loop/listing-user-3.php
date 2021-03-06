<div class="listing listing-user type-1 style-3 <?php publisher_echo_prop( 'listing-class' ); ?> clearfix">

	<?php

	$columns        = publisher_get_prop( 'listing-columns', 1 );
	$start_from     = publisher_get_prop( 'user-query-loop-offset', 0 );
	$max_loop_count = publisher_get_prop( 'user-query-loop-count', - 1 );

	//
	// big item
	//

	$block_settings = false;
	if ( ! publisher_get_prop( 'block-customized', false ) ) {
		$block_settings = publisher_get_option( 'listing-user-3' );

		if ( $block_settings_override = publisher_get_prop( 'block-settings-override' ) ) {
			$block_settings = array_merge( $block_settings, $block_settings_override );
		}
		$block_settings_override = NULL;

		publisher_set_prop( 'block-customized', true );
	}

	if ( $block_settings ) {
		publisher_set_prop( 'title-limit', $block_settings['big-title-limit'] );
		publisher_set_prop( 'social-icons', $block_settings['big-social-icons'] );
		publisher_set_prop( 'show-ranking', $block_settings['big-show-ranking'] );
		publisher_set_prop( 'show-posts-url', $block_settings['big-show-posts-url'] );
		publisher_set_prop( 'show-biography', $block_settings['big-show-biography'] );
		publisher_set_prop( 'biography-limit', $block_settings['big-biography-limit'] );
		publisher_set_prop( 'social-icons-limit', $block_settings['big-social-icons-limit'] );
	}

	$rank_init_offset = intval( publisher_get_ajax_var( 'user-rank-offset' ) );

	/**
	 * @var WP_User_Query $query
	 */
	$query        = publisher_get_prop( 'user-query' );
	$show_ranking = publisher_get_prop( 'show-ranking' );

	$index   = 0;
	$printed = 0;

	foreach ( $query->get_results() as $user ) {

		if ( $index < $start_from ) {
			continue;
		}

		if ( $printed >= $columns ) {
			break;
		}

		if ( $max_loop_count > 0 && $printed >= $max_loop_count ) {
			break;
		}

		if ( $show_ranking ) {
			publisher_set_prop( 'user-rank', $rank_init_offset + $index + 1 );
		}

		publisher_set_prop( 'user-object', $user );

		publisher_get_view( 'loop', 'listing-user-2-item' );
		$printed ++;
		$index ++;
	}


	// change start from to add printed posts count
	$start_from += $printed;

	//
	// Small items
	//

	if ( $block_settings ) {
		publisher_clear_props();

		publisher_set_prop( 'title-limit', $block_settings['small-title-limit'] );
		publisher_set_prop( 'social-icons', $block_settings['small-social-icons'] );
		publisher_set_prop( 'show-ranking', $block_settings['small-show-ranking'] );
		publisher_set_prop( 'show-posts-url', $block_settings['small-show-posts-url'] );
		publisher_set_prop( 'social-icons-limit', $block_settings['small-social-icons-limit'] );
	}

	$show_ranking = publisher_get_prop( 'show-ranking' );

	$index = - 1;

	foreach ( $query->get_results() as $user ) {

		$index ++;

		if ( $index < $start_from ) {
			continue;
		}

		if ( $max_loop_count > 0 && $printed >= $max_loop_count ) {
			break;
		}

		if ( $show_ranking ) {
			publisher_set_prop( 'user-rank', $rank_init_offset + $index + 1 );
		}

		publisher_set_prop( 'user-object', $user );

		publisher_get_view( 'loop', 'listing-user-1-item' );
		$printed ++;
	}

	if ( $show_ranking ) {
		Publisher_Theme_Listing_Pagin_Managepublisher_r::set_ajax_var( 'user-rank-offset', $rank_init_offset + $index + 1 );
	}

	?>
</div>

