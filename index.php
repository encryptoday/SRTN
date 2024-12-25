<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>URL Shortner</title>
</head>
<body>

<?php
        if(isset($_GET['url'])){
            $class1 = "hide";
        
            $url = $_GET['url'];

            if(substr($url,0,3) == "www")
                $url = 'https://'.$url;
            else if(substr($url,0,3) != "htt")
                $url = 'https://'.$url;
      
            $url = $conn->real_escape_string($url);
            $short_url = 'https://mmm.sh/'.substr(uniqid(),1,6);
              
            $sql = "INSERT INTO redirect(url,short_url) VALUES('$url','$short_url')";
              
            if($conn->query($sql))
                $class2 = "show";
            else{
                echo "<h2 style='text-align:center;margin-top:50px'>Something is wrong. Try Again.</h2>";
            }
        }
        else{
            $clss1 = "show";
            $class2 = "hide";
        }
?>

    <div id="tools" class="<?php echo $class1; ?>">
        <div class="tools-header">
            <h1>URL Shortner</h1>
        </div>
        <div class="tools-body">
            <form action="" method="get">
                <input type="text" name="url" placeholder="Enter your URL here">
                <input type="submit" name="Short">
            </form>
        </div>
    </div>
    
    <div id="tools" class="<?php echo $class2; ?>">
        <div class="tools-header seagreen">
            <h1>Successfull</h1>
        </div>
        <div class="tools-body">
            <p class="text-center d-block">
                <a href="<?php echo $short_url; ?>" class="external-link" target="_BLANK"><?php echo $short_url; ?></a>
                <br><br>
                Valid till <?php 
                                $expiry  = date('d-m-Y',mktime(0, 0, 0, date("m")+1,   date("d"),   date("Y"))); 
                                echo $expiry;
                            ?> <br><br>
                <a href="./index.php">Short Again</a>
            </p>
        </div>
    </div>
  
    <p class="footer-copy"> Copyright @ <?php echo date("Y"); ?> | MMM </p>

</body>
</html>