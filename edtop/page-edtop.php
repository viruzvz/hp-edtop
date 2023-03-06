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

            <?php get_template_part('sobre'); ?>

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