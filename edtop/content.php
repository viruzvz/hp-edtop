<?php if( is_single() ) : ?>

    <article class="dotted mb-4 posts">
        <figure>
            <?php if ( has_post_thumbnail() ) : ?>
            <figure class="m-0 embed-responsive embed-responsive-3by2" >
                <?php the_post_thumbnail('large', array('class' => 'object-fit embed-responsive-item rounded')); ?>
            </figure>
            <?php endif; ?>
        </figure>
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php the_content(); ?>
        <small>
            <i class="fa-calendar-days fa-solid">&nbsp;</i>Publicado em:
            <div class="badge badge-danger"><?php echo get_the_date(); ?></div>
            &nbsp;<i class="fa-solid fa-user">&nbsp;</i>Por:
            <div class="badge badge-secondary"><?php echo get_the_author_meta('display_name', $author_id); ?></div>
        </small>
    </article>
    <div>
        <?php comments_template(); ?>
    </div>

<?php else : ?>

    <article class="dotted mb-4 posts zoom">
        <figure>
            <?php if ( has_post_thumbnail() ) : ?>
            <a 
                class="embed-responsive embed-responsive-3by2" 
                href="<?php the_permalink(); ?>" 
                title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('large', array('class' => 'object-fit embed-responsive-item rounded')); ?>
            </a>
            <?php endif; ?>
        </figure>
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php the_excerpt(); ?>
        <small>
            <i class="fa-calendar-days fa-solid">&nbsp;</i>Publicado em:
            <div class="badge badge-danger"><?php echo get_the_date(); ?></div>
            &nbsp;<i class="fa-solid fa-user">&nbsp;</i>Por:
            <div class="badge badge-secondary"><?php echo get_the_author_meta('display_name', $author_id); ?></div>
        </small>
    </article>

<?php endif; ?>