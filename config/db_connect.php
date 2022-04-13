<?php
// connect to db
$conn = mysqli_connect('localhost', 'max', '123321', 'ninja_pizza');

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
