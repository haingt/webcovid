<!DOCTYPE html>
<html lang="en">
<head>
   
<base href= "<?php echo SITEURL?> ">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["page"] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">

    <!-- css dung cho Home -->
    <?php  $css = "./public/css/". $data["page"] .".css" ?>
    <link rel="stylesheet" href= <?php echo $css ?>>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->


</head>
<body>
    <header>
        <?php
            if(!isset($_SESSION["user_id"])){//neu khong co duoc session id
                require_once "./mvc/views/header.php";
                //require_once "./mvc/views/header_admin.php";
                //require_once "./mvc/views/header_user.php";
            }
            else if($_SESSION["role"] == "admin"){
                require_once "./mvc/views/header_admin.php";
            }
            else{
                require_once "./mvc/views/header_user.php";
            }

        ?>
    </header>

    <main>
        <?php require_once "./mvc/views/page/".$data['page'].".php" ?>
    </main>
   
   
    <?php require_once "./mvc/views/footer.php" ?>
 


    
</body>
</html>