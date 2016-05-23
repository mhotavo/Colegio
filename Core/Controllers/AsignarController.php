<?php namespace Core\Controllers;
use Core\Models\Asignar as Asignar;
use Views\template as Template;


class AsignarController{

	private $Asignar;
	public function __construct(){
		$this->Asignar = new Asignar();

	}

	public function index(){
		$this->template = new Template();
		$this->template->dataTable();
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
			if ($_POST) {
				$this->Asignar->__set("profesor", $_POST['profesor']);
				$datos=$this->Asignar->listarSalones(); 
				return $datos;
			}
	}

}

$Asignaciones= new AsignarController();


?>