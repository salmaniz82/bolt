<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title><?php bloginfo() ?></title>




    <!--
        <script type="text/javascript" src="<?=bloginfo('template_directory')?>/js/jquery-3.4.1.slim.min.js"></script>

    <link href="<?=bloginfo('template_directory')?>/css/theme.css?id=54a1a043f96232a747f2" rel="stylesheet" defer>
    <link href="<?=bloginfo('template_directory')?>/css/fullpage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link  href="<?=bloginfo('template_directory')?>/css/custom.css" rel="stylesheet">
    -->

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
                <img src="https://via.placeholder.com/118x24?text=LOGO" alt="Logo">
            </a>
            <div class="menu absolute z-50 top-0 h-screen w-screen bg-bs-white-snow lg:h-auto lg:w-auto lg:static lg:bg-transparent left-full">
                <div class="relative h-full w-full flex justify-center items-center">
                    <div class="close-btn absolute left-0 top-0 m-6 lg:hidden"><span
                                class="h-1 w-6 block bg-bs-blue-light rotate-45 sm:h-2 sm:w-10"></span> <span
                                class="h-1 w-6 block bg-bs-blue-light -mr-1 -mt-1 -rotate-45 sm:h-2 sm:w-10 sm:-mr-2 sm:-mt-2"></span>
                    </div>
                    <ul id="primaryNav" class="nav text-5xl font-circular text-center sm:text-7xl lg:text-base">
                        <li data-menuanchor="about" class="lg:inline-block mx-3"><a href="/#about">About</a></li>
                        <li data-menuanchor="work" class="lg:inline-block mx-3"><a href="/#work">Work</a></li>
                        <li data-menuanchor="services" class="lg:inline-block mx-3"><a
                                    href="/#services">Services</a></li>
                        <li data-menuanchor="blog" class="lg:inline-block mx-3"><a href="/#posts">Blog</a></li>
                        <li class="lg:inline-block mx-3"><a href="/team">Team</a></li>
                        <li data-menuanchor="contact-details" class="lg:hidden"><a
                                    href="/#contact-details">Contact</a></li>
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



