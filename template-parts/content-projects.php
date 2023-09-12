<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */

?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/project.min.css">

<article class="project" id="luxy">
	<?php the_content(); ?>
</article>

<script type="text/javascript">
	luxy.init();
</script>
