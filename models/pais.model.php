<?php
require_once "conexion.php";

Class mdlPais{

    private $_tabla;
    private $_datos = array();
    private $_resultado = "";
    private $_idPais;

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

    public function setIdPais($id){
        $this->_idCliente = $id;
    }

    public function getIdPais(){
        return $this->_idPais;
    }

    public function consultaPais($nomPais){
        $paisNombre = strtoupper($nomPais);
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM pais WHERE nombre_pais = :pais");
        $sql->bindParam(":pais", $paisNombre, PDO::PARAM_STR);
        $sql -> execute();
        if ( $sql->fetch()){
            return "error";
        } else {
            return "vacio";
        }

    }

    public function mdlNuevoPais($tabla, $nomPais) {
        $resp = $this->consultaPais($nomPais);
        $paisNombre = strtoupper($nomPais);

        if ( $resp == "vacio"){
            $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
            VALUES (NULL, :pais)"); 

            $sql->bindParam(":pais", $paisNombre, PDO::PARAM_STR);

            if( $sql -> execute() ) {
                return "ok";
            } else {
                return "error";
            }
        }else {
            return "error";
        }
	}

    public function mdlMostrarPais($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }
}



?>