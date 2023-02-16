<?php get_header(); ?>
<section class="content">
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
    <section class="page b-white">
        <div class="container">
            <div class="row">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>   
                <div class="col-12">
                    <div class="py-4">
                        <span class="mb-4 mtitle mtitle-danger text-xl"><?php the_title(); ?></span>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php else : get_404_template(); endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 py-5"><div class="divider"></div></div>
                <div class="col-12 mb-5">
                    <?php require 'banner.php'; ?>
                </div>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>