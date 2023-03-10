<nav class="nav-primary navbar navbar-expand-lg" role="navigation">
    <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/logo1.3888a31f.svg" alt="Logo"></a>

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