<?php
/**
 * Displays the headline
 */
$args = array(
    'category_name' => 'banner',
    'post_per_page' => 8,
);

$banner_posts = new WP_Query( $args );
if( $banner_posts->have_posts() ) :
    while( $banner_posts->have_posts()):
        $banner_posts->the_post();
?>
<div class="c-banner">
    <a href="<?php echo post_custom('URL'); ?>">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </a>
</div>
<?php 
    endwhile;
    wp_reset_postdata();
    else: 
?>
    <p>
        バナーがありません。
    </p>
<?php
endif;