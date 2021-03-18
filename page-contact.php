<?php 
    /*
        Template Name: Контакты
    */
?>
<?php 
        get_header();
?>
<section class="callback">
    <div class="container">
        <h1 class="title title_white">Введите свои данные<br> и мы вам перезвоним</h1>
        <?php echo do_shortcode('[contact-form-7 id="252" title="Форма с сайта"]') ?>
    </div>
    
</section>
<?php 
        get_footer();
?>