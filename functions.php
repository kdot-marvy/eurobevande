<?php

/* ---------------------------------------------
   1) ACF OPTIONS PAGE
--------------------------------------------- */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Impostazioni Tema',
        'menu_title' => 'Impostazioni Tema',
        'menu_slug'  => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}


/* ---------------------------------------------
   2) CPT — CANDIDATURE
--------------------------------------------- */
add_action('init', function() {
    register_post_type('candidature', [
        'label' => 'Candidature',
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-id',
        'supports' => ['title'],
    ]);
});


/* ---------------------------------------------
   3) COLONNE ADMIN
--------------------------------------------- */
add_filter('manage_candidature_posts_columns', function($columns) {
    $columns['nome'] = 'Nome';
    $columns['email'] = 'Email';
    $columns['telefono'] = 'Telefono';
    $columns['posizione'] = 'Posizione';
    $columns['cv'] = 'CV';
    return $columns;
});

add_action('manage_candidature_posts_custom_column', function($column, $post_id) {

    if ($column === 'nome') echo get_field('nome', $post_id);
    if ($column === 'email') echo get_field('email', $post_id);
    if ($column === 'telefono') echo get_field('telefono', $post_id);
    if ($column === 'posizione') echo get_field('posizione', $post_id);

    if ($column === 'cv') {
        $cv = get_field('cv', $post_id);
        echo $cv ? '<a href="'.$cv.'" target="_blank" class="button">Scarica CV</a>' : '—';
    }

}, 10, 2);


/* ---------------------------------------------
   4) FILTRO PER POSIZIONE
--------------------------------------------- */
add_action('restrict_manage_posts', function() {
    global $typenow;
    if ($typenow === 'candidature') {
        $posizione = isset($_GET['posizione']) ? $_GET['posizione'] : '';
        echo '<input type="text" name="posizione" placeholder="Filtra per posizione" value="'.$posizione.'" />';
    }
});

add_filter('pre_get_posts', function($query) {
    if (!is_admin() || !$query->is_main_query()) return;

    if ($query->get('post_type') === 'candidature' && !empty($_GET['posizione'])) {
        $query->set('meta_query', [
            [
                'key' => 'posizione',
                'value' => sanitize_text_field($_GET['posizione']),
                'compare' => 'LIKE'
            ]
        ]);
    }
});


/* ---------------------------------------------
   5) FORM CANDIDATURA — ADMIN POST HANDLER
--------------------------------------------- */
add_action('admin_post_nopriv_invia_candidatura', 'eurobevande_handle_candidatura');
add_action('admin_post_invia_candidatura', 'eurobevande_handle_candidatura');

function add_slug_body_class( $classes ) {
    if ( is_page() ) {
        $slug = basename( get_permalink() );
        $classes[] = 'page-slug-' . $slug;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

add_filter( 'language_attributes', 'add_slug_to_html' );
function add_slug_to_html( $output ) {
    if ( is_page() ) {
        $slug = basename( get_permalink() );
        $output .= ' class="page-slug-' . $slug . '"';
    }
    return $output;
}


function eurobevande_handle_candidatura() {

    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');

    // Sanitize fields
    $nome      = sanitize_text_field($_POST['nome']);
    $email     = sanitize_email($_POST['email']);
    $telefono  = sanitize_text_field($_POST['telefono']);
    $posizione = sanitize_text_field($_POST['posizione']);
    $messaggio = sanitize_textarea_field($_POST['messaggio']);

    // Upload CV
    if (!empty($_FILES['cv']['name'])) {

        $uploaded = wp_handle_upload($_FILES['cv'], [
            'test_form' => false,
            'mimes' => ['pdf' => 'application/pdf']
        ]);

        if (isset($uploaded['error'])) {
            wp_die('Errore nel caricamento del CV: ' . $uploaded['error']);
        }

        // Crea attachment manualmente
        $attachment = array(
            'post_mime_type' => 'application/pdf',
            'post_title'     => sanitize_file_name($_FILES['cv']['name']),
            'post_content'   => '',
            'post_status'    => 'inherit'
        );

        $attachment_id = wp_insert_attachment($attachment, $uploaded['file']);
        wp_update_attachment_metadata($attachment_id, wp_generate_attachment_metadata($attachment_id, $uploaded['file']));

    } else {
        wp_die('CV obbligatorio.');
    }

    // Create candidatura post
    $post_id = wp_insert_post([
        'post_title'  => 'Candidatura: ' . $nome,
        'post_type'   => 'candidature',
        'post_status' => 'publish'
    ]);

    // Save ACF fields
    update_field('nome', $nome, $post_id);
    update_field('email', $email, $post_id);
    update_field('telefono', $telefono, $post_id);
    update_field('posizione', $posizione, $post_id);
    update_field('messaggio', $messaggio, $post_id);
    update_field('cv', $attachment_id, $post_id);

    // Email admin
    $to = get_option('admin_email');
    $subject = 'Nuova candidatura da ' . $nome;

    $body = "
Nome: $nome
Email: $email
Telefono: $telefono
Posizione: $posizione
Messaggio: $messaggio

CV: " . wp_get_attachment_url($attachment_id) . "
    ";

    wp_mail($to, $subject, $body);

    // Redirect con conferma
    wp_redirect(add_query_arg('candidatura', 'ok', wp_get_referer()));
    exit;
}


/* ---------------------------------------------
   6) ENQUEUE CSS & JS
--------------------------------------------- */
function eurobevande_assets() {

    // Base
    wp_enqueue_style(
        'eurobevande-base',
        get_template_directory_uri() . '/css/base.css',
        array(),
        '1.0'
    );

    // Header
    wp_enqueue_style(
        'eurobevande-header',
        get_template_directory_uri() . '/css/header.css',
        array('eurobevande-base'),
        '1.0'
    );

    wp_enqueue_style(
        'eurobevande-footer',
        get_template_directory_uri() . '/css/footer.css',
        array('eurobevande-base'),
        '1.0'
    );

    wp_enqueue_style(
        'eurobevande-components',
        get_template_directory_uri() . '/css/components.css',
        array('eurobevande-base'),
        '1.0'
    );

    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        array('bootstrap'),
        null
    );

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/script.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );


    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        array(),
        null,
        true
    );


    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/script.js',
        array('swiper-js', 'gsap'),
        null,
        true
    );

}
add_action('wp_enqueue_scripts', 'eurobevande_assets');


/* ---------------------------------------------
   7) SUPPORTO IMMAGINI
--------------------------------------------- */
add_theme_support('post-thumbnails');


/* ---------------------------------------------
   8) MENU WORDPRESS
--------------------------------------------- */
function eurobevande_register_menus() {
    register_nav_menus(array(
        'main-menu'   => 'Menu Principale',
        'footer-menu' => 'Menu Footer'
    ));
}
add_action('init', 'eurobevande_register_menus');


/* ---------------------------------------------
   9) ACF JSON
--------------------------------------------- */
function eurobevande_acf_json_save_point($path) {
    return get_stylesheet_directory() . '/acf-json';
}
add_filter('acf/settings/save_json', 'eurobevande_acf_json_save_point');

function eurobevande_acf_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'eurobevande_acf_json_load_point');

