<?php 
  date_default_timezone_set("Africa/Cairo");

    $host = 'sql307.epizy.com:3306';
    $user = 'epiz_32810300';
    $pass = 'nFhtzMRp8ls';
    $db = 'epiz_32810300_lms';

    @$conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo "Database connection error".@mysqli_connect_error();
    }




?>
