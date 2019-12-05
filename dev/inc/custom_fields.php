<?php

function add_custom_meta_boxes(){
    add_meta_box( 'services_fields', 'Service Details', 'servicesFieldsCallback', 'service');
}

add_action('add_meta_boxes', 'add_custom_meta_boxes');


function servicesFieldsCallback($post){
    require_once get_template_directory() . '/inc/services_fields.php';
}

function save_servicesFields_meta_boxes($post_id){
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    $fields = [
        'wildWeeds_servicePricing' // name of the input field to search for
    ];

    foreach($fields as $field){
        if(array_key_exists($field, $_POST)){
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }

}

add_action('save_post', 'save_servicesFields_meta_boxes');
