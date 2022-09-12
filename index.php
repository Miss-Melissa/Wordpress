<?php
get_header();
?>

<?php
$page_for_posts = get_option('page_for_posts');
?>


<h2 class="news-title"><?= get_field('heading_text', $page_for_posts) ?></h2>


<div class="posts">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <?= get_template_part('template-parts/post-template'); ?>
    <?php
        endwhile;
    endif;
    ?>
</div>

<?php
get_footer();
