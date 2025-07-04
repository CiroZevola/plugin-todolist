<?php
/*
 * Plugin Name: todolist
 * Plugin URI:  http://todolist.localhost
 * Description: plugin per la gestione di task.
  * Version:    1.0.0
  * Author:     Zevola Ciro
  * Requires at least: 5.2
  * Requires PHP: 7.2
  * Text Domain: todolist
 */

 require_once __DIR__ . '/options/todolist_options.php';
 require_once __DIR__ . '/class/todolist.php';

//  add_action( 'admin_menu', 'todolist_options_page' );
 add_action( 'init', 'todolist_custom_post_type' );
 
?>