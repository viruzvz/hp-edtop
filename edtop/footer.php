<a class="backtotop"></a>
<footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <figure><img src="assets/logo-branca.29977f09.svg" alt="logo"></figure>
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
                    <p class="c-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolores quos fugit
                        adipisci at amet velit autem laudantium nesciunt quo deserunt modi sunt, nostrum praesentium
                        doloribus. Quia corrupti quasi voluptas!</p>
                </div>
                <div class="col-md-3">
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
                </div>
                <div class="col-md-3">
                    <h4 class="c-white footer-title text-lg"><strong>Galeria</strong></h4>
                    <div class="gallery"><a href="#"><img class="img-fluid rounded"
                                src="https://unsplash.it/300/300?random&amp;amp;seed=1" alt></a><a href="#"><img
                                class="img-fluid rounded" src="https://unsplash.it/300/300?random&amp;amp;seed=2"
                                alt></a><a href="#"><img class="img-fluid rounded"
                                src="https://unsplash.it/300/300?random&amp;amp;seed=3" alt></a><a href="#"><img
                                class="img-fluid rounded" src="https://unsplash.it/300/300?random&amp;amp;seed=4"
                                alt></a><a href="#"><img class="img-fluid rounded"
                                src="https://unsplash.it/300/300?random&amp;amp;seed=5" alt></a><a href="#"><img
                                class="img-fluid rounded" src="https://unsplash.it/300/300?random&amp;amp;seed=6"
                                alt></a><a href="#"><img class="img-fluid rounded"
                                src="https://unsplash.it/300/300?random&amp;amp;seed=7" alt></a><a href="#"><img
                                class="img-fluid rounded" src="https://unsplash.it/300/300?random&amp;amp;seed=8"
                                alt></a><a href="#"><img class="img-fluid rounded"
                                src="https://unsplash.it/300/300?random&amp;amp;seed=9" alt></a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="c-white footer-title text-lg"><strong>Contatos</strong></h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="link link-footer" href="#"><i
                                    class="fa-envelope fa-solid text-danger">
                                    &nbsp;</i><strong>contato@edtop.com.br</strong></a></li>
                        <li class="mb-2"><a class="link link-footer" href="#"><i
                                    class="fa-brands fa-whatsapp text-danger"> &nbsp;</i><strong>+55 61
                                    98230-1562</strong></a></li>
                        <li><a href="#"><img class="img-fluid" src="assets/logo-footer.49e06fb2.svg" alt="Logo Edtop"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fade modal search-modal" id="buscarModal" tabindex="-1" role="dialog"
            aria-labelledby="buscarModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <?php require 'searchform.php'; ?>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <div class="copyright"><span>Copyright ® 2023. Todos os direitos reservados
            https://www.edtop.org.br</span><span>Desenvolvido por <a class="link link-footer" href="#">Carlos
                vz</a></span></div>
                <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/main.js"></script>
</body>

</html>