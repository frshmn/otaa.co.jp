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
<script src="<?php echo get_template_directory_uri(); ?>/script/index.js"></script>

<?php include_once 'assets/img/otata.svg'; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js" integrity="sha512-1OG9UO4krPizjtz/c9iDbjCqtXznBYdJeD4ccPaYfJHzC6F1qoQ3P1bgQ3J8lgCoK5qGVCqsY4+/RKjLDzITVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/global.js"></script>

</body>
</html>
