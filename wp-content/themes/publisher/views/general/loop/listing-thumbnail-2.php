<?php
/**
 * Thumbnail listing template
 *
 * @author     BetterStudio
 * @package    Publisher
 * @version    5.0.0
 */

if ( publisher_get_prop( 'show-listing-wrapper', true ) ) {
	?>
	<div class="listing listing-thumbnail listing-tb-2 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
	<?php
}

// larger thumbnail size on 1 column and primary sidebar
if ( publisher_get_prop( 'listing-columns' ) == 1 && bf_get_current_sidebar() === 'primary-sidebar' ) {
	publisher_set_prop_thumbnail_size( 'publisher-md' );
}

$initial_ranking_offset = intval( publisher_get_ajax_var( 'post-ranking-offset' ) );
$block_settings         = false;

if ( ! publisher_get_prop( 'block-customized', false ) && publisher_have_posts() ) {

	$block_settings = publisher_get_option( 'listing-thumbnail-2' );

	if ( $block_settings_override = publisher_get_prop( 'block-settings-override' ) ) {
		$block_settings = array_merge( $block_settings, $block_settings_override );
	}
	$block_settings_override = NULL;

	publisher_set_prop( 'thumbnail-type', $block_settings['thumbnail-type'] );
	publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
	publisher_set_prop( 'show-excerpt', $block_settings['excerpt'] );
	publisher_set_prop( 'excerpt-limit', $block_settings['excerpt-limit'] );
	publisher_set_prop( 'show-subtitle', $block_settings['subtitle'] );

	if ( $block_settings['subtitle'] ) {
		publisher_set_prop( 'subtitle-limit', $block_settings['subtitle-limit'] );
		publisher_set_prop( 'subtitle-location', $block_settings['subtitle-location'] );
	}

	publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
	publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
	publisher_set_prop( 'term-badge-tax', $block_settings['term-badge-tax'] );
	publisher_set_prop( 'show-format-icon', $block_settings['format-icon'] );

	if ( publisher_get_prop( 'block-ad', false ) ) {
		publisher_set_prop( 'block-ad-class', 'listing-item-thumbnail listing-item-tb-2' );
	}

	publisher_set_prop( 'post-counter-number', ! empty( $block_settings['show-ranking'] ) ? $initial_ranking_offset + 1 : 0 );

	publisher_set_prop( 'show-meta', $block_settings['meta']['show'] );

	if ( $block_settings['meta']['show'] ) {
		publisher_set_prop( 'hide-meta-author', empty( $block_settings['meta']['author'] ) );
		publisher_set_prop( 'hide-meta-date', empty( $block_settings['meta']['date'] ) );
		publisher_set_prop( 'meta-date-format', $block_settings['meta']['date-format'] );
		publisher_set_prop( 'hide-meta-view', empty( $block_settings['meta']['view'] ) );
		publisher_set_prop( 'hide-meta-share', empty( $block_settings['meta']['share'] ) );
		publisher_set_prop( 'hide-meta-comment', empty( $block_settings['meta']['comment'] ) );
		publisher_set_prop( 'hide-meta-review', empty( $block_settings['meta']['review'] ) );
	}
}

$initial_post_ranking = publisher_get_prop( 'post-counter-number' );
$i                    = 0;

while( publisher_have_posts() ) {

	if ( $initial_post_ranking ) {
		publisher_set_prop( 'post-counter-number', $initial_post_ranking + $i );
	}

	publisher_the_post();
	publisher_get_view( 'loop', 'listing-thumbnail-2-item' );

	$i ++;
}

if ( $block_settings ) {

	publisher_set_ajax_var( 'post-ranking-offset', publisher_get_query_posts_count() + $initial_ranking_offset );
}


if ( publisher_get_prop( 'show-listing-wrapper', true ) ) {
	?>
	</div>
	<?php
}
