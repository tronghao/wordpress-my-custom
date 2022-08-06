<?php

/**
 * Get all teacher
 *
 * @param $args array
 *
 * @return array
 */
function teacher_get_all_teacher( $args = array() ) {
    global $wpdb;

    $defaults = array(
        'number'     => 20,
        'offset'     => 0,
        'orderby'    => 'id',
        'order'      => 'ASC',
    );

    $args      = wp_parse_args( $args, $defaults );
    $cache_key = 'teacher-all';
    $items     = wp_cache_get( $cache_key, 'teacher' );

    if ( false === $items ) {
        $items = $wpdb->get_results( 'SELECT * FROM ' . $wpdb->prefix . 'test2 ORDER BY ' . $args['orderby'] .' ' . $args['order'] .' LIMIT ' . $args['offset'] . ', ' . $args['number'] );

        wp_cache_set( $cache_key, $items, 'teacher' );
    }

    return $items;
}

/**
 * Fetch all teacher from database
 *
 * @return array
 */
function teacher_get_teacher_count() {
    global $wpdb;

    return (int) $wpdb->get_var( 'SELECT COUNT(*) FROM ' . $wpdb->prefix . 'test2' );
}

/**
 * Fetch a single teacher from database
 *
 * @param int   $id
 *
 * @return array
 */
function teacher_get_teacher( $id = 0 ) {
    global $wpdb;

    return $wpdb->get_row( $wpdb->prepare( 'SELECT * FROM ' . $wpdb->prefix . 'test2 WHERE id = %d', $id ) );
}

/**
 * Insert a new teacher
 *
 * @param array $args
 */
function teacher_insert_teacher( $args = array() ) {
    global $wpdb;

    $defaults = array(
        'id'         => null,
        'name' => '',

    );

    $args       = wp_parse_args( $args, $defaults );
    $table_name = $wpdb->prefix . 'test2';

    // some basic validation

    // remove row id to determine if new or update
    $row_id = (int) $args['id'];
    unset( $args['id'] );

    if ( ! $row_id ) {

        

        // insert a new
        if ( $wpdb->insert( $table_name, $args ) ) {
            return $wpdb->insert_id;
        }

    } else {

        // do update method here
        if ( $wpdb->update( $table_name, $args, array( 'id' => $row_id ) ) ) {
            return $row_id;
        }
    }

    return false;
}
