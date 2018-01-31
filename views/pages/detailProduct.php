<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link href="resources/css/detailProduct.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <script src="resources/js/jquery-3.2.1.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
            <a class="navbar-brand" href="index.php">Jo-Florist</a>
        </div>
<!--        <div class="collapse navbar-collapse" id="myNavbar">-->
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="index.php/produk/semuaProduk"><span class="glyphicon glyphicon-shopping-cart"></span>
                        Product</a></li>
            </ul>
<!--        </div>-->
    </div>
</nav>

<?php foreach ($posts as $item) {
    
 ?>
<div class="product-card">
    <div class="product-image">
        <img src="foto_produk/<?php echo $item['foto_produk']; ?>" width="100%">
    </div>
    <div class="product-details">
        <span class="product-code"><?php echo $item['kode_produk']; ?></span>
        <h4><?php echo $item['nama_produk'] ?></h4>
        <p><?php echo $item['deskripsi']; ?></p>
        <div class="product-bottom">
            <div class="product-price">
                 <?php echo "Rp " . number_format($item['harga'], 0, ".", "."); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</body>
</html>