<?php
include('koneksi.php');

// jika tombol keranjang di katalog.php di klik maka tambahkan data pada tabel keranjang
if(isset($_POST['submit']))
{
  $id_produk = $_POST['id_produk'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
  $total = $harga * $jumlah;
  $sql = "INSERT INTO keranjang (id_produk, harga, jumlah, total) VALUES ('$id_produk', '$harga', '$jumlah', '$total')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Produk berhasil ditambahkan ke keranjang belanja');window.location='keranjang.php';</script>";
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// PROSES Subtotal
$sql = "SELECT SUM(total) AS total FROM keranjang";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total = $row['total'];




