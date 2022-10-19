<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LAUNDRY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../login/home.php">Home</a>
              <?php
        if($_SESSION['role'] != 'owner'){
        ?>   
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../pelanggan/tampil_pelanggan.php">Pelanggan</a>
            </li>
        <?php
        if($_SESSION['role'] !='kasir'){
        ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../user/tampil_user.php">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../outlet/tampil_outlet.php">Outlet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../paket/tampil_paket.php">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../transaksi/transaksi.php">Transaksi</a>
            </li>
            <?php
       }
        ?>
        <?php
        }
        ?> 
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../login/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
