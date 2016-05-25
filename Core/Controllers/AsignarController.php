<?php namespace Core\Controllers;
use Core\Models\Asignar as Asignar;
class AsignarController{

	private $Asignar;
	public function __construct(){
		$this->Asignar = new Asignar();

	}

	public function index(){
		$datos=$this->Asignar->listar();
		return $datos;

	}

	public function agregar(){
		if ($_POST) {
			$this->Asignar->__set("profesor", ucwords(strtolower($_POST['profesor'])) );
			$this->Asignar->__set("salones", $_REQUEST['salones']) ;
			$this->Asignar->add();   
			header("Location:" . URL . "Asignar");	
		} else {
			$datos=$this->Asignar->listarProfesoresSalones();
			return $datos;
		}
	}

	public function editar($id){
		if (!$_POST) { 
			$this->Asignar->__set("id", $id);
			$datos=$this->Asignar->view();
			return $datos;
		} else { 
			$this->Asignar->__set("id", $_POST['id']);
			$this->Asignar->__set("nombre", ucwords(strtolower($_POST['inputNombre'])) );
			$this->Asignar->__set("numero", $_POST['inputNumero']) ;
			$this->Asignar->edit();   
			header("Location:" . URL . "Asignar");

		}
	}

	public function ver($id){
		$this->Asignar->__set("id", $id);
		$datos=$this->Asignar->view();
		return $datos;	
	}

	public function eliminar($id){
		$this->Asignar->__set("id", $id);
		$this->Asignar->delete(); 
		header("Location:" . URL . "Asignar");
	}	

	public function listarSalones(){
	 
			$this->Asignar->__set("profesor", $_GET['profesor']);
			$datos=$this->Asignar->listarSalones(); 
			//echo count($datos);
			echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}
}
$Asignaciones= new AsignarController();


?>