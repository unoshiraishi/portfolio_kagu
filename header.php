<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo bloginfo('name')?></title>
    <meta name="description" content="<?php echo bloginfo('description'); ?>" />
    <meta name="format-detection" content="telephone=no" />

    <!-- favicon/webclipicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/webclip.png" />

    <!-- ogp -->
    <meta property="og:site_name" content="KAGU" />
    <meta property="og:url" content="https://www.example.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="コーディングを勉強するならKAGU" />
    <meta property="og:description" content="KAGUは、Webサイト制作におけるコーディングの教育教材です。" />
    <meta property="og:image" content="https://www.example.com/" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="KAGUは、Webサイト制作におけるコーディングの教育教材です。" />
    <meta name="twitter:image:src" content="https://www.example.com/" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Noto+Serif+JP:wght@500&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header -->
    <header class="header">
        <div class="header-container">
            <div class="header-inner">
                <h1 class="header-logo">
                    <a href="<?php echo home_url();?>">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/img/common/logo.png 1x, <?php echo get_template_directory_uri(); ?>/img/common/logo@2x.png 2x" width="290" height="46" src="<?php echo get_template_directory_uri(); ?>/img/common/logo@2x.png" alt="KAGU" decoding="async" loading="lazy">
                    </a>
                </h1>

                <div class="header-hamberger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="header-nav">
                    <ul class="header-nav-list">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'place_global',
                                'container' => 'false',
                            )
                        )?>
                        <li><a class="c-button-onlineshop" href="<?php echo esc_url('https://example.com'); ?>" target="_blank" rel="noopener noreferrer">online store</a></li>
                        <li><a class="c-button-contact" href="<?php echo esc_url( get_template_directory_uri(). '/contact'); ?> ">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="sp-menu-drawer">
        <div class="sp-menu-header">
            <div class="sp-menu-header-container">
                <div class="sp-menu-header-inner">
                    <h1 class="sp-menu-header-logo">
                        <a href="<?php echo home_url();?>">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/common/logo_white.png 1x, <?php echo get_template_directory_uri(); ?>/img/common/logo_white@2x.png 2x" width="290" height="46" src="<?php echo get_template_directory_uri(); ?>/img/common/logo_white@2x.png" alt="KAGU" decoding="async" loading="lazy">
                        </a>
                    </h1>

                    <div class="sp-menu-header-closebtn">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <nav class="sp-menu-nav">
            <ul class="sp-menu-nav-list">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'place_hamburger',
                        'container' => 'false',
                    )
                )?>
            </ul>
            <div class="sp-menu-nav-button">
                <a class="c-button-onlineshop c-button-onlineshop--sp" href="" target="_blank" rel="noopener noreferrer">online store</a>
                <a class="c-button-contact c-button-contact--sp" href="<?php echo esc_url( get_template_directory_uri(). '/contact'); ?> ">お問い合わせ</a>
            </div>
        </nav>
    </div>
    <!-- end header -->

    <main>
        <?php if(is_front_page()): ?>
        <!-- top-kv -->
        <div class="top-kv">
            <div class="top-kv-inner">
                <p class="top-kv-copy"><span>自分らしさを</span><span>レイアウトする</span></p>
                <ul class="top-kv-slider">
                    <li class="top-kv-slider-item">
                        <picture>
                            <source media="(max-width: 559px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv-sp.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv-sp@2x.jpg 2x">
                            <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv@2x.jpg 2x">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv@2x.jpg 2x" height="1220" width="3000" src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv@2x.jpg" alt="" decoding="async" loading="lazy">
                        </picture>
                    </li>
                    <li class="top-kv-slider-item">
                        <picture>
                            <source media="(max-width: 559px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_02-sp.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_02-sp@2x.jpg 2x">
                            <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_02@2x.jpg 2x">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_02.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_02@2x.jpg 2x" height="1220" width="3000" src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_02@2x.jpg" alt="" decoding="async" loading="lazy">
                        </picture>
                    </li>
                    <li class="top-kv-slider-item">
                        <picture>
                            <source media="(max-width: 559px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_03-sp.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_03-sp@2x.jpg 2x">
                            <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_03.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_03@2x.jpg 2x">
                            <img srcset="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_03.jpg 1x, <?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_03@2x.jpg 2x" height="1220" width="3000" src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide_kv_03@2x.jpg" alt="" decoding="async" loading="lazy">
                        </picture>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end top-kv -->
        <?php else: ?>
        <!-- page-kv -->
        <div class="c-page-kv">
            <h1 class="c-title-level1 c-title-level1--center"><?php echo get_main_title(); ?></h1>
            <span class="c-title-level1-english c-title-level1-english--center"><?php echo get_main_en_title(); ?></span>
        </div>
        <!-- end page-kv -->
        <!-- breadcrumbs -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- end breadcrumbs -->
        <?php endif;?>