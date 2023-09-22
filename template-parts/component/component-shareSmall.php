<?php
/**
 * Display SNS share button
 */

?>
<div class="c-shareSmall">
    <a 
        href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>"
        class="c-shareSmall__button facebook"
        target="_blank"
        rel="nofollow noopener"
    >
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a 
        href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>"
        class="c-shareSmall__button twitter"
        target="_blank"
        rel="nofollow noopener"
    >
        <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a
        href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>"
        class="c-shareSmall__button line"
        target="_blank"
        rel="nofollow noopener"
    >
        <i class="fa-brands fa-line"></i>
    </a>
    <a
        href="http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink(); ?>"
        class="c-shareSmall__button pinterest"
        target="_blank"
        rel="nofollow noopener"
    >
        <i class="fa-brands fa-pinterest"></i>
    </a>
</div>
<?php
