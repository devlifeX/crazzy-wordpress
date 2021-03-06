<?php
/**
 * Template of each item in modern listing 5
 *
 * @author     BetterStudio
 * @package    Publisher
 * @version    1.9.0
 */

// Creates main term ID that used for custom category color style
$main_term = publisher_get_post_primary_cat();
if ( ! is_wp_error( $main_term ) && is_object( $main_term ) ) {
	$main_term_class = 'main-term-' . $main_term->term_id;
} else {
	$main_term_class = 'main-term-none';
}

$section_tag     = publisher_get_prop( 'item-tag', 'article' ) . ' ';
$heading_tag     = publisher_get_prop( 'item-heading-tag', 'h2' );
$sub_heading_tag = publisher_get_prop( 'item-sub-heading-tag', 'h3' );

?>
	<<?php echo $section_tag; ?><?php publisher_attr( 'post', publisher_get_prop_class() . ' listing-item listing-mg-item listing-mg-5-item listing-mg-5-item-small ' . $main_term_class ) ?>>

	<div class="item-content">
		<a <?php publisher_the_thumbnail_attr( publisher_get_prop_thumbnail_size( 'publisher-sm' ) ) ?>
				class="img-cont" href="<?php publisher_the_permalink(); ?>"></a>
		<?php

		if ( publisher_get_prop( 'show-format-icon', true ) ) {
			publisher_format_icon();
		}

		if ( publisher_get_prop( 'show-term-badge', true ) ) {
			publisher_cats_badge_code( publisher_get_prop( 'term-badge-count', 1 ), '', false, true, 'floated' );
		}

		?>
	</div>

	<div class="content-container">
		<?php echo '<', $heading_tag, ' class="title">'; ?>
		<a href="<?php publisher_the_permalink(); ?>" class="post-url post-title">
			<?php publisher_echo_html_limit_words( publisher_get_the_title(), publisher_get_prop( 'title-limit', - 1 ) ); ?>
		</a>
		<?php echo '</', $heading_tag, '>'; ?>
	</div>
	</<?php echo $section_tag; ?>>
<?php

$main_term       = NULL;
$main_term_class = NULL;
