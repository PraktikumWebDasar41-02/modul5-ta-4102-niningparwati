<!DOCTYPE html>
<html>
<head>
	<title> Form Pendaftaran Mahasiswa</title>
</head>
<body bgcolor="#99ffbb">
	<div align="center">
		<form method="POST">
			<table width="500" border="0.1px">
				<tr bgcolor="#green">
					<td height="30" colspan="2" align="center">Form Pendaftaran Mahasiswa</td>
				</tr>
				<tr>
					<td height="30" align="right">NIM : </td>
					<td><input type="text" name="nim" size="10" maxlength="10"></td>
				</tr>
				<tr>
					<td height="30" align="right">Nama : </td>
					<td><input type="text" name="nama" size="30" maxlength="30"></td>
				</tr>
				<tr>
					<td height="30" align="right">Email : </td>
					<td><input type="text" name="email" size="30" maxlength="30"></td>
				</tr>
				<tr>
					<td height="50" align="right">Komentar : </td>
					<td><textarea name="komentar" rows="10" cols="30"></textarea></td>
				</tr>
				<tr>
					<td height="30" align="right">Tanggal Lahir : </td>
					<td><input type="date" name="tanggal" size="30" maxlength="30"></td>
				</tr>
				<tr>
					<td height="30" align="right">Jenis Kelamin : </td>
					<td>
						<input type="radio" name="kelamin" value="Laki-Laki" checked>Laki-Laki
						<input type="radio" name="kelamin" value="Perempuan">Perempuan
					</td>
				</tr>
				<tr>
				<td height="30" align="right">Program Studi : </td>
					<td >
						<select name="prodi">
							<option>-Pilihan Jurusan</option>
							<option value="D3 Manajemen Informatika" >D3 Manajemen Informatika</option>
							<option value="D3 Komputerisasi Akuntansi" >D3 Komputerisasi Akuntansi</option>
							<option value="D3 Manajemen Pemasaran" >D3 Manajemen Pemasaran</option>
							<option value="D3 Teknik Informatika" >D3 Teknik Informatika</option>
							<option value="D3 Perhotelan" >D3 Perhotelan</option>
							<option value="D3 Teknik Komputer" >D3 Teknik Komputer</option>
							<option value="D4 Sistem Multimedia" >D4 Sistem Multimedia</option>
							<option value="S1 Akuntansi" >S1 Akuntansi</option>
							<option value="S1 MBTI" >S1 MBTI</option>
							<option value="S1 Teknik Telekomunikasi" >S1 Teknik Telekomunikasi</option>
							<option value="S1 Ilmu Komunikasi" >S1 Ilmu Komunikasi</option>
						</select>
					</td>
				</tr>
				<tr>
				<td height="30" align="right">Fakultas : </td> 
				<td>
					<select name="fakultas">
						<option >-Pilihan Prodi</option>
						<option value="FIT" >FIT</option>
						<option value="FKB" >FKB</option>
						<option value="FEB" >FEB</option>
						<option value="FIK" >FIK</option>
						<option value="FIF" >FIF</option>
						<option value="FRI" >FRI</option>
						<option value="FTE" >FTE</option>
					</select>
				</td>
				</tr>
				<tr>
				<td height="30" align="center" colspan="2"><input type="submit" name="submit" value="KIRIM"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

<?php if (isset($_POST['submit']))
{

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];
	$tanggal = $_POST['tanggal'];
	$kelamin = $_POST['kelamin'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];

	if (strlen($nim)<10) {
		echo "Input NIM minimal 10 karakter";
	}else{
		echo "NIM berhasil diinputkan";
	}

	if(strpos($email, '@') AND strpos($email, '.com')){
		echo "Email berhasil diinputkan.";
	}
	else{
		echo "Email gagal diinputkan. Pastikan penulisan email sudah benar.";
	}


	$conn = mysqli_connect('localhost','root','','d_modul5');
	$masuk = mysqli_query($conn, "INSERT INTO t_jurnal1() VALUES ('$nim','$nama','$email','$komentar','$tanggal','$kelamin','$prodi','$fakultas')");
	if ($masuk) {
		echo "Berhasil masuk ke database";
		header("Location:tampil.php");
	}
	else{
		echo "Gagal masuk ke database";
	}
 }

?>
	
