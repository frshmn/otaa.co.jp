<?php
/**
 * Template Name: page-contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */
get_header();
?>
<main class="contact">

<div class="contact__container">
  <?php echo do_shortcode('[contact-form-7 id="fc1a387" title="コンタクトフォーム 1"]') ?>
</div>

</main>


<?php
get_footer();
?>
