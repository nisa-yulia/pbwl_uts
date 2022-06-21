<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
	if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
    // panggil file
    require 'proses/panggil.php';
    
    // tampilkan form edit
    $idGet = strip_tags($_GET['id_pesanan']);
    $hasil = $proses->edit_pesanan('id_pesanan',$idGet);
?>
<style>
    form{
    width: 800px;
    background-color: rgb(16, 57, 133);
    text-align: center;
    padding: 50px;
    border-radius: 10px;
    position: relative;
    left:130px;
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

.edit-pesanan{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 281px;
}

.input-combobox{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 280px;
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
<form action="proses/crud.php?aksi=edit-pesanan" method="POST">
    <h1>Edit Pesanan</h1>
    <ul>
        <li>Nama Pembeli</li>
        <li><input type="text" name="nama_pelanggan" class="edit-pesanan" value="<?php echo $hasil['nama_pelanggan']; ?>" required></li>
    </ul>
    <ul>
        <li>Menu</li>
        <li>
        <select name="id_menu_pesanan" id="" class="input-combobox">
                <option value="<?php echo $hasil['id_menu_pesanan']; ?>"><?php echo $hasil['nama_menu'];?> (Rp. <?php echo $hasil['harga_menu'];?>)</option>
                            <?php
                                // include "../config/koneksi.php";
                                $sql1 = "SELECT * FROM tb_menu";
                                $stmt = $koneksi->prepare($sql1);
                                $stmt->execute();

                                if($stmt != ''){
                                     while($data = $stmt->fetch(PDO::FETCH_NUM))  {
                                ?>
                                        <option value="<?php echo $data[0]?>"><?php echo $data[1]?> (Rp. <?php echo $data[2]?>)</option>
                                <?php

                                    }
                                } else{
                                    echo "Data tidak ada";
                                }
                            ?>
            </select>
        </li>
    </ul>
    <ul>
        <li>Jumlah</li>
        <li><input type="text" class="edit-pesanan" name="jumlah_pesanan" value="<?php echo $hasil['jumlah_pesanan'];?>"></li>
                <li><input type="hidden" class="edit-pesanan" name="id_pesanan" value="<?php echo $hasil['id_pesanan'];?>"></li>
    </ul>
        <button class="btn-primary" name="btn-edit-pesanan">Simpan</button>
</form>
