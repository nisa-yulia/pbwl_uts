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
        left: 80px;
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

    .col-id, .col-harga, .col-edit, .col-hapus{
        text-align: center;
    }

    .col-edit, .col-hapus{
        width: 90px;
    }
    .col-id{
        width: 30px;
    }

    .col-nama{
        width: 400px;
    }


    .col-harga{
        width:200px;
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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <p > <a href="tambah-menu.php" class="tambah">Tambah Menu</a></p>
                            <h2 class="judul">Data Menu</h2>

                            <table style="margin-top: 10px">
                                <thead>
   <tr>
        <th class="col-id">No</th>
        <th class="col-nama">Nama Menu</th>
        <th class="col-harga">Harga</th>
        <th class="col-aksi" colspan="2">Aksi</th>
    </tr>                                </thead>
                                <tbody>
                                <?php
                                    $no=1;
                                    $hasil = $proses->tampil_data('tb_menu');
                                    foreach($hasil as $isi){
                                ?>
                                    <tr>
        <td class="col-id"><?php echo $isi['id_menu']; ?></td>
        <td class="col-nama"><?php echo $isi['nama_menu']; ?></td>
        <td class="col-harga">Rp. <?php echo $isi['harga_menu']; ?></td>
        <td class="col-edit"><a href="menu-edit.php?id=<?php echo $isi['id_menu']; ?>"><img src="assets/img/edit.png" alt=""></a></td>
        <td class="col-hapus"><a onclick="return confirm('Apakah yakin data akan di hapus?')" href="proses/crud.php?aksi=hapus&id=<?php echo $isi['id_menu'];?>"><img src="assets/img/hapus.png" alt=""></a></td>
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
