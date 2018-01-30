<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="resources/css/product.css" rel="stylesheet" type="text/css">
    <link href="resources/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
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
                    <li class="active"><a href="index.php/produk/lihatProduk">Product</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php/produk/tambahProduk">Tambah Produk</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
                <!--</div>-->
            </div>
        </nav>
        <br>
        <div id="banner1">

            <div class="center">

                <img src="resources/images/produk1.png" width="100%">

            </div>

        </div>

        <div class="container">
            <div id="prod-container">
                <?php foreach ($posts as $item) {

                    ?>
                    <div class="prod-box">
                        <img src="foto_produk/<?php echo $item['foto_produk']; ?>" alt="produk">
                        <div class="prod-trans">
                            <div class="prod-feature">
                                <p><?php echo $item['nama_produk'] ?></p>
                                <p>Harga : <?php echo "Rp ". number_format($item['harga'],0,".","."); ?></p>
                                <a href="detailProduct.html">
                                    <button type="button" class="btn btn-success">Detail</button>
                                </a>
                                <a href="editProduct.html">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
       <!--  <div class="prod-box">
            <img src="resources/images/gambar1.jpg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 2</p>
                    <p>Price : Rp.15.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div>
        <div class="prod-box">
            <img src="resources/images/gambar2.jpeg" alt="produk">
            <div class="prod-trans">
                <div class="prod-feature">
                    <p>Bunga 1</p>
                    <p>Price : Rp.17.000</p>
                    <button type="button" class="btn btn-success">Detail</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </div> -->
    </div>

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