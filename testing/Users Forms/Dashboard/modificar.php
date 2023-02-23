<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM students WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFY REGISTER</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">First Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="First Name" value="<?php echo $row['first_name']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="last_name" class="col-sm-2 control-label">Last Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $row['last_name']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="subject" class="col-sm-2 control-label">Subject</label>
					<div class="col-sm-10">
						<select class="form-control" id="subject" name="subject">
							<option value="Subject 1" <?php if($row['subject']=='Subject 1') echo 'selected'; ?>>Subject 1</option>
							<option value="Subject 2" <?php if($row['subject']=='Subject 2') echo 'selected'; ?>>Subject 2</option>
							<option value="Subject 3" <?php if($row['subject']=='Subject 3') echo 'selected'; ?>>Subject 3</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tutoring_date" class="col-sm-2 control-label">Tutoring Date</label>
					<div class="col-sm-10">
						<select class="form-control" id="tutoring_date" name="tutoring_date">
							<option value="Subject 1" <?php if($row['tutoring_date']=='Subject 1') echo 'selected'; ?>>Subject 1</option>
							<option value="Subject 2" <?php if($row['tutoring_date']=='Subject 2') echo 'selected'; ?>>Subject 2</option>
							<option value="Subject 3" <?php if($row['tutoring_date']=='Subject 3') echo 'selected'; ?>>Subject 3</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tutoring_time" class="col-sm-2 control-label">Tutoring Date</label>
					<div class="col-sm-10">
						<select class="form-control" id="tutoring_time" name="tutoring_time">
							<option value="Subject 1" <?php if($row['tutoring_time']=='Subject 1') echo 'selected'; ?>>Subject 1</option>
							<option value="Subject 2" <?php if($row['tutoring_time']=='Subject 2') echo 'selected'; ?>>Subject 2</option>
							<option value="Subject 3" <?php if($row['tutoring_time']=='Subject 3') echo 'selected'; ?>>Subject 3</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.html" class="btn btn-default">Go back</a>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>