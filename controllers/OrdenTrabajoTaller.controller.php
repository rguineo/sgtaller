<?php 

Class OrdenTrabajoTallerCtr{
    // Atributos
        private $idOTT;
        private $fecha;
        private $idCliente;
        private $idCentro;
        private $idEquipo;
        private $idUsuario;
        private $idTecnico;


    // Constructor

    public function __construct(){

    }


    // Metodos

    public function NuevaOrdenTrabajoTaller(){


    }

    public function MostrarOrdenTrabajoTaller($id_ott){

    }

    // gets & sets

    public function getIdOTT(){
        return $this->idOTT;
    }

    public function setIdOTT($id_ott){
        $this->idOTT = $id_ott;
    }
}
?>