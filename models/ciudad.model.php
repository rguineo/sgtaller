<?php
require_once "conexion.php";

Class mdlCiudad{
    
    public function mdlNuevaCiudad($tabla, $datos){
        $nomCiudad = ucfirst($datos["nomCiudad"]);
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla VALUES(NULL, :ciudad, :idRegion)");

        $sql->bindParam(":ciudad", $nomCiudad, PDO::PARAM_STR);
        $sql->bindParam(":idRegion", $datos["idRegion"], PDO::PARAM_INT);

        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlBuscarCiudades($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT region.nombre_region, pais.nombre_pais, $tabla.nombre_ciudad, $tabla.id_ciudad 
        FROM pais 
        INNER JOIN region 
        ON pais.id_pais = region.id_pais
        INNER JOIN $tabla
        ON region.id_region = $tabla.id_region");
    
        $sql -> execute();
        return $sql -> fetchAll();
    }

    public function mdlBuscarCiudad($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT region.nombre_region, pais.nombre_pais, 
        $tabla.nombre_ciudad, $tabla.id_ciudad, region.id_region, pais.id_pais 
        FROM pais 
        INNER JOIN region 
        ON pais.id_pais = region.id_pais
        INNER JOIN $tabla
        ON region.id_region = $tabla.id_region
        WHERE id_ciudad = :id");

        $sql->bindParam(":id", $id, PDO::PARAM_INT);

        $sql -> execute();
        return $sql -> fetch();
    }

    public function mdlActualizarCiudad($tabla, $datos){
        $nomCiudad = ucfirst($datos["nomCiudad"]);
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla 
        SET nombre_ciudad = :ciudad, id_region = :idRegion
        WHERE id_ciudad = :id");

        $sql->bindParam(":id", $datos["idCiudad"], PDO::PARAM_INT);
        $sql->bindParam(":ciudad", $nomCiudad, PDO::PARAM_STR);
        $sql->bindParam(":idRegion", $datos["idRegion"], PDO::PARAM_INT);
        
        if ( $sql -> execute() ) {
            return "ok";
        } else {
            return "error";
        }
    }

}

?>