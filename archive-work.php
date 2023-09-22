<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */

get_header();
?>
<main class="project-list">
	<section class="project-list__header">
		<div class="l-inner">
			<?php if ( have_posts() ) : ?>
			<header class="projects__header-title">
				<h1>
					WORK
					<span>事例一覧</span>
				</h1>
			</header><!-- .page-header -->
		</div>
	</section>
	<section class="project-list__content">
		<div class="l-inner">
			<ul class="l-grid projects__content-list">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
			the_post();
			/*
			* Include the Post-Type-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Type name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content', 'project-card' );
			endwhile;
			the_posts_navigation();
			else :
			get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
			</ul>
		</div>
	</section>
</main>

<?php
get_footer();
