<?php

$connect = new mysqli('localhost','root','','approach_database');
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}                                                                                                       
?>
