<?php 
    /*
        Template Name: Каталаг
    */
?>
<?php 
        get_header();
?>
<section class="catalog">
    <div class="container">
        <h1 class="title">КАТАЛОГ</h1>
        <ul class="catalog__tabs">
            <li class="catalog__tab catalog__tab_active"><div>Стульчик ШЛИФОВАННЫЙ</div></li><!-- 
            <li class="catalog__tab"><div>Стульчик ПОКРЫТИЕ МЕБЕЛЬНЫЙ ЛАК</div></li> -->
            <li class="catalog__tab"><div>Стульчик ПОКРАШЕННЫЙ В ЦВЕТ</div></li>
            <li class="catalog__tab"><div>Качели</div></li>
        </ul>

        <div class="catalog__content catalog__content_active">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'category_name' => 'growing_chair',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                
                foreach( $posts as $post ){
                    setup_postdata($post);

                    ?>
                        <div class="catalog__item">
                            <img src="<?php
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/chairs/chair1.jpg';
                                }
                                ?>" alt="стульчик ШЛИФОВАННЫЙ">
                                
                                
                            <div class="catalog__bgc"></div>
                            <div class="catalog__title catalog__title_growing"><?php the_title(); ?></div>
                            <a href="<?php echo get_permalink(); ?>" class="catalog__detailed">ПОДРОБНЕЕ</a>
                            <div class="catalog__item-footer">
                                <div class="catalog__price">Цена : <?php the_field('growing_price') ?></div>
                                <button class="button button_mini">заказать</button>
                            </div>
                        </div>
                    

                    <?php
                        // формат вывода the_title() ...
                }
                
                wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="catalog__content">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'category_name' => 'growing_color',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                
                foreach( $posts as $post ){
                    setup_postdata($post);

                    ?>
                        <div class="catalog__item">
                            <img src="<?php
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/chairs/chair1.jpg';
                                }
                                ?>" alt="стульчик ШЛИФОВАННЫЙ">
                                
                                
                            <div class="catalog__bgc"></div>
                            <div class="catalog__title catalog__title_color"><?php the_title(); ?></div>
                            <a href="<?php echo get_permalink(); ?>" class="catalog__detailed">ПОДРОБНЕЕ</a>
                            <div class="catalog__item-footer">
                                <div class="catalog__price">Цена : <?php the_field('growing_price') ?></div>
                                <button class="button button_color">заказать</button>
                            </div>
                        </div>
                    

                    <?php
                    // формат вывода the_title() ...
                }
                
                wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="catalog__content">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'category_name' => 'swing',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                
                foreach( $posts as $post ){
                    setup_postdata($post);

                    ?>
                        <div class="catalog__item">
                            <img src="<?php
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/chairs/chair1.jpg';
                                }
                                ?>" alt="стульчик ШЛИФОВАННЫЙ">
                                
                                
                            <div class="catalog__bgc"></div>
                            <div class="catalog__title catalog__title_swing"><?php the_title(); ?></div>
                            <a href="<?php echo get_permalink(); ?>" class="catalog__detailed">ПОДРОБНЕЕ</a>
                            <div class="catalog__item-footer">
                                <div class="catalog__price">Цена : <?php the_field('growing_price') ?></div>
                                <button class="button button_swing">заказать</button>
                            </div>
                        </div>
                    

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