<?php
/**
 * Template part for displaying gallery posts
 *
 */
$categories = get_the_terms( get_the_ID(), 'work_category');
?>

<article id="work-<?php the_ID(); ?>" class="work-full horizontal__block">
	<div class="work-full__image">
		<?php if( has_post_thumbnail() ) : ?>
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		<?php endif; ?>
		<!-- slideshow -->
	</div><!-- .work-full__image -->

	<div class="work-full__content">
		<h2>
		<?php the_title(); ?>
		</h2>
		<?php if( !empty($categories) ): ?>
		<ul>
			<?php foreach( $categories as $category ): ?>
			<li>
				<?php
				$parent = get_term($category->parent);
				echo $parent->slug;

				$cat_name = $category->name;
				if( $cat_name == 'PR' ) {
					// PR post
				} else {
					echo ':';
					echo esc_html( $category->slug );
				}
				?>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div><!-- .work-full__content -->

	<div class="work-full__label">
		<div class="number">
			<p>01</p>
		</div>
	</div><!-- .work-full__label -->
</article><!-- #work-<?php the_ID(); ?> -->
