<?php
/**
 * Template part for displaying gallery posts
 *
 */
$categories = get_the_terms( get_the_ID(), 'work_category');
?>

<article id="work-<?php the_ID(); ?>" class="work-full horizontal__block">
	<div class="work-full__image">
		<p>
			<span>
			<?php echo '0' . $args['number']; ?>
			</span>
			/ 04
		</p>
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
		<div class="link">
			<a href="<?php the_permalink(); ?>">view detail</a>
		</div>
		<?php endif; ?>
	</div><!-- .work-full__content -->

</article><!-- #work-<?php the_ID(); ?> -->
