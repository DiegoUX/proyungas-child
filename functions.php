<?php 
add_action('init', 'create_post_type_publication'); // Add our Publication Custom Post Type
add_action('init','create_post_type_proyect'); // Add our Proyect Custom Post Type
add_action('init', 'create_post_type_pasante'); // Add our Pasante Custom Post Type
add_action('init', 'create_post_type_team_member'); // Add our team member Custom Post Type
add_action('init', 'create_post_type_grafico'); // Add our Grafico Custom Post Type
add_action('init', 'create_post_type_servicio'); // Add our Servicio Custom Post Type

function create_post_type_publication()
{
    register_taxonomy_for_object_type('category', 'publication'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'publication');
    register_post_type('publication', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('publicaciones', 'publicacion'), // Rename these to suit
            'singular_name' => __('', 'publicacion'),
            'add_new' => __('Agregar nueva', 'publicacion'),
            'add_new_item' => __('Agregar nueva publicación', 'publicacion'),
            'edit' => __('Editar', 'publicacion'),
            'edit_item' => __('Editar publicación', 'publicacion'),
            'new_item' => __('Nueva publicación', 'publicacion'),
            'view' => __('Leer más', 'publicacion'),
            'view_item' => __('Leer más', 'publicacion'),
            'search_items' => __('Buscar publicación', 'publicacion'),
            'not_found' => __('No se encontró publicaciones', 'publicacion'),
            'not_found_in_trash' => __('No se encontró publicaciones en Trash', 'publicacion')
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

function create_post_type_proyect()
{
    register_taxonomy_for_object_type('category', 'proyect'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'proyect');
    register_post_type('proyect', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('proyectos', 'proyecto'), // Rename these to suit
            'singular_name' => __('', 'proyecto'),
            'add_new' => __('Agregar nuevo', 'proyecto'),
            'add_new_item' => __('Agregar nuevo proyecto', 'proyecto'),
            'edit' => __('Editar', 'proyecto'),
            'edit_item' => __('Editar proyecto', 'proyecto'),
            'new_item' => __('Nuevo proyecto', 'proyecto'),
            'view' => __('Leer más', 'proyecto'),
            'view_item' => __('Leer más', 'proyecto'),
            'search_items' => __('Buscar proyecto', 'proyecto'),
            'not_found' => __('No se encontró el proyecto', 'proyecto'),
            'not_found_in_trash' => __('No se encontró proyectos en Trash', 'proyecto')
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
function create_post_type_pasante(){
    register_taxonomy_for_object_type('category', 'pasante'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'pasante');
    register_post_type('pasante', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('pasantes', 'pasante'), // Rename these to suit
            'singular_name' => __('', 'pasante'),
            'add_new' => __('Agregar nuevo', 'pasante'),
            'add_new_item' => __('Agregar nuevo pasante', 'pasante'),
            'edit' => __('Editar', 'pasante'),
            'edit_item' => __('Editar pasante', 'pasante'),
            'new_item' => __('Nuevo pasante', 'pasante'),
            'view' => __('Leer más', 'pasante'),
            'view_item' => __('Leer más', 'pasante'),
            'search_items' => __('Buscar pasante', 'pasante'),
            'not_found' => __('No se encontró el pasante', 'pasante'),
            'not_found_in_trash' => __('No se encontró pasantes en Trash', 'pasante')
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

function create_post_type_team_member(){
    register_taxonomy_for_object_type('category', 'team_member'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'team_member');
    register_post_type('team_member', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('team_members', 'team_member'), // Rename these to suit
            'singular_name' => __('', 'team_member'),
            'add_new' => __('Agregar nuevo', 'team_member'),
            'add_new_item' => __('Agregar nuevo team_member', 'team_member'),
            'edit' => __('Editar', 'team_member'),
            'edit_item' => __('Editar team_member', 'team_member'),
            'new_item' => __('Nuevo team_member', 'team_member'),
            'view' => __('Leer más', 'team_member'),
            'view_item' => __('Leer más', 'team_member'),
            'search_items' => __('Buscar team_member', 'team_member'),
            'not_found' => __('No se encontró el team_member', 'team_member'),
            'not_found_in_trash' => __('No se encontró team_members en Trash', 'team_member')
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

function create_post_type_grafico(){
    register_taxonomy_for_object_type('category', 'grafico'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'grafico');
    register_post_type('grafico', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('graficos', 'grafico'), // Rename these to suit
            'singular_name' => __('', 'grafico'),
            'add_new' => __('Agregar nuevo', 'grafico'),
            'add_new_item' => __('Agregar nuevo grafico', 'grafico'),
            'edit' => __('Editar', 'grafico'),
            'edit_item' => __('Editar grafico', 'grafico'),
            'new_item' => __('Nuevo grafico', 'grafico'),
            'view' => __('Leer más', 'grafico'),
            'view_item' => __('Leer más', 'grafico'),
            'search_items' => __('Buscar grafico', 'grafico'),
            'not_found' => __('No se encontró el grafico', 'grafico'),
            'not_found_in_trash' => __('No se encontró graficos en Trash', 'grafico')
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

function create_post_type_servicio(){
    register_taxonomy_for_object_type('category', 'servicio'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'servicio');
    register_post_type('servicio', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('servicios', 'servicio'), // Rename these to suit
            'singular_name' => __('', 'servicio'),
            'add_new' => __('Agregar nuevo', 'servicio'),
            'add_new_item' => __('Agregar nuevo servicio', 'servicio'),
            'edit' => __('Editar', 'servicio'),
            'edit_item' => __('Editar servicio', 'servicio'),
            'new_item' => __('Nuevo servicio', 'servicio'),
            'view' => __('Leer más', 'servicio'),
            'view_item' => __('Leer más', 'servicio'),
            'search_items' => __('Buscar servicio', 'servicio'),
            'not_found' => __('No se encontró el servicio', 'servicio'),
            'not_found_in_trash' => __('No se encontró servicios en Trash', 'servicio')
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

function html5blank_nav_secondary(){
    wp_nav_menu(
    array(
        'theme_location'  => 'extra-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function html5blank_nav_footer(){
    wp_nav_menu(
    array(
        'theme_location'  => 'sidebar-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function html5blank_nav_right_footer(){
    wp_nav_menu(
    array(
        'theme_location'  => 'extra-footer-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function html5blank_sidebar_publication_cat(){
    wp_nav_menu(
    array(
        'theme_location'  => 'publication-sidebar-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function html5blank_sidebar_news_cat(){
    wp_nav_menu(
    array(
        'theme_location'  => 'news-sidebar-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);