<?php get_header(); ?>
<section class="content">
    <?php get_template_part('nav'); ?>
    <section class="page b-white py-4">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-sm-12">

                <span class="mb-4 mtitle mtitle-danger text-xl">Error 404 - Página não encontrada</span>

                <p><strong>O caminho para o conteúdo que você deseja acessar está errado ou a página pode ter sido excluída.</strong></p>
                <p>Esperimente realizar uma busca para encontrar o conteúdo que deseja.</p>

                </div>

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