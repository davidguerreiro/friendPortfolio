<?php

/**
 * Theme header template.
 * 
 * @package root
 * @author David Guerreiro
 */

 ?>

<!DOCTYPE html>
<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title><?php echo esc_html(get_bloginfo('name')); ?></title>
       <?php wp_head(); ?>
   </head>
   <body>
       <main class="main">

        <?php echo get_template_part('tempalte-parts/header/header-top', 'bar'); ?>
