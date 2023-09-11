<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 */
?>
<form role="search" method="get" class="searchform-word" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field" placeholder="フリーワード検索" value="<?php echo get_search_query(); ?>" name="s" />
		<input type="hidden" name="post_type" value="store">
    </label>
    <button type="submit" class="search-submit">
	<i class="fa-regular fa-magnifying-glass"></i>
	</button>
</form>