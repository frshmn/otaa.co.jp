<?php
/**
 * Template Name: page-about
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */
get_header();
?>

<main class="about">

<div class="about__inner">
	<div class="about__hero">
		<div class="about__hero-image">
			<?php if( has_post_thumbnail() ) : ?>
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			<?php endif; ?>
		</div>
		<div class="about__hero-title">
			<h2>太田 雄太郎</h2>
		</div>
	</div>
	<div class="about__content">
		<?php the_content(); ?>
	</div>
</div>

</main>

<?php
get_footer();
?>
