<center><h2>Index Jadwal</h2></center>

<?php
include "nyambung.php";
$has = mysql_query("select * from jadwal order by tgl_jadwal desc");
$num = mysql_num_rows($has);

if($num<1){
	echo'<center>Tidak Ada jadwal</center>';
}else{
while($data=mysql_fetch_array($has)){
	$art = substr($data['isi_jadwal'],0,100);
	 echo '
					<h2>'.$data['judul_jadwal'].'</h2>
					<img width="330" height="280" src="photo-jadwal/'.$data['photo_jadwal'].'">
					<h4>Dipublikasikan pada '.$data['tgl_jadwal'].'</h4>
					<h4>Oleh '.$data['penulis_jadwal'].'</h4>
					<p>'.$art.'..</p>
				    <a href="lanjut.php?p='.$data['id_jadwal'].'">Read More</a>
					<br><br>
		
		 ';}
}
?>