<?php

// Chamar a tag Title e adicionar os formatos de posts
function cursetheme_theme_support() {

    // Chamar a tag Title
    add_theme_support('title-tag');

    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image'));

    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'cursetheme_theme_support');

// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function cursetheme_render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head', 'cursetheme_render_title');
}
// registra o Custom Navigation Walker

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'cursetheme'),
    'social' => __('Menu social', 'cursetheme')
));

// Definir as miniaturas dos posts
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280, 720, true );

// Definir o tamanho do resumo
add_filter('excerpt_length', function($length){
    return 50;
});

// Definir o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes($class) {
    $template = 
    'class="btn btn-danger"';
    return strtr($template, array('$str' => '$class'));
}

register_sidebar(
    array (
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="mb-4 widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title-wrapper"><div class="title-line"><span>',
        'after_title' => '</span></div></div>',
));

// Criar o campo de busca
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<div class="blog-search">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));

// Ativar o fomrulário para respostas nos comentários
function theme_queue_js() {
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts', 'theme_queue_js');

// Personalizar os comentários
function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">

                <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
                <h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
            
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

            </div>
        </div>

    <?php

}

// Criar o tipo de post para o hero
function create_post_type() {

    register_post_type('hero',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Hero'),
            'singular_name' => __('Hero')
        ),
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'hero'),
    ));

    register_post_type('cursos',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Cursos'),
            'singular_name' => __('Cursos')
        ),
        
        'supports' => array(
            'title', 'editor', 'author'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'cursos'),
    ));
}
//Iniciar o tipo de post
add_action('init', 'create_post_type');

// Incluir as funções de personalização
require get_template_directory(). '/inc/customizer.php';

?>
