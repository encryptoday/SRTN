<?php
    php require_once('auth/connection.php');

    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri,'/');
    $uri = 'https://mmm.sh/'.$uri;

    $sql = "SELECT id,url FROM redirect WHERE short_url = '$uri' LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        
        $url = $row['url']; 
        $id = $row['id'];
        $sql = "UPDATE redirect SET hits = hits + 1 WHERE id=$id"; 
        $conn->query($sql);
        
        header("Location: $url");
    }
    else{
        header("Location: https://mmm.sh");
    }
?>