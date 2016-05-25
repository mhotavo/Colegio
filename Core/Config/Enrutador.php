<?php namespace Core\Config;

class Enrutador
{
	public static function run(Request $request){
		$controlador = ucwords($request->getControlador()) . "Controller";
		$ruta = ROOT . "Core". DS . "Controllers" . DS . $controlador .".php";
		$metodo = $request->getMetodo();

		if($metodo == "index.php"){
			$metodo = "index";
		}
		$argumento = $request->getArgumento();
		if(is_readable($ruta)){
			require_once $ruta;
			$mostrar = "Core\Controllers\\" . $controlador;
			$controlador = new $mostrar;
			#Validamos que el metodo exista en la clase controlador
			if(!isset($argumento) and method_exists($controlador,$metodo) ){
				$datos = call_user_func(array($controlador, $metodo));
			}elseif(method_exists($controlador,$metodo)){
				$datos = call_user_func_array(array($controlador, $metodo), $argumento);
			}
		}
			//Cargar vista
			$ruta = ROOT . "HTML" . DS . ucwords($request->getControlador()) . DS . $request->getMetodo() . ".php";
			if(is_readable($ruta)){
				require_once $ruta;
			}else{
				#print "No se encontro la vista";
			}	
	}
}



?>
