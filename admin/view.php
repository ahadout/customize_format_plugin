<?php

$content = '<h1 style="text-align: center; color: red;">Welcom to customize_format plugin</h1><br>';

$content .= '<form method="post">';

// $content .= '<label>First & Last name</label><input name="test" type="radio" value="test"><br>';
$content .= '<label>Full name</label><input name="full_name" type="radio"><input name="full_name" type="radio"><br>';

$content .= '<label>Email</label><input name="email" type="radio"><input name="email" type="radio"><br>';

$content .= '<label>Phone N°</label><input name="phone" type="radio"><input name="phone" type="radio"><br>';

$content .= '<label>Adress</label><input name="adress" type="radio"><input name="adress" type="radio"><br>';

$content .= '<label>Subject</label><input name="subject" type="radio"><input name="subject" type="radio"><br>';

$content .= '<label>Message</label><input name="message" type="radio"><input name="message" type="radio"><br>';

$content .= '<input type="submit" name="submit_button" value="Submit!">';

$content .= '</form>';

echo $content;