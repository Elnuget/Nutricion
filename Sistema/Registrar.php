
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../");
    exit;
}
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../");
    exit;
}

// Agrega aquí el código de conexión a la base de datos y la lógica de inserción de datos
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cliente</title>
    <link rel="shortcut icon" href="salud.png" type="image/png">

    <!-- Agrega el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #fff;
        }

        .navbar-dark .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5);
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Mi App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <input type="hidden" name="logout" value="true">
                        <button type="submit" class="btn btn-link nav-link">Cerrar sesión</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Registrar Cliente</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <input type="text" class="form-control" id="sexo" name="sexo" required>
            </div>
            <div class="form-group">
                <label for="religion">Religión:</label>
                <input type="text" class="form-control" id="religion" name="religion" required>
            </div>
            <div class="form-group">
                <label for="estado_civil">Estado Civil:</label>
                <input type="text" class="form-control" id="estado_civil" name="estado_civil" required>
            </div>
            <div class="form-group">
                <label for="ocupacion">Ocupación:</label>
                <input type="text" class="form-control" id="ocupacion" name="ocupacion" required>
            </div>
            <div class="form-group">
                <label for="nivel_escolaridad">Nivel de Escolaridad:</label>
                <input type="text" class="form-control" id="nivel_escolaridad" name="nivel_escolaridad" required>
            </div>
            <div class="form-group">
                <label for="numero_telefono">Número de Teléfono:</label>
                <input type="tel" class="form-control" id="numero_telefono" name="numero_telefono" required>
            </div>
            <div class="form-group">
                <label for="direccion_domiciliaria">Dirección Domiciliaria:</label>
                <input type="text" class="form-control" id="direccion_domiciliaria" name="direccion_domiciliaria" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <!-- Agrega el enlace a Bootstrap JS (opcional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
