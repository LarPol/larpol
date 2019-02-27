<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title();?></title>
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/favicon.ico'>
    <link rel=stylesheet href='<?php echo get_template_directory_uri(); ?>/css/foundation.css' />
    <link rel=stylesheet href='<?php echo get_template_directory_uri(); ?>/css/app.css' />
    <link rel=stylesheet href='<?php echo get_template_directory_uri(); ?>/style.css' />
    <link rel=stylesheet href='<?php echo get_template_directory_uri(); ?>/css/custom.css' />
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
    <?php wp_head();?>
</head>

<body>
    <div id="wptime-plugin-preloader"></div>
    <section id="header">
        <div class="mwidth clearfix">
            <div class="large-2 columns"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.jpg"></a></div>
            <div class="large-10 columns">
                <?php wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu '=> 'Main Menu',
            'container' => false
        )); ?>
            </div>
        </div>
    </section>