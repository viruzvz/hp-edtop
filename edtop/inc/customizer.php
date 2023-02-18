<?php 

function cursetheme_customize_register($wp_customize) {

    //Rodapé
    $wp_customize -> add_section('footer', array(
        'title' => __('Rodapé', 'cursetheme'),
        'description' => sprintf(__('Opções para o rodapé','cursetheme')),
        'priority' => 1
    ));

    $wp_customize -> add_setting('footer_title', array(
        'default' => _x('Todos os direitos reservados https://www.edtop.org.br', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_title',array(
        'label' => __('Título do rodapé', 'cursetheme'),
        'section' => 'footer',
        'priority' => 1
    ));

    $wp_customize -> add_setting('footer_script', array(
        'default' => _x('Descreva um resumo do site aqui', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_script',array(
        'label' => __('Descrição do site', 'cursetheme'),
        'section' => 'footer',
        'priority' => 2
    ));

    //Contatos
    $wp_customize -> add_section('contatos', array(
        'title' => __('Contatos', 'cursetheme'),
        'description' => sprintf(__('Opções para o contatos','cursetheme')),
        'priority' => 2
    ));

    $wp_customize -> add_setting('E-mail', array(
        'default' => _x('meu@email.com', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('E-mail',array(
        'label' => __('Email de contato', 'cursetheme'),
        'section' => 'contatos',
        'priority' => 1
    ));

    $wp_customize -> add_setting('Telefone', array(
        'default' => _x('+5561 98230-1562', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('Telefone',array(
        'label' => __('Telefone de contato', 'cursetheme'),
        'section' => 'contatos',
        'priority' => 2
    ));

    //Banner
    $wp_customize -> add_section('banner', array(
        'title' => __('Banner', 'cursetheme'),
        'description' => sprintf(__('Opções para o banner','cursetheme')),
        'priority' => 3
    ));

    $wp_customize -> add_setting('Banner', array(
        'default' => _x('Texto para o banner', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('Banner',array(
        'label' => __('Texto para o banner', 'cursetheme'),
        'section' => 'banner',
        'priority' => 1
    ));

    $wp_customize -> add_setting('Banner-link', array(
        'default' => _x('#', 'cursetheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('Banner-link',array(
        'label' => __('Link para o banner', 'cursetheme'),
        'section' => 'banner',
        'priority' => 1
    ));

}

add_action('customize_register','cursetheme_customize_register');

?>