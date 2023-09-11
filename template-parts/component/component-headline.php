<?php
/**
 * Displays the headline
 */
if(!$args['title']):

else :
?>
<header class="c-headline">
	<h2><?php echo $args['title']; ?></h2>
    <p><?php echo $args['excerpt']; ?></p>
</header>
<?php
endif;