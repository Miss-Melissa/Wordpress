<?php /* Template Name: Smallhero */ ?>

<?php get_header(); ?>

<div class="page-content">

    <h2 class="h2_style"><?= the_title(); ?></h2>


    <div class="page-block-smallhero">

        <?= the_post_thumbnail('large'); ?>


        <h2 class="h2_style"><?= get_field('heading_text') ?></h2>

        <div class="info-box">
            <div class="p_position">
                <p class="p-style"><?= get_field('paragraph_text'); ?></p>
            </div>
            <?= the_content(); ?>
        </div>
    </div>




</div>

<?php get_footer(); ?>