<?php namespace Core\Models;

	class Salon {
		private $id;
		private $nombre;
		private $numero;	
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
			$sql="SELECT * FROM salones";
			$datos=$this->db->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql="INSERT INTO salones 
					(ID_SALON,
					 NOMBRE,
					 NUMERO) 
				VALUES 
					(NULL, 
					'{$this->nombre}', 
					'{$this->numero}'); ";
			$this->db->consultaSimple($sql);

		}

		public function delete(){
			$sql="DELETE FROM profesor_salon WHERE ID_SALON='{$this->id}'";
			$this->db->consultaSimple($sql);
			$sql="DELETE FROM salones WHERE ID_SALON='{$this->id}'";
			$this->db->consultaSimple($sql);

		}

		 public function edit() {
		         $sql="UPDATE salones SET 
		            NOMBRE='{$this->nombre}',
		            NUMERO='{$this->numero}'
		            WHERE ID_SALON='{$this->id}';";  
		       $this->db->consultaSimple($sql);
		  }

		 public function view(){
			$sql="SELECT  * FROM salones WHERE ID_SALON='{$this->id}'";
			$datos = $this->db->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;

		}



	} 


 ?>