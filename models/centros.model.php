<?php
require_once "conexion.php";

class mdlCentros {

    private $_tabla;
    private $_datos = array ();
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

    static public function mdlMostrarCentros($tabla) {
        $sql = (new Conexion)->conectar()->prepare("SELECT $tabla.nombre, $tabla.url_ubicacion, $tabla.contacto, $tabla.telefono, empresa.razon_social, ciudad.nombre_ciudad
        FROM $tabla
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa
        INNER JOIN ciudad
        ON empresa.id_ciudad = ciudad.id_ciudad");

        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlValidarCentro($tabla, $datos){

        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla 
        WHERE nombre = :nombre AND id_empresa = :empresa AND id_pais = :pais 
        AND id_region = :region AND id_ciudad = :ciudad");

        $sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $sql->bindParam(":empresa", $datos["empresa"], PDO::PARAM_INT);
        $sql->bindParam(":pais", $datos["pais"], PDO::PARAM_INT);
        $sql->bindParam(":region", $datos["region"], PDO::PARAM_INT);
        $sql->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_INT);
        $sql -> execute();

        if( $sql->fetch() ) {
            return "existe";
        } else {
            return "vacio";
        }


    }

    public function mdlGuardarCentro($tabla, $datos){

        $respuesta = $this->mdlValidarCentro($tabla, $datos);

        if ( $respuesta == "vacio"){
            $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
            VALUES (NULL, :nombre, :direccion, :id_pais, :id_region, :id_ciudad, 
            :id_comuna, :id_empresa, :ubicacion, :contacto, :telefono)");

            $sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $sql->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
            $sql->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);
            $sql->bindParam(":id_empresa", $datos["empresa"], PDO::PARAM_INT);
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
        } else {
            return "error";
        }
    }
}

?>      