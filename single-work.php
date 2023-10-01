<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package factory
 */

get_header();

?>

<main class="work">
	<div class="work__hero">
		<?php if( has_post_thumbnail() ) : ?>
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		<?php endif; ?>
	</div>
	<div class="work__wrapper">
		<header class="work__header">
			<h1>
				<?php the_title(); ?>
			</h1>
			<div class="work__header-content">
			<?php get_template_part( 'template-parts/component/component', 'shareSmall' ); ?>
			</div>
		</header><!-- .work__header -->
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content-work' );
		endwhile; // End of the loop.
		//.work__content?>
	</div><!-- .work__wrapper -->
	<footer class="work__footer">
	<?php get_template_part( 'template-parts/component/component', 'shareSmall' ); ?>
	</footer>
</main>
<?php
get_footer();
