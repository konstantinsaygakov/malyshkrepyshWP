<footer class="footer">
    <div class="container">
        <nav class="header__navigate">
            <?php 
                wp_nav_menu( [
                    'menu'            => 'main', 
                    'container'       => 'false', 
                    'menu_class'      => 'header__list', 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="header__list">%3$s</ul>',
                    'depth'           => 1,
                    'walker'          => '',
                ] );
            ?>
        </nav>
        <div class="footer__wrapper">
            <div class="logo logo_media"><img src="<?php echo bloginfo('template_url');?>/assets/icons/mk.svg" alt="malyshkrepysh"></div>
            <div class="footer__wrap">
                <div class="footer__contact">
                    <a href="mailto:<?php the_field('mail', 2) ?>"><?php the_field('mail', 2) ?></a>
                    <a href="tel:<?php the_field('number', 2) ?>" class="header__phone"><?php the_field('number', 2) ?></a>
                </div>
                <div class="footer__social">
                    <a target="blank" href="<?php the_field('instagramm', 2) ?>" class="footer__instagramm">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/instagram-brands.svg" alt="instagramm">
                    </a>
                    <a target="blank" href="<?php the_field('odnoklassniki', 2) ?>" class="footer__odnoklassniki">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/odnoklassniki-brands.svg" alt="odnoklassniki">
                    </a>
                </div>
                <div class="footer__social">
                    <a target="blank" href="<?php the_field('wathsapp', 2) ?>" class="footer__odnoklassniki">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/whatsapp.svg" alt="wathsapp">
                    </a>
                    <a target="blank" href="<?php the_field('viber', 2) ?>" class="footer__odnoklassniki">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/viber.svg" alt="viber">
                    </a>
                    <a target="blank" href="<?php the_field('telegramm', 2) ?>" class="footer__odnoklassniki">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/telegram.svg" alt="odnoklassniki">
                    </a>
                </div>
            </div>
            <button data-modal="consultation" class="button button_footer">ЗАКАЗАТЬ ЗВОНОК</button>
            </div>
        </div>
        <?php the_privacy_policy_link(); ?>
    </footer>
    <div class="overlay">
        <div class="modal consultation" id="consultation">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Просто заполните форму заявки<br> и мы вам перезвоним</div>
            <div class="modal__description"></div>
            <?php echo do_shortcode('[contact-form-7 id="253" title="Форма обратного звонка"]') ?>
        </div>
        
        <div class="modal order" id="order">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Ваш заказ:</div>
            <?php echo do_shortcode('[contact-form-7 id="151" title="Форма заказа для шлифованных деталей"]') ?>
        </div>

        <div class="modal order-lacquer" id="order-lacquer">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Ваш заказ:</div>
            <?php echo do_shortcode('[contact-form-7 id="176" title="Растущий стульчик покрытие мебельный лак"]') ?>
        </div>

        <div class="modal order-color" id="order-color">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Ваш заказ:</div>
            <?php echo do_shortcode('[contact-form-7 id="198" title="РАСТУЩИЙ СТУЛЬЧИК ПОКРАШЕННЫЙ В ЦВЕТ"]') ?>
        </div>

        <div class="modal order-swing" id="order-swing">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Ваш заказ:</div>
            <?php echo do_shortcode('[contact-form-7 id="251" title="Качели"]') ?>
        </div>

        
        
    </div>
    

    <?php
        wp_footer();
    ?>
    
</body>
</html>