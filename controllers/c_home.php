<?php 
Class HomeController{

	public function home(){
		
		$posts=Produk::lihatProdukBaru();
		require_once("views/pages/home.php");


	}
	public function homeAdmin(){
		if (isset($_SESSION['login_user'])) {
			require_once("views/admin/homeAdmin.php");
		}
		else{
			header('location:http://localhost/jo-florist/index.php/user/login');
		}
	}

}
?>
