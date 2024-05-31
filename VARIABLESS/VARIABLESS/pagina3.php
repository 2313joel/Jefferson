<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable de Sesión</title>
    <!-- Agregar enlace a la hoja de estilos de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .custom-card {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 custom-card">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['usuario']) && isset($_SESSION['contraseña'])) {
                            $user = htmlspecialchars($_SESSION['usuario']);
                            $cla = htmlspecialchars($_SESSION['contraseña']);
                            echo "<h5 class='card-title text-center'>Información de la Sesión</h5>";
                            echo "<p class='card-text'>El nombre de usuario recuperado de la variable de la sesión: <br><strong>$user</strong></p>";
                            echo "<p class='card-text'>La clave recuperada de la variable de sesión: <br><strong>$cla</strong></p>";
                        } else {
                            echo "<p class='card-text text-danger text-center'>No hay información de sesión disponible.</p>";
                        }
                        ?>
                        <a href="pagina1.html" class="btn btn-primary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
