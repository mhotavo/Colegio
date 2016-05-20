<?php namespace Core\Controllers;
use Core\Models\Salon as Salon;
use Views\template as Template;


class SalonesController{

	private $Salon;

	public function __construct(){
		$this->Salon = new Salon();

	}

	public function index(){
			#listar Salones
		$this->template = new Template();
		$this->template->dataTable();
		$datos=$this->Salon->listar();
		return $datos;

	}

	public function agregar(){
		if ($_POST) {
			$this->Salon->__set("nombre", ucwords(strtolower($_POST['inputNombre'])) );
			$this->Salon->__set("numero", $_POST['inputNumero']) ;
			$this->Salon->add();   
			header("Location:" . URL . "Salones");	
		}
	}

	public function editar($id){
		if (!$_POST) { 
			$this->Salon->__set("id", $id);
			$datos=$this->Salon->view();
			return $datos;
		} else { 
			$this->Salon->__set("id", $_POST['id']);
			$this->Salon->__set("nombre", ucwords(strtolower($_POST['inputNombre'])) );
			$this->Salon->__set("numero", $_POST['inputNumero']) ;
			$this->Salon->edit();   
			header("Location:" . URL . "Salones");

		}
	}

	public function ver($id){
		$this->Salon->__set("id", $id);
		$datos=$this->Salon->view();
		return $datos;
	}

	public function eliminar($id){
		$this->Salon->__set("id", $id);
		$this->Salon->delete(); 
		header("Location:" . URL . "Salones");
	}					


}

$Salones= new SalonesController();


?>