<?php
include "../koneksi.php";
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $role=$_POST['role'];
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
 
    } else {
        $insert=mysqli_query($conn,"INSERT INTO user(nama, username, password, role) 
                                    VALUE ('".$nama."',
                                           '".$username."',
                                           '".md5($password)."',
                                           '".$role."'
                                           )"); 
    } if($insert){
        echo "<script>alert('Sukses menambahkan user');location.href='tampil_user.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";
    }
}
        


?>
