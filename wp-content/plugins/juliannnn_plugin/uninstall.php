<?php

/**
*Triger this file on plugin uninstall
*@package Julianplugin
*/

if (! defined('WP_UNINSTALL_PLUGIN') ){
		die;
}

//clear database store data
//$books = get_posts( array('post_type' => 'book','numberposts' => -1) )

/*foreach ( $books as $book ){
		wp_delete_post( $book->ID, false);
}*/

//acces the database via SQL
global $wpdb;

$wpdb->query( "DELETE FROM wp_posts where post_type = 'book'" );
$wpdb->query( "DELETE FROM wp_postmeta where post_id not in(select id from wp_posts)");
$wpdb->query( "DELETE FROM wp_term_relationships where object_id not in(select id from wp_posts)");
