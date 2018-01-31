<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link href="resources/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <script src="resources/js/jquery-3.2.1.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <title>Home Admin</title>
</head>
<body>
<!-- header navigation-->
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
                <li class="active"><a href="index.php/home/homeAdmin">Home</a></li>
                <li><a href="index.php/produk/lihatProduk">Product</a></li>
                <li><a href="#bannerAbout">About</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php/produk/tambahProduk">Tambah Produk</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- banner-->
<div id="banner">

    <div class="center">

        <h1>Welcome to Jo-Florist</h1>
        <h2>Do you want to buy?</h2>
        <a href="productAdmin.html" class="btn-link">Learn More</a>

    </div>

</div>
<!--produk-->
<div id="product">
    <div class="container">
        <div class="product_section_title">Latest Product</div>
        
        <?php foreach ($posts as $item) {

                ?>
                <div class="product_one">
                    <div class="product_img">
                    <img src="foto_produk/<?php echo $item['foto_produk']; ?>" style="min-height:175px;">
                    </div>
                    <div class="product_text">
                        <h4><?php echo $item['nama_produk']; ?></h4>
                    </div>
                    <div class="product_desc">
                        <!-- <b>Bunga 1</b> -->
                        <?php echo $item['deskripsi']; ?>
                    </div>
                    <div class="product_price">
                        <div class="price">
                            <?php echo "Rp ". number_format($item['harga'],0,".","."); ?>
                        </div>
                        <a href="index.php/produk/detailProdukAdmin/<?php echo $item['id_produk']; ?>" class="button_buy">Detail</a>
                    </div>

                </div>
                <?php } ?>
    </div>
</div>
<div id="bannerAbout">
    <p></p>
    <img src="resources/images/jo.jpg" width="100%">

</div>
<!--footer-->
<div id="footer">
    <div class="center">
        <div class="store">
            <p>Our Store</p>
            <p>Jalan Sumatra no 163 Sumbersari, Jember</p>
            <p>Phone: 0821-4317-2060</p>
            <p>Email: jo_florist@gmail.com</p>

        </div>
        <div class="opening">
            <p>Opening Hours</p>
            <p>Mon - Sat : 08.00 - 18.00 WIB</p>
            <p>Sunday : Closed</p>
        </div>
    </div>


</div>
<div id="contact_info">
    <div class="container">
        <div class="product_section_title">Cari Kami disini</div>
    </div>
    <br>
    <div class="map">
        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15797.322352953557!2d113.7106291!3d-8.1694109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf05adf22f97e2722!2sJo+Florist!5e0!3m2!1sid!2sid!4v1516972907117">
        </iframe>
        <br>
        <small><a
                href="https://www.google.co.id/maps/place/Jo+Florist/@-8.1694109,113.7106291,15z/data=!4m2!3m1!1s0x0:0xf05adf22f97e2722?sa=X&ved=0ahUKEwjWme2G3PXYAhVFvo8KHcHNDcMQ_BIIfjAK"
                style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
    </div>
</div>

</body>
</html>