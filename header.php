<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */
global $site;
$site = array(
	'tel' => '080-3657-5345',
	'mail' => 'info@otaa.co.jp',
	'name' => '太田 雄太郎',
	'slug' => 'OTAA',
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" integrity="sha512-dLxUelApnYxpLt6K2iomGngnHO83iUvZytA3YjDUCjT0HDOHKXnVYdf3hU4JjM8uEhxf9nD1/ey98U3t2vZ0qQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/luxy.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/script/index.css" >
</head>

<body <?php body_class(); ?>>
<div class="cursor"></div>
<?php wp_body_open(); ?>
<div id="page" class="<?php echo $site['slug']; ?>">
	<div id="masthead" class="masthead">
		<div class="masthead__wrapper">
			<div class="masthead__logo">
				<a href="<?php echo home_url(); ?>">
				<?php if( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<h2>太　太 建築設計事務所</h2>
				<?php endif; ?>
				</a>
			</div><!-- .masthead__logo -->
			<div class="masthead__work">
				<a href="<?php echo home_url('/work'); ?>">
          <h3 class="masthead__work-title">View All Works</h3>
				</a>
				<a href="<?php echo home_url('/work'); ?>">
          <div class="masthead__work-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 16 16" class="">
            <rect width="2" height="2"></rect>
            <rect x="5" width="2" height="2"></rect>
            <rect x="10" width="2" height="2"></rect>
            <rect y="5" width="2" height="2"></rect>
            <rect x="5" y="5" width="2" height="2"></rect>
            <rect x="10" y="5" width="2" height="2"></rect>
            <rect y="10" width="2" height="2"></rect>
            <rect x="5" y="10" width="2" height="2"></rect>
            <rect x="10" y="10" width="2" height="2"></rect>
            </svg>
          </div>
					
				</a>
			</div><!-- .masthead__work -->
			<div class="masthead__navigation">
        <ul>
          <li>
            <a href="<?php echo home_url('/about'); ?>">About</a>
          </li>
          <li>
            <a href="<?php echo home_url('/contact'); ?>">Contact</a>
          </li>
        </ul>
      </div><!-- .masthead__navigation -->
		</div>
	</div><!-- #masthead -->
	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
