<?php

/**
 * Home theme template.
 * 
 * @package theme
 * @author David Guerreiro
 */

get_header();

// display hero section.
get_template_part('template-parts/home/home', 'hero');

// display description image + text section.
get_template_part('template-parts/home/home-image', 'text');

// display home masters section.
get_template_part('template-parts/home/home', 'masters');

// display video section.
get_template_part('template-parts/home/home', 'video');

// display disciplines section.
get_template_part('template-parts/home/home-multiple-image', 'text');

// display quote section.
get_template_part('template-parts/home/home', 'quote');

get_footer();