<?php /* Template Name: Hero */ ?>

<?php get_header(); ?>

<div class="page-content">

    <?php
    $image = get_field('header_image');

    ?>
    <div class="page-block">
        <div>
            <?php
            if ($image) {
                echo wp_get_attachment_image($image['id'], 'large');
            }
            ?>

            <h1 class="img-text"><?= get_field('image_title'); ?></h1>
        </div>
    </div>

    <div class="info-box">
        <h2 class="h2_style"><?= get_field('heading_text') ?></h2>

        <div class="p_position">
            <p class="p-style"><?= get_field('paragraph_text'); ?></p>
        </div>
    </div>
    <?= the_content(); ?>

    <div class="wrapper">
        <h2>Nyheter</h2>
        <div class="news-grid">
            <?= get_template_part('template-parts/post-latest-news'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>