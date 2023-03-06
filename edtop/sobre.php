<div class="container">
    <div class="row">


    <?php 
            $my_args_sobre = array(
                'post_type' => 'sobre',
                'posts_per_page' => 1,
            );
            $my_query_sobre = new WP_Query ( $my_args_sobre ); 
        ?>

        <?php if( $my_query_sobre->have_posts()) : while( $my_query_sobre->have_posts() ) : $my_query_sobre->the_post(); ?>


        <?php the_content(); ?>

    <?php endwhile; endif; ?>

    <?php wp_reset_query(); ?>



    </div>
</div>