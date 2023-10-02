<?php
/**
 * Displays the custom field
 */
?>
<div class="data">
    <h2>data</h2>
    <ul>
        <?php if(post_custom('data_completed')) : ?>
        <li>
            <span>竣工／</span>
            <?php echo post_custom('data_completed'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('data_location')) : ?>
        <li>
            <span>所在地／</span>
            <?php echo post_custom('data_location'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('data_use')) : ?>
        <li>
            <span>用途／</span>
            <?php echo post_custom('data_use'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('data_design_period')) : ?>
        <li>
            <span>設計期間／</span>
            <?php echo post_custom('data_design_period'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('data_construction_period')) : ?>
        <li>
            <span>工事期間／</span>
            <?php echo post_custom('data_construction_period'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('data_area_land')) : ?>
        <li>
            <span>敷地面積／</span>
            <?php echo post_custom('data_area_land'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('data_area_building')) : ?>
        <li>
            <span>建築面積／</span>
            <?php echo post_custom('data_area_building'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('data_area_floor')) : ?>
        <li>
            <span>延床面積／</span>
            <?php echo post_custom('data_area_floor'); ?>
        </li>
        <?php endif; ?>
    </ul>
</div>

<div class="credit">
    <h2>credit</h2>
    <ul>
        <?php if(post_custom('credit_builder')) : ?>
        <li>
            <span>施工／</span>
            <?php echo post_custom('credit_builder'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('credit_structural')) : ?>
        <li>
            <span>構造・設備設計／</span>
            <?php echo post_custom('credit_structural'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('credit_lighting')) : ?>
        <li>
            <span>照明計画</span>
            <?php echo post_custom('credit_lighting'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('credit_landscape')) : ?>
        <li>
            <span>ランドスケープ／</span>
            <?php echo post_custom('credit_landscape'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('credit_estate')) : ?>
        <li>
            <span>不動産／</span>
            <?php echo post_custom('credit_estate'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('credit_photo')) : ?>
        <li>
            <span>写真／</span>
            <?php echo post_custom('credit_photo'); ?>
        </li>
        <?php endif; ?>

        <?php if(post_custom('credit_manager')) : ?>
        <li>
            <span>担当／</span>
            <?php echo post_custom('credit_manager'); ?>
        </li>
        <?php endif; ?>
    </ul>
</div>
