<?php 
    /*
        Template Name: Наши преимущества
    */
?>
<?php 
        get_header();
?>
<section class="advantages">
    <div class="container">
        <h1 class="title"><?php the_field('title_advantages'); ?></h1>
        <div class="advantages__wrapper">
            <div class="advantages__block">
                <div class="advantages__wrap">
                    <div class="advantages__img">
                        <img src="<?php the_field('img_one'); ?>" alt="eco">
                    </div>
                </div>
                <div class="advantages__descr"><?php the_field('descr_one') ?></div>
            </div>
            <div class="advantages__block">
                <div class="advantages__wrap">
                    <div class="advantages__img">
                        <img src="<?php the_field('img_two'); ?>" alt="handshake-solid">
                    </div>
                </div>
                <div class="advantages__descr"><?php the_field('descr_two') ?></div>
            </div>
            <div class="advantages__block">
                <div class="advantages__wrap">
                    <div class="advantages__img">
                        <img src="<?php the_field('img_three'); ?>" alt="cdec">
                    </div>
                </div>
                <div class="advantages__descr advantages__descr_mt25"><?php the_field('descr_three') ?></div>
            </div>
        </div>
    </div>
</section>
<?php 
        get_footer();
?>