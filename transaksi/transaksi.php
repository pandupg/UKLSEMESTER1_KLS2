<?php 
    include "../login/header.php";
    if($_SESSION['role'] != 'admin'){
        echo "<script>alert('Tidak boleh akses');location.href='../login/home.php';</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Transaksi</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>ID MEMBER</th>
                <th>TGL</th>
                <th>BATAS WAKTU</th>
                <th>TGL BAYAR</th>
                <th>STATUS PELAKSANAAN</th>
                <th>STATUS DIBAYAR</th>
                <th>ID USER</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "../koneksi.php";
            $qry_detil_transaksi=mysqli_query($conn,"SELECT * FROM detil_transaksi");
            $no=0;
            while($data_detil_transaksi=mysqli_fetch_array($qry_detil_transaksi)){
            $no++;?>
<tr>              <td><?=$no?></td><td><?=$data_detil_transaksi['id_transaksi']?></td> <td><?=$data_detil_transaksi['id_paket']?></td> <td><?=$data_detil_transaksi['qty']?></td>
 
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a class="btn btn-success" href="../transaksi/detil_transaksi.php">Tambah Transaksi</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
