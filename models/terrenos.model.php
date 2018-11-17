<?php
require_once "conexion.php";

Class mdlTerrenos{

    public function mdlGuardarTerreno($tabla, $datos){

        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla 
        VALUES (NULL, :fecha, :empresa, :centro, :responsable, :equipo, :trabajo, :recomendaciones, :repuestos)");
        
        $sql->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $sql->bindParam(":empresa", $datos["idEmpresa"], PDO::PARAM_INT);
        $sql->bindParam(":centro", $datos["idCentro"], PDO::PARAM_INT);
        $sql->bindParam(":responsable", $datos["responsable"], PDO::PARAM_STR);
        $sql->bindParam(":equipo", $datos["idEquipo"], PDO::PARAM_INT);
        $sql->bindParam(":trabajo", $datos["trabajo"], PDO::PARAM_STR);
        $sql->bindParam(":recomendaciones", $datos["recomendaciones"], PDO::PARAM_STR);
        $sql->bindParam(":repuestos", $datos["repuestos"], PDO::PARAM_STR);
        
        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }
        
    }

    public function mdlMostrarTerrenos($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT terreno.id_terreno, terreno.fechaTerreno, empresa.razon_social, 
        centros.nombre, equipo.nomEquipo, equipo.nSerie 
        FROM $tabla
        INNER JOIN empresa
        ON terreno.id_empresa = empresa.id_empresa
        INNER JOIN centros 
        ON terreno.id_centro = centros.id_centro
        INNER JOIN equipo
        ON terreno.id_equipo = equipo.id_equipo");

        $sql -> execute();
        return $sql->fetchAll();

    }

    public function mdlBuscarTerreno($tabla, $idTerreno){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE id_terreno = :id");
        $sql->bindParam(":id", $idTerreno, PDO::PARAM_INT);

        $sql -> execute();
        return $sql->fetch();

    }
}

?>