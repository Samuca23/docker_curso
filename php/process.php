<?php
$message = $_POST["message"];

$file = scandir("messages");
$num_files = count($file) -2;

$file_name = "msg-{$num_files}.txt";

$file = fopen("messages/{$file_name}", "x");

fwrite($file, $message);
fclose($file);

header("Location: index.php");