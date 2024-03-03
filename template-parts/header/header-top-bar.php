<?php

/**
 * Header top bar module.
 * 
 * @package template-parts/header
 * @author David Guerreiro
 */

 $email_icon        = get_template_directory_uri() . '/app/images/svg/email.svg';
 $instagram_icon    = get_template_directory_uri() . '/app/images/svg/instagram.svg';
 $phone_icon        = get_template_directory_uri() . '/app/images/svg/phone.svg';

?>

<div class="header-top-bar">
    <nav class="header-top-bar__social">
        <ul>
            <li class="header-top-bar__element">
                <a href="#" target="_blank">
                    <img src="<?php echo esc_url($email_icon); ?>" alt="email-icon" class="header-top-bar__social-icon">
                </a>
            </li>
            <li class="header-top-bar__element header-top-bar__element--instagram-link">
                <a href="#" target="_blank">
                    <img src="<?php echo esc_url($instagram_icon); ?>" alt="instagram-icon" class="header-top-bar__social-icon header-top-bar__social-icon--instagram">
                </a>
            </li>
            <li class="header-top-bar__element">
                <a href="#" target="_blank">
                    <img src="<?php echo esc_url($phone_icon); ?>" alt="email-icon" class="header-top-bar__social-icon header-top-bar__social-icon--phone">
                    <span class="header-top-bar__phone-number">664554554</span>
                </a>
            </li>
        </ul>
    </nav>
</div>