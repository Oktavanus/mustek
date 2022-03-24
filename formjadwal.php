<form id="formberita" method="post" action="savejadwal.php" enctype="multipart/form-data">
		<center><p>
			<label>Judul Jadwal:</label><br>
			<input type="text" id="judul_jadwal" name="judul_jadwal" required>
		</p>

		<p>
			<label>Isi Jadwal:</label><br>
			<textarea style="width:600px; height:450px" id="isi_jadwal" name="isi_jadwal" required></textarea>
			
		</p>
	
		<p>
			<label>Penulis Jadwal:</label><br>
			<input type="text" id="penulis_jadwal" name="penulis_jadwal" required>
		</p>
		
		<p>
			<label>Photo Jadwal:</label><br>
			<input type="file" id="images" name="images"/>
		</p>
	
		<td colspan=2><input type="submit" id="submit" value="Kirim"></td>
	
</form>

