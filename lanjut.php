<?php
include "nyambung.php";
$id = $_GET['p'];
$hasil = mysql_query("select * from jadwal where id_jadwal='$id'");
$data=mysql_fetch_array($hasil);
$file = 'jadwal/'.$data['photo_jadwal'].'';
 if ($file =="jadwal/"){
echo '

						<h3>'.$data['judul_jadwal'].'</h3>
								<p>Posted by '.$data['penulis_jadwal'].' <br>
								Pada Tanggal '.$data['tgl_jadwal'].'</p> 
								<p>'.$data['isi_jadwal'].'</p> 
									
				

 ';}
 else {
 echo '
					
						<img width="400" src="photo-jadwal/'.$data['photo_jadwal'].'" alt="" />
					
							<h3>'.$data['judul_jadwal'].'</h3>
								<p>Posted by '.$data['penulis_jadwal'].' <br> 
								Pada Tanggal '.$data['tgl_jadwal'].'</p> 
								<p>'.$data['isi_jadwal'].'</p> 
									
						  
						
					
 ';}
?>