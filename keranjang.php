<?php
include('koneksi.php');
include('proses_keranjang.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Saya</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

  <!--Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<!--css-->
<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color:grey;
        color: white;
        text-align: right;
    }

   .header {
            overflow: hidden;
            background-color:#b6895b;
            padding: 14px 14px;   
        }

        .header a {
            float: left;
            color: white;
            text-align: center;
            padding: 23px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-left {
            float: left;
            padding: 30px;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }

        .input {
        font-size: 15px;
        }

        .form-group {
        font-size: 15px;
        margin-left: 14px;
        }

        .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: grey;
        color: white;
        text-align: right;
        } 
</style>

<body>
<div class="header">
    <div class="col-sm-12">
      <a class="navbar-brand" href="index.php">
      <img src="img/bakulkopi.png" alt="Logo" style="width:70px;" class="rounded-pill">
      </a>
      <a class="navbar-brand" href="https://www.instagram.com/indrakbrs?igsh=Y2Z1Ym5jdnJxNnkw"><h1 style="text-align:left;font-style: initial; font-family:cursive"><b>Bakul Kopi</b></h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
      </button>
    </div><br><br>

    <div class="header-left">
        <h3>Max Pembelian 1 produk Rp200.000 akan mendapatkan diskon:</h3>
    </div>

    <div class="header-right">
      <a href="index.php"><button type="button" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-plus" ></span>
                Katalog
      </button></a>
      <a href="addkatalog.php"><button type="button" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-plus" ></span>
                Tambah Produk
      </button></a>
    </div>
</div>
<h1>Keranjang Saya</h1>
<!-- tabel keranjang saya dengan relasi antara tabel produk dengan keranjang -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from keranjang k, produk p where k.id_produk=p.IDProduk";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      $no=1;
      while($row = mysqli_fetch_assoc($result))
      {
        $subtotal=$row['harga']*$row['jumlah'];
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$row['NamaProduk']."</td>";
        echo "<td>".number_format($row['harga'],0,'','.')."</td>";
        echo "<td>".$row['jumlah']."</td>";
      // button hapus
        echo "<td><a href='keranjang.php?hapus=".$row['id_produk']."'><button type='button' class='btn btn-danger'>Hapus</button></a></td>";
        echo "</tr>";
        $no++;
      }
    }
    ?>
  </tbody>
</table>
<!-- tombol bayar-->
<a href="bayar.php"><button type="button" class="btn btn-warning">Bayar</button></a>