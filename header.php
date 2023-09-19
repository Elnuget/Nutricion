<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutri</title>
    <link rel="shortcut icon" href="salud.png" type="image/png">

    <!-- Agrega el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    
    <!-- Estilos personalizados -->
    <style>
        .navbar {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-size: 1.5em;
            color: #343a40;
        }
        .navbar-nav .nav-item .btn {
            margin-right: 10px;
            border-radius: 20px;
        }
        .navbar-nav .nav-item .btn:hover {
            background-color: #edf0f2;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Nutri</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="btn btn-primary mr-2" href="Oferta.php">
                            <i class="fas fa-utensils"></i> Generar Oferta Alimentaria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary mr-2" href="Registro.php">
                            <i class="fas fa-user-plus"></i> Registrar Paciente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="index.php">
                            <i class="fas fa-home"></i> Inicio
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

