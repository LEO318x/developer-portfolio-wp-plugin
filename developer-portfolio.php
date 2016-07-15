<?php
/*
Plugin Name: Developer Portfolio
Plugin URI:  http:/arcticanaudio.com
Description: A portfolio plugin designed for developers
Version:     0.0.1
Author:      Arctican Audio
Author URI:  http:/arcticanaudio.com
License:     GPL2

Developer Portfolio is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Developer Portfolio is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Developer Portfolio. If not, see http://www.gnu.org/licenses/gpl.html
*/


/*
* Create our custom CPT
*/

function create_custom_post_type() {

	// UI labels
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Projects', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
		'all_items'           => __( 'All Projects', 'twentythirteen' ),
		'view_item'           => __( 'View Project', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Project', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Project', 'twentythirteen' ),
		'update_item'         => __( 'Update Project', 'twentythirteen' ),
		'search_items'        => __( 'Search Projects', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);

	$args = array(
		'label'               => __( 'projects', 'twentythirteen' ),
		'description'         => __( 'Develpoer projects', 'twentythirteen' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions'
	),
		//'taxonomies'          => array( 'genres' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array('with_front' => false, 'slug' => 'projects'),
	);

	register_post_type( 'projects', $args );
}
add_action( 'init', 'create_custom_post_type', 0 );




?>
