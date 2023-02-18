<?php get_header(); ?>
<section class="content">
    <?php get_template_part('nav'); ?>
    <section class="b-white">
        <div class="container">
            <div class="py-4 row">
            <article class="col-lg-9">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile; ?>

                <?php else : get_404_template(); endif; ?>
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