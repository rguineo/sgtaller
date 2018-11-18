<?php
require_once "conexion.php";

Class mdlTecnicos{

    public function mdlTodosTecnicos($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla");
        $sql -> execute();
        return $sql->fetchAll();
    }
}
?>