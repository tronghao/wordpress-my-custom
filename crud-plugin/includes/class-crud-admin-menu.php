<?php

/**
 * Admin Menu
 */
class Teacher_Crud_Admin_Menu {

    /**
     * Kick-in the class
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    /**
     * Add menu items
     *
     * @return void
     */
    public function admin_menu() {

        /** Top Menu **/
        add_menu_page( __( 'Teacher', 'teacher' ), __( 'Teacher', 'teacher' ), 'manage_options', 'teacher', array( $this, 'plugin_page' ), 'dashicons-groups', null );

        add_submenu_page( 'teacher', __( 'Teacher', 'teacher' ), __( 'Teacher', 'teacher' ), 'manage_options', 'teacher', array( $this, 'plugin_page' ) );
    }

    /**
     * Handles the plugin page
     *
     * @return void
     */
    public function plugin_page() {
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';
        $id     = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;

        switch ($action) {
            case 'view':

                $template = dirname( __FILE__ ) . '/views/crud-single.php';
                break;

            case 'edit':
                $template = dirname( __FILE__ ) . '/views/crud-edit.php';
                break;

            case 'new':
                $template = dirname( __FILE__ ) . '/views/crud-new.php';
                break;
            
            case 'delete':
                global $wpdb;
                $wpdb->delete( $wpdb->prefix. 'test2', array( 'ID' => $_GET['id'] ) );
                $template = dirname( __FILE__ ) . '/views/crud-list.php';
                break;

            default:
                $template = dirname( __FILE__ ) . '/views/crud-list.php';
                break;
        }

        if ( file_exists( $template ) ) {
            include $template;
        }
    }
}