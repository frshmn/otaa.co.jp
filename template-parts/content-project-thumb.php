<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */

?>
<article id="post-<?php the_ID(); ?>" class="thumb-box u-grid__primary-list u-grid__secondary-list">
  <div class="panel thumb-box__inner">
    <div class="thumb-box__photo">
    <?php if (get_the_post_thumbnail_url()): ?>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
    <?php endif; ?>
    <?php
    //任意の画像を指定
    //$target = SenseOfColorFactory::create(get_the_post_thumbnail_url(get_the_ID(), 'full'));
    //平均色のカラーコードを返せる
    //print($target->getAverageColor());
    ?>
    </div>
    <div class="thumb-box__text">
      <h3><?php echo the_title(); ?></h3>
      <p>View Project</p>
    </div>
    <a href="<?php //echo get_permalink(); ?>"></a>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
