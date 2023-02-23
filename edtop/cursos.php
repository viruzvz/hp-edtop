<div class="container">
    <div class="row">

        <?php 
            $my_args_cursos = array(
                'post_type' => 'cursos',
                'posts_per_page' => 1,
            );
            $my_query_cursos = new WP_Query ( $my_args_cursos ); 
        ?>

        <?php if( $my_query_cursos->have_posts()) : while( $my_query_cursos->have_posts() ) : $my_query_cursos->the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; endif; ?>

        <?php wp_reset_query(); ?>
        
        <div class="col-12 py-5">
            <div class="divider"></div>
        </div>
        <div class="col-12">
            <?php require 'banner.php'; ?>
        </div>
    </div>
</div>
