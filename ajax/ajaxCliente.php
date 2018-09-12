<?php
include_once ("../controllers/cliente.controller.php");
include_once ("../models/cliente.model.php");

Class Cliente{
    private $_rut;
    private $_nombre;
    private $_direcccion;
    private $_giro;
    private $_pais;
    private $_region;
    private $_ciudad;
    private $_contacto;
    private $_telefono;
    private $_idCliente;

    public function setRut($rut){
        $this->_rut = $rut;
    }

    public function getRut(){
        return $this->_rut;
    }

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

    public function setGiro($giro){
        $this->_giro = $giro;
    }

    public function getGiro(){
        return $this->_giro;
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

    public function setIdCliente($id){
        $this->_idCliente = $id;
    }

    public function getIdCliente(){
        return $this->_idCliente;
    }


    public function GuardarCliente(){

        $datos = array("rut"=>$this->getRut(),
                        "nombre"=>$this->getNombre(),
                        "direccion"=>$this->getDireccion(),
                        "giro"=>$this->getGiro(),                        
                        "pais"=>$this->getPais(),
                        "region"=>$this->getRegion(),                       
                        "ciudad"=>$this->getCiudad(),
                        "comuna"=>$this->getComuna(),
                        "contacto"=>$this->getContacto(),
                        "telefono"=>$this->getTelefono());

        $NewCliente = new ctrCliente();
        $NewCliente->setDatos($datos);
        $respuesta = $NewCliente->ctrGuardarCliente();
        echo $respuesta;

    }

    public function eliminarCliente(){
        $id = $this->getIdCliente();
        $eliminar = new ctrCliente();
        $eliminar -> setIdCliente($id);
        $respuesta = $eliminar -> ctrEliminarCliente();
        echo $respuesta;
    }

    public function editarCliente(){
        $id = $this->getIdCliente();
        $eliminar = new ctrCliente();
        $eliminar -> setIdCliente($id);
        $respuesta = $eliminar -> ctrEditarCliente();
        echo json_encode($respuesta);
    }

    public function actualizarCliente(){
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
                        "id_cliente"=>$this->getIdCliente());

        $NewCliente = new ctrCliente();
        $NewCliente->setDatos($datos);
        $respuesta = $NewCliente->ctrActualizarCliente();
        echo $respuesta;


    }

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "nuevoCliente") {
    
    $NuevoCliente = new Cliente();
    $NuevoCliente->setRut($_POST["rutCliente"]);
    $NuevoCliente->setNombre($_POST["razonCliente"]);
    $NuevoCliente->setDireccion($_POST["direccionCliente"]);
    $NuevoCliente->setGiro($_POST["giroCliente"]);
    $NuevoCliente->setPais($_POST["pais"]);
    $NuevoCliente->setRegion($_POST["region"]);
    $NuevoCliente->setCiudad($_POST["ciudad"]);
    $NuevoCliente->setComuna($_POST["comuna"]);
    $NuevoCliente->setContacto($_POST["contacto"]);
    $NuevoCliente->setTelefono($_POST["telefono"]);
    $NuevoCliente->GuardarCliente();
}
if ($tipoOperacion == "eliminarCliente"){
    $eliminarCliente = new Cliente();
    $eliminarCliente -> setIdCliente($_POST["id"]);
    $eliminarCliente -> eliminarCliente();

  }

  if ($tipoOperacion == "editarCliente"){
    $eliminarCliente = new Cliente();
    $eliminarCliente -> setIdCliente($_POST["id_empresa"]);
    $eliminarCliente -> editarCliente();

  }

  if($tipoOperacion == "actualizarrCliente") {
    
    $modificarCliente = new Cliente();
    $modificarCliente->setIdCliente($_POST["idCliente"]);
    $modificarCliente->setRut($_POST["rutCliente"]);
    $modificarCliente->setNombre($_POST["razonCliente"]);
    $modificarCliente->setDireccion($_POST["direccionCliente"]);
    $modificarCliente->setGiro($_POST["giroCliente"]);
    $modificarCliente->setPais($_POST["pais"]);
    $modificarCliente->setRegion($_POST["region"]);
    $modificarCliente->setCiudad($_POST["ciudad"]);
    $modificarCliente->setComuna($_POST["comuna"]);
    $modificarCliente->setContacto($_POST["contacto"]);
    $modificarCliente->setTelefono($_POST["telefono"]);
    $modificarCliente->ActualizarCliente();
}
?>