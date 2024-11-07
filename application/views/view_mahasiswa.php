<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DAFTAR MAHASISWA</title>
</head>
<body>

	<table border="1px solid black"> 
		<tr>
			<th>ID</th>
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
			<th>Alamat</th>
		</tr>

	    <?php  foreach ($mahasiswa as $mhs): ?>
	    <tr>
	    	<td> <?php echo $mhs['ID']?></td>
	    	<td> <?php echo $mhs['Nama']?></td>
	    	<td> <?php echo $mhs['NIM']?></td>
	    	<td> <?php echo $mhs['Alamat']?></td>
	    </tr>

	    <?php endforeach; ?>

   	</table>


</body>
</html>