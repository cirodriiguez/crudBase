<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
        require_once __DIR__.'/template/cdn.php';
    ?>
    <title>Actualizar Usuario</title>
</head>
<body>
    <?php 
        require_once __DIR__.'/template/header.php';
    ?>
    <div class="uk-margin-medium uk-container">
        <table class="uk-table uk-table-divider uk-table-small  uk-table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once __DIR__.'/model/userModel.php';
                    $usuario = new Usuario_model();

                    $resultados = $usuario->consultar();
		            foreach ($resultados as $usuario) {
                    echo "<tr>";
                    echo "<td>{$usuario['nombre']}</td>";
                    echo "<td>{$usuario['apellido']}</td>";
                    echo "<td>{$usuario['email']}</td>";
                    echo "</tr>";
		            }
                ?>   
            </tbody>
        </table>
    </div>
   
</body>
</html>