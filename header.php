<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>mm参考書プログラミング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div>
        <header class="blog-header">
            <div class="blog-name-wrapper">
                <a class="blog-name" href="<?php echo esc_url( home_url() ); ?>">
                    <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/logo.webp" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <div class="blog-description-wrapper">
                <p class="blog-description"><?php bloginfo('description'); ?></p>
            </div>
        </header>