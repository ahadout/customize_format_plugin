<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
<?php
$content = '<style>h1{
    font-family: "Quicksand", sans-serif;
}</style>';
$content .= '<h1 style="text-align: center; color: black;font-family: "Qicksand", sans-serif;">Welcom to customize format plugin</h1><br>';

$content .= '<form method="post">';

// $content .= '<label>First & Last name</label><input name="test" type="radio" value="test"><br>';
$content .= '<label>Full name</label>  ::enable<input name="full_name" value="enable"  type="radio"><input name="full_name" type="radio"value="disable">disable<br>';

$content .= '<label>Email</label> ::enable<input name="email"value="enable" type="radio"><input name="email" value="disable"type="radio">disable<br>';

$content .= '<label>Phone N°</label> ::enable<input name="phone" type="radio" value="enable"><input name="phone" type="radio" value="disable">disable<br>';

$content .= '<label>Adress</label> ::enable<input name="adress" type="radio" value="enable"><input name="adress" type="radio" value="disable">disable<br>';

$content .= '<label>Subject</label> ::enable<input name="subject" type="radio" value="enable"><input name="subject" type="radio" value="disable">disable<br>';

$content .= '<label>Message</label> ::enable<input name="message" type="radio" value="enable"><input name="message" type="radio" value="disable">disable<br>';

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
    // get data from database
    $where = $data[0]['option_name'];
    $sql = "SELECT option_name From {$table_name} WHERE option_name = '{$where}'";
    $get = $wpdb->get_results($sql);
    // .
    if($get){
        for($i=0; $i<count($data); $i++){
            // $result = $wpdb->insert($table_name,$data[$i]);
            $result = $wpdb->update($table_name,$data[$i],array('option_name' => $data[$i]['option_name']));
        }
    }
    else{
        for($i=0; $i<count($data); $i++){
            $result = $wpdb->insert($table_name,$data[$i]);
        }
    }
    

    if($result==1){
        echo"<script>alert('data added');</script>";
    }
    else{
        echo"<script>alert('unable to add');</script>";
    }
}
?>
</body>
</html>
