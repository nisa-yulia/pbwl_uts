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
    margin: 0;
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
    left: 230px;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
    padding: 3px;
}

.judul-form{
    margin: 10px;
    font-family: 'Be Vietnam Pro', sans-serif;
    color: white;
    position: relative;
    left: 20px;
}

.input-pesanan{
    font-family: 'Be Vietnam Pro', sans-serif;
    height: 35px;
    width: 281px;
}
.input-combobox{
    font-family: 'Be Vietnam Pro', sans-serif;
height: 35px;
    width: 284px;
    position: relative;
    right: 41px;
}
.input-jpesanan{
    font-family: 'Be Vietnam Pro', sans-serif;
height: 35px;
    width: 284px;
    position: relative;
    right: 41px;
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
    position: relative;

}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<form action="proses/crud.php?aksi=tambah" method="POST">
    <h1 class="judul-form">Tambah Pembeli</h1>
    <ul>
        <li>Nama Pembeli</li>
        <li><input type="text" placeholder="Nama Pembeli" name="nama-pelanggan" class="input-pesanan" required></li>
    </ul>
    <ul>
    <ul>
        <?php
                $sql = "SELECT * FROM tb_menu JOIN tb_pesanan ON tb_menu.id_menu=tb_pesanan.id_menu_pesanan WHERE id_menu=:id_menu";
        ?>
        <li>Menu</li>
        <li>
            <select name="menu-pesanan" id="" class="input-combobox">
                <option value="">Pilih</option>
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
    </br>
        <li>Jumlah Pesanan</li>
    
        <li><input type="text" id="" name="jumlah-pesanan" class="input-jpesanan" onkeypress="return event.charCode >= 48 && event.charCode <=57"></li>
    </ul>
    <button class="btn-primary" name="btn-tambah-pesanan">Tambah</button>
</form>
