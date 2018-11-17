<?php
require_once "conexion.php";

class mdlEquipo {

    private $_tabla;
    private $_datos = array();
    private $_resultado = "";
    private $_idEquipo;

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

    public function setIdEquipo($id){
        $this->_idEquipo = $id;
    }

    public function getIdEquipo(){
        return $this->_idEquipo;
    }

    public function mdlMostrarEquipo() {
        $tabla = $this->getTabla();

        $sql = (new Conexion)->conectar()->prepare("SELECT equipo.id_equipo, equipo.nSerie, 
        equipo.nomEquipo, marca.marca, modelo.modelo, empresa.razon_social 
        FROM equipo
        INNER JOIN marca
        ON equipo.id_marca = marca.id_marca
        INNER JOIN modelo
        ON equipo.id_modelo = modelo.id_modelo
        INNER JOIN empresa
        ON equipo.id_empresa = empresa.id_empresa
        ORDER BY equipo.nomEquipo");

        $sql -> execute();
        return $sql->fetchAll();

    }

    public function mdlEliminarEquipo($tabla, $id){

        $sql = (new Conexion)->conectar()->prepare("DELETE FROM $tabla WHERE id_equipo = :id");

        $sql->bindParam(":id", $id, PDO::PARAM_INT);

        if( $sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlVerificaEquipo($tabla, $nSerie, $nomEq){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla 
        WHERE nSerie = $nSerie AND nomEquipo = $nomEq");

        if ( $sql->fetch() ){
            return "existe";
        } else {
            return "vacio";
        }
    }


    public function mdlAgregarEquipo($tabla, $datos){
        $nSerie = $datos["nSerie"];
        $nomEq = $datos["nomEquipo"];
        
        $verifica = $this-> mdlVerificaEquipo($tabla, $nSerie, $nomEq);

        if ($verifica == "vacio"){
            $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
            VALUES (NULL, :nSerie, :nomEq, :marEq, :modEq, :empEq)");

            $sql->bindParam(":nSerie", $datos["nSerie"], PDO::PARAM_STR);
            $sql->bindParam(":nomEq", $datos["nomEquipo"], PDO::PARAM_STR);
            $sql->bindParam(":marEq", $datos["marcaEquipo"], PDO::PARAM_INT);
            $sql->bindParam(":modEq", $datos["modeloEquipo"], PDO::PARAM_INT);
            $sql->bindParam(":empEq", $datos["empresaEquipo"], PDO::PARAM_INT);
            
            if ( $sql -> execute() ){
                return "ok";
            } else {
                return "error";
            }
        } else {
            return "error";
        }

    }

    public function mdlBuscarEquipo($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_equipo = :id");
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql -> execute();
        return $sql->fetch();
    }

    public function mdlActualizarEquipo($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla 
                SET nSerie = :nSerie, nomEquipo = :nomEq, id_marca = :marEq, id_modelo = :modEq, 
                id_empresa = :empEq
                WHERE id_equipo = :id");

        $sql->bindParam(":id", $datos["id_equipo"], PDO::PARAM_INT);
        $sql->bindParam(":nSerie", $datos["nSerie"], PDO::PARAM_STR);
        $sql->bindParam(":nomEq", $datos["nomEquipo"], PDO::PARAM_STR);
        $sql->bindParam(":marEq", $datos["marcaEquipo"], PDO::PARAM_INT);
        $sql->bindParam(":modEq", $datos["modeloEquipo"], PDO::PARAM_INT);
        $sql->bindParam(":empEq", $datos["empresaEquipo"], PDO::PARAM_INT);

        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }

    }

    public function ctrBuscarEqEmpresa($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_empresa = :idEm");

        $sql->bindParam(":idEm", $id, PDO::PARAM_INT);
        $sql -> execute();
        return ($sql-> fetchAll());
    }
}

?>