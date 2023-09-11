<?php
/**
*	Functions and definitions
*/

/**
*	<head>セクションの最適化
*/
// タイトルタグの生成
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// 不要なタグの削除
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 10);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

function remove_editor_style() {
	wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_editor_style');

add_action( 'wp_enqueue_scripts', 'remove_my_global_styles' );
function remove_my_global_styles() {
	wp_dequeue_style( 'global-styles' );
}

add_action( 'wp_enqueue_scripts', 'remove_classic_theme_style' );
function remove_classic_theme_style() {
	wp_dequeue_style( 'classic-theme-styles' );
}

function custom_meta_tags() {
    if (is_single() || is_page()) {
        // ページのディスクリプションを取得
        $description = get_the_excerpt();
        if (empty($description)) {
            $description = get_bloginfo('description');
        }

        // ページのキーワードを取得
        $keywords = 'キーワード1, キーワード2, キーワード3'; // 適切なキーワードに置き換える

        // メタ情報の出力
        echo '<meta name="description" content="' . esc_attr($description) . '">';
        echo '<meta name="keywords" content="' . esc_attr($keywords) . '">';
    }
}
add_action('wp_head', 'custom_meta_tags');

function add_sitemap_to_robots_txt($output) {
    $sitemap_url = get_home_url() . '/sitemap.xml';
    $sitemap_line = "Sitemap: " . $sitemap_url;
    return $sitemap_line . "\n" . $output;
}
add_filter('robots_txt', 'add_sitemap_to_robots_txt');


/**
*	Add Custom Post Type
*/
add_action('init', 'create_post_type');
function create_post_type() {
	$work_labels = array(
		'name'               => '事例',
        'singular_name'      => '事例',
        'menu_name'          => '事例',
        'name_admin_bar'     => '事例',
        'add_new'            => '新規追加',
        'add_new_item'       => '事例を追加',
        'new_item'           => '新しい事例',
        'edit_item'          => '事例を編集',
        'view_item'          => '事例を表示',
        'all_items'          => 'すべての事例',
        'search_items'       => '事例を検索',
        'parent_item_colon'  => '親事例:',
        'not_found'          => '見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱にはありませんでした'
	);
	$work_args = array(
		'labels'             => $work_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'work' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
	);
	register_post_type( 'work', $work_args );

	$work_taxonomy_labels = array(
		'name'              => 'カテゴリー',
        'singular_name'     => 'カテゴリー',
        'search_items'      => 'カテゴリーを検索',
        'all_items'         => 'すべてのカテゴリー',
        'parent_item'       => '親カテゴリー',
        'parent_item_colon' => '親カテゴリー:',
        'edit_item'         => 'カテゴリーを編集',
        'update_item'       => 'カテゴリーを更新',
        'add_new_item'      => '新しいカテゴリーを追加',
        'new_item_name'     => '新しいカテゴリー名',
        'menu_name'         => 'カテゴリー'
	);
	$work_taxonomy_args = array(
		'labels'            => $work_taxonomy_labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'work/category' )
	);
	register_taxonomy( 'work_category', 'work', $work_taxonomy_args );
}

/**
*	Add Custom Post Type Search
*/
add_filter('template_include','custom_search_template');
function custom_search_template($template){
	if ( is_search() ){
		$post_types = get_query_var('post_type');
		foreach ( (array) $post_types as $post_type )
			$templates[] = "search-{$post_type}.php";
			$templates[] = 'search.php';
			$template = get_query_template('search',$templates);
	}
	return $template;
}

//カテゴリをデスクリプション順で並び替えるための関数
function taxonomy_orderby_description( $orderby, $args ) {

    if ( $args['orderby'] == 'description' ) {
        $orderby = 'tt.description';
    }
    return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );