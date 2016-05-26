<?php namespace Core\Controllers;
use Core\Models\Asignar as Asignar;
use Core\Models\Profesor as Profesor;
use Core\Models\PHPExcel as PHPExcel;
class AsignarController{

	private $Asignar;
	public function __construct(){
		$this->Asignar = new Asignar();
	}

	public function index(){
		$datos=$this->Asignar->listar();
		return $datos;
	}

	public function listar(){
		$datos=$this->Asignar->listar();
		return $datos;
	}

	public function informeExcel(){
		$this->PHPExcel = new PHPExcel();
		header("Location:" . URL . "Asignar/listar");	
	}

	public function agregar(){
		if ($_POST) {
			$this->Asignar->__set("profesor", ucwords(strtolower($_POST['profesor'])) );
			$this->Asignar->__set("salones", $_REQUEST['salones']) ;
			$this->Asignar->add();   
			header("Location:" . URL . "Asignar");	
		} else {
			$this->Profesor = new Profesor();
			$datos=$this->Profesor->listar();
			return $datos;
		}
	}

	public function eliminar($id){
		$this->Asignar->__set("id", $id);
		$this->Asignar->delete(); 
		header("Location:" . URL . "Asignar");
	}	

	public function listarSalones(){
		$this->Asignar->__set("profesor", $_GET['profesor']);
		$datos=$this->Asignar->salones(); 
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function listarProfesores(){
		$datos=$this->Asignar->profesores(); 
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}
}
$Asignaciones= new AsignarController();


?>