<?php

/**
 * Home masters.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $maestro_one_url = get_template_directory_uri() . '/app/images/content/maestro-1.jpeg';
 $maestro_two_url = get_template_directory_url() . '/app/images/content/maestro-2.jpeg';

?>

<section class="home-masters full-width-module">
    <h2 class="section-title">Maestros</h2>

    <div class="home-masters__section">
        <div class="home-masters__image">
            <img src="<?php echo esc_url($maestro_one_url); ?>" alt="">
        </div>
        <div class="home-masters__content">
            <h3 class="home-masters__content-title">Maestro 1</h3>
            <ul class="home-masters__list-content">
                <li>
                    <?php _e('Disciplina:', 'webJesus'); ?> <span>Disciplina 1</span>
                </li>
            </ul>
            <p class="home-masters__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus velit. Suspendisse ut tristique lectus. Nunc rhoncus risus a tellus imperdiet porttitor sed sit amet lacus. Proin porta lacus consectetur facilisis aliquam. Maecenas cursus quam sit amet velit pulvinar convallis. Curabitur tincidunt tincidunt suscipit.
            </p>
        </div>
    </div>
</section>