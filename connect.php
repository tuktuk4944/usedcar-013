<?php
    //1.Connect server
    $conn = new mysqli("localhost","root","12345678","usedcar-013") ;
    if($conn->connect_errno){
        die("Connect failed: ".$conn->connect_error);
    }
?>