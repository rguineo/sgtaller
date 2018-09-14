<?php
require_once "conexion.php";

class mdlCliente{

    private $_tabla;
    private $_datos = array();
    private $_resultado = "";
    private $_idCliente;

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

    public function setIdCliente($id){
        $this->_idCliente = $id;
    }

    public function getIdCliente(){
        return $this->_idCliente;
    }

    public function consultaCliente(){

        $datos = $this->getDatos();
        $rut = $datos["rut"];

        $tabla = $this->getTabla();
        // echo "SELECT * FROM $tabla WHERE rut = '$rut'";
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE rut = '$rut'");
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

    public function mdlGuardarCliente() {
        $tabla = $this->getTabla();
        $datos = $this->getDatos();

        $this->consultaCliente();

        if ($this->getResultado() == "vacio"){
            $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
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
        }else {
            return "error";
        }
	} 

    public function mdlMostrarTclientes(){
        $tabla = $this->getTabla();
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }

    public function mdlEliminarCliente($tabla, $id){

        $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_empresa = :id");

        $sql->bindParam(":id", $id, PDO::PARAM_INT);

        if( $sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlEditarCliente($tabla, $id){

        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_empresa = :id");

        $sql->bindParam(":id", $id, PDO::PARAM_INT);

        if( $sql->execute()) {
            return $sql->fetch();
        } else {
            return "error";
        }
    }

    public function mdlActualizarCliente($tabla, $datos, $id) {

        $sql =(new Conexion)->conectar()->prepare("UPDATE $tabla 
        SET rut = :rut, razon_social = :razon, giro = :giro, direccion = :direccion, 
        id_pais = :pais, id_region = :region, id_ciudad = :ciudad, id_comuna = :comuna, 
        contacto = :contacto, nfono = :telefono
        WHERE id_empresa = :id");

        $sql->bindParam(":id", $datos["id_cliente"], PDO::PARAM_INT);
        $sql->bindParam(":rut", $datos["rut"], PDO::PARAM_STR);
        $sql->bindParam(":razon", $datos["nombre"], PDO::PARAM_STR);
        $sql->bindParam(":giro", $datos["giro"], PDO::PARAM_STR);
        $sql->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $sql->bindParam(":pais", $datos["pais"], PDO::PARAM_INT);
        $sql->bindParam(":region", $datos["region"], PDO::PARAM_INT);
        $sql->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_INT);
        $sql->bindParam(":comuna", $datos["comuna"], PDO::PARAM_INT);
        $sql->bindParam(":contacto", $datos["contacto"], PDO::PARAM_STR);
        $sql->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

        if( $sql -> execute() ) {
            return "ok";
        } else {
            return "error";
        }
	} 

} 

?>