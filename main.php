<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    require 'proses/panggil.php';
                    if(!empty($_SESSION['ADMIN'])){?>

<style>

    .tambah{
        text-decoration: none;
        background-color: gray;
        color: black;
        padding:15px;
        font-family: 'Be Vietnam Pro', sans-serif;
        position: relative;
        left: 70px;
        font-weight: bolder;
    }

    .tambah:hover{
        background-color: black;
        color:white;
        transition: 0.5s;
    }

    table{
        background-color: white;
        border-spacing: 1;
        margin: 10px;
        position: relative;
        left: 60px;
        width: 1000px;
    }
    table th{
        background-color: rgb(16, 57, 133);
        margin: 0;
        height: 50px;
        color: white;
        font-family: 'Be Vietnam Pro', sans-serif;
    }
    table td{
        font-family: 'Be Vietnam Pro', sans-serif;
        padding: 10px;
    }

    table tr:hover{
        background-color: rgb(189, 189, 189);
        transition: 0.5s;
    }

    .col-no, .col-menu, .col-harga, .col-jumlah, .col-total{
        text-align: center;
    }

    .col-no{
        width: 100px;
    }

    .col-nama{
        width: 250px;
    }

    .col-menu{
        width:200px;
    }

    .col-harga{
        width:110px;
    }

    .col-jumlah{
        width: 60px
    }

    .col-total{
        width: 100px;
    }

    td img{
        width: 20px;
        height: 20px;
    }

    .col-edit:hover{
        background-color: rgb(29, 175, 29);
        transition: 0.5s;
    }

    .col-hapus:hover{
        background-color: rgb(255, 0, 0);
        transition: 0.5s;
}
.judul{
        text-decoration: none;
       text-align: center;
        color: black;
        font-family: 'Be Vietnam Pro', sans-serif;
        position: relative;
        left: 70px;
        font-weight: bolder;
    }
}

</style>
<h2 class="judul">                    Selamat Datang, <?php echo $sesi['uname_user'];?>!
</h1>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <p > <a href="tambah-pembeli.php" class="tambah">Tambah Pembeli</a></p>
                            <h2 class="judul">Data Pesanan</h2>

                            <table style="margin-top: 10px">
                                <thead>
    <tr>
        <th class="col-no">No. Transaksi</th>
        <th class="col-nama">Nama Pelanggan</th>
        <th class="col-menu">Menu</th>
        <th class="col-harga">Harga</th>
        <th class="col-jumlah">Jumlah</th>
        <th class="col-total">Total Pesanan</th>
        <th class="col-aksi" colspan="2">Aksi</th>
    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=1;
                                    $hasil = $proses->tampil_transaksi();
                                    foreach($hasil as $isi){
                                ?>
                                    <tr>
        <td class="col-no">P00<?php echo $isi['id_pesanan'];?></td>
        <td class="col-nama"><?php echo $isi['nama_pelanggan'];?></td>
        <td class="col-menu"><?php echo $isi['nama_menu'];?></td>
        <td class="col-harga">Rp. <?php echo $isi['harga_menu'];?></td>
        <td class="col-jumlah"><?php echo $isi['jumlah_pesanan'];?> pcs</td>
        <td class="col-total">Rp. 
            <?php 
                $a = $isi['harga_menu'];
                $b = $isi['jumlah_pesanan'];

                $c = $a * $b;
                echo $c;
            ?>
        </td>
        <td class="col-edit"><a href="pesanan-edit.php?id_pesanan=<?php echo $isi['id_pesanan']; ?>"><img src="assets/img/edit.png" alt=""></a></td>
        <td class="col-hapus"><a onclick="return confirm('Apakah yakin data akan di hapus?')" href="proses/crud.php?aksi=hapus-pembelian&id_pesanan=<?php echo $isi['id_pesanan'];?>"><img src="assets/img/hapus.png" alt=""></a></td>

                                    </tr>
                                <?php
                                    $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                    <?php }else{?>
                        <br/>
                            <h3> Maaf Anda Belum Dapat Akses CRUD, Silahkan Login Terlebih Dahulu !</h3>
                            <hr/>
                            <p><a href="login.php">Login Disini</a></p>
                    <?php }?>
