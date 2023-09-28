<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */

?>
<?php
$terms = get_the_terms($post->ID, 'projects-category');
if( $terms && ! is_wp_error($terms) ) {
	foreach($terms as $term) {
		$option = $term->name;
	}
}

?>
<li class="l-grid__child col-3 project-list__item">
	<a href="<?php the_permalink(); ?>">
		<div class="l-grid__content">
			<div class="l-grid__content-image">
				<?php if (get_the_post_thumbnail_url()): ?>
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
				<?php endif; ?>
			</div>
			<div class="l-grid__content-title">
				<h2><?php echo the_title(); ?></h2>
			</div>
		</div>
	</a>
</li>
