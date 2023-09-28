<?php
/**
 * Displays the headline
 */
?>
<header class="c-headline">
    <?php if($args['title']) { ?>
	<h2><?php echo $args['title']; ?></h2>
    <?php } ?>
    <?php if($args['sub_title']) { ?>
    <p><?php echo $args['sub_title']; ?></p>
    <?php } ?>
</header>