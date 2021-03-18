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
            <li class="catalog__tab catalog__tab_active">Стульчик ШЛИФОВАННЫЙ</li>
            <li class="catalog__tab">Стульчик ПОКРЫТИЕ МЕБЕЛЬНЫЙ ЛАК</li>
            <li class="catalog__tab">Стульчик ПОКРАШЕННЫЙ В ЦВЕТ</li>
            <li class="catalog__tab">Качели</li>
        </ul>

        <div class="catalog__content_active">
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
                                <button data-button="btn" class="button button_mini">заказать</button>
                            </div>
                        </div>
                    

                    <?php
                        // формат вывода the_title() ...
                }
                
                wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="catalog__content_active">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'category_name' => 'growing_lacquer',
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
                            <div class="catalog__title catalog__title_lacquer"><?php the_title(); ?></div>
                            <a href="<?php echo get_permalink(); ?>" class="catalog__detailed">ПОДРОБНЕЕ</a>
                            <div class="catalog__item-footer">
                                <div class="catalog__price">Цена : <?php the_field('growing_price') ?></div>
                                <button data-button="btn" class="button button_lacquer">заказать</button>
                            </div>
                        </div>
                    

                    <?php
                    // формат вывода the_title() ...
                }
                
                wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="catalog__content_active">
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
                                <button data-button="btn" class="button button_color">заказать</button>
                            </div>
                        </div>
                    

                    <?php
                    // формат вывода the_title() ...
                }
                
                wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="catalog__content_active">
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
                                <button data-button="btn" class="button button_swing">заказать</button>
                            </div>
                        </div>
                    

                    <?php
                    // формат вывода the_title() ...
                }
                
                wp_reset_postdata(); // сброс
            ?>
        </div>
<!--         <div class="cdek-calc">
            Ниже представлен калькулятор расчета доставки CDEK.<br> Размеры указаны для одного упакованного стульчика.
            <iframe id="cdek-calc-iframe" src="https://cdek-tk.ru/index.php?route=module/cdek_calc&tariffId=1&city_from=%D0%9A%D0%BE%D1%80%D0%B5%D0%BD%D0%BE%D0%B2%D1%81%D0%BA&senderCityId=1601&city_to=&receiverCityId=&goods%5B0%5D%5Bweight%5D=7&goods%5B0%5D%5Blength%5D=90&goods%5B0%5D%5Bwidth%5D=50&goods%5B0%5D%5Bheight%5D=5&modeId=3&border=on&iframe_width=300&iframe_height=400" max-width="500" height="300" scrolling="no" frameborder="0"></iframe>
        </div> -->
        
    </div>
    
</section>
<?php 
        get_footer();
?>