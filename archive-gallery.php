<?php
/**
 * The template for displaying Gallery archive pages
 */

get_header();

?>
<?php if ( have_posts() ) : ?>
<main class="archive-gallery gallery">

	<div class="gallery__list">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'template-parts/content/content', 'galleryCard' ); ?>
	<?php endwhile; ?>
	</div><!-- .gallery__list -->

</main>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php
get_footer();
