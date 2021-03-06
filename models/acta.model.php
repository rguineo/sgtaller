<?php

require_once "conexion.php";

Class mdlActa{

    public function validaOT($nSerieEq){
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM ordenTrabajo WHERE id_equipo = $nSerieEq 
        AND cerrado = 0");
        $sql -> execute();
        if ( $sql -> fetch()){
            return "error";
        } else {
            return "ok";
        }
    }

    public function mdlGuardaNuevaActa($tabla, $datos){

        $nSerieEq = $datos["idEquipo"];
        $validar = $this->validaOT($nSerieEq);

        if ( $validar == "ok"){
            $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
            VALUES (NULL, :folio, :fechaActa, :idEmpresa, :idCentro, :idEquipo, :idUsuario, :guia, :transporte, :obs,
            :acc, NOW(), :idTecnico)");

            $sql->bindParam(":folio", $datos["folio"], PDO::PARAM_INT);
            $sql->bindParam(":idTecnico", $datos["idTecnico"], PDO::PARAM_INT);
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
        }else{
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