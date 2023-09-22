<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */
get_header();
?>
<main id="frontpage" class="frontpage home">
	<div class="horizontal works">
		<?php
		$args = array(
			'post_type' => 'work',
			'posts_per_page' => 4,
			// 'tax_query' => array(
			// 	array(
			// 		'taxonomy' => 'work_category',
			// 		'field' => 'slug',
			// 		'terms' => 'pr',
			// 	)
			// )
		);
		$work_query = new WP_Query($args);

		if($work_query->have_posts()) {
			$current_post = array(
				'number' => 0,
			);

			while($work_query->have_posts()) {
				$work_query->the_post();
				$current_post['number']++;
				get_template_part('template-parts/content/content', 'workFull', $current_post);
			}
		}
		?>
		<div class="horizontal__block">
			<div class="end">
				<a href="<?php echo home_url('works'); ?>">
					View All works
				</a>
			</div>
		</div>
	</div><!-- .horizontal .works -->

</main>

<?php
get_footer();
