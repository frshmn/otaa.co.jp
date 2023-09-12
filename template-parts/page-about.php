<?php
/**
 * Template Name: page-about
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.min.css">

<main class="about">

<div class="about__inner">
	<div class="about__hero">
		<div class="about__hero-image">
			<img src="http://folivora.design/factory/wp/otata/wp-content/uploads/2021/10/yutaro_ohta-scaled.jpg" alt="">
		</div>
		<div class="about__hero-title">
			<h2>YUTARO OHTA</h2>
		</div>
	</div>
	<div class="about__content">
		<div class="about__content-introduce">
			<h1>ABOUT OTATA</h1>
			<p>
				O T A T A は建築設計とデジタルアートの製作を行うデザインチームです。</br>
				建築の設計の他、w e bディレクションやV R 空間の製作を行っています。</br>
				プロジェクト事に様々なコラボレーターとチームを組んで活動しています。</br>
				未来をつくるテクノロジーと共存しながら楽しい生活をつくる事をモットーに活動しています。
			</p>
			<h2>代表：太田雄太郎</h2>
		</div>
		<div class="about__content-history">
			<ul>
				<li>１９９０年　愛知県名古屋市生まれ</li>
				<li>２０１５年　大学院修了後 隈研吾建築都市設計事務所</li>
				<li>２０２０年　OTATA設立</li>
			</ul>
		</div>
	</div>
</div>

</main>

<?php
get_footer();
?>
