<?php

$conn = mysqli_connect('localhost', 'root', '', 'mealdash');

if(!conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>