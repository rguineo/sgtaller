<?php
include_once ("../controllers/centros.controller.php");
include_once ("../models/centros.model.php");

Class ajaxCentro{
    private $_nombre;
    private $_direcccion;
    private $_ubicacion;
    private $_idEmpresa;
    private $_pais;
    private $_region;
    private $_ciudad;
    private $_contacto;
    private $_telefono;
    private $_idCentro;


    public function setNombre($nombre){
        $this->_nombre = $nombre;
    }

    public function getNombre(){
        return $this->_nombre;
    }

    public function setDireccion($direccion){
        $this->_direccion = $direccion;
    }

    public function getDireccion(){
        return $this->_direccion;
    }

    public function setUbicacion($ubicacion){
        $this->_ubicacion = $ubicacion;
    }

    public function getUbicacion(){
        return $this->_ubicacion;
    }

    public function setIdEmpresa($empresa){
        $this->_idEmpresa = $empresa;
    }

    public function getIdEmpresa(){
        return $this->_idEmpresa;
    }

    public function setPais($pais){
        $this->_pais = $pais;
    }

    public function getPais(){
        return $this->_pais;
    }

    public function setRegion($region){
        $this->_region = $region;
    }

    public function getRegion(){
        return $this->_region;
    }

    public function setCiudad($ciudad){
        $this->_ciudad = $ciudad;
    }

    public function getCiudad(){
        return $this->_ciudad;
    }

    public function setComuna($comuna){
        $this->_comuna = $comuna;
    }

    public function getComuna(){
        return $this->_comuna;
    }
    public function setContacto($contacto){
        $this->_contacto = $contacto;
    }

    public function getContacto(){
        return $this->_contacto;
    }

    public function setTelefono($telefono){
        $this->_telefono = $telefono;
    }

    public function getTelefono(){
        return $this->_telefono;
    }

    public function setIdCentro($id){
        $this->_idCentro = $id;
    }

    public function getIdCentro(){
        return $this->_idCentro;
    }


    public function GuardarCentro(){

        $datos = array(
                        "nombre"=>$this->getNombre(),
                        "direccion"=>$this->getDireccion(),
                        "ubicacion"=>$this->getUbicacion(),
                        "empresa"=>$this->getIdEmpresa(),                        
                        "pais"=>$this->getPais(),
                        "region"=>$this->getRegion(),                       
                        "ciudad"=>$this->getCiudad(),
                        "comuna"=>$this->getComuna(),
                        "contacto"=>$this->getContacto(),
                        "telefono"=>$this->getTelefono());

        $NewCentro = new ctrCentros();
        $NewCentro->setDatos($datos);
        $respuesta = $NewCentro->ctrGuardarCentro();
        echo $respuesta;

    }

    public function eliminarCentro(){
        $id = $this->getIdCentro();
        $eliminar = new ctrCentros();
        $eliminar -> setIdCentro($id);
        $respuesta = $eliminar -> ctrEliminarCentro();
        echo $respuesta;
    }

    public function editarCentro(){
        $id = $this->getIdCentro();
        $editar = new ctrCentros();
        $editar -> setIdCentro($id);
        $respuesta = $editar -> ctrEditarCentro();
        echo json_encode($respuesta);
    }

    public function actualizarCentro(){
        $id = $this->getIdCentro();
        $datos = array("rut"=>$this->getRut(),
                        "nombre"=>$this->getNombre(),
                        "direccion"=>$this->getDireccion(),
                        "giro"=>$this->getGiro(),                        
                        "pais"=>$this->getPais(),
                        "region"=>$this->getRegion(),                       
                        "ciudad"=>$this->getCiudad(),
                        "comuna"=>$this->getComuna(),
                        "contacto"=>$this->getContacto(),
                        "telefono"=>$this->getTelefono(),
                        "id_Centro"=>$this->getIdCentro());

        $NewCentro = new ctrCentros();
        $NewCentro->setDatos($datos);
        $NewCentro->setIdCentro($id);
        $respuesta = $NewCentro->ctrActualizarCentro();
        echo $respuesta;
    }
}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "nuevoCentro") {
    
    $NuevoCentro = new ajaxCentro();
    $NuevoCentro->setNombre($_POST["nombreCentro"]);
    $NuevoCentro->setDireccion($_POST["direccionCentro"]);
    $NuevoCentro->setUbicacion($_POST["ubicacionCentro"]);
    $NuevoCentro->setIdEmpresa($_POST["idEmpresa"]);
    $NuevoCentro->setPais($_POST["pais"]);
    $NuevoCentro->setRegion($_POST["region"]);
    $NuevoCentro->setCiudad($_POST["ciudad"]);
    $NuevoCentro->setComuna($_POST["comuna"]);
    $NuevoCentro->setContacto($_POST["contacto"]);
    $NuevoCentro->setTelefono($_POST["telefono"]);
    $NuevoCentro->GuardarCentro();
}
if ($tipoOperacion == "eliminarCentro"){
    $eliminarCentro = new ajaxCentro();
    $eliminarCentro -> setIdCentro($_POST["id"]);
    $eliminarCentro -> eliminarCentro();

  }

  if ($tipoOperacion == "editarCentro"){
    $eliminarCentro = new ajaxCentro();
    $eliminarCentro -> setIdCentro($_POST["id_centro"]);
    $eliminarCentro -> editarCentro();

  }

  if($tipoOperacion == "actualizarCentro") {
    $modificarCentro = new ajaxCentro();
    $modificarCentro->setRut($_POST["ErutCentro"]);
    $modificarCentro->setNombre($_POST["ErazonCentro"]);
    $modificarCentro->setDireccion($_POST["EdireccionCentro"]);
    $modificarCentro->setGiro($_POST["EgiroCentro"]);
    $modificarCentro->setPais($_POST["Epais"]);
    $modificarCentro->setRegion($_POST["Eregion"]);
    $modificarCentro->setCiudad($_POST["Eciudad"]);
    $modificarCentro->setComuna($_POST["Ecomuna"]);
    $modificarCentro->setContacto($_POST["Econtacto"]);
    $modificarCentro->setTelefono($_POST["Etelefono"]);
    $modificarCentro->setIdCentro($_POST["EidCentro"]);
    $modificarCentro->ActualizarCentro();
}
?>