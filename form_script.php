<?php
$email=$_POST['email'];
$name=$_POST['name'];
$country=$_POST['country'];
$subject=$_POST['subject'];
$data=$name.",".$email.",".$country.",".$subject;
$file="file.csv";
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you. Your message is sent!</h1>";
?>
