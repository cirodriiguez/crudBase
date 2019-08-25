<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
        require_once __DIR__.'/template/cdn.php';
    ?>
    <title>Eliminar Usuario</title>
</head>
<body>
    <?php 
        require_once __DIR__.'/template/header.php';
    ?>
    <div class="uk-margin-medium uk-container">
        <form action="deleteView.php" method="POST">
            <div class="uk-margin-medium uk-flex uk-flex-center">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text" placeholder="Mail" name="email" required>
                </div>
            </div> 
            <div class="uk-margin-medium uk-flex uk-flex-center">
                <button class="uk-button uk-button-primary ">Eliminar</button>
            </div>    
        </form>
        <?php
        require_once __DIR__.'/model/userModel.php';
        $usuario = new Usuario_model();

        if (!empty($_POST['email'] )) {
            $datos = [
                'email' => $_POST['email']
            ];
        }
        if (isset($datos)) {
            $respuesta = $usuario->eliminar($datos);
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