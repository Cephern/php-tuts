<?php
session_start();

$name = $_SESSION['name'];

if ($_SERVER['QUERY_STRING'] === 'noname') {
    unset($_SESSION['name']);
    // session_unset(); reset all session vars
}

print_r($name);
