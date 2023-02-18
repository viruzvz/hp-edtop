<?php /* Template name: Sem barra lateral */ ?>

<?php get_header(); ?>
<section class="content">
    <?php get_template_part('nav'); ?>
    <section class="page b-white py-4">
        <div class="container">
            <div class="row">
                <article class="col-12">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>   
                    
                        <div class="page">
                            <span class="mb-4 mtitle mtitle-danger text-xl"><?php the_title(); ?></span>
                            <?php the_content(); ?>

                        </div>
                    <?php endwhile; ?>
                    <?php else : get_404_template(); endif; ?>
                </article>
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