<?php
/*
 * Plugin Name:       delete_format
 * Description:       delete contact foarms.
 * Version:           0.1
 * Author:            AhadoutMed & LouahOussama
 */

 function customize_format(){
     $content = '';
     $content .= '<h1>Contact us!</h1>';

     $content .= '<form method="post" action="http://localhost/solicode/wordpress/thank-you/">';

     $content .= '<label for="your_name">Name</label>';
     $content .= '<input type="text" name="name" placeholder="name">';
     
     $content .= '<label for="email">Email</label>';
     $content .= '<input type="text" name="email" placeholder="Email">';

     $content .= '<label for="message">You message</label>';
     $content .= '<textarea type="text" name="message" placeholder="Message"></textarea>';

     $content .= '<input type="submit" name="submit_button" value="Submit!">';

     $content .= '</form>';
     return $content;
 }
 add_shortcode('customize_format','customize_format');

//  function form_capture(){
//      if(isset($_POST['submit_button'])){
//          $email = sanitize_text_field($_POST['email']);
//          $send = sanitize_textarea_field($_POST['message']);
//          $name = sanitize_text_field($_POST['name']);

//          $to = 'ahadout.mohamed.solicode@gmail.com';
//          $subject = 'test submit';
//          $message = $name . ' - ' . $email . ' - ' . $send;

//          wp_mail($to,$subject,$message);
//      }
//  }

// add_action('wp_head','form_capture');

    add_action( 'admin_menu', 'wporg_options_page' );
    function wporg_options_page() {
        add_menu_page(
            'customize_format',
            'customize_format Options',
            'manage_options',
            plugin_dir_path(__FILE__) . 'admin/view.php',
            null,
            'dashicons-admin-generic',
            20
        );
    }
 ?>