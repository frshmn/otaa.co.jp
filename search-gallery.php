<?php
/**
 * The template for displaying search results of the "gallery" custom post type.
 */

get_header();

// カスタム投稿タイプ "gallery" のクエリを作成
$args = array(
	'post_type'      => 'gallery',
	'posts_per_page' => 10,
	'tax_query'      => array(), // カテゴリ絞り込みのためのタクソノミークエリを格納する配列
);

// 検索クエリのチェック
if (isset($_GET['s'])) {
	$search_query = sanitize_text_field($_GET['s']);
	$args['s'] = $search_query; // 検索クエリを適用
}

// カテゴリ絞り込みのチェック
if (isset($_GET['category_filter']) && is_array($_GET['category_filter'])) {
	$categories = array_map('intval', $_GET['category_filter']);
	$args['tax_query'][] = array(
		'taxonomy' => 'gallery_category',
		'field'    => 'term_id',
		'terms'    => $categories,
	);
}

// カスタム投稿タイプのクエリを実行
$custom_query = new WP_Query($args);
?>
<main class="archive-gallery gallery">
	<p>
		<?php //echo $search_query; ?>
	</p>
<div class="gallery__search">
		<?php get_template_part('searchform-gallery'); ?>
	</div><!-- .gallery__search -->
<div class="gallery__list">
<?php 
// 投稿がある場合の処理
if ($custom_query->have_posts()) :
	while ($custom_query->have_posts()) : $custom_query->the_post();
		// 投稿の表示処理をここに記述

		get_template_part('template-parts/content/content', 'galleryCard' );

	endwhile;

	// ページネーションを表示
	echo paginate_links(array(
		'total' => $custom_query->max_num_pages
	));

else :
	// 投稿がない場合の処理
	echo '投稿がありません。';

endif;
?>
</div>
</main>
<?php
get_footer();
?>
