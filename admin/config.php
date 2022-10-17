<?php 
  date_default_timezone_set("Africa/Cairo");

    $host = 'localhost';
    $user = 'id19701742_root';
    $pass = 'Aa45214521.+';
    $db = 'id19701742_lms';

    @$conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo "Database connection error".@mysqli_connect_error();
    }




?>