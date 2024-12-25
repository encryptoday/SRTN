<?php

    require_once('config.php');

    // making a new connection for the inventory control system

    $conn = new mysqli($servername,$username,$password,$database);
    
    if($conn->connect_error){
        echo $conn->connect_error; //showing the error message if not connected to the database
    }
 ?>
