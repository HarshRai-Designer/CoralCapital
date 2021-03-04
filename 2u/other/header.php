<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name');?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/dist/img/favicon.ico.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
    <?php wp_head(); ?>
    <style>
    @font-face {
        font-family: 'Proxima Nova Medium';
        src: url('/wp-content/themes/2ulaundry/dist/fonts/ProximaNovaSoft-Medium.eot');
        src: local('☺'),
          url('/wp-content/themes/2ulaundry/dist/fonts/ProximaNovaSoft-Medium.woff') format('woff'),
          url('/wp-content/themes/2ulaundry/dist/fonts/ProximaNovaSoft-Medium.ttf') format('truetype'),
          url('/wp-content/themes/2ulaundry/dist/fonts/ProximaNovaSoft-Medium.svg') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'Peachy Pure';
        src: url('/wp-content/themes/2ulaundry/dist/fonts/Peachy-Pure.eot');
        src: local('☺'), url('/wp-content/themes/2ulaundry/dist/fonts/Peachy-Pure.woff') format('woff'),
          url('/wp-content/2ulaundry/dist/fonts/Peachy-Pure.ttf') format('truetype'),
          url('/wp-content/themes/2ulaundry/dist/fonts/Peachy-Pure.svg') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    .lp-bar__iframe-wrapper {
        z-index: 99999;
    }
    </style>
    
    <!-- Start of 2ulaundrytrial Zendesk Widget script -->
		<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=74a1e362-1fb2-45d6-86a4-dc4a35fb959f"> </script>
	<!-- End of 2ulaundrytrial Zendesk Widget script -->

</head>

<body <?php body_class() ?>>
 <div class="covid-section">
       COVID-19 Update: <a href="/blog/covid19/"><span class="covid-learn">Learn about</span></a> what we have been doing to protect our customers and employees.
        </div>
    <header id="page-header" class="page-header">	
        <div class="fixing">
            <div class="container">
                <div class="header-layout flex-row space-between align-center">
                    <div class="logo-container flex-row">
                        <a href="#" class="hamburger mobile-visible-inline" data-toggle="navigation">
                            <span class="line one"></span>
                            <span class="line two"></span>
                            <span class="line three"></span>
                        </a>
                        <a class="logo" title="2ULaundry" href="<?php echo get_home_url(); ?>">
                            <img class="des-image" src="<?php bloginfo('template_url'); ?>/dist/img/main-logo.svg" alt="Laundry delivery service in Charlotte and Atlanta"/>
                            <img class="mobile-image" style="display: none;" src="<?php bloginfo('template_url'); ?>/img/2uonly.svg" alt="Laundry delivery service in Charlotte and Atlanta"/>
                        </a>
                    </div>
                    <nav class="site-nav">
                        <div class="nav-inner">
                            <a href="#" class="nav-close mobile-visible-inline" title="close" data-toggle="navigation">&times;</a>
                            <a class="logo mobile-visible-inline" title="2ULaundry" href="<?php echo get_home_url(); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/dist/img/main-logo.svg" alt="Laundry delivery service in Charlotte and Atlanta"/>
                            </a>
                            <style>
                                .kustomer-app-icon {
                                    right: 50px !important;
                                }
                                @media(max-width: 1199px) {
                                    header img.des-image {
                                        display: none !important;
                                    }
                                    header img.mobile-image {
                                        display: block !important;
                                    }
                                }
                            </style>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'header-nav-main',
                                'sort_column'    => 'menu_order',
                                'container'      => 'ul'
                            ) ); ?>
                            <div class="mobile-user-nav mobile-visible">
                                <div class="flex-row space-between">
                                    <a href="<?php echo getenv('Register_Host');?>" class="btn" data-toggle-modal="get-started-modal">Get Started</a>
                                    <a href="<?php echo getenv('Login_Host');?>" class="btn btn-secondary">Log In</a>
                                </div>
                            </div>
                            <nav class="header_footer_nav">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'header-mobile-footer-menu-top',
                                    'sort_column' => 'menu_order',
                                    'container' => 'ul'
                                )); ?>
                            </nav>
                            <nav class="header_footer_nav" style="margin-top: 35px;">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'header-mobile-footer-menu-bottom',
                                    'sort_column' => 'menu_order',
                                    'container' => 'ul'
                                )); ?>
                            </nav>
                            <nav class="header_footer_nav" style="margin-top: 35px;">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'header-mobile-footer-menu-right',
                                    'sort_column' => 'menu_order',
                                    'container' => 'ul'
                                )); ?>
                            </nav>
                        </div>
                    </nav>
                    <nav class="user-nav">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'header-nav-sign-in',
                            'sort_column'    => 'menu_order',
                            'container'      => 'ul'
                        ) ); ?>
                    </nav>
                </div>
            </div>
        </div><!--End fixing-->
    </header>


    <style>
        header#page-header {
            margin-bottom: 0;
        }
        header .header_footer_nav {
            display: none;
        }
        header .caret {
            display: none;
        }

        header #menu-header-menu li {
            position: relative;
        }
        header li .thereCaret  {
            right: -20px;
            top: 46%;
            transform: translate(-50%, -50%);
            text-align: center;
            position: absolute;
            width: 10px;
            display: flex;
            display: block;
        }
        .windows header li .thereCaret {
            top: 55%;
        }
        header .fixing.activated {
            padding-top: 24px;
            padding-bottom: 24px;
        }
        header.page-header {
            padding-top: 24px;
            padding-bottom: 24px;
        }
        header .fixing > .container {
            max-width: 1920px;
            width: 100%;
            padding-right: 60px;
            padding-left: 80px;
        }
        header #menu-header-menu {
            padding-left: 60px;
        }
        header #menu-header-menu li {
            margin-right: 60px;
            display: flex;
            align-items: center;
        }
        header ul .menu-item-has-children .sub-menu {
            display: none;
            position: absolute;
            top: calc(100% + 6px);
            padding: 0;
            margin: 0;
            list-style: none;
            background: #fff;
            width: 200px;
            padding: 17px 14px;
            box-shadow: 0 3px 6px rgba(92,112,139, .55);
        }
        header ul .menu-item-has-children .sub-menu li:not(:last-child) {
            margin-bottom: 5px;
        }
        header ul .menu-item-has-children .sub-menu li a {
            line-height: 30px;
            color: #5C708B;
        }
        header .site-nav .menu-item,
        header .user-nav .menu-item {
            font-size: 18px;
            transition: .3s;
        }
        .page-home .hero .right-content {
            margin-top: 20px;
        }
        .page-header #menu-sign-in a {
            font-size: 17px;
            background: transparent;
            border: none;
            color: #FF3EB3;
            font-weight: 500;
            font-family: Proxima Nova Medium;
        }
        .page-header #menu-sign-in li.toggle-get-started a {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            border-radius: 20px;
            border: none;
            background: #FF3EB3;
            line-height: 1;
            font-weight: 600;
            padding: 10px 24px;
            min-height: 32px;
            border: 1px solid #FF3EB3;
            text-align: center;
            cursor: pointer;
            font-family: 'ProximaNovaSoft-Bold';
            height: 60px;
            width: 160px;
            border-radius: 50px;
        }
        @media(min-width: 768px) {
            header ul .menu-item-has-children .sub-menu li {
                margin: 0 !important;
            }
            header ul .menu-item-has-children .sub-menu {
                padding: 0;
            }

            header ul .menu-item-has-children .sub-menu li a {
                width: 100%;
                display: block;
                padding: 0px 20px;
                height: 50px;
                display: flex;
                align-items: center;
                line-height: 1;
                border-radius: 0;
            }
            /* header ul li.current-menu-parent a {
                color: #FF3EB3 !important;
            } */
            .page-header #menu-sign-in a {
                height: 42px;
                display: flex;
                align-items: center;
            }
            header ul li#menu-item-10874 {
                display: none;
            }
        }
        @media(min-width: 1200px) {
            header ul .menu-item-has-children .sub-menu li a:hover {
                color: #FF3EB3;
            }
            header ul .menu-item-has-children .sub-menu li a {
                transition: .3s;
            }
            header ul .menu-item-has-children .sub-menu li a:hover {
                color: #fff !important;
                background-color: #2E7DE1;
            }
            .site-nav .menu-item a {
                transition: .3s;
            }
            header .site-nav .current-menu-item a {
                color: #5C708B;
            }
        }
        @media(max-width: 1366px) {
            header .site-nav .menu-item,
            header .user-nav .menu-item {
                font-size: 14px;
            }
            .page-header #menu-sign-in a {
                font-size: 12px;
            }
            header #menu-header-menu {
                padding-left: 40px;
            }
            header #menu-header-menu li {
                margin-right: 40px;
            }
            .page-header #menu-sign-in li.toggle-get-started a {
                width: 114px;
                height: 42px;
            }
            .page-header #menu-sign-in a {
                padding-left: 0;
                padding-right: 0;
            }
            .user-nav .menu-item {
                margin-right: 25px;
            }
            header .fixing > .container {
                padding-right: 40px;
                padding-left: 55px;
            }
        }
        @media(max-width: 1199px) {
            header ul .menu-item-has-children .sub-menu.openMenu {
                display: block;
                position: absolute;
                padding-top: 0;
                padding-bottom: 0;
            }
            header ul .menu-item-has-children .sub-menu {
                padding-top: 10px !important;
                padding-bottom: 10px !important ;
                width: 160px;
            }
        }
        @media(max-width: 991px) {
            header .site-nav .menu-item,
            header .user-nav .menu-item {
                font-size: 12px;
            }
            .page-header #menu-sign-in a {
                font-size: 12px;
            }
            header #menu-header-menu {
                padding-left: 20px;
            }
            header #menu-header-menu li {
                margin-right: 20px;
            }
            header .fixing > .container {
                padding-left: 40px;
            }
            header li .thereCaret,
            header li .thereCaret i {
                font-size: 9px;
            }
            header .site-nav .menu {
                justify-content: flex-start;
            }
        }

        @media(max-width: 767px){
            header li .thereCaret {
                top: 50% !important;
            }
            header ul .menu-item-has-children .sub-menu {
                width: 100%;
            }
            .site-nav .current-menu-item a {
                color: rgba(92, 112 , 139 , .5);
                background-color: transparent;
            }
            header .site-nav .menu {
                margin-top: 20px;
            }
            header .site-nav .nav-close {
                position: absolute;
                right: 6px;
                top: 17px;
            }
            header .site-nav .nav-inner {
                padding-top: 0 !important;
                overflow: auto;
            }
            header .logo.mobile-visible-inline img {
                display: none;
            }
            header #menu-item-10051 {
                flex-direction: column;
                align-items: flex-start !important;
            }
            header .site-nav .menu-item a {
                padding: 7px 14px 6px;
                font-size: 14px;
                line-height: 1.4;
                margin: 4px 0;
            }
            header li .thereCaret i {
                margin-left: -11px;
            }
            header .site-nav  ul li.page_item a {
                background-color: #2E7DE1;
                color: #fff;
            }
            .page-header #menu-sign-in a {
                background: #FF3EB3;
                color: #fff;
                padding-left: 24px;
                padding-right: 24px;
                font-family: 'ProximaNovaSoft-Bold';
            }
            header .site-nav .mobile-user-nav {
                margin-bottom: 40px;
            }
            header #menu-header-menu li {
                position: relative;
                display: flex;
                flex-wrap: wrap;
            }
            header ul .menu-item-has-children .sub-menu {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            header ul .menu-item-has-children .sub-menu li a {
                padding-top: 0;
                padding-bottom: 0;
            }
            header ul .menu-item-has-children .sub-menu li:not(:last-child) {
                margin-bottom: 0 !important;
            }
            header ul li.active > a {
                background-color: #2E7DE1 !important;
                color: #fff !important;
                margin-bottom: 10px !important;
            }
            header li .thereCaret img {
                margin-left: 0;
            }
            header .site-nav .thereCaret {
                position: absolute;
                left:80px;
                top: 15px;
            }
            header .site-nav li.active .thereCaret {
                display: none;
            }
            header .site-nav .menu-item a {
                display: inline-flex;
                align-items: center;
            }
            header #menu-header-menu {
                padding-left: 5px;
                margin-top: 0;
            }
            header .site-nav .menu-item .caret {
                margin-left: 5px;
                transition: .3s;
                display: flex;
            }
            header .site-nav .menu-item .caret img {
                width: 10px;
                height: 10px;
            }
            header ul li.active .caret {
                transform: rotate(180deg);
            }
            header ul .menu-item-has-children .sub-menu.openMenu {
                position: relative;
                box-shadow: none;
            }
            header .header_footer_nav #menu-footer-menu {
                display: flex;
                flex-wrap: wrap;
            }
            header .header_footer_nav {
                display: block;
                margin: 0 8px;
            }
            header .header_footer_nav li {
                width: 100%;
            }
            header .header_footer_nav li a {
                margin: 0 !important;
                color: rgba(92, 112 , 139 , .5);
            }
            .site-nav .menu-item a:hover {
                background-color: transparent;
                color: #5C708B;
            }
            header .site-nav .mobile-user-nav .btn-secondary {
                color: rgba(255,62,179, .75);
            }
            header .site-nav .mobile-user-nav .btn-secondary {
                border-color: rgba(255,62,179, .35);
            }


        }

    </style>

    <script>
        jQuery('nav .menu-item-has-children > a').each( function(){
            jQuery(this).append('<span class="caret"><img src="/wp-content/uploads/2020/05/arrowwhite.svg" alt="arrow" ></span>')
        })
        jQuery('nav .menu-item-has-children').each( function(){
            jQuery(this).append('<span class="thereCaret"><img src="/wp-content/uploads/2020/06/arrow-header.svg" alt="arrow" ></span>')
        })
        if (jQuery(window).innerWidth() > 1199) {
            jQuery('nav .menu-item-has-children').hover(function(){
                jQuery(this).find('ul:first').stop().slideDown(300);

            }, function(){
                jQuery(this).find('ul:first').stop().slideUp(200);
            });

            jQuery('nav .menu-item-has-children .sub-menu').hover(function(){
                jQuery(this).parent().find('> a').css('color', '#FF3EB3');

            }, function(){
                jQuery(this).parent().find('> a').css('color', '#5C708B');
            });


        }else{
            jQuery('nav .menu-item-has-children').click(function(){
                jQuery(this).find('ul:first').toggleClass('openMenu');
                jQuery(this).toggleClass('active');
            });
        }
        jQuery(document).ready(function(){
            if (navigator.appVersion.indexOf("Windows")!=-1){
               jQuery('body').addClass('windows');
            }
        });


    </script>
