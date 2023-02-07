<?php get_header(); ?>
    <section class="content">
        <!-- <nav class="nav-primary navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><img src="assets/logo1.3888a31f.svg" alt="Logo"></a>
            <div class="buttons"><button class="btn btn-primary navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><i class="fa-bars fa-solid"></i></button> <a
                    class="btn btn-primary navbar-toggler" href="#" title="buscar" data-toggle="modal"
                    data-target="#buscarModal"><i class="fa-magnifying-glass fa-solid"></i></a></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav-ul">
                    <li class="active sec1"><a class="link link-nav" href="#">Home</a></li>
                    <li class="sec2"><a class="link link-nav" href="#sec2">Cursos</a></li>
                    <li class="sec3"><a class="link link-nav" href="#sec3">Sobre</a></li>
                    <li><a class="link link-nav" href="#">Artigos</a></li>
                    <li class="sec4"><a class="link link-nav" href="#sec4">Contatos</a></li>
                </ul>
            </div>
        </nav> -->







        <nav class="nav-primary navbar navbar-expand-lg" role="navigation">
            <a class="navbar-brand" href="#"><img src="assets/logo1.3888a31f.svg" alt="Logo"></a>
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="buttons">
                <button class="btn btn-primary navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-bars fa-solid"></i></button> 
                <a class="btn btn-primary navbar-toggler" href="#" title="buscar" data-toggle="modal" data-target="#buscarModal">
                    <i class="fa-magnifying-glass fa-solid"></i>
                </a>
            </div>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'principal',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'nav-ul',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
           
        </nav>











        <section class="cursos py-5" id="sec2">
            <div class="container">
                <div class="row">
                    <div class="col-12"><span class="mb-4 mtitle mtitle-danger text-xl">Cursos</span></div>
                    <div class="col-lg-6">
                        <h2 class="c-primary mb-4 text-xl7"><strong>Vídeos Aulas</strong></h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, officiis assumenda quasi
                            tenetur placeat voluptate aliquam optio rerum laboriosam similique dolore perspiciatis quis,
                            quas eaque nemo soluta velit sit. Perspiciatis.</p>
                        <div class="group-span mb-4"><span class="mx-2"><i
                                    class="fa-circle-check fa-solid text-success">&nbsp;</i>Lorem Ipsum toxy</span><span
                                class="mx-2"><i class="fa-circle-check fa-solid text-success">&nbsp;</i>Lorem Ipsum toxy
                                amenium</span><span class="mx-2"><i
                                    class="fa-circle-check fa-solid text-success">&nbsp;</i>Lorem Ipsum toxy
                                amenium</span></div>
                        <div class="group-span mb-4"><span class="mx-2"><i
                                    class="fa-circle-check fa-solid text-success">&nbsp;</i>Lorem Ipsum toxy</span><span
                                class="mx-2"><i class="fa-circle-check fa-solid text-success">&nbsp;</i>Lorem Ipsum toxy
                                amenium</span><span class="mx-2"><i
                                    class="fa-circle-check fa-solid text-success">&nbsp;</i>Lorem Ipsum toxy
                                amenium</span></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-4by3"><iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/vx8myzXw8cA"></iframe></div>
                    </div>
                    <div class="col-12 py-5">
                        <div class="divider"></div>
                    </div>
                    <div class="col-12">
                        <div class="banner">
                            <div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus,
                                dolorum!</div><a class="btn btn-danger btn-xl" href="#"
                                title="Adquirir todos os Cursos"><strong>Adquirir Todos os Cursos </strong><i
                                    class="fa-circle-arrow-right fa-solid"></i></a><img class="left-b"
                                src="assets/left-b.0f6f57cc.svg"><img class="right-b" src="assets/right-b.aa6db2d3.svg">
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="players">
                            <div class="embed-responsive embed-responsive-4by3 players-item"><iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/qyKLKVCJ7Rg"></iframe></div>
                            <div class="embed-responsive embed-responsive-4by3 players-item"><iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/3aNeO8ti7M8"></iframe></div>
                            <div class="embed-responsive embed-responsive-4by3 players-item"><iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/kt_bi_4Ind0"></iframe></div>
                            <div class="embed-responsive embed-responsive-4by3 players-item"><iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/gBiqwvzrYJ4"></iframe></div>
                            <div class="embed-responsive embed-responsive-4by3 players-item"><iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/7Hl2DDPueeA"></iframe></div>
                            <div class="embed-responsive embed-responsive-4by3 players-item"><iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/DKUmf_G3Ld0"></iframe></div>
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
                <figure class="m-0 text-center"><img class="img-fluid w-50" src="assets/logo-primary.8fc009a8.svg"
                        alt="Logo Oficial"></figure>
            </div>
        </section>
        <section class="contatos" id="sec4">
            <div class="contatos-frendly py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="carpet">
                                <div class="carpet-header"><a class="link link-primary mr-4" href="#"
                                        title="Entre em contato"><i class="fa-envelope fa-solid text-danger">
                                            &nbsp;</i><strong>Entre em contato</strong></a><a
                                        class="link link-primary mr-4" href="#" title="Telefone"><i
                                            class="fa-phone fa-solid text-danger"></i></a><a class="link link-primary"
                                        href="#" title="whatsapp"><i class="fa-brands fa-whatsapp text-danger">
                                            &nbsp;</i><strong>+55 61 98230-1562</strong></a></div>
                                <div class="carpet-body">
                                    <form class="contact-form">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group"><input class="form-control" type="text"
                                                        id="name" placeholder="Nome:"></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group"><input class="form-control" type="text"
                                                        id="sname" placeholder="Sobre nome:"></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><input class="form-control"
                                                id="exampleFormControlInput1" type="email"
                                                placeholder="name@example.com"></div>
                                        <div class="form-group"><select class="form-control js-my-select"
                                                id="exampleFormControlSelect1">
                                                <option>Selecione</option>
                                                <option value="Trabalhe-com-a-Taurus">Trabalhe-com-a-Taurus</option>
                                                <option value="dois">2</option>
                                                <option value="tres">3</option>
                                                <option value="quatro">4</option>
                                            </select></div>
                                        <div class="d-none form-group js-my-file Trabalhe-com-a-Taurus um"><input
                                                type="file"></div>
                                        <div class="form-group"><textarea class="form-control"
                                                id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Mensagem"></textarea></div>
                                        <div class="form-group">
                                            <div class="text-right"><a class="btn btn-danger d-block" href="#"> ENVIAR
                                                    &nbsp;<span class="float-right"><i
                                                            class="fa-envelope fa-solid"></i></span></a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php get_footer(); ?>