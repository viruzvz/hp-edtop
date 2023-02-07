<?php

// Função chamar a tag title
function cursetheme_title_tag() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cursetheme_title_tag');

// previnir o erro na tag title versoes antigas

if(!function_exists('_wp_render_title_tag')) {
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

?>