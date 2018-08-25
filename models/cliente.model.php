<?php
require_once "conexion.php";

class mdlCliente{

    private $_tabla;
    private $_datos = array();

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

    public function mdlGuardarCliente() {
        $tabla = $this->getTabla();
        $datos = $this->getDatos();

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() 
        VALUES (NULL, :rut, :nombre, :giro, :direccion, :id_pais, 
        :id_region, :id_ciudad, :id_comuna, :contacto, :telefono)");

		$sql->bindParam(":rut", $datos["rut"], PDO::PARAM_STR);
		$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $sql->bindParam(":giro", $datos["giro"], PDO::PARAM_STR);
		$sql->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$sql->bindParam(":id_pais", $datos["pais"], PDO::PARAM_INT);
		$sql->bindParam(":id_region", $datos["region"], PDO::PARAM_INT);
        $sql->bindParam(":id_ciudad", $datos["ciudad"], PDO::PARAM_INT);
        $sql->bindParam(":id_comuna", $datos["comuna"], PDO::PARAM_INT);
		$sql->bindParam(":contacto", $datos["contacto"], PDO::PARAM_STR);
        $sql->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	} 

    public function mdlMostrarTclientes(){
        $tabla = $this->getTabla();
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }

} 

?>