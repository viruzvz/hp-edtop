<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta <?php bloginfo('charset'); ?>>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Escola de doutrinas de técnicas operacionais, vídeo aulas, apostilas digitais." />
        <meta name="keywords" content="Vídeos, PDF, Concursos, Polícia Legislativa" />
        <meta name="author" body />

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/index.ce6916db.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.d701533f.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.9282f970.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.f8b1fe16.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.d3af895f.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.9059cf95.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.4d33d148.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.2920c716.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.c9b2a73a.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.90fa137b.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.cc9c1430.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.45d22324.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.e52e12e9.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.1f9296ce.png" />
        <link rel="icon" href="assets/favicon/favicon.a0a9fd3d.ico" sizes="any" />
        <link rel="icon" type="image/svg+xml" href="assets/favicon/icon.76507ad8.svg" />
        <link rel="manifest" href="assets/favicon/manifest.webmanifest" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />

        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <nav class="nav-global">
                <figure class="title-global">
                    <img src="assets/logo1.3888a31f.svg" alt />
                    <figcaption><?php echo get_bloginfo('description');?></figcaption>
                </figure>
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
                    <!-- <a class="link link-facebook" href="#" title="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a class="link link-instagram" href="#" title="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a class="link link-whatsapp" href="#" title="whatsapp"><i class="fa-brands fa-whatsapp"></i></a> -->
                </div>
            </nav>
            <div class="hero">
                <div class="hero-bg">
                    <div class="hero-bg2">
                        <img class="hero-prog img-fluid" src="assets/marinha.065b64a7.png" alt />
                        <div class="container">
                            <div class="align-items-center h-100 row">
                                <div class="col-sm-8">
                                    <article>
                                        <span class="mb-4 mtitle mtitle-secondary">Nós criamos produtos digitais</span>
                                        <h1 class="c-white mb-4 text-xl6"><strong>Provendo cursos online</strong></h1>
                                        <p class="c-white mb-4 text-xl"><strong>Conteúdos para consurso público, legislação, constituição, polícia legislativa.</strong></p>
                                        <div>
                                            <a class="btn btn-danger" href="#" title="Começe agora"><strong>Comece agora &nbsp;</strong><i class="fa-circle-arrow-right fa-solid"></i></a>
                                            <span class="ml-4">
                                                <div class="iplay">
                                                    <div class="iplay-item">
                                                        <a class="iplay-hover" href>
                                                            <span class="iplay-icon"><i class="fa-play fas iplay-i"></i></span><span class="iplay-caption">Assista agora</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
