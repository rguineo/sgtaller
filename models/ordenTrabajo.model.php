<?php

require_once "conexion.php";

Class mdlordentrabajo{

    public function mdlNuevaordentrabajo($tabla, $datos, $last){
        $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() 
        VALUES (NULL, :folio, :fechaActa, NOW(), :acta, :idTecnico, :idEquipo, NULL, NULL, NULL, :idEmpresa, 0)");

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
        $sql = (new Conexion)->conectar()->prepare("SELECT ordentrabajo.id_orden, ordentrabajo.folio, 
        ordentrabajo.fecha_orden, equipo.nomEquipo, equipo.nSerie, empresa.razon_social, ordentrabajo.estado,
        ordentrabajo.id_equipo
        FROM $tabla
        INNER JOIN equipo
        ON $tabla.id_equipo = equipo.id_equipo
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa
        WHERE $tabla.cerrado = 0");
        $sql -> execute();
        return $sql -> fetchAll();
    }

    public function mdlBuscarOrden($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("SELECT ordentrabajo.id_orden, ordentrabajo.folio, 
        ordentrabajo.fecha_orden, equipo.nomEquipo, equipo.nSerie, empresa.razon_social, ordentrabajo.estado, 
        tecnicos.nomTecnico, tecnicos.id_tecnico, ordentrabajo.diagnostico, ordentrabajo.repuestos, ordentrabajo.estado
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

    public function mdlContarOrden($tabla){
        // aqui falta filtrar por solo equipos en taller - colocar estado 0-1
        $sql = (new Conexion)->conectar()->prepare("SELECT count(id_orden) FROM $tabla");
        $sql -> execute();
        return $sql->fetch();
    } 

    public function mdlTodosDespachos($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT ordentrabajo.id_orden, ordentrabajo.folio, 
        ordentrabajo.fecha_orden, ordentrabajo.id_equipo, equipo.nomEquipo, equipo.nSerie, empresa.razon_social, ordentrabajo.estado, 
        ordentrabajo.cerrado
        FROM $tabla
        INNER JOIN equipo
        ON $tabla.id_equipo = equipo.id_equipo
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa
        WHERE ordentrabajo.cerrado = 1");
        $sql -> execute();
        return $sql -> fetchAll();
    }
    
    public function mdlTodosFinalizados($tabla){
        $sql = (new Conexion)->conectar()->prepare("SELECT ordentrabajo.id_orden, ordentrabajo.folio, 
        ordentrabajo.fecha_orden, ordentrabajo.id_equipo, equipo.nomEquipo, equipo.nSerie, empresa.razon_social, ordentrabajo.estado, 
        ordentrabajo.cerrado
        FROM $tabla
        INNER JOIN equipo
        ON $tabla.id_equipo = equipo.id_equipo
        INNER JOIN empresa
        ON $tabla.id_empresa = empresa.id_empresa
        WHERE ordentrabajo.estado = 4 AND ordentrabajo.cerrado = 0");
        $sql -> execute();
        return $sql -> fetchAll();
    }

    public function mdlDespacharEquipo($tabla, $id){
        $sql = (new Conexion)->conectar()->prepare("UPDATE $tabla SET cerrado = 1 WHERE id_equipo = $id");

        if ($sql -> execute()){
            return "ok";
        } else {
            return "error";
        }
    }
}

?>