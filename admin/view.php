<?php

$content = '<h1 style="text-align: center; color: red;">Welcom to customize_format plugin</h1><br>';

$content .= '<form method="post">';

// $content .= '<label>First & Last name</label><input name="test" type="radio" value="test"><br>';
$content .= '<label>Full name</label><input name="full_name" value="enable" type="radio"><input name="full_name" type="radio"value="disable"><br>';

$content .= '<label>Email</label><input name="email"value="enable" type="radio"><input name="email" value="disable"type="radio"><br>';

$content .= '<label>Phone N°</label><input name="phone" type="radio" value="enable"><input name="phone" type="radio" value="disable"><br>';

$content .= '<label>Adress</label><input name="adress" type="radio" value="enable"><input name="adress" type="radio" value="disable"><br>';

$content .= '<label>Subject</label><input name="subject" type="radio" value="enable"><input name="subject" type="radio" value="disable"><br>';

$content .= '<label>Message</label><input name="message" type="radio" value="enable"><input name="message" type="radio" value="disable"><br>';

$content .= '<input type="submit" name="submit_button" value="Submit!">';

$content .= '</form>';

echo $content;
if(isset($_POST['submit_button'])) {
    $data = array(
        array('option_name' => 'full_name','option_value' =>$_POST['full_name']),
        array('option_name' => 'email','option_value' =>$_POST['email']),
        array('option_name' => 'phone','option_value' =>$_POST['phone']),
        array('option_name' => 'adress','option_value' =>$_POST['adress']),
        array('option_name' => 'subject','option_value' =>$_POST['subject']),
        array('option_name' => 'message','option_value' =>$_POST['message'])
    );
    $table_name = 'wp_options';
    for($i=0; $i<count($data); $i++){
        // $where = $data[$i]['option_name'];
        // $result = $wpdb->insert($table_name,$data[$i]);
        $result = $wpdb->update($table_name,$data[$i],array('option_name' => $data[$i]['option_name']));
    }

    if($result==1){
        echo"<script>alert('data added');</script>";

    }
    else{
        echo"<script>alert('unable to add');</script>";
    }
}