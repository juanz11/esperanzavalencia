<?php
	
	require 'conexion.php';
	
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$subject = $_POST['subject'];
	$tutoring_date = $_POST['tutoring_date'];
	$tutoring_time = $_POST['tutoring_time'];
	$email = $_POST['email'];		
	
	$sql = "UPDATE students SET first_name='$first_name', last_name='$last_name', subject='$subject', tutoring_date='$tutoring_date', tutoring_time='$tutoring_time', email='$email' WHERE id = '$id'";
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
						<h3>The registry was modified</h3>
						<?php } else { ?>
						<h3>Error when modifying</h3>
					<?php } ?>
					
					<a href="index.html" class="btn btn-primary">Go Back</a>
					
				</div>
			</div>
		</div>
	</body>
</html>