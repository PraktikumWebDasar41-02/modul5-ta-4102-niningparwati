<?php 
$conn = mysqli_connect('localhost','root','','d_modul5');
$result = mysqli_query($conn, "SELECT * FROM t_jurnal1");

echo 
'<table border="1px">
	<thead>
		<tr>
			<th> NIM </th>
			<th> Nama </th>
			<th> Email </th>
			<th> Komentar </th>
			<th> Tanggal Lahir </th>
			<th> Jenis Kelamin </th>
			<th> Jurusan </th>
			<th> Fakultas </th>
		</tr>
	</thead>
	<tbody>';

$row = mysqli_fetch_row($result);
	echo 
	'<tr>
		<td>'.$row[0].'</td>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
		<td>'.$row[3].'</td>
		<td>'.$row[4].'</td>
		<td>'.$row[5].'</td>
		<td>'.$row[6].'</td>
		<td>'.$row[7].'</td>
	</tr>';


echo '
	</tbody>
</table>';
 ?>