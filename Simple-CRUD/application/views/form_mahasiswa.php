<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Input Data Mahasiswa</title>
	<style type="text/css">
		table{
			text-align: justify;
			border: 4px double;
		}
		input{
			margin-left: 5px;
		}
		h1{
			text-align: center;
		}
		input{
			width: 90%;
			border-radius: 5px;
			border-color: rgb(231, 233, 238);
		}
		input:focus{
			border-color: rgb(231, 233, 238);
			outline: none !important;
    		box-shadow: none;
		}
		@media screen and (max-width: 767px){
			input{
				width: 85%;
			}
		}
	</style>
</head>
<body>
	<div class="form">
		<br>
		<a href="<?= base_url() ?>">Lihat Data</a>
		<br><br>
		<form action="<?= base_url('mahasiswa/store') ?>" method="post">
			<table>
				<tr>
					<th colspan="2">
						<h1>Form Input Data Mahasiswa</h1>
					</th>
				</tr>
				<tr>
					<th>NIM</th>
					<td>: <input type="number" name="nim"></td>
				</tr>
				<tr>
					<th>Nama Lengkap</th>
					<td>: <input type="text" name="nama"></td>
				</tr>
				<tr>
					<th>Kelas</th>
					<td>: <input type="text" name="kelas"></td>
				</tr>
				<tr>
					<th>Program Studi</th>
					<td>: <input type="text" name="prodi"></td>
				</tr>
				<tr>
					<th>Email</th>
					<td>: <input type="email" name="email"></td>
				</tr>
				<tr style="text-align: center;">
					<th colspan="2">
						<button type="submit">Simpan</button>
						<button type="button" onclick="batalSimpan()">Batal</button>
					</th>
				</tr>
				<tr>
					<th colspan="2"></th>
				</tr>
			</table>
		</form>
	</div>
	<script type="text/javascript">
		function batalSimpan(){
			var input = document.querySelectorAll('input')
			for(var i = 0; i < input.length; i++){
				input[i].value = ''
			}
		}
	</script>
</body>
</html>