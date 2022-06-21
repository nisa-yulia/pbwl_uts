<?php
include "header.php";
?>
<style>
    .container{
        width:800px;
        position: relative;
        margin:40px;
        margin-bottom: 55px;
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
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <?php
            include "tambah.php";
        ?>
    </div>
    <div class="footer">
        <?php include "footer.php"?>
    </div>
</body>
</html>
