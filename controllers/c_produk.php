<?php 
Class ProdukController{

	public function tambahProduk(){
		
		if (isset($_SESSION['login_user'])) {
			
			require_once("views/admin/tambahProduk.php");
		}
		else{
			header('location:http://localhost/jo-florist/index.php/user/login');
		}
		


	}
	public function prosesTambahProduk(){
		/*	echo "test";*/
		/*var_dump($_POST);
		exit;*/
		$foto = $_FILES['foto_bunga']['name'];
		$tmp = $_FILES['foto_bunga']['tmp_name'];
		/*$cabang=$_POST['cabang'];*/

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
		$path = "foto_produk/".$fotobaru;
// Proses upload
		if (move_uploaded_file($tmp, $path)) {
			$Produk = Produk::tambahProduk($_POST["nama_produk"],$_POST["kode_produk"],$_POST["harga"]
				,$_POST["deskripsi"],$fotobaru);
		}

		header("location:http://localhost/jo-florist/index.php/produk/lihatProduk");
	


	}
	public function lihatProduk(){
		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::lihatProduk();
			require_once('views/admin/productAdmin.php');
		}
		else{
			header('location:http://localhost/jo-florist/index.php/user/login');
		}


	}

	public function semuaProduk(){
		

		$posts=Produk::lihatProduk();
		require_once('views/pages/product.php');

	}

	public function detailProduk(){

		$id_produk=$_GET['id_produk'];
		$posts=Produk::lihatDetailProduk($id_produk);
		require_once('views/pages/detailProduct.php');


	}

	public function detailProdukAdmin(){
		if (isset($_SESSION['login_user'])) {

			$id_produk=$_GET['id_produk'];
			$posts=Produk::lihatDetailProduk($id_produk);
			require_once('views/admin/detailProductAdmin.php');
		}
		else{
			header('location:http://localhost/jo-florist/index.php/user/login');
		}


	}

	public function editProduk(){

		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::editProduk($_GET['id_produk']);
			require_once('views/admin/editProduct.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}


		
	}



	public function prosesUpdateProduk(){
		/*	echo "test";*/
		/*var_dump($_POST);
		exit;*/
		$id_produk=$_POST['id_produk'];
		$foto_produk=$_POST['foto_produk'];


		if (!file_exists($_FILES['foto_bunga']['tmp_name']))
		{
			$Produk = Produk::updateProdukAdmin($id_produk,$_POST["nama_produk"],$_POST["kode_produk"],
				$_POST["harga"],$_POST["deskripsi"],$foto_produk);
		}
		else{



			$foto = $_FILES['foto_bunga']['name'];
			$tmp = $_FILES['foto_bunga']['tmp_name'];
			

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
			$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
			$path = "foto_produk/".$fotobaru;
// Proses upload
			if (move_uploaded_file($tmp, $path)) {
				$Produk = Produk::updateProdukAdmin($id_produk,$_POST["nama_produk"],$_POST["kode_produk"],
					$_POST["harga"],$_POST["deskripsi"],$fotobaru);
			}

			


		}
		header("location:http://localhost/jo-florist/index.php/produk/lihatProduk");





	}

	public function deleteProdukAdmin(){
		$id_produk=$_GET['id_produk'];
		$posts=Produk::deleteProdukAdmin($id_produk);
		header('location:http://localhost/jo-florist/index.php/produk/lihatProduk');
	}


}




	?>
