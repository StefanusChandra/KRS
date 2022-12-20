<?php
	$krs = "Kartu Rencana Studi";
	$nama = "STEFANUS CHANDRA D.P";
	$matkul = ["Kode Mata Kuliah","Mata Kuliah"];
	$ujian = ["Paraf Pengawas Ujian","UTS","UAS"];
	$isi = ["No. Daftar","Pembimbing Akademik","NIM","Jenjang","Nama","Jenis Daftar","Program Studi","Semester"];
	
	$biodata = [
			'no_daftar'=>202130056,
			'pa'=>'Dessy Ambarsari, S.E., M.M,',
			'nim'=>210103037,
			'jenjang'=>'S1',
			'nama'=>'STEFANUS CHANDRA DEWANTA PUTRA',
			'jenis_daftar'=>'Reguler',
			'prodi'=>'Teknik Informatika',
			'semester'=>'2022/2023 Ganjil'
			];
	
	$datatb = [
			[
			'no'=>1,
			'kelas'=>'21A1',
			'kode'=>'TI20307',
			'matkul'=>'KEWIRAUSAHAAN 1',
			'sks'=>3,
			'uts'=>'',
			'uas'=>''
			],
			[
			'no'=>2,
			'kelas'=>'21A1',
			'kode'=>'MKB318',
			'matkul'=>'PEMOGRAMAN BASIS DATA',
			'sks'=>3,
			'uts'=>'',
			'uas'=>''
			],
			[
			'no'=>3,
			'kelas'=>'21A1',
			'kode'=>'TI307',
			'matkul'=>'Rekayasa Perangkat Lunak',
			'sks'=>3,
			'uts'=>'',
			'uas'=>''
			],
			[
			'no'=>4,
			'kelas'=>'21A1',
			'kode'=>'MKB309',
			'matkul'=>'PEMOGRAMAN BERORIENTASI OBJECT',
			'sks'=>3,
			'uts'=>'',
			'uas'=>''
			],
			[
			'no'=>5,
			'kelas'=>'21A1',
			'kode'=>'MKB304',
			'matkul'=>'PEMOGRAMAN WEB 2',
			'sks'=>3,
			'uts'=>'',
			'uas'=>''
			],
			[
			'no'=>6,
			'kelas'=>'21A1',
			'kode'=>'TI20308',
			'matkul'=>'BAHASA INGGRIS 3',
			'sks'=>2,
			'uts'=>'',
			'uas'=>''
			],
			[
			'no'=>7,
			'kelas'=>'21A1',
			'kode'=>'TI305',
			'matkul'=>'Matematika Diskrit',
			'sks'=>3,
			'uts'=>'',
			'uas'=>''
			],
			[
			'no'=>8,
			'kelas'=>'21A1',
			'kode'=>'MKK325',
			'matkul'=>'STATISTIK',
			'sks'=>3,
			'uts'=>'',
			'uas'=>''
			]
		];
			
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="krs.css"/>
<title>KARTU RENCANA STUDI</title>
</head>
<body>

<div class="paper  center">
<thead>
<table align=center width=100%>
	<tr>
	<th><img align="left" src="udb.png" width="828" alt="" height="169"></th>
	<th><img align="right" src="foto.png" width="120" alt="" height="153" ><br></th>
	</tr>
	<tr>
	<th colspan="2" align="center"><h1><b><?php echo $krs; ?><b></h1></th>
	</tr>
	</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
</table>
<br>
 
<table align="center" width="990">
		<thead align="left">
		
			<tr>
				<th><h2><?php echo $isi[0]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['no_daftar']; ?></b></h2></th>
				<th><h2><?php echo $isi[1]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['pa']; ?></b></h2></th>
			</tr>
			<tr>
				<th><h2><?php echo $isi[2]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['nim']; ?></b></h2></th>
				<th><h2><?php echo $isi[3]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['jenjang']; ?></b></h2></th>
			</tr>
			<tr>
				<th><h2><?php echo $isi[4]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['nama']; ?></b></h2></th>
				<th><h2><?php echo $isi[5]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['jenis_daftar']; ?></b></h2></th>
			</tr>
			<tr>
				<th><h2><?php echo $isi[6]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['prodi']; ?></b></h2></th>
				<th><h2><?php echo $isi[7]; ?></h2></th>
				<th><h2><b>: <?php echo $biodata['semester']; ?></b></h2></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>

<table align="center" width="950" height="335" border="1" class="border">
		<thead class="atas" width="800">
			<tr>
				<th rowspan="2"><?php echo "<h2><b>No.</b></h2>" ?></th>
				<th rowspan="2"><?php echo "<h2><b>Kelas</b></h2>" ?></th>
				<th rowspan="2"><h2><b><?php echo $matkul[0]; ?></b></h2></th>
				<th rowspan="2"><h2><b><?php echo $matkul[1]; ?></b></h2></th>
				<th rowspan="2"><?php echo "<h2><b>SKS</b></h2>" ?></th>
				<th colspan="2"><h2><b><?php echo $ujian[0]; ?></b></h2></th>
			</tr>
			<tr>
				<th><h2><b><?php echo $ujian[1]; ?></b></h2></th>
				<th><h2><b><?php echo $ujian[2]; ?></b></h2></th>
			</tr>
		</thead>
	
	<?php foreach( $datatb as $tb ) : ?> 
	
		<tbody align="center" class="sell1">
			<tr>
				<td align="center"><h2><?php echo $tb["no"] ?></h2></td>
				<td align="center"><h2><?php echo $tb["kelas"]; ?></h2></td>
				<td align="center"><h2><?php echo $tb["kode"]; ?></h2></td>
				<td align="left"><h2>&nbsp <?php echo $tb["matkul"]; ?></h2></td>
				<td align="center"><h2><?php echo $tb["sks"]; ?></h2></td>
				<td><?php echo $tb["uts"]; ?></td>
				<td><?php echo $tb["uas"]; ?></td>
			</tr>		
			</tbody>
	<?php endforeach; ?>
	</table>
<thead>
<br>
<table align=center width=100%>
	<tr>
	<th rowspan="10" width="120"><img align="left" src="barcode.png" width="150" height="150" style="border:1px solid black;"><br></th>
	</tr>
	<tr class="jarak" align="center">
				<td width="300"><?php echo "<h2>Mengesahkan, </h2><br><h2>Pembimbing akademik</h2>" ?></td>
				<td width="200"><?php echo "<h2>Surakarta, ____________ </h2><br><h2> Mahasiswa</h2> "?></td>
				<td width="100" height="0"><?php echo "<h2>Jumlah SKS : 23" ?></td>
			</tr>
			<tr>
				<td width="300"><?php echo "&nbsp " ?></td>
				<td width="200"><?php echo "" ?></td>
				<td></td>
			</tr>
			</tr>
			<tr>
				<td width="300"><?php echo "&nbsp " ?></td>
				<td width="200"><?php echo "" ?></td>
				<td></td>
			</tr>
			<tr>
				<td width="300"><?php echo "&nbsp " ?></td>
				<td width="200"><?php echo "" ?></td>
				<td></td>
			</tr>
			<tr>
				<td width="300" align="center"><h2><b><?php echo $biodata['pa']; ?></b></h2></td>
				<td width="200" align="center"><h2><b><?php echo $nama; ?></h2></b></td>
				<td></td>
			</tr>
	</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
</table>
</div>
</body>
</html>