<?php

Class mdlTerrenos{

    public function mdlGuardarTerreno($datos){

        $sql = (new Conexion)->conectar()->prepare("");

        
        $sql->bindParam(":fecha", $datos["id_equipo"], PDO::PARAM_INT);
        $sql->bindParam(":", $datos["nSerie"], PDO::PARAM_STR);
        $sql->bindParam(":", $datos["nomEquipo"], PDO::PARAM_STR);
        $sql->bindParam(":marEq", $datos["marcaEquipo"], PDO::PARAM_INT);
        $sql->bindParam(":modEq", $datos["modeloEquipo"], PDO::PARAM_INT);
        $sql->bindParam(":empEq", $datos["empresaEquipo"], PDO::PARAM_INT);

    }
}

?>