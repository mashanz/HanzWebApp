<html>
	<head>
		<title>EIRRG</title>
	</head>
<body>
<?php
	if(isset($_POST['add'])){
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn ){
			die('Could not connect: ' . mysql_error());
		}

		if(! get_magic_quotes_gpc() ){
			$nim = addslashes ($_POST['nim']);
			$nama = addslashes ($_POST['nama']);
			$hp = addslashes ($_POST['hp']);
			$jurusan = addslashes ($_POST['jurusan']);
		}
		else{
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$hp = $_POST['hp'];
			$jurusan = $_POST['jurusan'];
		}
	
		$sql = "INSERT INTO peserta ".
			"(nim, nama, hp, jurusan, join_date) ".
			"VALUES('$nim','$nama','$hp','$jurusan',NOW())";
	
		mysql_select_db('presensi');
		$retval = mysql_query( $sql, $conn );
		if(! $retval ){
			die('Could not enter data: ' . mysql_error());
		}
		echo "<center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		echo "Selamat Datang di Open Mind EIRRG\n";
		mysql_close($conn);
		echo "<br><a href='t-presensi.php'> Next </a>";
		echo "</center>";
	}
	else{
	?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<form method="post" action="<?php $_PHP_SELF ?>">
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	
		<tr>
		<td id="gambar" rowspan="5"><img align="right"
     		src="images/eirrg.png" width="100" height="100"></td>
		<td> </td>
		<td> </td>
		</tr>
	
		<tr>
		<td width="100">NIM</td>
		<td><input name="nim" type="text" id="nim"></td>
		</tr>
		
		<tr>
		<td width="100">Nama</td>
		<td><input name="nama" type="text" id="nama"></td>
		</tr>
		
		<tr>
		<td width="100">No. HP</td>
		<td><input name="hp" type="text" id="hp"></td>
		</tr>
		
		<tr>
		<td>Jurusan</td>
		<td>
			<select title="" name="jurusan" id="jurusan" type="text">
				<option></option>
				<option>S1 SISTEM KOMPUTER</option>
				<option>S1 SISTEM INFORMASI</option>
				<option>S1 ILMU KOMPUTASI</option>
				<option>S1 TEKNIK FISIKA</option>
				<option>S1 TEKNIK ELEKTRO</option>
				<option>S1 TEKNIK TELEKOMUNIKASI</option>
				<option>S1 TEKNIK INFORMATIKA</option>
				<option>S1 TEKNIK INDUSTRI</option>
				<option>S1 TEKNIK TELEKOMUNIKASI</option>
				<option>D3 TEKNIK INFORMATIKA</option>
				<option>D3 TEKNIK TELEKOMUNIKASI</option>
			</select>
		</td>
		</tr>
		
		<tr>
		<td width="100"> </td>
		<td> </td>
		</tr>
		
		<tr>
		<td width="100"> </td>
		<td>
		<input name="add" type="submit" id="add" value="OK">
		</td>
		</tr>
	</table>
</form>
</center>
<?php
	}
?>

</body>

<style>
form{
background:rgb(200,200,200);
}
input{
width:100%;
}
</style>

</html>