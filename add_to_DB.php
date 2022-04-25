<?php
// $dbServername = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "wordpress";

// $connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// $sql = "INSERT INTO contact_form(name,email,phone,adress,subject,message) VALUES('test','test','test','test','test','test');";
// mysqli_query($connect, $sql);

// header("Location: view.php");


//table name: 'wp_plugin_form'
if(isset($_POST['submit_button'])){
    $name = $_POST['test'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo 'test';
    global $wpdb;
    $wpdb->insert('contact_form', array('name'=> $name, 'email' => $email, 'phone' => $phone, 'adress' => $adress, 'subject' => $subject, 'message' => $message));
}