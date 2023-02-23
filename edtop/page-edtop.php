<?php /* Template name: EDTOP */ ?>
<?php get_header(); ?>
    <section class="content">
        <?php get_template_part('nav'); ?>

        <section class="cursos py-5" id="sec2">

            <?php get_template_part('cursos'); ?>

        </section>
        <section class="py-5 videos">
            <div class="container">
                <div class="baloon-absolute">
                    <div class="baloon">
                        <div class="iplay">
                            <div class="iplay-item"><span class="iplay-hover"><span class="iplay-icon"><i
                                            class="fa-play fas iplay-i"></i></span></span></div>
                        </div>
                        <div class="caption">Assista Mais</div>
                    </div>
                </div>
                <div class="carpet">
                    <div class="carpet-body">
                        <div class="plugin-aiovg">
                        <?php echo do_shortcode( '[aiovg_videos]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 sobre" id="sec3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-md-2"><a class="b-primary mb-4 mtitle mtitle-secondary text-xl3"
                            href="#">Sobre</a>
                        <h2 class="c-primary text-xl3"> <strong>EDTOP:</strong></h2>
                        <p class="c-primary text-lg"><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Explicabo dignissimos accusamus aliquam optio, voluptatum, quam, voluptates esse ipsa
                                maiores itaque nobis perferendis. Vero autem laborum numquam quas est laboriosam
                                voluptas!</strong></p>
                        <div class="media"><img class="align-self-start mr-3" src="assets/ellipse.8ee61ae1.png"
                                alt="Imagem Professor Fernando">
                            <div class="media-body">
                                <h3 class="bgrounded mt-0 text-white text-xl"><span class="text-danger">Professor:
                                    </span>Fernando Marinha</h3>
                                <p class="bgrounded text-white">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                    metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                    tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                    lacinia congue felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="c-primary mb-4 text-xl6"><strong>Cursos em PDF</strong></h2>
                            </div>
                            <div class="col-lg-6">
                                <figure><img class="img-fluid max-50" src="assets/book1.ff74cf91.png" alt="apostila"></figure>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li class="c-primary mb-4 text-border text-lg"><i
                                            class="fa-circle-check fa-solid text-danger">&nbsp; </i><strong>PDF +
                                            VÍDEO</strong></li>
                                    <li class="c-primary mb-4 text-border text-lg"><i
                                            class="fa-circle-check fa-solid text-danger">&nbsp; </i><strong>Constituição
                                            concursos</strong></li>
                                    <li class="c-primary mb-4 text-border text-lg"><i
                                            class="fa-circle-check fa-solid text-danger">&nbsp; </i><strong>Atividade
                                            legislativa</strong></li>
                                    <li class="c-primary mb-4 text-border text-lg"><i
                                            class="fa-circle-check fa-solid text-danger">&nbsp; </i><strong>Operações
                                            táticas</strong></li>
                                    <li class="c-primary mb-4 text-border text-lg"><i
                                            class="fa-circle-check fa-solid text-danger">&nbsp; </i><strong>Judiciário e
                                            penal</strong></li>
                                    <li class="c-primary mb-4 text-border text-lg"><i
                                            class="fa-circle-check fa-solid text-danger">&nbsp; </i><strong>Aplicações e
                                            provas</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="edtop">
            <div class="hero-item">
                <figure class="m-0 text-center"><img class="img-fluid w-50" src="<?php bloginfo('template_url'); ?>/assets/logo-primary.8fc009a8.svg"
                        alt="Logo Oficial"></figure>
            </div>
        </section>
        <section class="contatos" id="sec4">
            <div class="contatos-frendly py-5">
                
                <?php get_template_part('contatos'); ?>

            </div>
        </section>
    </section>
<?php get_footer(); ?>