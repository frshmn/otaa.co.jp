<?php
/**
 * Template part for displaying gallery posts
 *
 */

$categories = get_the_terms( get_the_ID(), 'gallery_category');
?>

<article id="post-<?php the_ID(); ?>" class="gallery-item">

	<header class="gallery-item__header">
		<h1>
			<?php the_title(); ?>
		</h1>
	</header><!-- .gallery-item__header -->

	<div class="gallery-item__content">
		<div class="gallery-item__content-hero">
			<?php if( has_post_thumbnail() ) : ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			<?php endif; ?>
		</div>
		<div class="gallery-item__content-information">
			<dl>
				<dt>品種名・通称</dt>
				<dd><?php the_title(); ?></dd>
				<dt>作出者情報</dt>
				<dd>
					<?php echo post_custom('creator'); ?>
				</dd>
				<dt>形状</dt>
				<dd>
				<?php if( !empty($categories) ) : ?>
					<?php foreach( $categories as $category ) : ?>
					<span><?php echo esc_html( $category->name ); ?></span>
					<?php endforeach; ?>
				<?php endif; ?>
				</dd>
				<dt>
					管理番号
				</dt>
				<dd>
					<?php echo post_custom('security_number'); ?>
				</dd>
			</dl>
			<?php get_template_part( 'template-parts/component/component', 'share' ); ?>
		</div><!-- end information -->

		<section class="gallery-item__content-slideshow slider-infinite">
			<div class="slider__container swiper">
				<div class="slider swiper-wrapper">
			<?php 
			for($count = 0; $count < 10; $count++) :
				$gallery_image = post_custom('gallery')[$count];
				if( !$gallery_image == '' ) :
					$gallery_image_path = wp_get_attachment_image_src($gallery_image, 'full');?>
					<a class="swiper-slide slider__item lightbox-link" href="<?php echo $gallery_image_path[0]; ?>">
					<div class="slide">
						<div class="slide__media">
							<img src="<?php echo $gallery_image_path[0]; ?>" alt="">
						</div>
					</div>
						
					</a>
			<?php 
				endif;
			endfor;
			?>
				</div>
				<div class="gallery-button-next"></div>
				<div class="gallery-button-prev"></div>
				<div class="gallery-pagination"></div>
			</div>
		</section><!-- end slideshow -->

		<section class="gallery-item__content-explain">
			<?php if(post_custom('explain')): ?>
				<p>
				<?php echo post_custom('explain') ?>
				</p>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
			
		</section><!-- end explain -->
	</div><!-- .gallery-item__content -->

	<footer class="gallery-item__footer">
		<?php get_template_part( 'template-parts/component/component', 'share' ); ?>
	</footer><!-- .gallery-item__footer -->

</article><!-- #post-<?php the_ID(); ?> -->
