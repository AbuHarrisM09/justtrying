<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARES'S SHOP</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>

<body>
    <div class="container-fluid text-dark">
        <div class="row bg-primary">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">ARES'S SHOP</h1>
                <p class="lead"></p>
            </div>
        </div>

    <div class="container-fluid border bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timeline.php?page=produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=kontak">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timeline.php?page=transaksi">Transaksi</a>
        </li>
            </ul>
            </div>
                <div class="col-md-4">
                    <a href="login.php" class="btn btn-secondary">Masuk</a>
                    <a href="register.php" class="btn btn-success">Daftar</a>
                </div>
        </div>
    </nav>
    </div>


    <main class="container-fluid border">
        <div class="row">
            <div class="col-md-3 border">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione ipsam facere quod?</p>
            </div>

            <div class="col-md-6">
            <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    switch ($page) {
                    case 'home':
                        include "halaman/home.php";
                    break;

                    case 'produk':
                        include "halaman/produk.php";
                    break;

                    case 'kontak':
                        include "halaman/kontak.php";
                    break;
                    case 'transaksi':
                        include "halaman/transaksi.php";
                    break;

                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                    break;
                }
         }
                else{
                    include "halaman/home.php";
                }
            ?>

            </div>

    </main>

    <footer class="container-fluid bg-light border">
        <div class="row">
            <div class="col-12 py-4" align="text-center">
                <center>&copy; Harris M</center>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>