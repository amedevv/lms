<?php 
  date_default_timezone_set("Africa/Cairo");

    $host = 'remotemysql.com';
    $user = 'L1DMZixNFJ';
    $pass = 'mGN3RhI6jv';
    $db = 'L1DMZixNFJ';

    @$conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo "Database connection error".@mysqli_connect_error();
    }




?>
