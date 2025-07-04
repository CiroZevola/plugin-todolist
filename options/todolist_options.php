<?php

require_once __DIR__ . "/../class/todolist.php";

function todolist_custom_post_type() {

    $labels = array(
        'name'               => 'Lista Task',
        'singular_name'      => 'Annuncio',
        'menu_name'          => 'Tutti gli annunci',
        'add_new'            => 'Aggiungi Annuncio',
        'add_new_item'       => 'Aggiungi nuovo Task',
        'edit_item'          => 'Modifica Annuncio',
        'new_item'           => 'Nuovo Annuncio',
        'view_item'          => 'Vedi Annuncio',
        'search_items'       => 'Cerca Annuncio',
        'not_found'          => 'Nessun Annuncio trovato',
        'not_found_in_trash' => 'Nessun Annuncio trovato nel cestino',
        'parent_item_colon'  => 'Annuncio genitore:',
    );
    register_post_type('task',
    [
      'rewrite'              => array('slug' => 'task'),
      'supports'             => array('title', 'editor'),
      'menu_position'        => 5,
      'menu_icon'            => 'dashicons-list-view',
      'register_meta_box_cb' => 'add_task_meta_box',
      'labels'        => $labels,
      'public'      => true,
      'has_archive' => true,
      'show_in_menu' => true,
    ]
	);
}

function add_task_meta_box(){

}

/*
function todolist_options_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
     $table = new Todolist_Products_List_Table();
    $table->prepare_items();

    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?>
        <a  class="page-title-action">Add tasks</a>
        </h1>
        <p>Benvenuto nella pagina di gestione dei task.</p>
        <form method="post">
            <?php
            $table->display();
            ?>
        </form>
    </div>
    <?php
}
*/
/*
function todolist_options_page() {
    add_menu_page(
        'Tasks',
        'List',
        'manage_options',
        'todolist',
        'todolist_options_page_html',
        'dashicons-list-view',
        50
    );
}
*/
?>