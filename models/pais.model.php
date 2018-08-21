<?php

Class ModelPais{
    private $tabla;

    public function __construct(){

    }

    static public function mdlMostrarPais(){
        $sql = Conexion::conectar()->prepare("SELECT * FROM '$this->getTabla()'");
        $sql -> execute();
        return $sql->fetchAll();
    }
    
    public function getTabla(){
        return $this->tabla;
    }    

    public function setTabla($nombreTabla){
        $this->tabla = $nombreTabla;

    }

}

?>