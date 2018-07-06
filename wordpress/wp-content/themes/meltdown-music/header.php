<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bowlby+One|Bowlby+One+SC|Copse|Luckiest+Guy" type="text/css" />

    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_uri(); ?>" />

    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />

    <title>Meltdown Music : Records &amp; Gear</title>

    <?php wp_head(); ?>
</head>

<body id="homepage" <?php body_class(); ?>>

    <header id="header" class="header" role="banner">

        <nav class="header__nav">
            <ul>
                <li>
                    <a <?php if( is_page('records') ) : echo 'class="header__nav--disabled"'; endif; ?> <?php if( !is_page('records') ) : echo 'href="' . get_home_url() . '/records"'; endif; ?> title="We buy and sell used records &amp; CDs.">Records</a>
                    <a class="header__nav--mobile<?php if( is_page('gear') ) : echo ' header__nav--disabled'; endif; ?>" <?php if( !is_page('gear') ) : echo 'href="' . get_home_url() . '/gear"'; endif; ?> title="We sell used instruments &amp; music gear on consignment.">Gear</a>
                </li>
                <li>
                    <a class="header__nav--desktop<?php if( is_page('gear') ) : echo ' header__nav--disabled'; endif; ?>" <?php if( !is_page('gear') ) : echo 'href="' . get_home_url() . '/gear"'; endif; ?> title="We sell used instruments &amp; music gear on consignment.">Gear</a>
                </li>
                <li>
                    <a <?php if( !is_page('home') ) : echo 'href="' . get_home_url() . '"'; endif; ?> title="Meltdown Music : Steven Points, WI">
                        <svg class="header__nav--logo" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 492.8 639.11">
                            <defs>
                                <style>
                                    .cls-0 {
                                        fill: #75bf43;
                                    }

                                    .cls-2 {
                                        fill: #fff;
                                    }

                                    .cls-3 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-linecap: round;
                                        stroke-miterlimit: 10;
                                        stroke-width: 4px;
                                    }

                                    .cls-4 {
                                        font-size: 78px;
                                        font-family: 'Luckiest Guy', 'Bowlby One SC', Arial, sans-serif;
                                        text-decoration: none;
                                    }
                                    .cls-4:hover {
                                        text-decoration: none;
                                    }
                                </style>
                            </defs>
                            <title>Meltdown Music Logo</title>
                            <path d="M176.23,444.33a182.45,182.45,0,0,1-31.31-102.5c0-101.26,82.08-183.34,183.33-183.34s183.33,82.08,183.33,183.34a182.68,182.68,0,0,1-15.28,73.39S469.65,466,473.66,518.46c1.31,17.17-5.21,18-5.21,18-6.55,1.52-7.66-8.54-7.66-8.54-4.54-18.35-9.79-14.84-9.79-14.84-6.34-.51-8.31,11.52-8.31,11.52L431,611.39c-.24,13.67-7.1,11.22-7.1,11.22-4.47,0-6-9.44-6-9.44l-8.24-32.66c-5.33-17-19.34-16.57-19.34-16.57C375,561.94,371,574.28,371,574.28c-9.33,18.67-15.65,86.41-15.65,86.41-1.41,12.19-5.42,10.47-5.42,10.47-3.85-.21-4.84-8.78-4.84-8.78L332,606.65c-4.84-12.93-12.32-10.71-12.32-10.71-8.67,0-9.1,11.56-9.1,11.56l-8,91.89c-.79,16.08-5.9,15.11-5.9,15.11-7.63.55-8.69-15-8.69-15l-20.79-135C263.06,543.37,253,545.35,253,545.35c-15.67-1.25-15.71,13.56-15.71,13.56-2.72,17.64-12.28,15.7-12.28,15.7-12.33-.34-10.83-26.62-10.83-26.62-.83-40.29-38-103.72-38-103.72"
                                transform="translate(-62.4 -75.4)" />
                            <circle cx="266.35" cy="266.07" r="40.11" class="cls-0" />
                            <circle cx="266.51" cy="266.07" r="5.83" class="cls-2" />
                            <path d="M181.63,324.94s-14.85,109.5,90.75,154.44" class="cls-3" transform="translate(-62.4 -75.4)" />
                            <path d="M217.86,336.78s-5.11,72.46,66.43,106.27" class="cls-3" transform="translate(-62.4 -75.4)" />
                            <path d="M254.48,339.17s-4.76,41.63,36.9,66.6" class="cls-3" transform="translate(-62.4 -75.4)" />
                            <path d="M476.91,356.66s11.52-108.29-90.75-151.82" class="cls-3" transform="translate(-62.4 -75.4)" />
                            <path d="M439.93,349.51s9.33-73.66-62.21-107.47" class="cls-3" transform="translate(-62.4 -75.4)" />
                            <path d="M403.33,341.83s2.92-40.79-38.74-65.76" class="cls-3" transform="translate(-62.4 -75.4)" />
                            <text class="cls-4" style="text-decoration:none;" transform="translate(86.58 361.09) rotate(-107.94)">
                                m
                            </text>
                            <text class="cls-4" transform="matrix(-0.04, -1, 1, -0.04, 67.25, 297.3)">
                                e
                            </text>
                            <text class="cls-4" transform="translate(65.65 254.73) rotate(-81.8)">
                                l
                            </text>
                            <text class="cls-4" transform="translate(68.64 227.64) rotate(-72.93)">
                                t
                            </text>
                            <text class="cls-4" transform="translate(79.97 189.32) rotate(-61.04)">
                                d
                            </text>
                            <text class="cls-4" transform="matrix(0.67, -0.75, 0.75, 0.67, 100.23, 151.61)">
                                o
                            </text>
                            <text class="cls-4" transform="matrix(0.84, -0.54, 0.54, 0.84, 129.08, 116.16)">
                                w
                            </text>
                            <text class="cls-4" transform="matrix(0.96, -0.28, 0.28, 0.96, 185.89, 81.06)">
                                n
                            </text>
                            <text class="cls-4" transform="translate(233.05 68.67) rotate(-7.25)">

                            </text>
                            <text class="cls-4" transform="translate(247.24 66.83) rotate(-3.17)">

                            </text>
                            <text class="cls-4" transform="translate(260.11 63.17) rotate(8.17)">
                                m
                            </text>
                            <text class="cls-4" transform="matrix(0.91, 0.41, -0.41, 0.91, 325.84, 73.68)">
                                u
                            </text>
                            <text class="cls-4" transform="matrix(0.81, 0.59, -0.59, 0.81, 366.67, 91.95)">
                                s
                            </text>
                            <text class="cls-4" transform="translate(398.31 115.59) rotate(44.58)">
                                i
                            </text>
                            <text class="cls-4" transform="translate(413.91 129.9) rotate(53.01)">
                                c
                            </text>
                        </svg>
                    </a>
                </li>
                <li>
                    <a <?php if( is_page('events') ) : echo 'class="header__nav--disabled"'; endif; ?> <?php if( !is_page('events') ) : echo 'href="' . get_home_url() . '/events"'; endif; ?> title="Record sales, shows, and other special event information.">Events</a>
                    <a class="header__nav--mobile<?php if( is_page('about') ) : echo ' header__nav--disabled'; endif; ?>" <?php if( !is_page('about') ) : echo 'href="' . get_home_url() . '/about"'; endif; ?> title="Hours, location, our humble beginnings, and other info about Meltdown Music.">About</a>
                </li>
                <li>
                    <a class="header__nav--desktop<?php if( is_page('about') ) : echo ' header__nav--disabled'; endif; ?>" <?php if( !is_page('about') ) : echo 'href="' . get_home_url() . '/about"'; endif; ?> title="Hours, location, our humble beginnings, and other info about Meltdown Music.">About</a>
                </li>
            </ul>
        </nav>

    </header>
