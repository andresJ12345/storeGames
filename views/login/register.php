<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store Games</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/Style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registrarse</h3>
			</div>
			<div class="card-body">
				<form action="" method="post">
                <div class="input-group form-group">
						<input type="text" class="form-control" name="nombre" placeholder="nombre">
                    </div>
                    <div class="input-group form-group">
						<input type="text" class="form-control" name="apellido" placeholder="apellido">
                    </div>
                    
                    <div class="input-group form-group">
						<input type="text" class="form-control" name="nickname" placeholder="nickname">
					</div>
					<div class="input-group form-group">
						<input type="text" class="form-control" name="email" placeholder="E-mail">
					</div>
					<div class="input-group form-group">
						<input type="password" class="form-control" name="password" placeholder="contraseña">
                    </div>
					<div class="form-group">
                       
                        <input type="submit" value="Registrar" class=" btn float-right login_btn">
                       
                    </div>
                    <?php
          	  $register = new ControllerUser();
              $register->crearUSuario();
        ?>
				</form>
			</div>
			
		</div>
	</div>
</div>

</body>
</html>