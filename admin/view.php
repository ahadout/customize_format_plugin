<?php

$content = '<h1 style="text-align: center; color: red;">Welcom to customize_format plugin</h1><br>';

$content .= '<form method="post">';

// $content .= '<label>First & Last name</label><input name="test" type="radio" value="test"><br>';
$content .= '<label>Full name</label><input name="full_name" value="name_input_enable"type="radio"><input name="full_name" type="radio"value="name_input_disable"><br>';

$content .= '<label>Email</label><input name="email"value="email_input_unable" type="radio"><input name="email" value="email_input_disable"type="radio"><br>';

$content .= '<label>Phone N°</label><input name="phone" type="radio" value="yes"><input name="phone" type="radio"value="no"><br>';

$content .= '<label>Adress</label><input name="adress" type="radio"><input name="adress" type="radio"><br>';

$content .= '<label>Subject</label><input name="subject" type="radio"><input name="subject" type="radio"><br>';

$content .= '<label>Message</label><input name="message" type="radio"><input name="message" type="radio"><br>';

$content .= '<input type="submit" name="submit_button" value="Submit!">';

$content .= '</form>';

echo $content;
if(isset($_POST['submit_button'])) {
    $data = array(
        'option_name' =>$_POST['full_name'],
        'option_value' =>$_POST['email'],
        'autoload' =>$_POST['phone'],
        

    );
    $table_name = 'wp_options';
    $result = $wpdb->insert($table_name,$data);

    if($result==1){
        echo"<script>alert('data added');</script>";

    }else
    echo"<script>alert('unable to add');</script>";    
}



