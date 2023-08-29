
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Nutrición con Bienestar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="salud.png" type="image/png">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.php" method="post">
				<img src="img/women.png">
				<h2 class="title">Bienvenida</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input" name="usuario">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="contraseña">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
<?php
session_start();
// Establecer la conexión a la base de datos
$servername = "23.145.120.75"; // Cambia esto al nombre de tu servidor de base de datos
$username = "gonzaloe_gonzaloe";     // Cambia esto a tu nombre de usuario de base de datos
$password = "2+z0DZv#l95OYy";            // Cambia esto a tu contraseña de base de datos
$dbname = "gonzaloe_Prueba1";                   // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
		$_SESSION['loggedin'] = true;
        header("Location: ./Sistema");
        echo "Inicio de sesión exitoso";
    } else {
        echo "
		

		<script>
            Swal.fire({
                icon: 'error',
                title: 'Inicio de sesión fallido',
                text: 'El usuario y/o la contraseña son incorrectos.',
                confirmButtonText: 'OK'
            });
          </script>";
    }
}

$conn->close();
?>

</html>
