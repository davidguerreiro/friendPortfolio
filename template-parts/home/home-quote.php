<?php

/**
 * Home quote module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $logo_url = get_template_directory_uri() . '/app/images/logos/logo.png';

?>

<section class="home-quote">
    <div class="home-quote__box-wrapper">
        <img src="<?php echo esc_html($logo_url); ?>" alt="" class="home-quote__logo">
        <p class="home-quote__content"></p>
    </div>
</section>
