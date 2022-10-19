<?php
 include "../login/header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "../koneksi.php";
    $qry_get_pelanggan=mysqli_query($conn,"SELECT * FROM member WHERE id_pelanggan = '".$_GET['id_pelanggan']."'");
    $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
    ?>
    <h3>Ubah Pelanggan</h3>
    <form action="proses_ubah_pelanggan.php" method="post">
        <input type="hidden" name="id_pelanggan" value= 
  "<?=$dt_pelanggan['id_pelanggan']?>">
        Nama :
        <input type="text" name="nama" value= "<?=$dt_pelanggan['nama']?>" class="form-control">
        Jenis kelamin : 
        <?php 
        $arr_jenis_kelamin=array('Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                if($key_jenis_kelamin==$dt_pelanggan['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
        <option value="<?=$key_jenis_kelamin?>" <?=$selek?>><?=$val_jenis_kelamin?></option>
            <?php endforeach ?>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_pelanggan['alamat']?></textarea>
        Telepon :
        <input type="text" name="tlp" value= "<?=$dt_pelanggan['tlp']?>" class="form-control"><br>
        <input type="submit" name="simpan" value="Ubah Pelanggan" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
