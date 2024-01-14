<?php
include('koneksi.php');
// jika tombol bayar di klik hapus data pada tabel keranjang
if (isset($_POST['bayar'])) {
    $query = mysqli_query($conn, "delete from keranjang");
    if ($query) {
        echo "<script>alert('Terima Kasih Telah Berbelanja');window.location='index.php'</script>";
    } else {
        echo "<script>alert('Gagal');window.location='index.php'</script>";
    }
}