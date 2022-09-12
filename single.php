<?php get_header(); ?>
<div class="page-content">

    <div class="single-page-content">
        <?php
        // Start the loop.
        while (have_posts()) : the_post(); ?>
            <div class="posts">
                <div class="post-block">
                    <div class="card">
                        <h2><?= the_title(); ?></h2>
                        <?= the_post_thumbnail('thumbnail'); ?>

                        <div class="container">
                            <b><?= get_the_date('F j, Y'); ?></b>
                            <div class="single-desc"> <?php the_excerpt(); ?></div>
                        </div>
                        <a href="http://localhost:8888/wordpress/nyheter/" class="push-page">
                            < Tillbaka till nyheter</a>
                    </div>

                </div>
            </div>

        <?php endwhile;
        ?>
        <div>


        </div>
        <?php get_footer();
