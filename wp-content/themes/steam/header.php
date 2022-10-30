<!DOCTYPE html>
<html lang="<?php $lang = get_bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- get Site Icon -->
    <?php if (function_exists('has_site_icon') && has_site_icon()) : ?> <link rel="icon" href="<?php echo get_site_icon_url(); ?>"> <?php endif; ?>
    <!-- if not has_site_icon() -->
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?> <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icone/42.png"> <?php endif; ?>
    <meta name="theme-color" content="#000">
    <?php wp_head(); ?>
    <meta name="title" content="<?php echo get_the_title() ?> | Steam">
    <meta name="description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:title" content="<?php echo get_the_title() ?> | Steam">
    <meta property="og:description" content="<?php echo get_the_title() ?> | Steam">
    <meta property="og:image" content="<?php get_stylesheet_directory_uri();?>/assets/images/immagini/home.jpeg">
    <!-- Link Swiper's CSS --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
</head>

<body>
    <div id="header">
        
        <!-- navbar -->
        <div class="w-full absolute z-20" data-aos="fade-down">
        <div class="absolute p-8 lg:pl-24 4xl:pl-96 z-30 w-96"><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?></div>
    
            <div x-data="{ open: false }">
                <div class="p-8 z-20 absolute w-full">
                    <button x-on:click="open = ! open" id="hamburger" class="lg:pr-24 4xl:pr-96 transform scale-125 hamburger hamburger--emphatic not-active right-8 absolute" :class="!open ? '' : 'is-active'" type="button" data-status="closed">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
    
                <div id="menu" class="flex flex-col justify-center w-screen h-screen z-10 fixed swipe swipe-left bg-steam-darkblue" :class="!open ? '' : 'swipe-right'">
                    <div class="p-8 lg:px-24 4xl:px-96 flex flex-col text-white">
                        <div class="mb-4 menu_item" :class="!open ? 'exit' : 'active'"> 
                            <a href="mission.html"><p class="text-lg underline-animation">About</p></a> 
                        </div>
                        <div class="mb-4 menu_item" :class="!open ? 'exit' : 'active'"> 
                            <a href="chi-siamo.html"><p class="text-lg underline-animation">Community</p></a> 
                        </div>
                        <div class="mb-4 menu_item" :class="!open ? 'exit' : 'active'"> 
                            <a href="progetti.html"><p class="text-lg underline-animation">Support</p></a> 
                        </div>
                        <div class="mb-4 menu_item" :class="!open ? 'exit' : 'active'"> 
                            <a href="reports.html"><p class="text-lg underline-animation">Login</p></a> 
                        </div>
                        <div class="mb-4 menu_item" :class="!open ? 'exit' : 'active'"> 
                            <a href="eventi.html"><p class="text-lg underline-animation">Account</p></a> 
                        </div>
                        <div class="mb-4 menu_item" :class="!open ? 'exit' : 'active'"> 
                            <a href="osservatori.html"><p class="text-lg underline-animation">Cart</p></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- button scroll top -->
    <a class="shadow bg-white hover:bg-lsc-lightgray hover:text-white text-2xl text-lsc-orange" id="button"><i class="fa-solid fa-chevron-up transform translate-y-3"></i></a>