<?php
		$siswa = array(
			array(
				"nama" => "Ani",
				"nis" => "123",
				"rayon" => "A",
				"kelas" => "RPL 1"
			),

		);
		for ($i=0; $i < count($siswa); $i++) { 
			echo "<tr>";
			echo "<td>".($i+1)."</td>";
			echo "<td>".$siswa[$i]["nama"]."</td>";
			echo "<td>".$siswa[$i]["nis"]."</td>";
			echo "<td>".$siswa[$i]["rayon"]."</td>";
			echo "<td>".$siswa[$i]["kelas"]."</td>";
			echo "</tr>";
		}
 ?>
