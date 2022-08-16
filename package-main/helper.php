<?php
/*
* Creating a function to create our CPT
*/
add_theme_support('post-thumbnails');
function service_post_type() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Dịch Vụ', 'Dịch Vụ', 'thangmayhdmientrung' ),
        'singular_name'       => _x( 'Dịch Vụ', 'Dịch Vụ', 'thangmayhdmientrung' ),
        'menu_name'           => __( 'Dịch Vụ', 'thangmayhdmientrung' ),
        'all_items'           => __( 'Tất cả Dịch Vụ', 'thangmayhdmientrung' ),
        'view_item'           => __( 'Xem Dịch Vụ', 'thangmayhdmientrung' ),
        'add_new_item'        => __( 'Thêm mới Dịch Vụ', 'thangmayhdmientrung' ),
        'add_new'             => __( 'Thêm Dịch Vụ', 'thangmayhdmientrung' ),
        'edit_item'           => __( 'Sửa Dịch Vụ', 'thangmayhdmientrung' ),
        'update_item'         => __( 'Cập nhật Dịch Vụ', 'thangmayhdmientrung' ),
        'search_items'        => __( 'Tìm kiếm Dịch Vụ', 'thangmayhdmientrung' ),
        'not_found'           => __( 'Không tìm thấy', 'thangmayhdmientrung' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'thangmayhdmientrung' ),
    );


    $args = array(
        'label'               => __( 'dichvu', 'thangmayhdmientrung' ),
        'description'         => __( 'Dịch Vụ', 'thangmayhdmientrung' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'menu_icon'           => 'dashicons-format-aside',
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
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'dichvu', $args );
}

function duan_post_type(){
  $labels = array(
      'name'                => _x( 'Dự Án', 'Dự Án', 'thangmayhdmientrung' ),
      'singular_name'       => _x( 'Dự Án', 'Dự Án', 'thangmayhdmientrung' ),
      'menu_name'           => __( 'Dự Án', 'thangmayhdmientrung' ),
      'all_items'           => __( 'All Dự Án', 'thangmayhdmientrung' ),
      'view_item'           => __( 'View Dự Án', 'thangmayhdmientrung' ),
      'add_new_item'        => __( 'Add New Dự Án', 'thangmayhdmientrung' ),
      'add_new'             => __( 'Add New', 'thangmayhdmientrung' ),
      'edit_item'           => __( 'Edit Dự Án', 'thangmayhdmientrung' ),
      'update_item'         => __( 'Update Dự Án', 'thangmayhdmientrung' ),
      'search_items'        => __( 'Search Dự Án', 'thangmayhdmientrung' ),
      'not_found'           => __( 'Not Found', 'thangmayhdmientrung' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'thangmayhdmientrung' ),
  );

  $args_duan = array(
      'label'               => __( 'duan', 'thangmayhdmientrung' ),
      'description'         => __( 'duan', 'thangmayhdmientrung' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
      'taxonomies'          => array( 'genres' ),
      'menu_icon'           => 'dashicons-layout',
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
      'capability_type'     => 'post',
      'show_in_rest' => true,

  );
  register_post_type( 'duan', $args_duan );
}
add_action( 'init', 'service_post_type', 0 );
add_action( 'init', 'duan_post_type', 1 );
?>
