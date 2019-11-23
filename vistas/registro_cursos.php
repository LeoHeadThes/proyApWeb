<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/main.js"></script>
<!------ Include the above in your HEAD tag ---------->



<!DOCTYPE html>
<html>
<head>
	<title>Registrar un nuevo curso</title>
   <!--Made with love by Mutiullah Samim -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Subida de curso</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fas fa-cloud-upload-alt"></i></span>
				</div>
			</div>

			<div class="card-body">
				<form action="registrocursos.php" method="post" enctype="multipart/form-data">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-book"></i></span>
						</div>
						<input type="text" name="titulo" id="titulo" placeholder="Título del curso">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-edit"></i></span>
						</div>
						<input type="text" name="descripcion" id="descripcion" placeholder="Descripción del curso">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-money-check-alt"></i></span>
						</div>
						<input type="number" name="precio" id="precio" placeholder="Precio del curso">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-file-image"></i></span>
						</div>
						<input type="file" name="imagen" style="display:block;width:215px; height:30px;" id="imagen">
					</div>

					<div class="form-group">
						<input type="submit" name='login' value="Subir" class="btn float-right login_btn">
					</div>

				</form>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="index2Session.php">Cancelar subida de curso</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
