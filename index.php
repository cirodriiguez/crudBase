<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
        require_once __DIR__.'/template/cdn.php';
    ?>
    <title>Crear Usuario</title>
</head>
<body>
    <?php 
        require_once __DIR__.'/template/header.php';
    ?>
    <div class="uk-margin-medium uk-container">
        <form action="index.php" method="POST">
            <div class="uk-flex uk-flex-center">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="uk-inline uk-margin-left">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text" placeholder="Apellido" name="apellido" required>
                </div>
                <div class="uk-inline uk-margin-left">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input class="uk-input" type="email" placeholder="Mail" name="email" required>
                </div>
            </div>
            <div class="uk-margin-medium uk-flex uk-flex-center">
                <button class="uk-button uk-button-primary">Crear</button>
            </div>    
        </form>
        <?php
        require_once __DIR__.'/model/userModel.php';
        $usuario = new Usuario_model();

        if (!empty($_POST['nombre']) and !empty($_POST['apellido']) and !empty($_POST['email'] )) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'email' => $_POST['email']
            ];
        }
        if (isset($datos)) {
            $respuesta = $usuario->insertar($datos);
		    if ($respuesta == true) {
			require_once __DIR__.'/template/alertOkey.php';
		    } else {
			require_once __DIR__.'/template/alertError.php';
		    }
        }  
        ?>
    </div>
    
</body>
</html>