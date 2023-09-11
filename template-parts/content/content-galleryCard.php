<?php
/**
 * Template part for displaying post archives and search results
 */

$categories = get_the_terms( get_the_ID(), 'gallery_category');
?>

<article id="post-<?php the_ID(); ?>" class="gallery-card">
	<div class="gallery-card__image">
		<?php if( has_post_thumbnail() ) : ?>
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		<?php endif; ?>
	</div><!-- .gallery-card__image -->
	<div class="gallery-card__content">
		<a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php if( !empty($categories) ) : ?>
			<ul>
				<?php foreach( $categories as $category ) : ?>
					
				<li><?php echo esc_html( $category->name ); ?></li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</a>
	</div><!-- gallery-card__content -->
</article><!-- #post-${ID} -->
