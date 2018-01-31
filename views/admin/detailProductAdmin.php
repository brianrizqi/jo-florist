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
<?php foreach ($posts as $item) {
    # code...
 ?>
<div class="product-card">
    <div class="product-image">
        <img src="foto_produk/<?php echo $item['foto_produk']; ?>" width="100%">
    </div>
    <div class="product-details">
        <span class="product-code"><?php echo $item['kode_produk'] ?></span>
        <h4><?php echo $item['nama_produk']; ?></h4>
        <p><?php echo $item['deskripsi']; ?></p>
        <div class="product-bottom">
            <div class="product-price">
                 <?php echo "Rp ". number_format($item['harga'],0,".","."); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</body>
</html>