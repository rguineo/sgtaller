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

    public function mdlMostrarRegiones($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT $tabla.id_region, $tabla.nombre_region, pais.nombre_pais
            FROM $tabla
            INNER JOIN pais
            ON $tabla.id_pais = pais.id_pais");
        $sql->execute();
        return ($sql -> fetchAll());
    }

    public function mdlBuscarRegion($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT $tabla.id_region, $tabla.nombre_region, $tabla.id_pais, pais.nombre_pais
        FROM $tabla
        INNER JOIN pais
        ON $tabla.id_pais = pais.id_pais
        WHERE $tabla.id_region = $id");
        $sql -> execute();
        return $sql->fetch();
    }

    public function mdlActualizarRegion($tabla, $datos){
        $nomRegion = ucfirst($datos["nomRegion"]);

        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla 
        SET nombre_region = :region, id_pais = :idPais
        WHERE id_region = :idRegion");
     
        $sql->bindParam(":idRegion", $datos["idRegion"], PDO::PARAM_INT);
        $sql->bindParam(":region", $nomRegion, PDO::PARAM_STR);
        $sql->bindParam(":idPais", $datos["idPais"], PDO::PARAM_INT);

        if ( $sql -> execute() ) {
            return "ok";
        } else {
            return "error";
        }

    }
}

?>