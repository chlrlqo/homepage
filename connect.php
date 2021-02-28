<?php
    $db_host="localhost";
    $db_user="chlrlqo";
    $db_password="a2635986";
    $db_name="login";
    $con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
    if(mysqli_connect_error($con){
        echo "접속실패";
        echo "원인:", mysqli_connect_error();
        exit();
    }
    echo "접속성공";
    mysqli_close($con);
?>