<?php 
Class ContactController{

		public function sendMessage(){
			$nama=$_POST['nama'];
			$email=$_POST['email'];
			$telepon=$_POST['telepon'];
			$pesan=$_POST['pesan'];

			$phone="628978390660";
			$teks=" nama : "."*".$nama."* \n"
				 ." email : "."*".$email."* \n"
				 ." telepon : "."*".$telepon."* \n"
				 ." pesan : "."*".$pesan."* \n"
			;

			$textEncoded=rawurlencode($teks);
		
		
		header("location:https://api.whatsapp.com/send?phone=".$phone."&text=".$textEncoded);


	}

			public function contactWA(){

			$phone="628978390660";
		
		
		header("location:https://api.whatsapp.com/send?phone=".$phone);


	}



}