<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta <?php bloginfo('charset'); ?>>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Escola de doutrinas de técnicas operacionais, vídeo aulas, apostilas digitais." />
        <meta name="keywords" content="Vídeos, PDF, Concursos, Polícia Legislativa" />
        <meta name="author" body />

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/home.d1cd25c2.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/dist/theme.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-57x57.d701533f.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-60x60.9282f970.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-72x72.f8b1fe16.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-76x76.d3af895f.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-114x114.9059cf95.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-120x120.4d33d148.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-144x144.2920c716.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-152x152.c9b2a73a.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-180x180.90fa137b.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_url'); ?>/assets/favicon/android-icon-192x192.cc9c1430.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-32x32.45d22324.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-96x96.e52e12e9.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-16x16.1f9296ce.png" />
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon.a0a9fd3d.ico" sizes="any" />
        <link rel="icon" type="image/svg+xml" href="<?php bloginfo('template_url'); ?>/assets/favicon/icon.76507ad8.svg" />
        <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/favicon/manifest.webmanifest" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/favicon/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />

        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <nav class="nav-global">
                <a class="link" href="<?php echo get_home_url(); ?>">
                    <figure class="title-global">
                     
                        <?php if( has_custom_logo() ):  ?>
                        <?php 
                            // Get Custom Logo URL
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            $custom_logo_url = $custom_logo_data[0];
                        ?>

                            <img class="img-fluid" src="<?php echo esc_url( $custom_logo_url ); ?>" 
                                alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

                        <?php else: ?>
                            <div class="site-name"><?php bloginfo( 'name' ); ?></div>
                        <?php endif; ?>

                        <figcaption><?php echo get_bloginfo('description');?></figcaption>
                    </figure>
                </a>
                <div class="nav-interative">
                    <a class="d-lg-block d-none link link-primary" href="#" title="buscar" data-toggle="modal" data-target="#buscarModal"><i class="fa-magnifying-glass fa-solid"></i></a><span class="mx-3">|</span>
                    <?php
                      wp_nav_menu( array(
                          'theme_location'    => 'social',
                          'depth'             => 2,
                          'menu_class'        => 'nav-social',
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
                      ?>
                </div>
            </nav>
            <?php get_template_part('hero'); ?>
        </header>
    </body>
</html>
