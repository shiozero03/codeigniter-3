<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tampil Data Mahasiswa</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="form">
		<br>
		<a href="<?= base_url('mahasiswa/tambah') ?>">Tambah Data</a>
		<br><br>
		<table border>
			<thead>
				<tr>
					<th colspan="9">
						<h1>Tampil Data Mahasiswa</h1>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama Lengkap</th>
					<th>Kelas</th>
					<th>Program Studi</th>
					<th>Email</th>
					<th>Pilihan</th>
				</tr>
				<?php
					$no = 1;
					foreach($data_mahasiswa as $data) {
				?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $data->nim ?></td>
					<td><?= $data->nama ?></td>
					<td><?= $data->kelas ?></td>
					<td><?= $data->prodi ?></td>
					<td><?= $data->email ?></td>
					<td><a href="<?= base_url('mahasiswa/delete?nim='.$data->nim) ?>">Hapus</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>