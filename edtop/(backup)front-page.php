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
        <div class="container">
          
          <div class="py-4 row">
          <?php  
            $my_args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'category_name' => 'destaque'
            );

            // query
            $my_query = new WP_Query ($my_args);
            ?>

            <?php if( $my_query->have_posts()) : while( $my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="col-md-4">
              <div class="card">
                <?php if ( has_post_thumbnail() ) : ?>
                  <a 
                    class="embed-responsive embed-responsive-3by2" 
                    href="<?php the_permalink(); ?>" 
                    title="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail('large', array('class' => 'object-fit embed-responsive-item rounded')); ?>
                  </a>
                <?php endif; ?>
                <div class="card-body">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <a class="btn btn-danger" href="<?php the_permalink(); ?>"> <i class="fa-eye fa-solid">&nbsp;</i>Veja mais</a>
                </div>
              </div>
            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
          </div>
      </div>
      <section class="b-white">
        <div class="container">
          <div class="py-4 row">
            <article class="col-lg-9">
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  
                <?php get_template_part('content', get_post_format()); ?>

              <?php endwhile; ?>
              <?php else : get_404_template(); endif; ?>
              
              <div class="paginacao">
                <span class="next"><?php next_posts_link(); ?></span> <span class="previous"><?php previous_posts_link(); ?></span>
              </div>
            </article>
            <?php get_sidebar(); ?>
          </div>
          <div class="row">
            <div class="col-12 py-5"><div class="divider"></div></div>
            <div class="col-12 mb-5">
              <?php get_template_part('banner'); ?>
            </div>
          </div>
        </div>
      </section>
    </section>
    </section>
<?php get_footer(); ?>