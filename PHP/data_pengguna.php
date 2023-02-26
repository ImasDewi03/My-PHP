<h3> Data Pengguna </h3>

<table border="1">
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Konfirmasi Password</th>
	</tr>
	<tr> 
		<th>No</th>
		<th>id</th>
		<th>jawaban</th>
	<?php

	include "jaringan.php";
	$no=1;
	$ambildata = mysql_query($jaringan, "select * from pengguna");
	while ($tampil = mysql_fetch_array($ambildata)){
		echo "
		<tr>
			<td>$no</td>
			<td>$tampil[Username]</td>
			<td>$tampil[Password]</td>
			<td>$tampil[Konfirmasi_Password]</td>
		</tr>";
	$no=1;
	$ambildata = mysql_query($jaringan, "select * from jawaban");
	while ($tampil = mysql_fetch_array($ambildata)){
		echo"
		<tr>
			<td>$no</td>
			<td>$tampil[jawaban]</td>
		</tr>";
	}

	}

		$no++;

	}
	?>
</table> 