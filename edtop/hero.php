<div class="hero">
        <div class="hero-bg">
            <div class="hero-bg2">

            <?php 
            $my_args_hero = array(
                'post_type' => 'hero',
                'posts_per_page' => 1,
            );
            $my_query_hero = new WP_Query ( $my_args_hero ); 
            ?>

            <?php if( $my_query_hero->have_posts()) : while( $my_query_hero->have_posts() ) : $my_query_hero->the_post(); ?>
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'hero-prog img-fluid')) ?>
                        <div class="container">
                            <div class="align-items-center h-100 row">
                                <div class="col-sm-8">
                                    <article>
                                        <?php the_content(); ?>
                                    </article>
                                </div>
                            </div>
                        </div>
            <?php endwhile; endif; ?>

            <?php wp_reset_query(); ?>



        </div>
    </div>
</div>







