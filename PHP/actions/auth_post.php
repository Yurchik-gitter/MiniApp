<?php
$user = $_POST;
$user['pass'] = md5($user['pass']);
$user['repass'] = md5($user['repass']);


//$filename = "text.txt";
//$file = fopen($filename, mode: "w");
//fwrite($file, "\nНовый пользователь:\n ");
//foreach ($user as $key => $value) {
//    echo $key.": ". $value. "<br>";
//    fwrite($file, $key.": ". $value. "\n");
//}
//echo "<br>".$file;
//fclose($file);


$message = "";
foreach ($user as $key => $value) {
     $message = "$message $key: $value\r\n";}
echo "<pre>".$message."</pre>";

$to = "kirillyurikov13@gmail.com";
$from = "kirillyurikov8@gmail.com";
$subject = "=?uth-8?B?".base64_encode("Тема проверки")."?=";

echo mail($to, $subject, $message, $from);

phpinfo();