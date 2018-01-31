<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="resources/css/tambahProduk.css">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <script src="resources/js/jquery-3.2.1.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php/home/homeAdmin">Jo-Florist</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php/home/homeAdmin">Home</a></li>
                <li><a href="index.php/produk/lihatProduk">Product</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php/produk/tambahProduk">Tambah Produk</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
    <div id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <form id="regis" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="controller" value="produk">
                        <input type="hidden" name="action" value="prosesTambahProduk">


                        <label>Nama bunga</label>
                        <br>
                        <input type="text" name="nama_produk" id="button" placeholder="Nama Bunga" required>
                        <br>
                        <br>
                        <label>Kode bunga</label>
                        <br>
                        <input type="number" name="kode_produk" id="button" placeholder="Kode Bunga">
                        <br>
                        <br>
                        <label>Harga bunga</label>
                        <br>
                        <input type="number" name="harga" id="button" placeholder="Harga Bunga" required>
                        <br>
                        <br>
                        <label>Deskripsi</label>
                        <br>
                        <textarea style="width: 300px; height: 125px;" name="deskripsi" id="button"></textarea>
                        <br>
                        <br>
                        <center><input type="file" name="foto_bunga" class="form-control" id="button"></center>
                        <br>
                        <br>
                        <input type="submit" name="submit" value="Submit">

                    </form>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>

    </div>

</body>
</html>