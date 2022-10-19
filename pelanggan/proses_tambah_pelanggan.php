<?php
include "../koneksi.php";
if($_POST){
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $tlp = $_POST['tlp'];
    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
 
    } else {
        $insert=mysqli_query($conn,"INSERT INTO member(nama, alamat, jenis_kelamin, tlp) 
                                    VALUE ('".$nama."',
                                           '".$alamat."',
                                           '".$jenis_kelamin."',
                                           '".$tlp."'
                                           )"); 
    } if($insert){
        echo "<script>alert('Sukses menambahkan pelanggan');location.href='tampil_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
    }
}
        


?>
