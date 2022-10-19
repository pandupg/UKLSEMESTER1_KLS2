<?php
include "../koneksi.php";
if($_POST){
    $jenis_2 = $_POST['jenis_tambah'];
    $harga = $_POST['harga'];

    if(empty($jenis_2)){
        echo "<script>alert('Jenis paket tidak boleh kosong');location.href='tambah_paket.php';</script>";
 
    } else {
        $insert=mysqli_query($conn,"INSERT INTO paket(jenis,harga) 
                                    VALUE ('".$jenis_2."','".$harga."')");                   
    } if($insert){
        echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
    }
}
        


?>
