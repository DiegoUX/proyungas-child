<?php 
add_action('init','create_post_type_integrante_comite_coordinacion'); // Add our integrante_comite_coordinacion Custom Post Type

// add_action('init','create_post_type_integrante_comite_asesor'); // Add our integrante_comite_asesor Custom Post Type
// add_action('init','create_post_type_integrante_fortalecimiento'); // Add our integrante_fortalecimiento Custom Post Type

function create_post_type_integrante_comite_coordinacion()
{
    register_taxonomy_for_object_type('category', 'integrante_comite_coordinacion'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'integrante_comite_coordinacion');
    register_post_type('integrante_comite_coordinacion', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('integrantes_comite_coordinacion', 'integrante_comite_coordinacion'), // Rename these to suit
            'singular_name' => __('', 'integrante_comite_coordinacion'),
            'add_new' => __('Agregar nuevo', 'integrante_comite_coordinacion'),
            'add_new_item' => __('Agregar nuevo integrante del Comite de Coordinación', 'integrante_comite_coordinacion'),
            'edit' => __('Editar', 'integrante_comite_coordinacion'),
            'edit_item' => __('Editar integrante del Comite de Coordinación', 'integrante_comite_coordinacion'),
            'new_item' => __('Nueva integrante del Comite de Coordinación', 'integrante_comite_coordinacion'),
            'view' => __('Leer más', 'integrante_comite_coordinacion'),
            'view_item' => __('Leer más', 'integrante_comite_coordinacion'),
            'search_items' => __('Buscar integrante del Comite de Coordinación', 'integrante_comite_coordinacion'),
            'not_found' => __('No se encontró integrantes del Comite de Coordinación', 'integrante_comite_coordinacion'),
            'not_found_in_trash' => __('No se encontró integrantes del Comite de Coordinación en Trash', 'integrante_comite_coordinacion')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

// function create_post_type_integrante_comite_asesor()
// {

// }

// function create_post_type_integrante_fortalecimiento()
// {

// } ?>