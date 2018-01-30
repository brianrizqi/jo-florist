<?php 
Class UserController{

	public function login(){
		$error='';
		require_once("views/admin/login.php");

	}

	public function error(){
		require_once('views/pages/error.php');
	}
	public function authentication(){
		$error='';
		if (!isset($_POST['username'])) {
				//return call('pages','error');
		}
		if(User::find($_POST['username'],md5($_POST['password']))==0){
			$error="username atau password  tidak valid";
			require_once('views/admin/login.php');
		}else if(User::find($_POST['username'],md5($_POST['password']))==1){
			$_SESSION['login_user']=$_POST['username'];
			header("location:http://localhost/jo-florist/index.php/home/homeAdmin");
		}
		
	}
}
?>
