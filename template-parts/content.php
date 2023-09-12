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

<div class="sub-navigation">
	<h1>Project Title</h1>
	<a id="one" href="#test1">test</a>
	<a id="two" href="#test2">test</a>
	<a id="three" href="#test3">test</a>
	<a id="four" href="#test4">test</a>
	<a id="five" href="#test5">test</a>
</div>

<main>

</main>
<article class="" id="luxy">
	<section id="hero" class="hero">
		<div class="hero__inner luxy-el" data-offset="0" data-speed-y="40">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-sample/hero.jpg" alt="">
		</div>
	</section>
	<section id="test1" class="contents">
		<div class="contents__inner-full ">
			<div class="col__1 contents__text luxy-el">
				<h2>アートホテルに生まれた氷の世界</h2>
				<p>
					高円寺や京都で斬新なアートホテルをプロデュースしているBNAの日本橋にできた新たなホテルの内装計画。<br>
					ビデオディレクターの上山悠二さんとコラボレーショし、氷の世界をコンセプトに内装デザインを行った。<br>
					OTATAの役割はアクリルパイプで出来たイグルーのデザインと施工方法の検討であった。<br>
					多面体のイグルーを実現するため、Grasshopperで検討用のツールを作成し寸法管理を行い,ジョイントのデザインを行った。
				</p>
			</div>
			<div class="col__2 contents__image luxy-el" data-offset="250" data-speed-y="-10">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-sample/sections1.jpg" alt="">
			</div>
		</div>

	</section>

	<section id="test2" class="contents">
		<div class="contents__inner-full">
			<div class="col__2 contents__text luxy-el">
				<h2>アートホテルに生まれた氷の世界</h2>
				<p>
					高円寺や京都で斬新なアートホテルをプロデュースしているBNAの日本橋にできた新たなホテルの内装計画。<br>
					ビデオディレクターの上山悠二さんとコラボレーショし、氷の世界をコンセプトに内装デザインを行った。<br>
					OTATAの役割はアクリルパイプで出来たイグルーのデザインと施工方法の検討であった。<br>
					多面体のイグルーを実現するため、Grasshopperで検討用のツールを作成し寸法管理を行い,ジョイントのデザインを行った。
				</p>
			</div>
			<div class="col__1 contents__image luxy-el" data-offset="400" data-speed-y="-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-sample/hotel3.jpg" alt="">
			</div>
		</div>
	</section>

	<section id="test3" class="contents">
		<div class="contents__inner-full">
			<div class="col__1 contents__text luxy-el">
				<h2>アートホテルに生まれた氷の世界</h2>
				<p>
					高円寺や京都で斬新なアートホテルをプロデュースしているBNAの日本橋にできた新たなホテルの内装計画。<br>
					ビデオディレクターの上山悠二さんとコラボレーショし、氷の世界をコンセプトに内装デザインを行った。<br>
					OTATAの役割はアクリルパイプで出来たイグルーのデザインと施工方法の検討であった。<br>
					多面体のイグルーを実現するため、Grasshopperで検討用のツールを作成し寸法管理を行い,ジョイントのデザインを行った。
				</p>
			</div>
			<div class="col__2 contents__image luxy-el" data-offset="200" data-speed-y="-5">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-sample/IMG_3012.jpg" alt="">
			</div>
		</div>
	</section>

	<section id="test4" class="contents">

	</section>

	<section id="test5" class="contents">

	</section>

</article>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js" integrity="sha512-1OG9UO4krPizjtz/c9iDbjCqtXznBYdJeD4ccPaYfJHzC6F1qoQ3P1bgQ3J8lgCoK5qGVCqsY4+/RKjLDzITVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/project.js"></script>

<script src="../../../../library/luxy/dist/js/luxy.js" charset="utf-8"></script>

<script type="text/javascript">
	luxy.init();
</script>
