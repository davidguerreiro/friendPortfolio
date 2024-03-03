<?php

/**
 * Home hero module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $logo_url = get_template_directory_uri() . '/app/images/logos/logo.png';

?>

<section class="home-hero">
    <div class="home-hero__content-wrapper">
        <div>
            <img src="<?php echo esc_url($logo_url); ?>" alt="site logo" class="home-hero__logo">
        </div>
        <div class="home-hero__title-wrapper">
            <h1 class="home-hero__title">
                Jesús Giráldez Vaquero
            </h1>
            <p class="home-hero__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus velit. Suspendisse ut tristique lectus. Nunc rhoncus risus a tellus imperdiet porttitor sed sit amet lacus.
            </p>
        </div>
    </div>
</section>
 