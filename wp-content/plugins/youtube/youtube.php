 <?php
/*
Plugin Name: The Youtube Videos 
Plugin URI: http://yworld.co.za
Description: Provides section to enter the youtube videos
Version: 1.0-dev
Author: YFM Dev
Author URI: http://yworld.co.za
*/
/***********************************************************/
// Hooks For The Plugin
/***********************************************************/
register_activation_hook(__FILE__, 'youtube_activation');
register_deactivation_hook(__FILE__, 'youtube_deactivation');
add_action('init', 'youtube_init');
function youtube_activation() {}
function youtube_deactivation() {}
function youtube_init() {
    $labels = array(
    'name'               => 'YouTube Videos',
    'singular_name'      => 'Videos',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Video',
    'edit_item'          => 'Edit Video',
    'new_item'           => 'New Video',
    'all_items'          => 'All Videos',
    'view_item'          => 'View Video',
    'search_items'       => 'Search Video',
    'not_found'          => 'No Video found',
    'not_found_in_trash' => 'No Video found in Trash',
    'parent_item_colon'  => '',
    'menu_name' => _x('YouTube Videos', 'the_youtube_post'),
    );
    $args = array( 
       'labels' => $labels,

       'hierarchical' => true,

       'description' => 'YouTube Videos',

       'supports' => array('title'),

       'public' => true,

       'show_ui' => true,

       'show_in_menu' => true,

       'show_in_nav_menus' => true,

       'publicly_queryable' => true,

       'exclude_from_search' => false,

       'has_archive' => true,

       'query_var' => true,

       'can_export' => true,

       'rewrite' => true,

       'capability_type' => 'post'
    );
    register_post_type('the_youtube_post', $args);
}
/************************************/
// Add the Meta Box  
function add_custom_meta_box() {  
    add_meta_box(  
        'the_youtube_fields', // $id  
        'YouTube Videos', // $title   
        'show_custom_meta_box', // $callback  
        'the_youtube_post', // $page  
        'normal', // $context  
        'high'); // $priority  
}  
add_action('add_meta_boxes', 'add_custom_meta_box');        
    // Field Array  
    $prefix = 'custom_';  
    $custom_meta_fields = array(  
        array(  
            'label'=> 'Video Title',  
            'desc'  => 'Enter the name of the video.',  
            'id'    => $prefix.'text_video_name',  
            'type'  => 'text'  
        ),  
        array(  
            'label'=> 'Video Description',  
            'desc'  => 'Enter the description for the video.',  
            'id'    => $prefix.'textarea_video_description',  
            'type'  => 'textarea'  
        ), 
        array(  
            'label'=> 'Video ID',  
            'desc'  => 'Enter Video ID.',  
            'id'    => $prefix.'video_id',  
            'type'  => 'text'  
        )
    );  
function show_custom_meta_box() {  
global $custom_meta_fields, $post;  
// Use nonce for verification  
    echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';       
    // Begin the field table and loop  
    echo '<table class="form-table">';  
    foreach ($custom_meta_fields as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin a table row with  
        echo '<tr> 
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
                <td>';  
                switch($field['type']) {  
                    // text  
          case 'text':  
              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="40" /> 
                  <br /><span class="description">'.$field['desc'].'</span>';  
          break; 
          // textarea  
            case 'textarea':  
                echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="120" rows="6">'.$meta.'</textarea> 
                    <br /><span class="description">'.$field['desc'].'</span>';  
            break;  
            // checkbox  
          case 'checkbox':  
              echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/> 
                  <label for="'.$field['id'].'">'.$field['desc'].'</label>';  
          break; 
          // select  
            case 'select':  
                echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';  
                foreach ($field['options'] as $option) {  
                    echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';  
                }  
                echo '</select><br /><span class="description">'.$field['desc'].'</span>';  
            break;
                // image  
          // image
           //     case 'image':
          //              $image = get_post_meta( get_the_ID(), 'custom_movie_image', true);          
                        /*echo '<div class="meta_box_image"><span class="meta_box_default_image" style="display:none">' . $image . '</span>';
                        if ( $meta ) {
                                $image = wp_get_attachment_image_src( intval( $meta ), 'medium' );
                                $image = $image[0];
                        }  */                              
                        /*echo        '<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
                                                <img src="' . esc_attr( $image ) . '" class="meta_box_preview_image" alt="" />
                                                        <a href="#" class="meta_box_upload_image_button button" rel="' . get_the_ID() . '">Choose Image</a>
                                                        <small>&nbsp;<a href="#" class="meta_box_clear_image_button">Remove Image</a></small></div>
                                                        <br clear="all" />' . $desc;*/
                        //echo $image;
        //                echo "<span class='upload'>
        // <input type='text' id='custom_movie_image_text' class='regular-text text-upload' name='custom_movie_image' value='".esc_url( $options['custom_movie_image'] )."'/>
        // <input type='button' class='button button-upload' rel='" . get_the_ID() . "' name='custom_movie_image' value='Upload an image'/> <span><br/>Make sure Image is 439 x 660</span></br>
        // <img style='max-width: 300px; display: block;' src='".esc_url( $options['custom_movie_image'] )."' class='preview-upload'/></span>";
        // echo        '<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
        //                                         <img src="' . $image. '" class="meta_box_preview_image" alt="" width="150px"/>';
        //                                         $custom_movie_image = get_option( 'custom_movie_image' );

        //         break;
                // file
                /*case 'file':                
                        $iconClass = 'meta_box_file';
                        if ( $meta ) $iconClass .= ' checked';
                        echo        '<div class="meta_box_file_stuff"><input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_file" value="' . esc_url( $meta ) . '" />
                                                <span class="' . $iconClass . '"></span>
                                                <span class="meta_box_filename">' . esc_url( $meta ) . '</span>
                                                        <a href="#" class="meta_box_upload_image_button button" rel="' . get_the_ID() . '">Choose File</a>
                                                        <small>&nbsp;<a href="#" class="meta_box_clear_file_button">Remove File</a></small></div>
                                                        <br clear="all" />' . $desc;
                break;*/



                } //end switch  
        echo '</td></tr>';  
    } // end foreach  
    echo '</table>'; // end table  
}
// Save the Data  
function save_custom_meta($post_id) {  
    global $custom_meta_fields;      
    // verify nonce  
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
        return $post_id;  
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
    // loop through fields and save the data  
    foreach ($custom_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_custom_meta');
?>