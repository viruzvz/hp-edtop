<?php get_header(); ?>

<?php get_header(); ?>
<section class="content">
    <?php get_template_part('nav'); ?>
    <section class="b-white">
        <div class="container">
            <div class="py-4 row">
                <div class="col-12">
                    <span class="mb-4 mtitle mtitle-danger text-xl">Pesquisa:</span>
                    <span class="c-primary text-xl2"> 
        
                        <?php 
                            // Se houver resultados exibe o conteúdo, se não exibe um formuládio de buscas
                            if (is_search()) :
                                $total_results = $wp_query->found_posts;

                                echo "<h3 class='mb-3'>" . sprintf( __('%s resultado(s) para "%s"','BS 4 + WP'), $total_results, get_search_query()) . "</h3>";

                            endif;
                        ?>

                    </span>
                </div>
                <article class="col-lg-9">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <a class="link link-primary mb-4 media" href="<?php the_permalink(); ?>">


                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'object-fit img-fluid mr-3 rounded w-25')); ?>
                            <?php endif; ?>


                            <div class="media-body">
                                <h5 class="mt-0"><?php the_title(); ?></h5>
                                <small>
                                    <i class="fa-calendar-days fa-solid">&nbsp;</i>Publicado em:
                                    <div class="badge badge-danger"><?php echo get_the_date(); ?></div>
                                    &nbsp;<i class="fa-solid fa-user">&nbsp;</i>Por:
                                    <div class="badge badge-secondary"><?php echo get_the_author_meta('display_name', $author_id); ?></div>
                                </small>
                            </div>
                        </a>
                        <hr>
                    <?php endwhile; ?>
                    <?php else :
                        echo "<p>Sua busca não econtrou resultados. Use o formulário abaixo para refazer a busca.</p>";
                        get_search_form();  
                        endif; ?>

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
<?php get_footer(); ?>