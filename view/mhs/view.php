
		<center>DATA DOSEN</center>
		<table border="1" cellpadding="6" cellspacing="0" align="center">
			<tr align="center">
				<td>NID</td>
				<td>Nama Dosen</td>
				<td>Alamat</td>
				<td>Telepon</td>
				<td>Kode Dosen</td>
				<td>Mata Kuliah</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php while($row = $this->model->fetch($data)){
				echo "
					<tr>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td>$row[5]</td>
						<td><a href='index.php?e=$row[0]'>Edit</a></td>
						<td><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
					</tr>
				";
			}?>
		</table>
		<center><a href='index.php?i=add'>Tambah Data</a></center>
