<?php
/**
 * Displays the headline
 */
$categories = get_terms(array(
	'taxonomy' => 'store_category',
	'parent' => 0,
	'hide_empty' => false
));
?>
<div class="c-listCat">
<?php foreach( $categories as $category ) : 
    $subcategories = get_terms( array(
        'taxonomy' => 'store_category',
        'parent' => $category->term_id,
        'hide_empty' => false,
        'orderby' => 'slug',
    ));
?>
    <h3>
        <?php echo $category->name; ?>
        <span></span>
    </h3>
    <ul>
    <?php foreach( $subcategories as $subcategory ) : ?>
        <li>
            <a href="<?php echo get_term_link($subcategory); ?>">
                <?php echo $subcategory->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
</div>
<?php
