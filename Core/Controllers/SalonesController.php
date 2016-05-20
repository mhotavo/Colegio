<?php namespace Core\Controllers;
	use Core\Models\Salon as Salon;
	use Core\Models\Profesor as Profesor;


	class SalonesController{

		private $Salon;

		public function __construct(){
			$this->Salon = new Salon();
			$this->Profesor = new Profesor();
			
		}

		public function index(){
			#listar Salones
			$datos=$this->Salon->listar();
			return $datos;

		}

		public function agregar(){
			if ($_POST) {
					$this->Salon->__set("documentoProfesor", $_POST['Profesor']);
					$this->Salon->__set("nombres", ucwords(strtolower($_POST['inputNombres'])) );
				 	$this->Salon->__set("primerApellido", ucwords(strtolower($_POST['inputPrimerApellido'])) )  ;
				 	$this->Salon->__set("segundoApellido", ucwords(strtolower($_POST['inputSegundoApellido'])) );
				 	$this->Salon->__set("direccion", $_POST['inputDireccion']);
				 	$this->Salon->__set("celular", $_POST['inputCelular']);
				 #	$this->Salon->__set("correo", $_POST['inputEmail']);
				 	$this->Salon->__set("parentesco", $_POST['parentesco']);
				 	$this->Salon->add();
				 	header("Location:" . URL . "Salones");
			} else{
			$datos = $this->Profesor->listar(); 
 			return $datos;
			}
 			

		}
		public function listarProfesor(){
			$datos = $this->Profesor->listar(); 
			return $datos;
		}

		public function editar($id){
			if (!$_POST) {
				$this->Salon->__set("documento", $id);
				$datos=$this->Salon->view();
				return $datos;
			} else {
					$this->Salon->__set("documentoProfesor", $_POST['Profesor']);
					$this->Salon->__set("nombres", ucwords(strtolower($_POST['inputNombres'])) );
				 	$this->Salon->__set("primerApellido", ucwords(strtolower($_POST['inputPrimerApellido'])) )  ;
				 	$this->Salon->__set("segundoApellido", ucwords(strtolower($_POST['inputSegundoApellido'])) );
				 	$this->Salon->__set("direccion", $_POST['inputDireccion']);
				 	$this->Salon->__set("celular", $_POST['inputCelular']);
				 #	$this->Salon->__set("correo", $_POST['inputEmail']);
				 	$this->Salon->__set("parentesco", $_POST['parentesco']);
				 	$this->Salon->__set("documento", $_POST['Documento']);
				 	$this->Salon->edit();   
				 	header("Location:" . URL . "Salones");

			}
		}

		public function ver($id){
				$this->Salon->__set("documento", $id);
				$datos=$this->Salon->view();
				return $datos;
		}

		public function eliminar($id){
				$this->Salon->__set("documento", $id);
				$this->Salon->delete(); 
				header("Location:" . URL . "Salones");
		}					


	}

	$Salones= new SalonesController();
	
 
?>