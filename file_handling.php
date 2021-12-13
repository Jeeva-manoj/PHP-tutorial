<?php 

$file = fopen('example.txt', 'w');  // Creating a file

$msg = 'Hello World';

fwrite($file, $msg);  // Writing to a file

fclose($file);  // Closing file

$file = fopen('example.txt', 'r');

fread($file, filesize($file));  // Reading from a file

fclose($file);

unlink('example.txt');  // Deleting a file



?>