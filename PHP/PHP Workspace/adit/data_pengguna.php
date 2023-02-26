<h3> Data Pengguna </h3>

<table border="1">
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Konfirmasi_Password</th>
	</tr>
	<?php

	include "jaringan.php";
	$no=1;
	$ambildata = mysqli_query($jaringan, "select * from pengguna");
	while ($tampil = mysqli_fetch_array($ambildata)){
		echo "
		<tr>
			<td>$no</td>
			<td>$tampil[Username]</td>
			<td>$tampil[Password]</td>
			<td>$tampil[Konfirmasi_Password]</td>
		</tr>";

		$no++;

	}
	?>
</table> 