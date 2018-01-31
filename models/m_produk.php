<?php 

Class Produk{
	
	


	function __construct(){
		

	}





	public static function lihatProduk(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk ORDER BY id_produk DESC");

		foreach ($req as $item) {
			$list[]=array(
				'id_produk'=>$item['id_produk'],
				'nama_produk'=>$item['nama_produk'],
				'kode_produk'=>$item['kode_produk'],
				'harga'=>$item['harga'],
				'deskripsi'=>$item['deskripsi'],
				'foto_produk'=>$item['gambar']
				

				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}

	}
	public static function lihatProdukBaru(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk ORDER BY id_produk DESC LIMIT 0,4");

		foreach ($req as $item) {
			$list[]=array(
				'id_produk'=>$item['id_produk'],
				'nama_produk'=>$item['nama_produk'],
				'kode_produk'=>$item['kode_produk'],
				'harga'=>$item['harga'],
				'deskripsi'=>$item['deskripsi'],
				'foto_produk'=>$item['gambar']
				

				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}

	}

	public static function lihatDetailProduk($id_produk){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk where id_produk=".$id_produk);

		foreach ($req as $item) {
			$list[]=array(
				'id_produk'=>$item['id_produk'],
				'nama_produk'=>$item['nama_produk'],
				'kode_produk'=>$item['kode_produk'],
				'harga'=>$item['harga'],
				'deskripsi'=>$item['deskripsi'],
				'foto_produk'=>$item['gambar']
				

				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}
	}
	public static function tambahProduk($nama_produk,$kode_produk,$harga,$deskripsi,$foto_produk){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO produk (id_produk, nama_produk, kode_produk,harga, deskripsi, gambar) 
			VALUES (NULL, '".$nama_produk."', '".$kode_produk."', '".$harga."', '".$deskripsi."', '".$foto_produk."');
			");

		return $req;
	}


	public static function editProduk($id_produk){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk where id_produk=".$id_produk);


		foreach ($req as $item) {
			$list[]=array(
				'id_produk'=>$item['id_produk'],
				'nama_produk'=>$item['nama_produk'],
				'kode_produk'=>$item['kode_produk'],
				'harga'=>$item['harga'],
				'deskripsi'=>$item['deskripsi'],
				'foto_produk'=>$item['gambar']
				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}


	}


	public static function updateProdukAdmin($id_produk,$nama_produk,$kode_produk,$harga,$deskripsi,$foto_produk){
		$db = DB::getInstance();

		$url_gambar;
		$req1 = $db->query("SELECT gambar FROM produk where id_produk='$id_produk'");
		foreach ($req1 as $item) {
			$url_gambar = $item['gambar'];
		}
		if (strcasecmp($url_gambar,$foto_produk)==0) {
			$req2 = $db->query("UPDATE produk set nama_produk='$nama_produk',kode_produk='$kode_produk',
				harga='$harga',deskripsi='$deskripsi',gambar='$foto_produk' where id_produk=".$id_produk);
		}
		else{
			$req3 = $db->query("UPDATE produk set nama_produk='$nama_produk',kode_produk='$kode_produk',
				harga='$harga',deskripsi='$deskripsi',gambar='$foto_produk' where id_produk=".$id_produk);
			unlink('foto_produk/'.$url_gambar);

		}

		

		return $req1;
	}

	public static function deleteProdukAdmin($id_produk){
		$db = DB::getInstance();
		$url_gambar;
		//fclose($handle);
		$req1 = $db->query("SELECT gambar FROM produk where id_produk='$id_produk'");
		foreach ($req1 as $item) {
			$url_gambar = $item['gambar'];
		}
		unlink('foto_produk/'.$url_gambar);


		$req2 = $db->query("DELETE from produk where id_produk='$id_produk'");
		

		
		//$url = "foto_produk/".$url_gambar;
		return $req1;
	}


}

?>