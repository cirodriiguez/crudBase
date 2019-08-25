<?php
	
	require_once __DIR__.'../../config/db.php';

	class Usuario_model extends BD {

		public function insertar($registro) {
			$conexion = parent::conectar();
			try {
				$query = "INSERT INTO Usuarios SET nombre=:nombre, apellido=:apellido,email=:email";

				$conexion->prepare($query)->execute($registro);

				return true;
			} catch (Exception $e) {
				//Para ver el error quitar el required_once y agregar $e->getMessage()
                exit(require_once __DIR__.'../../template/alertError.php');
                
			}
		}
		
        public function consultar() {
			$conexion = parent::conectar();
			try {

				$query = "SELECT * FROM Usuarios";
				return $conexion->query($query)->fetchAll(); 

			} catch (Exception $e) {
				//Para ver el error quitar el required_once y agregar $e->getMessage()
				exit(require_once __DIR__.'../../template/alertError.php');
			}
		}

        public function actualizar($registro) {
			$conexion = parent::conectar();
			try {
				$query = "UPDATE Usuarios SET nombre=:nombre, apellido=:apellido WHERE email=:email;";

				$conexion->prepare($query)->execute($registro);

				return true;
			} catch (Exception $e) {
				//Para ver el error quitar el required_once y agregar $e->getMessage()
				exit(require_once __DIR__.'../../template/alertError.php');
			}
		}

		public function eliminar($eliminar) {
			$conexion = parent::conectar();
			try {
					$query = "DELETE FROM Usuarios WHERE email=:email";
					$conexion->prepare($query)->execute($eliminar);
					
					return true;
				} catch (Exception $e) {
					//Para ver el error quitar el required_once y agregar $e->getMessage()
					exit(require_once __DIR__.'../../template/alertError.php');
				}
			}
		}	
?>
