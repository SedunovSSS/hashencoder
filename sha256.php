<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>SHA256</title>
    <?php
        require('blocks/headtags.php');
    ?>
</head>
<body>
    <div class="container py-3">
    <?php
        require('blocks/header.php');
    ?>
    <h1 class="text-success" >SHA256 ENCODE</h1>
    <?php
      $str = $_POST['string'];
    ?>
    <form method="post">
     <input type="text" placeholder="String to hash" class="form-control" name="string" value=<?php echo $str; ?>><br>
     
    <h2><?php 
    if ($str != ""){
        echo hash('sha256', $str); 
    }
    else{
        echo ""; 
    }
    ?></h2><br>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>
</body>
</html> 