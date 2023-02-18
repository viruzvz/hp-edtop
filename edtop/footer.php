<a class="backtotop"></a>
<footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <figure><img src="<?php bloginfo('template_url'); ?>/assets/logo-branca.29977f09.svg" alt="logo"></figure>
                    <div class="mb-2 text-lg">

                    <?php
                      wp_nav_menu( array(
                          'theme_location'    => 'social',
                          'depth'             => 2,
                          'menu_class'        => 'nav-social nav-footer',
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
                      ?>

                    </div>
                    <p class="c-white"><?php echo get_theme_mod('footer_script'); ?></p>
                </div>
                <!-- <div class="col-md-3">
                    <h4 class="c-white footer-title text-lg"><strong>Menu rápido</strong></h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="link link-footer" href="#"> <i
                                    class="fa-chevron-right fa-solid text-xs">&nbsp;</i>Home</a></li>
                        <li class="mb-2"><a class="link link-footer" href="#"> <i
                                    class="fa-chevron-right fa-solid text-xs">&nbsp;</i>Sobre</a></li>
                        <li class="mb-2"><a class="link link-footer" href="#"> <i
                                    class="fa-chevron-right fa-solid text-xs">&nbsp;</i>Cursos</a></li>
                        <li class="mb-2"><a class="link link-footer" href="#"> <i
                                    class="fa-chevron-right fa-solid text-xs">&nbsp;</i>Artigos</a></li>
                        <li class="mb-2"><a class="link link-footer" href="#"> <i
                                    class="fa-chevron-right fa-solid text-xs">&nbsp;</i>Contatos</a></li>
                    </ul>
                </div> -->
                <div class="col-md-4">
                    <h4 class="c-white footer-title text-lg"><strong>Galeria</strong></h4>
                    <div class="gallery">
                        <?php echo do_shortcode( '[instagram-feed feed=1]' ); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="c-white footer-title text-lg"><strong>Contatos</strong></h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="link link-footer" href="mailto:<?php echo get_theme_mod('E-mail'); ?>">
                                <i class="fa-envelope fa-solid text-danger">&nbsp;</i>
                                <strong><?php echo get_theme_mod('E-mail'); ?></strong>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="link link-footer" href="tel:<?php echo get_theme_mod('Telefone'); ?>">
                                <i class="fa-brands fa-whatsapp text-danger"> &nbsp;</i>
                                <strong><?php echo get_theme_mod('Telefone'); ?></strong>
                            </a>
                        </li>
                        <li>
                            <a class="link" href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo-footer.49e06fb2.svg" alt="Logo Edtop"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fade modal search-modal" id="buscarModal" tabindex="-1" role="dialog" aria-labelledby="buscarModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <?php get_template_part('searchform'); ?>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <div class="copyright">
        <span><?php echo get_theme_mod('footer_title'); ?></span>
        <span>Desenvolvido por <a class="link link-footer" href="https://github.com/viruzvz">Carlos vz</a></span>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/main.js"></script>
</body>

</html>