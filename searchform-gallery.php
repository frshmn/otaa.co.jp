<?php
/**
 * The searchform-gallery.php template.
 *
 * Used any time that get_template_part('searchform-gallery') is called.
 */
$categories = get_terms(array(
	'taxonomy' => 'gallery_category',
	'parent' => 0,
	'hide_empty' => false
));
?>
<form class="searchform-gallery" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
	<h2>絞り込み検索</h2>
	<div class="searchform-gallery__freeword">
		<h3>フリーワード</h3>
		<input type="search" value="<?php echo get_search_query(); ?>" name="s" />
	</div>
	<div class="searchform-gallery__category">
	<?php 
	foreach( $categories as $category ) :
		$subcategories = get_terms(array(
			'taxonomy' => 'gallery_category',
			'parent' => $category->term_id,
			'hide_empty' => false
		));
	?>
		<div class="searchform-gallery__category-list">
			<h3><?php echo $category->name; ?></h3>
			<ul>
			<?php foreach($subcategories as $subcategory) : ?>
				<li>
				<input
					id="<?php echo $subcategory->term_id; ?>"
					type="checkbox"
					name="category_filter[]"
					value="<?php echo $subcategory->term_id; ?>" />
				<label class="checkbox" for="<?php echo $subcategory->term_id; ?>">
					<?php echo $subcategory->name; ?>
				</label>
				</li>
			<?php endforeach; //End $subcategories loop ?>
			</ul>
		</div><!-- .searchform-gallery__category-list -->
	<?php endforeach; //End $categories loop ?>
	</div><!-- .searchform-gallery__category -->
	<div class="searchform-gallery__submit">
		<input type="hidden" name="post_type" value="gallery">
		<input type="submit" value="検索する">
	</div>
</form>
