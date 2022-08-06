<?php
/**
* Plugin Name: Test CRUD 3
* Description: This plugin to create custom contact list-tables from database using WP_List_Table class.
* Version:     2.1.3
* Plugin URI: https://labarta.es/wp-basic-crud-plugin-wordpress/
* Author:      Labarta
* Author URI:  https://labarta.es/
* License:     GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: haodt
* Domain Path: /languages
*/

add_action('init', function() {
    include dirname( __FILE__ ) . '/includes/class-crud-admin-menu.php';
    include dirname( __FILE__ ) . '/includes/class-crud-list-table.php';
    include dirname( __FILE__ ) . '/includes/class-form-handler.php';
    include dirname( __FILE__ ) . '/includes/crud-functions.php';
    new Teacher_Crud_Admin_Menu();
});