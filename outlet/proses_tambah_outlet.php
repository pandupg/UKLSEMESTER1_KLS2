<?php
include "../koneksi.php";
if($_POST){
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $tlp = $_POST['tlp'];
    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
 
    } else {
        $insert=mysqli_query($conn,"INSERT INTO outlet(nama, alamat, tlp) 
                                    VALUE ('".$nama."',
                                           '".$alamat."',
                                           '".$tlp."'
                                           )"); 
    } if($insert){
        echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
    }
}
        


?>
