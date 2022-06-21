<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
    if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
    // panggil file
    require 'proses/panggil.php';
?>
<style>
    form{
    width: 800px;
    background-color: rgb(16, 57, 133);
    text-align: center;
    padding: 50px;
    border-radius: 10px;
    position: relative;
    left:220px;
}

form ul li{
    list-style: none;
    text-align: left;
    position: relative;
    left: 220px;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
    padding: 3px;
}

h1{
    margin: 0;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
}

.input-menu{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 281px;
}

.btn-primary{
    padding: 10px;
    padding-right: 30px;
    padding-left: 30px;
    background-color: white;
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size:15px;
    font-weight: 600;
    color: black;
    text-decoration: none;
}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<form action="proses/crud.php?aksi=tambah-menu" method="POST">
    <h1>Tambah Menu</h1>
    <ul>
        <li>Nama Menu</li>
        <li><input type="text" placeholder="Nama Menu" name="nama_menu" class="input-menu" required></li>
    </ul>
    <ul>
        <li>Harga</li>
        <li><input type="text" placeholder="Harga" name="harga_menu" class="input-menu" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></li>
    </ul>
    <button class="btn-primary" name="btn-tambah-menu">Tambah</button>
</form>
