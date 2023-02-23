<?php
	
	require 'conexion.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM students WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>Record deleted</h3>
				<?php } else { ?>
				<h3>Error while deleting</h3>
				<?php } ?>
				
				<a href="index.html" class="btn btn-primary">Go back</a>
				
				</div>
			</div>
		</div>
	</body>
</html>