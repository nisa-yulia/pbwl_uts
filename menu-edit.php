<?php
include "header.php";
?>
<style>
    .container{
    margin: 55px 0;
    width:1000px;
    position: relative;
    left: 89px;    
}
    .footer{
    margin-top: 120px, auto;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <div class="container">
        <?php
            include "edit.php";
        ?>
    </div>
    <div class="footer">
        <?php include "footer.php"?>
    </div>
</body>
</html>
