<?php 

require_once "conexion.php";

class mdlUsuario {

	private $_tabla;
    private $_datos = array();
    private $_resultado = "";

    public function setResultado($result){
        $this->_resultado = $result;
    }

    public function getResultado(){
        return $this->_resultado;
    }
    public function setTabla($tabla){
        $this->_tabla = $tabla;
    }

    public function getTabla(){
        return $this->_tabla;
    }

    public function setDatos($datos){
        $this->_datos = $datos;
    }

    public function getDatos(){
        return $this->_datos;
    }

	public function consultaUsuario(){

		$datos = $this->getDatos();
		$user = $datos["user"];

		$tabla = $this->getTabla();
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE user = '$user'");
		$sql -> execute();

		if ( $sql->fetch() ){
            $res = "existe";
            // echo "existe";
            $this->setResultado($res);
        }else{
            $res = "vacio";
            // echo "noexiste";
            $this->setResultado($res);
        }
	}

	public function mdlGuardarUsuario() {
		$tabla = $this->getTabla();
		$datos = $this->getDatos();

		$this->consultaUsuario();
		
		if ($this->getResultado() == "vacio"){
			$sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
			VALUES (NULL, :user, :pass, :nombre, :apellido, :avatar, NOW())");
		
			$sql->bindParam(":user", $datos["user"], PDO::PARAM_STR);
			$sql->bindParam(":pass", $datos["password"], PDO::PARAM_STR);
			$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$sql->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
			$sql->bindParam(":rol", $datos["rol"], PDO::PARAM_STR);
			$sql->bindParam(":avatar", $rutaImagen, PDO::PARAM_STR);

			if( $sql -> execute() ) {
				return "ok";
			} else {
				return "error";
			}
		}else {
			return "error";
		}

	}

	public function mdlMostrarUsuario() {
		$tabla = $this->getTabla();
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();

	}

}

?>