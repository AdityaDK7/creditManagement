<?php

    $server="localhost";
    $username="aditya";
    $password="123456";
    $dbname="credit";
    $con = mysqli_connect($server,$username,$password,$dbname);

    mysqli_select_db($con,'crud');

    /*if($con)
    {
        echo "Connected";
    }
    else
    {
        echo "Not connected";
    }*/
    
    
?>