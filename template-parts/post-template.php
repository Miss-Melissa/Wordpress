<div class="wrapper">
    <div class="card">
        <a href="http://localhost:8888/wordpress?p=<?= get_the_id(); ?>">
            <div class="container">
                <?= the_post_thumbnail('medium'); ?>
            </div>
        </a>

    </div>
    <div class="info_text">
        <h3 class="h2-title-post"><?= the_title(); ?></h3>
        <b><?= the_date(); ?></b>
        <p class="info_text_margin"><?= the_content(); ?></p>
    </div>


</div>

</div>
</div>