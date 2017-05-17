<?php

/*
 * This Class Holds Postype Code For MJA Theme.
 */

class Projects_PostType
{


    function __construct()
    {
        $this->actions();
    }

    function actions()
    {

        add_action('init', array($this, 'init'));
        add_action('save_post', array($this, 'save_post_meta'));
        // add_action('pre_get_posts', array($this, 'force_pagination'));
    }

    function init()
    {

        $this->register_post_types();

    }


    /**
     * Saves The Post Meta
     */

    function save_post_meta($post_id) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }
    }


    function register_post_types()
    {


        /**
         * Sets Up The Args And Initialises Projects Post Type
         */

        register_taxonomy('project_category', 'projects', array(
            'hierarchical' => true,
            'labels' => array(
                'name' => __('Categories'),
                'singular_name' => __('Categories'),
                'search_items' => __('Search Categories'),
                'popular_items' => __('Popular Categories'),
                'all_items' => __('All Categories'),
                'parent_item' => __('Parent Categories'),
                'parent_item_colon' => __('Parent Categories:'),
                'edit_item' => __('Edit Category'),
                'update_item' => __('Update Category'),
                'add_new_item' => __('Add New Category'),
                'new_item_name' => __('New Category Name'),
                'separate_items_with_commas' => __('Separate Categories with commas'),
                'add_or_remove_items' => __('Add or remove Category'),
                'choose_from_most_used' => __('Choose from the most used Categories'),
                'menu_name' => __('Categories'),
            ),
            'show_ui' => true,
            'query_var' => true,
        ));


        $projectsargs = array(
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'project',
                'add_new' => 'New Project',
                'add_new_item' => 'Add New project',
                'edit_item' => 'Edit project Details',
                'new_item' => 'New project',
                'view_item' => 'View project',
                'search_items' => 'Search Projects',
                'not_found' => 'No Projects Found',
                'not_found_in_trash' => 'No Projects In The Trash'
            ),
            'has_archive' => false,
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'menu_position' => 7,
            'taxonomies' => array('project_category')
        );
        register_post_type('projects', $projectsargs);

    }

}

new Projects_PostType();

