<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
	if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
    // panggil file
    require 'proses/panggil.php';
    
    // tampilkan form edit
    $idGet = strip_tags($_GET['id']);
    $hasil = $proses->tampil_data_id('tb_menu','id_menu',$idGet);
?>
<style>
    form{
    width: 800px;
    background-color: rgb(16, 57, 133);
    text-align: center;
    padding: 50px;
    border-radius: 10px;
    position: relative;
    left: 200px;
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

.edit-menu{
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
<form action="proses/crud.php?aksi=edit" method="POST">
    <h1>Edit Menu</h1>
    <ul>
        <li>Nama Menu</li>
        <li><input type="text" name="nama_menu" class="edit-menu" value="<?php echo $hasil['nama_menu']; ?>" required></li>
    </ul>
    <ul>
        <li>Harga</li>
        <li><input type="text" name="harga_menu" class="edit-menu" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?php echo $hasil['harga_menu']; ?>" required></li>
                <li><input type="hidden" name="id_menu" class="edit-menu" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?php echo $hasil['id_menu']; ?>" required></li>
    </ul>
        <button class="btn-primary" name="btn-edit-menu">Simpan</button>
</form>
