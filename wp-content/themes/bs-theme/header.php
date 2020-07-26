<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" sizes="57x57" href="/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title><?php bloginfo('title') ?> - <?php the_title()?></title>
    <?php wp_head(); ?>


</head>
<body <?php body_class('transition-background-color-4'); ?>>

<?php
    global $post;
    $post_slug = $post->post_name;


    if($post_slug == 'home')
    {
        $containerID = 'index-page';
    }
    else if($post_slug == 'blog')
    {
        $containerID = 'blog-page';
    }

    else if(is_single() && !is_front_page())
    {
        $containerID = 'post-page';
    }

    else {
        $containerID = 'default-not-set';
    }


?>

<div id="app">
    <div id="<?=$containerID?>">

        <header id="header"
                class="fixed top-0 z-40 px-6 h-12 w-full flex justify-between items-center max-w-12xl mx-auto left-1/2 -translate-x-1/2 lg:h-20 lg:px-10">
            <a href="/" class="block">
                <!-- SVG brand loader -->
                <img src="<?=bloginfo('template_directory')?>/images/logo_compressed/bolt-dark.png" alt="Logo">
            </a>
            <div class="menu absolute z-50 top-0 h-screen w-screen bg-bs-white-snow lg:h-auto lg:w-auto lg:static lg:bg-transparent left-full">
                <div class="relative h-full w-full flex justify-center items-center">
                    <div class="close-btn absolute left-0 top-0 m-6 lg:hidden"><span
                                class="h-1 w-6 block bg-bs-blue-light rotate-45 sm:h-2 sm:w-10"></span> <span
                                class="h-1 w-6 block bg-bs-blue-light -mr-1 -mt-1 -rotate-45 sm:h-2 sm:w-10 sm:-mr-2 sm:-mt-2"></span>
                    </div>
                    <ul id="primaryNav" class="nav text-5xl font-circular text-center sm:text-7xl lg:text-base">

                        <?php

                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['main-menu'];
                        $mainMenu = wp_get_nav_menu_items($menuID);
                        foreach($mainMenu as $navItem) :

                          $menuClass = ($navItem->url == '/#contact-details') ? 'lg:hidden' : 'lg:inline-block mx-3';

                        ?>

                        <li data-menuanchor="<?=$navItem->url?>" class="<?=$menuClass?>">
                            <a href="<?=$navItem->url?>"><?=$navItem->title?></a>
                        </li>


                        <?php endforeach;?>


                    </ul>
                </div>
            </div>
            <div class="burger lg:hidden"><span class="h-1 w-6 block mb-1 bg-bs-white-snow"></span> <span
                        class="h-1 w-6 block mb-1 bg-bs-white-snow"></span> <span
                        class="h-1 w-6 block bg-bs-white-snow"></span></div>
            <a href="/#contact-form"
               class="contact-cta hidden font-circular lg:cursor-pointer lg:block lg:border lg:px-4">
                Contact
            </a></header>



