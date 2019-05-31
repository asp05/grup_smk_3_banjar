<!DOCTYPE html>
<html>
<head>
	<title>Excel Report</title>
</head>
<body>
	<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename= Absen Siswa.xls");
	?>
	<center>
		<h2>DINAS PENDIDIKAN DAN KEBUDAYAAN
		SEKOLAH MENENGAH KEJURUAN NEGERI 3 BANJAR</h2>
		<b style="font-size:17px;">BIDANG STUDI KEAHLIAN : </b>
		<h5>1. TEKNOLOGI DAN REKAYASA  2. TEKNOLOGI INFORMASI DAN KOMUNIKASI
		3. AGRIBISNIS DAN AGROTEKNOLOGI  4. BISNIS DAN MANAJEMEN  5.KEMARITIMAN</h5>
		<p>Jl. Julaeni Tlp. (0263) 2734141 Kec. Langensari Kota Banjar 46341
		Web smkn3banjar.sch.id  Email smknegeri3bjr@ymail.com</p>
	</center>
	<hr>
	<br>
	<table border="1">
        <thead>
        	<tr>
        		<th><center>No</center></th>
        		<th width="200px"><center>Tanggal</center></th>
        		<th width="200px"><center>NIS</center></th>
        		<th width="400px"><center>Nama</center></th>
        		<th width="200px"><center>Gender</center></th>
        		<th width="200px"><center>Kelas</center></th>
        		<th width="300px"><center>Keterangan</center></th>
        	</tr>
        </thead>
        <tbody>
		    <?php
				$no = 1;
				foreach ($reportexcel as $ez) :
		    ?>
        	<tr>
        		<td><center><?= $no++ ?></center></td>
          		<td><center><?= date_indo1($ez->tgl) ?></center></td>
          		<td><center><?= $ez->nis ?></center></td>
          		<td><?= $ez->nama ?></td>
          		<td><center><?= $ez->jk ?></center></td>
          		<td><center><?= $ez->kelas ?></center></td>
          		<td><center><?= $ez->status_kehadiran ?></center></td>
        	</tr>
        	<!-- <label>L : <?php //echo @count($ez) ?></label> -->
        	<!-- <label>P : </label> -->
			<?php endforeach; ?>
        </tbody>
     </table>
</body>
</html>
