<?php  

#Constantes de la conexion 
define('DB_HOST', 'localhost');  #host
define('DB_USER', 'root'); #Usuario
define('DB_PASS', ''); #Contraseña
define('DB_NAME', 'colegio'); #nombre de la base de datos

#Constantes app
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', "http://localhost/colegio/");  # La carpeta de la aplicacion debe llamarse 'colegio'
define('HTML_DIR', 'HTML/');

require_once "Core/Models/Conexion.php";
require_once "Core/Config/Autoload.php";
Core\Config\Autoload::run();
Core\Config\Enrutador::run(new Core\Config\Request());






?>