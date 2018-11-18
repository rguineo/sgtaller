<?php

require_once "conexion.php";

Class mdlActa{

    public function mdlGuardaNuevaActa($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
        VALUES (NULL, :folio, :fechaActa, :idEmpresa, :idCentro, :idEquipo, :idUsuario, :guia, :transporte, :obs,
        :acc, NOW())");

        $sql->bindParam(":folio", $datos["folio"], PDO::PARAM_INT);
        $sql->bindParam(":fechaActa", $datos["fechaIng"], PDO::PARAM_STR);
        $sql->bindParam(":idEmpresa", $datos["idEmpresa"], PDO::PARAM_INT);
        $sql->bindParam(":idCentro", $datos["idCentro"], PDO::PARAM_INT);
        $sql->bindParam(":idEquipo", $datos["idEquipo"], PDO::PARAM_INT);
        $sql->bindParam(":idUsuario", $datos["idRecepcion"], PDO::PARAM_INT);
        $sql->bindParam(":guia", $datos["guiaDespacho"], PDO::PARAM_INT);
        $sql->bindParam(":transporte", $datos["nomTransporte"], PDO::PARAM_STR);
        
        $sql->bindParam(":obs", $datos["observacion"], PDO::PARAM_STR);
        $sql->bindParam(":acc", $datos["accesorios"], PDO::PARAM_STR);    

        if ($sql -> execute()){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlUltimaActa($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla ORDER BY id_acta DESC LIMIT 1");
        $sql -> execute();
        return $sql->fetch();
    }
}

?>