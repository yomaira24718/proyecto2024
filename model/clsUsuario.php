<?php

require_once('Conexion.php');
require_once('clsRol.php');

class Usuario extends Conexion{

    private $idusua;
    private $tipodoc;
    private $nodoc;
    private $nombreusua;
    private $apellidousua;
    private $direccionusua;
    private $telusua;
    private $correousua;
    private $claveusua;
    private $fotousua;
    private $estadousua;
	private $tipousua;
	private $fechaRegistrousua;

	//private $rolusu;


    public function __construct(){
        //acceder en la clase padre
        $this->db=parent:: __construct();
    }

    public function getIdusua(){
		return $this->idusua;
	}

	public function setIdusua($idusua){
		$this->idusua = $idusua;
	}

	public function getTipodoc(){
		return $this->tipodoc;
	}

	public function setTipodoc($tipodoc){
		$this->tipodoc = $tipodoc;
	}

	public function getNodoc(){
		return $this->nodoc;
	}

	public function setNodoc($nodoc){
		$this->nodoc = $nodoc;
	}

	public function getNombreusua(){
		return $this->nombreusua;
	}

	public function setNombreusua($nombreusua){
		$this->nombreusua = $nombreusua;
	}

	public function getApellidousua(){
		return $this->apellidousua;
	}

	public function setApellidousua($apellidousua){
		$this->apellidousua = $apellidousua;
	}

	public function getDireccionusua(){
		return $this->direccionusua;
	}

	public function setDireccionusua($direccionusua){
		$this->direccionusua = $direccionusua;
	}

	public function getTelusua(){
		return $this->telusua;
	}

	public function setTelusua($telusua){
		$this->telusua = $telusua;
	}

	public function getCorreoUsua(){
		return $this->correousua;
	}

	public function setCorreoUsua($correousua){
		$this->correousua = $correousua;
	}

	public function getClaveUsua(){
		return $this->claveusua;
	}

	public function setClaveUsua($claveusua){
		$this->claveusua = $claveusua;
	}

	public function getFotousua(){
		return $this->fotousua;
	}

	public function setFotousua($fotousua){
		$this->fotousua = $fotousua;
	}

	public function getEstadousua(){
		return $this->estadousua;
	}

	public function setEstadousua($estadousua){
		$this->estadousua = $estadousua;
	}

	public function getTipousua(){
		return $this->tipousua;
	}

	public function setTipousua($tipousua){
		$this->tipousua = $tipousua;
	}

	public function getFechaRegistrousua(){
		return $this->fechaRegistrousua;
	}

	public function setFechaRegistrousua($fechaRegistrousua){
		$this->fechaRegistrousua = $fechaRegistrousua;
	}

	

	//public function setRolusu($rolusu){
	//	$this->rolusu = $rolusu;
	//}

    public function Login()
	{
        $query = $this->db->prepare("SELECT * FROM Usuario where correousuario=:Co and claveusua=:Cl");
        $query->bindParam(':Co', $this->correousua);
        $query->bindParam(':Cl', $this->claveusua);
        $query->execute();
        if ($query->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
        }

	public function consultarRol()
	{
		$filas=null;
		$consulta=$this->db->prepare("SELECT  R.descriprolusuario from RolUsuario R join Usuario U on R.idrolusuario= U.idrolusuariofk  WHERE  correousuario =:name");
	    $consulta->bindParam(':name',$this->correousua);
		$consulta->execute();
		while ($resultado=$consulta->fetch()) {
			$filas[]=$resultado;
		}
		 foreach ($filas as $fila) {
				$tipo=$fila['descriprol'];
			}
			return $tipo;
		}

		
	
	
	public function Registrar(){
		$consulta=$this->db->prepare("INSERT INTO Usuario (tipodoc, nodoc, nombreusuario, apellidousuario, direccionusuario, telusuario, correousuario ,claveusua, fotousua, estadousuario, idrolusuariofk) VALUES (:tipo, :num, :nom, :ape, :dir, :tel, :cor, :con, :fot, :J, :rol)");
		
		$consulta->bindParam(':tipo', $this->tipodoc);
		$consulta->bindParam(':num', $this->nodoc);
		$consulta->bindParam(':nom', $this->nombreusua);
		$consulta->bindParam(':ape', $this->apellidousua);
		$consulta->bindParam(':dir', $this->direccionusua);
		$consulta->bindParam(':tel', $this->telusua);
		$consulta->bindParam(':cor', $this->correousua);
		$consulta->bindParam(':con', $this->claveusua);
		$consulta->bindParam(':fot', $this->fotousua);
		$consulta->bindParam(':J', $this->estadousua);
		$consulta->bindParam(':rol', $this->tipousua);
		
				
		if($consulta->execute()){
			header('Location: ../view/formregister.php?mensaje=correcto');
		}else{
				header('Location: ../view/formregister.php?mensaje=incorrecto');
			}
			}
		
	
	public function consultarTodos(){
		$consulta=$this->db->prepare("select *from usuario");
		$filas=null;
		$consulta->execute();
		while($resultado=$consulta->fetch()){
				$filas[]=$resultado;
		}
			return $filas;
		}
	




}