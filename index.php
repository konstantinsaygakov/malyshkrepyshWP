<?php 
    get_header();
?>
<section class="promo">
    <div class="container">
        <h1 class="promo__header">
            <?php the_field('title'); ?>
        </h1>
        <h2 class="promo__subheader">
        <?php the_field('subtitle'); ?>
        </h2>
        <button data-modal="consultation" class="button button_big"><?php the_field('text_button'); ?></button>
    </div>
</section>
<?php 
    get_footer();
?>