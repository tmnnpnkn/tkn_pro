<?php
// This code creates a custom post type for cars

?>
<script>
function cwpai_create_car_post_type() {
    $labels = array(
        'name'               => __( 'Cars', 'text-domain' ),
        'singular_name'      => __( 'Car', 'text-domain' ),
        'add_new'            => __( 'Add New Car', 'text-domain' ),
        'add_new_item'       => __( 'Add New Car', 'text-domain' ),
        'edit_item'          => __( 'Edit Car', 'text-domain' ),
        'new_item'           => __( 'New Car', 'text-domain' ),
        'view_item'          => __( 'View Car', 'text-domain' ),
        'search_items'       => __( 'Search Cars', 'text-domain' ),
        'not_found'          => __( 'No cars found', 'text-domain' ),
        'not_found_in_trash' => __( 'No cars found in Trash', 'text-domain' ),
        'parent_item_colon'  => __( 'Parent Car:', 'text-domain' ),
        'menu_name'          => __( 'Cars', 'text-domain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'car' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'car', $args );
}
add_action( 'init', 'cwpai_create_car_post_type' );

// This code adds custom meta boxes for car details
function cwpai_add_car_details_meta_box() {
    add_meta_box(
        'cwpai_car_details',
        __( 'Car Details', 'text-domain' ),
        'cwpai_car_details_meta_box_callback',
        'car',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'cwpai_add_car_details_meta_box' );

// This code defines the callback function for the car details meta box
function cwpai_car_details_meta_box_callback( $post ) {
    wp_nonce_field( 'cwpai_save_car_details', 'cwpai_car_details_nonce' );
    
    // Display fields for car make, model, and year
    echo '<label for="cwpai_car_make">' . __( 'Make', 'text-domain' ) . '</label> ';
    echo '<input type="text" id="cwpai_car_make" name="cwpai_car_make" value="' . esc_attr( get_post_meta( $post->ID, '_cwpai_car_make', true ) ) . '" size="25" /><br />';
    echo '<label for="cwpai_car_model">' . __( 'Model', 'text-domain' ) . '</label> ';
    echo '<input type="text" id="cwpai_car_model" name="cwpai_car_model" value="' . esc_attr( get_post_meta( $post->ID, '_cwpai_car_model', true ) ) . '" size="25" /><br />';
    echo '<label for="cwpai_car_year">' . __( 'Year', 'text-domain' ) . '</label> ';
    echo '<input type="number" id="cwpai_car_year" name="cwpai_car_year" min="1900" max="' . date( 'Y' ) . '" value="' . esc_attr( get_post_meta( $post->ID, '_cwpai_car_year', true ) ) . '" /><br />';
}

// This code saves the car details meta box
function cwpai_save_car_details( $post_id ) {
    // Check if nonce is set
    if ( ! isset( $_POST['cwpai_car_details_nonce'] ) ) {
        return;
    }

    // Verify nonce
    if ( ! wp_verify_nonce( $_POST['cwpai_car_details_nonce'], 'cwpai_save_car_details' ) ) {
        return;
    }

    // Update car make
    if ( isset( $_POST['cwpai_car_make'] ) ) {
        update_post_meta( $post_id, '_cwpai_car_make', sanitize_text_field( $_POST['cwpai_car_make'] ) );
    }

    // Update car model
    if ( isset( $_POST['cwpai_car_model'] ) ) {
        update_post_meta( $post_id, '_cwpai_car_model', sanitize_text_field( $_POST['cwpai_car_model'] ) );
    }

    // Update car year
    if ( isset( $_POST['cwpai_car_year'] ) ) {
        update_post_meta( $post_id, '_cwpai_car_year', absint( $_POST['cwpai_car_year'] ) );
    }
}
add_action( 'save_post_car', 'cwpai_save_car_details' );