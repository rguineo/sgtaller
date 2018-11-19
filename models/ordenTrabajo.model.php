<?php

require_once "conexion.php";

Class mdlOrdenTrabajo{

    public function mdlNuevaOrdenTrabajo($tabla, $datos, $last){
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
        VALUES (NULL, :folio, :fechaActa, NOW(), :acta, :idTecnico, :idEquipo, NULL, NULL, NULL, :idEmpresa)");

        $sql->bindParam(":folio", $datos["folio"], PDO::PARAM_INT);
        $sql->bindParam(":idTecnico", $datos["idTecnico"], PDO::PARAM_INT);
                
        $sql->bindParam(":fechaActa", $datos["fechaIng"], PDO::PARAM_STR);
        $sql->bindParam(":idEquipo", $datos["idEquipo"], PDO::PARAM_INT);
        $sql->bindParam(":idEmpresa", $datos["idEmpresa"], PDO::PARAM_INT);
        $sql->bindParam(":acta", $last, PDO::PARAM_INT);

        if ($sql -> execute()){
            return "ok";
        } else {
            return "error";
        }
    }

    public function mdlTodasOrdenes($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT ordenTrabajo.id_orden, ordenTrabajo.folio, 
        ordenTrabajo.fecha_orden, equipo.nomEquipo, equipo.nSerie, empresa.razon_social, ordenTrabajo.estado
        FROM $tabla
        INNER JOIN equipo
        ON $tabla.id_equipo = equipo.id_equipo
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa");
        $sql -> execute();
        return $sql -> fetchAll();
    }

    public function mdlBuscarOrden($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT ordenTrabajo.id_orden, ordenTrabajo.folio, 
        ordenTrabajo.fecha_orden, equipo.nomEquipo, equipo.nSerie, empresa.razon_social, ordenTrabajo.estado, 
        tecnicos.nomTecnico, tecnicos.id_tecnico, ordenTrabajo.diagnostico, ordenTrabajo.repuestos, ordenTrabajo.estado
        FROM $tabla
        INNER JOIN equipo
        ON $tabla.id_equipo = equipo.id_equipo
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa
        INNER JOIN tecnicos
        ON $tabla.id_tecnico = tecnicos.id_tecnico
        WHERE id_orden = $id");

        $sql -> execute();
        return $sql -> fetch();
    }

    public function mdlActualizarOrden($tabla, $datos){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla 
        SET id_tecnico = :tecnico, diagnostico = :diag, repuestos = :rep, estado = :estado
        WHERE id_orden = :id");

        $sql->bindParam(":id", $datos["idOrden"], PDO::PARAM_INT);
        $sql->bindParam(":tecnico", $datos["tecnico"], PDO::PARAM_INT);
        $sql->bindParam(":diag", $datos["diagnostico"], PDO::PARAM_STR);
        $sql->bindParam(":rep", $datos["repuestos"], PDO::PARAM_STR);
        $sql->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);

        if ( $sql -> execute() ){
            return "ok";
        } else {
            return "error";
        }
    }
}

?>