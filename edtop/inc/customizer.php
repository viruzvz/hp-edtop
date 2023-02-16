<?php 

function cursetheme_customize_register($wp_customize) {

    //Rodapé
    $wp_customize -> add_section('footer', array(
        'title' => __('Rodapé', 'cursetheme'),
        'description' => sprintf(__('Opções para o rodapé','cursetheme')),
        'priority' => 20
    ));

    $wp_customize -> add_setting('footer_title', array(
        'default' => _x('Meu primeiro tema de WordPress', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_title',array(
        'label' => __('Título do rodapé', 'cursetheme'),
        'section' => 'footer',
        'priority' => 1
    ));

    $wp_customize -> add_setting('footer_text', array(
        'default' => _x('Feito por mim com muita dedicação e esforço', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text',array(
        'label' => __('Texto do rodapé', 'cursetheme'),
        'section' => 'footer',
        'priority' => 2
    ));
}

add_action('customize_register','bs4wp_customize_register');