<?php 
    /*
        Template Name: Наши работы
    */
?>
<?php 
        get_header();
?>
<section class="slider-reviews">
    <div class="container">
        <h1 class="title">Наши работы</h1>
        <div class="slider-reviews__content">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'category_name' => 'slider_work',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                
                foreach( $posts as $post ){
                    setup_postdata($post);

                    ?>

                    <div class="slider-reviews__img"><img src="<?php the_field('slider_img'); ?>" alt="reviews"></div>

                    <?php
                    // формат вывода the_title() ...
                }
                
                wp_reset_postdata(); // сброс
            ?>

        </div>
    </div>
</section>
<?php 
        get_footer();
?>