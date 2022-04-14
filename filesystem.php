<?php
// $lorem = readfile('readfile.txt');

$file = 'readfile.txt';

// if (file_exists($file)) {
//     echo readfile($file) . '<br />';

//     // cope file
//     copy($file, 'copied.txt');

//     // absolute path
//     echo realpath($file) . '<br />';

//     // file size 
//     echo filesize($file) . '<br />';

//     // rename file 
//     // rename($file, 'test.txt');
// } else {
//     echo 'file doesnt exist';
// }

// // make directory
// mkdir('lorem');



// $handle = fopen($file, 'r'); //open for read-only
// $handle = fopen($file, 'r+'); //open for read and write, places pointer at the start
$handle = fopen($file, 'a+'); //open for read and write, places pointer at the end


// read whole file
// echo fread($handle, filesize($file));

// read a single line
// echo fgets($handle);
// echo fgets($handle); // points to next line

// read a single character
// echo fgetc($handle);

// write to a file
// fwrite($handle, 'That"s all, folks');

// fclose($handle); //close operations with file

// unlink($file); // delete file, pass in file inteslf, not handle
