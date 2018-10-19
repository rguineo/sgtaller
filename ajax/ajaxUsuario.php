<?php
require_once "../controllers/usuario.controller.php";
require_once "../models/usuario.modelo.php";

Class ajaxUsuario{
	private $_user;
	private $_password;
	private $_nombre;
    private $_apellido;
    private $_rol;
    private $_avatar;
    private $_id_usuario;

    public function setUser($user){
        $this->_user = $user;
    }

    public function getUser(){
        return $this->_user;
    }
    public function setPassword($password){
        $this->_password = $password;
    }

    public function getPassword(){
        return $this->_password;
    }
    public function setNombre($nombre){
        $this->_nombre = $nombre;
    }

    public function getNombre(){
        return $this->_nombre;
    }
    public function setApellido($apellido){
        $this->_apellido = $apellido;
    }

    public function getApellido(){
        return $this->_apellido;
    }
    public function setRol($rol){
        $this->_rol = $rol;
    }

    public function getRol(){
        return $this->_rol;
    }
    public function setAvatar($avatar){
        $this->_avatar = $avatar;
    }

    public function getAvatar(){
        return $this->_avatar;
    }
    public function setId_usuario($id_usuario){
        $this->_id_usuario = $id_usuario;
    }

    public function getId_usuario(){
        return $this->_id_usuario;
    }
    
    public function crearUsuario(){
		$datos = array(	"nombre_admin"=>$this->_nombre_admin,
                        "correo_admin"=>$this->_correo_admin,
                        "password_admin"=>$this->_password_admin,
                        "avatar_admin"=>$this->_avatar_admin);

		$respuesta = (new ControllerUsuario)->ctrCrearUsuario($datos);

		echo $respuesta;
	}

	public function editarUsuario(){
        $id_admin = $this->_id_admin;
        
        $respuesta = (new ControllerUsuario)->ctrEditarUsuario($id_admin);

        $datos = array("id_admin"=>$respuesta["id_admin"],
						"nombre_admin"=>$respuesta["nombre_admin"],
                        "correo_admin"=>$respuesta["correo_admin"],
                        "password_admin"=>$respuesta["password_admin"],
						"avatar_admin"=>substr($respuesta["avatar_admin"], 3)
						);

        echo json_encode($datos);

    }
    public function actualizarUsuario(){
		$datos = array( "id_admin"=>$this->_id_admin,
						"nombre_admin"=>$this->_nombre_admin,
						"correo_admin"=>$this->_correo_admin,
						"password_admin"=>$this->_password_admin,
                        "avatar_admin"=>$this->_avatar_admin,
                        "rutaActual"=>$this->_rutaActual
						);

		$respuesta = ControllerUsuario::ctrActualizarUsuario($datos);

		echo $respuesta;
	}

    public function eliminarUsuario(){
        $id_usuario = $this->getId_usuario();
        $eliminar = new ctrUsuario();
        $eliminar -> setIdUsuario($id_usuario);
        $respuesta = $eliminar -> ctrEliminarUsuario();
        echo $respuesta;
		// $ruta = $this->avatar_admin;

		// $respuesta = ControllerUsuario::ctrEliminarUsuario($id_admin, $ruta);

		// echo $respuesta;

	}
}
    
    $tipoOperacion = $_POST["tipoOperacion"];

    if($tipoOperacion == "insertarUsuario") {
        $crearNuevoUsuario = new ajaxUsuario();
        $crearNuevoUsuario -> _nombre_admin = $_POST["nombre_admin"];
        $crearNuevoUsuario -> _correo_admin = $_POST["correo_admin"];
        $crearNuevoUsuario -> _password_admin = $_POST["password_admin"];
        $crearNuevoUsuario -> _avatar_admin = $_FILES["avatar_admin"];
        $crearNuevoUsuario -> crearUsuario();
    }
    
    if ($tipoOperacion == "editarUsuario") {
        $editarUsuario = new ajaxUsuario();
        $editarUsuario -> _id_admin = $_POST["id_admin"];
        $editarUsuario -> editarUsuario();
    }
    
    if ($tipoOperacion == "actualizarUsuario") {
        $actualizarUsuario = new ajaxUsuario();
        $actualizarUsuario -> _id_admin = $_POST["id_admin"];
        $actualizarUsuario -> _nombre_admin = $_POST["nombre_admin"];
        $actualizarUsuario -> _correo_admin = $_POST["correo_admin"];
        $actualizarUsuario -> _password_admin = $_POST["password_admin"];
        $actualizarUsuario -> _avatar_admin = $_FILES["avatar_admin"];
        $actualizarUsuario -> _rutaActual = $_POST["rutaActual"];
        
        $actualizarUsuario -> actualizarUsuario();
    }
    if ($tipoOperacion == "eliminarUsuario") {
        $eliminarUsuario = new ajaxUsuario();
        $eliminarUsuario -> setId_usuario($_POST["id_usuario"]);
        $eliminarUsuario -> eliminarUsuario();
    }
    
    ?>