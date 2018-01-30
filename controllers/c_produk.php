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
		//require_once("views/pages/createProduk.php");

		//require_once("views/pages/penjual/inputProduk.php");


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
		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::lihatProduk();
			require_once('views/admin/productAdmin.php');
		}
		else{
			header('location:http://localhost/jo-florist/index.php/user/login');
		}


	}

	public function editProduk(){

		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::editProduk($_GET['id_produk']);
			require_once('views/pages/penjual/editProduk.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}


		
	}
	public function updateDataProduk(){
		$posts=Produk::updateDataProduk($_POST['id_produk'],$_POST["nama_produk"],$_POST["harga"],$_POST["jumlah_stok"],$_POST["deskripsi"]);
		header('location:index.php?controller=produk&action=showAllProdukPenjual');
	}
	public function deleteDataProdukPenjual(){
		$posts=Produk::deleteDataProdukPenjual($_GET['id_produk']);
		header('location:index.php?controller=produk&action=showAllProdukPenjual');
	}

/*	public function detailProduk(){

		
		
		$posts=Produk::showDetailProduk($_GET['id_produk']);
		require_once('views/pages/detailProduk.php');
		
		


		
	}*/


	public function detailBeliProduk(){

		if (isset($_SESSION['login_user'])) {
			
			$posts=Produk::showDetailProduk($_GET['id_produk']);
			require_once('views/pages/pembeli/detailProduk.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}


		
	}
}
?>