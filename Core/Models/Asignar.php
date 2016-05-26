<?php namespace Core\Models;

class Asignar {
	private $id;
	private $profesor;
	private $salones;
	private $db;

	public function __construct(){
		$this->db = new Conexion();
	}

	public function __set($var, $valor) {  
		if (property_exists(__CLASS__, $var)) {  
			$this->$var = $valor;  
		} else {  
			echo "No existe el atributo $var.";  
		}  
	}  

	public function __get($var) {  
		if (property_exists(__CLASS__, $var)) {  
			return $this->$var;  
		}  
		return NULL;  
	}  
	
	public function listar(){
		$sql="SELECT p.IMAGEN, ps.ID, s.NOMBRE, s.NUMERO, s.ID_SALON, p.DOCUMENTO , CONCAT (p.NOMBRES, ' ', p.PRIMER_APELLIDO, ' ', p.SEGUNDO_APELLIDO) AS NOMBRE_PROFESOR FROM profesor_salon ps INNER JOIN profesores p ON ps.ID_PROFESOR= p.DOCUMENTO LEFT JOIN salones s ON s.ID_SALON=ps.ID_SALON";
		$datos=$this->db->consultaRetorno($sql);
		return $datos;
	}

	public function add(){
		foreach ( $this->salones as $salon)
		{
			$sql="INSERT INTO profesor_salon
			(ID,
			ID_PROFESOR,
			ID_SALON ) 
			VALUES 
			(NULL,
			'{$this->profesor}', 
			'{$salon}'
			); ";
			$this->db->consultaSimple($sql);  
		}
	}

	public function delete(){
		$sql="DELETE FROM profesor_salon WHERE ID='{$this->id}'";
		$this->db->consultaSimple($sql);

	}

	public function view(){
		echo $sql="SELECT * FROM profesor_salon WHERE ID='{$this->id}'";
		$datos = $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
	}

	public function salones(){
		$sql="SELECT s.ID_SALON as salon, s.NOMBRE as nombre FROM salones s WHERE s.ID_SALON NOT IN(SELECT ID_SALON FROM profesor_salon WHERE ID_PROFESOR='{$this->profesor}' )";
		$data = $this->db->consultaRetorno($sql);
		$datos[]=array();
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}

	public function profesores(){
		$sql="SELECT DOCUMENTO as id, CONCAT(NOMBRES, ' ', PRIMER_APELLIDO, ' ', SEGUNDO_APELLIDO) as nombre FROM profesores";
		$data = $this->db->consultaRetorno($sql);
		#$datos[]=array();
		while ($row = mysqli_fetch_assoc($data)) {
		$datos[]=$row;
		}
		return $datos;
	}

} 


?>