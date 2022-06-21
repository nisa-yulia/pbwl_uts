<?php
    require 'panggil.php';

    // proses tambah
    if(!empty($_GET['aksi'] == 'tambah'))
    {
        $pelanggan_nama = strip_tags($_POST['nama-pelanggan']);
        $pesanan_menu = strip_tags($_POST['menu-pesanan']);
        $pesanan_jumlah = strip_tags($_POST['jumlah-pesanan']);
        $tabel = 'tb_pesanan';
        $tabel1 = 'tb_transaksi';
        # proses insert
        $data[] = array(
            'nama_pelanggan'		=>$pelanggan_nama,
            'id_menu_pesanan'		=>$pesanan_menu,
            'jumlah_pesanan'	=>$pesanan_jumlah
        );
        $data1[] = array(

        );
        $proses->tambah_data($tabel,$data);
                $proses->tambah_data($tabel1,$data1);
        echo '<script>alert("Tambah Data Berhasil");window.location="../dashboard.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'tambah-menu'))
    {
        $nama_menu = strip_tags($_POST['nama_menu']);
        $harga_menu = strip_tags($_POST['harga_menu']);
        $tabel = 'tb_menu';
        # proses insert
        $data[] = array(
            'nama_menu'        =>$nama_menu,
            'harga_menu'       =>$harga_menu,

        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../menu-tampil.php"</script>';
    }    

    // proses edit
    if(!empty($_GET['aksi'] == 'edit'))
    {
        $nama_menu = strip_tags($_POST['nama_menu']);
        $harga_menu = strip_tags($_POST['harga_menu']);
            $data = array(
                'nama_menu'      =>$nama_menu,
                'harga_menu'      =>$harga_menu
            );
        $tabel = 'tb_menu';
        $where = 'id_menu';
        $id = strip_tags($_POST['id_menu']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Data Berhasil");window.location="../menu-tampil.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'edit-pesanan'))
    {
        $nama_pelanggan = strip_tags($_POST['nama_pelanggan']);
        $id_menu_pesanan = strip_tags($_POST['id_menu_pesanan']);
        $jumlah_pesanan = strip_tags($_POST['jumlah_pesanan']);
            $data = array(
                'nama_pelanggan'      =>$nama_pelanggan,
                'id_menu_pesanan'      =>$id_menu_pesanan,
                'jumlah_pesanan'      =>$jumlah_pesanan
            );
        $tabel = 'tb_pesanan';
        $where = 'id_pesanan';
        $id = strip_tags($_POST['id_pesanan']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Data Berhasil");window.location="../dashboard.php"</script>';
    }
    // hapus data
    if(!empty($_GET['aksi'] == 'hapus'))
    {
        $tabel = 'tb_menu';
        $where = 'id_menu';
        $id = strip_tags($_GET['id']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../menu-tampil.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'hapus-pembelian'))
    {
        $tabel = 'tb_pesanan';
        $where = 'id_pesanan';
        $id = strip_tags($_GET['id_pesanan']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../dashboard.php"</script>';
    }
    // login
    if(!empty($_GET['aksi'] == 'login'))
    {   
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);
        // panggil fungsi proses_login() yang ada di class prosesCrud()
        $result = $proses->proses_login($user,$pass);
        if($result == 'gagal')
        {
            echo "<script>window.location='../index.php?get=gagal';</script>";
        }else{
            // status yang diberikan 
            session_start();
            $_SESSION['ADMIN'] = $result;
            // status yang diberikan 
            echo "<script>window.location='../dashboard.php';</script>";
        }
    }
?>
