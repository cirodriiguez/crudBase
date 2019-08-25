<?php
	const DB = 'mysql';
   	const DB_SERVIDOR = 'crudbase.test';
   	const DB_CHARSET = 'utf8';

	abstract class BD {
		private static $db_usuario = 'homestead';
		private static $db_pass = 'secret';
		private static $db_servidor = DB_SERVIDOR;
		private static $db_nombre = 'crudbase';
		private static $db_charset = DB_CHARSET;
		private $conexion; 

		public function conectar() {
			try {
				$dsn = "mysql:host=".self::$db_servidor.";dbname=".self::$db_nombre;
				$pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);
				$pdo->exec("SET CHARACTER SET ".self::$db_charset);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				return $pdo;
			} catch (PDOException $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		abstract protected function insertar($registro);
		abstract protected function consultar();
		abstract protected function actualizar($registro);
		abstract protected function eliminar($eliminar); 

	}
?>