<?php $the_query = new WP_Query(array(
    'posts_per_page' => 4,
));
?>

<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="http://localhost:8888/wordpress?p=<?= get_the_id(); ?>">
            <div class="card">
                <?= the_post_thumbnail('medium'); ?>
                <div>
                    <div class="newsp">
                        <h3 class="margin-h3"><?= the_title(); ?></h3>
                        <p class="margin-p"><?= the_date(); ?></p>
                        <div>
                            <small><?= the_excerpt(); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </a>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php __('No News'); ?> </p>
<?php endif; ?>