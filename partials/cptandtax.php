<?php
/* cptandtax.php
Sets up the custom post type, and relevant taxonomies
-----------------------------------------------------------------------

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

function atc_dp_create_custom_post_type() {

	// UI labels
	$labels = array(
		'name'                => __( 'Projects'),
		'singular_name'       => __( 'Project' ),
		'menu_name'           => __( 'Projects' ),
		'parent_item_colon'   => __( 'Parent Movie' ),
		'all_items'           => __( 'All Projects' ),
		'view_item'           => __( 'View Project' ),
		'add_new_item'        => __( 'Add New Project' ),
		'add_new'             => __( 'Add New' ),
		'edit_item'           => __( 'Edit Project' ),
		'update_item'         => __( 'Update Project' ),
		'search_items'        => __( 'Search Projects' ),
		'not_found'           => __( 'Not Found' ),
		'not_found_in_trash'  => __( 'Not found in Trash' ),
	);

	$args = array(
		'label'               => __( 'projects' ),
		'description'         => __( 'Developer projects' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions'
	),
		//'taxonomies'          => array( 'genres' ),
		'hierarchical'        => false,
		'public'              => true,
		'menu_icon' 		  => 'dashicons-portfolio',
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

	register_post_type( 'atc_dp_projects', $args );
}
add_action( 'init', 'atc_dp_create_custom_post_type' );



// Register the custom taxonomies: Tools & Languages and Platforms
function atc_dp_create_taxonomies() {
    register_taxonomy(
        'atc_dp_languages',
        'atc_dp_projects',
        array(
            'hierarchical' => false,
            'label' => 'Programming Languages',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'languages',
                'with_front' => false
            )
        )
    );

	register_taxonomy(
        'atc_dp_tools',
        'atc_dp_projects',
        array(
            'hierarchical' => false,
            'label' => 'Tools & Technologies',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'tools-technologies',
                'with_front' => false
            )
        )
    );


	register_taxonomy(
        'atc_dp_platforms',
        'atc_dp_projects',
        array(
            'hierarchical' => true,
            'label' => 'Platforms',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'platform',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'atc_dp_create_taxonomies');
?>
