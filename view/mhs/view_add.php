	<center>TAMBAH DATA DOSEN</center>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NID</td>
					<td>:</td>
					<td><input type="text" name="nid" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Nama Dosen</td>
					<td>:</td>
					<td><input type="text" name="nama_dosen" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Telepon</td>
					<td>:</td>
					<td><input type="text" name="telepon" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Kode Dosen</td>
					<td>:</td>
					<td><input type="text" name="kd_dosen" size="45"/></td>
				</tr>
				<tr>
					<td>Mata Kuliah</td>
					<td>:</td>
					<td><input type="text" name="mk" size="45"></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
		<?php
			if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
				$main = new controllerMhs();
				$main->insert();
			}
		?>

