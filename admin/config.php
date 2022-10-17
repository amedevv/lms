<?php 
  date_default_timezone_set("Africa/Cairo");

    $host = '185.27.134.10';
    $user = 'epiz_32810300';
    $pass = 'nFhtzMRp8ls';
    $db = 'epiz_32810300_lms';

    @$conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo "Database connection error".@mysqli_connect_error();
    }




?>
