<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>List Data</title>
	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="sweetallert.js"> </script>

	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

</head>

<body>
	<div class="container">

		<h2>
			<center>List Data Mahasiswa</center>
		</h2>
		<div class="card-header">
			<a class="btn btn-success btn-sm float-right" href="form-tambah.php"><i class="fas fa-plus">&nbsp;</i>Tambah</a>
		</div>
		<br />
		<script>
			swal("Selamat Datang!");
		</script>



		<div class="card-body">


			<td><img src="upload/tes.png"> </img> </td>




		</div>
		<div align="right">
			<a class="btn btn-danger btn-sm float-right" href="logout.php" onclick="return confirm('yakin logout')"> &nbsp;</i>Logout</a>&nbsp;
		</div>
		<script>
			$(document).ready(function() {
				$('#tabel-data').DataTable();
			});
		</script>
</body>

</html>