<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--css-->


<!--Requered-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <!--Memunculkan tulisan-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <style>

        .header {
            overflow: hidden;
            background-color: #b6895b;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: white;
            text-align: center;
            padding: 12px;
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
</head>
<body>
    <div class="header">
      <div class="col-sm-12">
        <a class="navbar-brand" href="#">
        <img src="img/bakulkopi.png" alt="Logo" style="width:70px;" class="rounded-pill">
        </a>
        <a class="navbar-brand" href="https://www.instagram.com/indrakbrs?igsh=Y2Z1Ym5jdnJxNnkw"><h1 style="text-align:left;font-style: initial; font-family:cursive">Bakul Kopi</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="header-right">
        <a href="keranjang.php"><button type="button" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-shopping-cart"></span>
                Checkout
        </button>
        <a href="addkatalog.php"><button type="button" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-plus" ></span>
                Tambah Produk
        </button></a>
      </div>
      <div class="header-left">
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="addkatalog.php">Home</a>
            <a class="nav-link" href="https://www.instagram.com/indrakbrs?igsh=Y2Z1Ym5jdnJxNnkw">About Us</a>
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Katagori Produk</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Beverage</a></li>
                <li><a class="dropdown-item" href="index.php">Coffee Beans</a></li>
              </ul>
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Tautan</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://shopee.co.id">Shopee</a></li>
                <li><a class="dropdown-item" href="https://www.gojek.com">Gojek</a></li>
                <li><a class="dropdown-item" href="https://www.lazada.co.id">Lazada</a></li>
                <li><a class="dropdown-item" href="https://www.tokopedia.com">Tokopedia</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
    </div>

<br>

<div class="containter">
<?php
include('koneksi.php');
$sql="select * from produk order by harga asc";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "<div class='containter'>";
	
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<div class='col-xs-3'>";
		echo "<div class='col-xs-12'><img src='img/".$row['FotoProduk']."' height='128px'></div>";
		echo "<div class='col-xs-12'><h3>".$row['NamaProduk']."</h3> ".number_format($row['Harga'],0,'','.')."</div>";
    //deskripsi
    echo "<div class='col-xs-12'><p>".$row['Deskripsi']."</p></div>";
    //form
    echo "<form action='proses_keranjang.php' method='post'>";
    echo "<input type='hidden' name='id_produk' value='".$row['IDProduk']."'>";
    echo "<input type='hidden' name='harga' value='".$row['Harga']."'>";
   //label masukan jumlah pembelian
    echo "<div class='col-xs-12'><label for='jumlah'>Jumlah Pembelian</label></div>";
    echo "<div class='col-xs-12'><input type='number' name='jumlah' id='jumlah' min='1' max='10' value='1'></div>";
    echo "<div class='col-xs-12'><input type='submit' name='submit' value='Tambah ke Keranjang' class='addtocart'></div>";
    echo "</form>";
    echo "</div>";
    }
    echo "</div>";                    
}
else
{
  echo "0 results";
}
?>
</div>

<footer>
<div class="footer">
  &copy; 2024 Pemrograman Web | FTII Unisbank.
  </footer> 
</div>