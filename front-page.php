<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */
get_header();
?>
<main id="frontpage" class="frontpage">
	<div class="horizontal projects">
		<section id="project-1" class="horizontal__block project project_1">
			<div class="project__images">
				<div class="project__images-grid">
					<div class="project__images-col">
						<div class="project__images-wrapper">
							<figure class="project__images-image"></figure>
						</div>
					</div>
					<div class="project__images-col move">
						<div class="project__images-wrapper">
							<figure class="project__images-image"></figure>
						</div>
					</div>
				</div>
				<figure class="project__title">
					<h2>
						氷帽
					</h2>
				</figure>
			</div>
			<div class="project__content">
				<div class="project__content-inner">
					<p>
						Locations: <span>Tokyo</span>
					</p>
					<p>
						高円寺や京都で斬新なアートホテルをプロデュースしているBNAの日本橋にできた新たなホテルの内装計画。<br>
						ビデオディレクターの上山悠二さんとコラボレーショし、氷の世界をコンセプトに内装デザインを行った。<br>
						OTATAの役割はアクリルパイプで出来たイグルーのデザインと施工方法の検討であった。<br>
						多面体のイグルーを実現するため、Grasshopperで検討用のツールを作成し寸法管理を行い,ジョイントのデザインを行った。
					</p>
					<a href="<?php echo home_url('work/bna/'); ?>">View Project</a>
				</div>
			</div>
			<p class="project__content-label">01</p>
		</section><!-- end project 1 -->
		<section id="project-2" class="horizontal__block project project_2">
			<div class="project__images">
				<div class="project__images-grid">
					<div class="project__images-col">
						<div class="project__images-wrapper">
							<figure class="project__images-image"></figure>
						</div>
					</div>
					<div class="project__images-col move">
						<div class="project__images-wrapper">
							<figure class="project__images-image"></figure>
						</div>
					</div>
				</div>
				<figure class="project__title">
					<h2>
						901/鋼板
					</h2>
				</figure>
			</div>
			<div class="project__content">
				<div class="project__content-inner">
					<p>
						Locations: <span>Tokyo</span>
					</p>
					<p>
						高円寺や京都で斬新なアートホテルをプロデュースしているBNAの日本橋にできた新たなホテルの内装計画。<br>
						ビデオディレクターの上山悠二さんとコラボレーショし、氷の世界をコンセプトに内装デザインを行った。<br>
						OTATAの役割はアクリルパイプで出来たイグルーのデザインと施工方法の検討であった。<br>
						多面体のイグルーを実現するため、Grasshopperで検討用のツールを作成し寸法管理を行い,ジョイントのデザインを行った。
					</p>
					<a href="<?php echo home_url('work/901-鋼板/'); ?>">View Project</a>
				</div>
			</div>
			<p class="project__content-label">02</p>
		</section><!-- end project 2 -->
		<section id="project-3" class="horizontal__block project project_3">
			<div class="project__images">
				<div class="project__images-grid">
					<div class="project__images-col">
						<div class="project__images-wrapper">
							<figure class="project__images-image"></figure>
						</div>
					</div>
					<div class="project__images-col move">
						<div class="project__images-wrapper">
							<figure class="project__images-image"></figure>
						</div>
					</div>
				</div>
				<figure class="project__title">
					<h2>
						Project 3
					</h2>
				</figure>
			</div>
			<div class="project__content">
				<div class="project__content-inner">
					<p>
						Locations: <span>Tokyo</span>
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<a href="<?php echo home_url('projects/bna/'); ?>">View Project</a>
				</div>
			</div>
			<p class="project__content-label">03</p>
		</section><!-- end project 3 -->

		<section class="horizontal__block">
			<div class="end">
				<a href="<?php echo home_url('projects'); ?>">View All Projects</a>
			</div>
		</section>
	</div>

</main>

<?php
get_footer();
