<?php namespace Core\Controllers;
use Core\Models\Profesor as Profesor;

class ProfesoresController {

	private $Profesores;

	public function __construct() {
		$this->Profesores = new Profesor();
	}

	public function index() {
		#listar Profesores
		$datos = $this->Profesores->listar();
		return $datos;

	}

	public function agregar() {
		if ($_POST) {
			$permitidos = array("image/jpeg", "image/png", "image/jpg");
			$limite     = 700;
			if (in_array($_FILES['inputImagen']['type'], $permitidos) and $_FILES['inputImagen']['size'] <= $limite*1024) {
				$nombre = date("is").$_FILES['inputImagen']['name'];
				$ruta   = "HTML/Profesores/avatars/".$nombre;
				move_uploaded_file($_FILES['inputImagen']['tmp_name'], $ruta);
			} else {
				$nombre = null;
			}
			$this->Profesores->__set("nombres", ucwords(mb_strtolower($_POST['inputNombres'], 'UTF-8')));
			$this->Profesores->__set("primerApellido", ucwords(mb_strtolower($_POST['inputPrimerApellido'], 'UTF-8')));
			$this->Profesores->__set("segundoApellido", ucwords(mb_strtolower($_POST['inputSegundoApellido'], 'UTF-8')));
			$this->Profesores->__set("fechaNacimiento", $_POST['inputFechaNacimiento']);
			$this->Profesores->__set("telefono", $_POST['inputTelefono']);
			$this->Profesores->__set("email", $_POST['inputEmail']);
			$this->Profesores->__set("imagen", $nombre);
			$this->Profesores->add();
			header("Location:".URL."Profesores");
		}

	}

	public function editar($id) {
		if (!$_POST) {
			$this->Profesores->__set("documento", $id);
			$datos = $this->Profesores->view();
			return $datos;
		} else {
			$this->Profesores->__set("documento", $_POST['Documento']);
			$this->Profesores->__set("nombres", ucwords(mb_strtolower($_POST['inputNombres'], 'UTF-8')));
			$this->Profesores->__set("primerApellido", ucwords(mb_strtolower($_POST['inputPrimerApellido'], 'UTF-8')));
			$this->Profesores->__set("segundoApellido", ucwords(mb_strtolower($_POST['inputSegundoApellido'], 'UTF-8')));
			$this->Profesores->__set("telefono", $_POST['inputTelefono']);
			$this->Profesores->__set("email", $_POST['inputEmail']);
			$this->Profesores->__set("imagen", $_POST['nombreImagen']);

			$permitidos = array("image/jpeg", "image/png", "image/jpg");
			$limite     = 700;
			if (in_array($_FILES['inputImagen']['type'], $permitidos) and $limite > 0 and $_FILES['inputImagen']['size'] <= $limite*1024) {
				$nombre = date("is").$_FILES['inputImagen']['name'];
				$ruta   = "HTML/Profesores/avatars/".$nombre;
				move_uploaded_file($_FILES['inputImagen']['tmp_name'], $ruta);
				$this->Profesores->__set("imagen", $nombre);
			} else {
				$this->Profesores->__set("imagen", $_POST['nombreImagen']);
			}

			$this->Profesores->edit();  
			header("Location:".URL."Profesores");

		}
	}

	public function ver($id) {
		$this->Profesores->__set("documento", $id);
		$datos = $this->Profesores->view();
		return $datos;
	}

	public function eliminar($id) {
		$this->Profesores->__set("documento", $id);
		$datos = $this->Profesores->view();
		$ruta  = "HTML/Profesores/avatars/".$datos['IMAGEN'];
		if (file_exists($ruta) and $datos['IMAGEN'] != '') {
			unlink($ruta);
		}
		$this->Profesores->delete();
		header("Location:".URL."Profesores");
	}

}

$Profesores = new ProfesoresController();

?>