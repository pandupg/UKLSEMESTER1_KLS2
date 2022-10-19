<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp = $_POST['tlp'];

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
 
    } else {
            include "../koneksi.php";
            $update=mysqli_query($conn,"UPDATE member SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', tlp='".$tlp."' where id_pelanggan = '".$id_pelanggan."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        }
        
    } 
?>
