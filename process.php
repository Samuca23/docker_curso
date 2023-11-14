<?php
$message = $_POST["message"];

// $file = scandir("mensagens");
// $num_files = count($file) - 2;
$random = random_int(1, 100);
$file_name = "msg-{$random}.txt";

$file = fopen("{$file_name}", "x");

fwrite($file, 'Feito');
fclose($file);

header("Location: index.php");