<?php
require_once "conexion.php";

Class mdlRegion{

    public function mdlNuevaRegion($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla VALUES (NULL, :region, :idPais, NULL)");

        $sql->bindParam(":idPais", $datos["idPais"], PDO::PARAM_INT);
        $sql->bindParam(":region", $datos["nomRegion"], PDO::PARAM_STR);

        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlMostrarRegion($tabla){
        $sql = (new Conexion)->conectar()-prepare("SELECT $tabla.id_region, $tabla.nombre_region, pais.nombre_pais
            FROM $tabla
            INNER JOIN pais
            ON $tabla.id_pais = pais.id_pais");
        return $sql->execute();
    }
}

?>