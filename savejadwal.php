<?php ob_start();
include "nyambung.php";
if($_POST){
	$juduljadwal      = $_POST['judul_jadwal'];
	$isijadwal 	    = $_POST['isi_jadwal'];
	$penulisjadwal 	= $_POST['penulis_jadwal'];
	$photojadwal 		= $_FILES['images']['name'];
	
	if(!empty($_FILES['images']['tmp_name'])){
		move_uploaded_file($_FILES['images']['tmp_name'], 'photo-jadwal/'.$_FILES['images']['name']);

		mysql_query("insert into jadwal(judul_jadwal, isi_jadwal, penulis_jadwal, photo_jadwal)
		values('$juduljadwal', '$isijadwal', '$penulisjadwal', '$photojadwal')"); 
		
	} else {
		mysql_query("insert into jadwal(judul_jadwal, isi_jadwal, penulis_jadwal)
		values('$juduljadwal', '$isijadwal' ,'$penulisjadwal')");
		
	}
	header('location:jadwal.php');
	exit;
}

?>

