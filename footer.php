<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
</div><!-- #content -->

<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<div id="colophon" class="colophon">
	<div class="copyright">
	<small>2023 &copy; OTAA LLC All Right Reserved.</small>
	</div>
</div><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/03cb025dd4.js" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/index.js"></script>
</body>
</html>
