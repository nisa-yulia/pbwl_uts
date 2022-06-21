<!-- css -->
<style>
body{
    margin: 0;
    height: auto;
}
.header{
    height: 83px;
    background-color: rgb(16, 57, 133);
}
.header h1{
    text-align: center;
    color:white;
    margin: 0;
    padding: 20px;
    font-family: 'Be Vietnam Pro', sans-serif;
}

.brand{
    width: 400px;
    height: 83px;
    position: relative;
    bottom: 0px;
}

.brand ul, .brand a{
    list-style: none;
    text-decoration: none;
}

.navigasi{
    float: right;
    position: relative;
    right: 200px;
    bottom: 83px;
    font-family: 'Be Vietnam Pro', sans-serif;
}

.navigasi ul{
    margin: 0;
}

.navigasi ul li{
    list-style: none;
    display: inline-block;
    background-color: rgb(16, 57, 133);
    font-size: larger;
    text-decoration: none;
    padding:30px 10px;
    color: white;
}

.navigasi ul li:hover{
    background-color: rgb(39, 124, 199);
    transition: 0.5s;
}

.logout{
    position: absolute;
    right: 100px;
    top: 26px;
}

.logout img{
    width: 30px;
    height: 30px;
}

</style>
<!-- batas style -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="index-style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <div class="header">
        <div class="brand">
            <ul>
                <a href="dashboard.php"><li><h1 class="judul">Mie Mbak Mul</h1></li></a>
            </ul> 
        </div>
        <div class="navigasi">
            <ul>
                <a href="dashboard.php"><li>Beranda</li></a>
                <a href="menu-tampil.php"><li>Menu</li></a>
            </ul>
        </div>
        <div class="logout">
            <a href="logout.php">
                <img src="assets/img/logout.png" alt="">
            </a>
        </div>
    </div>
</body>
</html>