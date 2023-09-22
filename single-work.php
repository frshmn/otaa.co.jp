<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package factory
 */

get_header();
$categories = get_the_terms( get_the_ID(), 'work_category');

?>

<main class="work">
	<div class="work__hero">
		<?php if( has_post_thumbnail() ) : ?>
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		<?php endif; ?>
	</div>
	<header class="work__header">
		<div class="work__header-inner">
			<h1>
				<?php the_title(); ?>
			</h1>
			<?php if( !empty($categories) ): ?>
			<ul>
				<?php foreach( $categories as $category ): ?>
				<li>
					<?php
					$parent = get_term($category->parent);
					echo $parent->slug;
					$cat_name = $category->name;
					if( !($cat_name == 'PR') ) {
						echo ' / ';
						echo esc_html( $category->slug );
					}
					?>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
	</header>
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content/content-work' );

	endwhile; // End of the loop.
	?>

	<footer class="work__footer">
		<?php get_template_part( 'template-parts/component/component', 'share' ); ?>
	</foot>
</main>
<?php
get_footer();
