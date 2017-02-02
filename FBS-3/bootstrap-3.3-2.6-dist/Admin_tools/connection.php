<?php
    $dbhost = "localhost";
    $dbname  = 'mydb';
    $dbuser  = 'root';
    $dbpass  = 'root';
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($connection->connect_error) die($connection->connect_error);
 
?>