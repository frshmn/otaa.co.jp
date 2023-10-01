<?php
/**
 * Displays the headline
 */
$categories = get_the_terms( get_the_ID(), 'work_category');

?>
<?php if( !empty($categories) ): ?>
<ul>
    <?php foreach( $categories as $category ): 
    $parent = get_term($category->parent);
    $cat_name = $category->name;
    if( !($cat_name == 'PR') ) :?>
    <li>
        <?php
        echo $parent->slug;
            echo ' / ';
            echo esc_html( $category->slug );
        ?>
    </li>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>
<?php endif; ?>