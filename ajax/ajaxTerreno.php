<?php 

Class ajaxTerreno{
    public $_idTerreno;
    public $_fecha;
    public $_idEmpresa;
    public $_idCrentro;
    public $_reponsable;
    public $_idEquipo;
    public $_trabajo;
    public $_recomendaciones;
    public $_repuestos;

    public function ajaxGuardarTerreno(){
        $datos = array( "fecha"=>$this->_fecha,
                        "idEmpresa"=>$this->_idEmpresa,
                        "idCentro"=>$this->_idCentro,
                        "responsable"=>$this->_responsable,
                        "idEquipo"=>$this->_idEquipo,
                        "trabajo"=>$this->_trabajo,
                        "recomendaciones"=>$this->_recomendaciones,
                        "repuestos"=>$this->_repuestos);

        $nuevoTerreno = (new ctrTerrenos);
        $respuesta = $nuevoTerreno -> ctrGuardarTerreno($datos);
        echo $respuesta;
    }


}

$tipoOperacion = $_POST["tipoOperacion"];

if ( $tipoOperacion == "nuevoTerreno"){
    $nuevoTerreno = (new ajaxTerreno);
    $nuevoTerreno -> _fecha = $_POST["fechaTerreno"];
    $nuevoTerreno -> _idEmpresa = $_POST["empresaTerreno"];
    $nuevoTerreno -> _idCrentro = $_POST["centroTerreno"];
    $nuevoTerreno -> _reponsable = $_POST["responsable"];
    $nuevoTerreno -> _idEquipo = $_POST["equipoTerreno"];
    $nuevoTerreno -> _trabajo = $_POST["trabajo"];
    $nuevoTerreno -> _recomendaciones = $_POST["recomendaciones"];
    $nuevoTerreno -> _repuestos = $_POST["repuestos"];
    $nuevoTerreno -> ajaxGuardarTerreno();
}

?>