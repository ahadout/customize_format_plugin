<?php

$content = '<h1 style="text-align: center; color: red;">Welcom to customize_format plugin</h1><br>';

$content .= '<form method="post" action="">';

$content .= '<label>First & Last name</label><input name="test" type="radio"><br>';
$content .= '<label>Full name</label><input name="test" type="radio"><br>';

$content .= '<label>Email</label><input name="email" type="radio"><br>';

$content .= '<label>Message</label><input name="message" type="radio"><br>';
$content .= '<label>Comment</label><input name="message" type="radio"><br>';

$content .= '<label>Adress</label><input name="adress" type="radio"><br>';

$content .= '<input type="submit" name="submit_button" value="Submit!">';

$content .= '</form>';

echo $content;