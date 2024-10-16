<?php

require_once('Conexion.php');

class RolUsuario extends Conexion{
   
    private $idrolusuario;
    private $descriprolusuario;
    private $estadorolusuario;

    public function __construct(){
        //acceder en la clase padre
        $this->db=parent:: __construct();

}
public function getIdrolusuario(){
    return $this->idrolusuario;
}

public function setIdrolusuario($idrolusuario){
    $this->idrolusuario = $idrolusuario;
}

public function getDescriprolusuario(){
    return $this->descriprolusuario;
}

public function setDescriprolusuario($descriprolusuario){
    $this->descriprolusuario = $descriprolusuario;
}

public function getEstadorolusuario(){
    return $this->estadorolusuario;
}

public function setEstadorolusuario($estadorolusuario){
    $this->estadorolusuario = $estadorolusuario;
}

public function consultarTodos(){
    $consulta=$this->db->prepare("call consultarRol");
    $filas=null;
    $consulta->execute();
    while($resultado=$consulta->fetch()){
        $filas[]=$resultado;
    }
    return $filas;
}

public function RegistroRol(){
    $consulta=$this->db->prepare("INSERT INTO RolUsuario (descriprolusuario, estadorolusuario ) VALUES (:nom :est)");

    $consulta->bindParam(':nom', $this->descriprolusuario);
    $consulta->bindParam(':est', $this->estadorolusuario);
         
    if($consulta->execute()){
        header('Location: ../view/formRegRol.php?mensaje=correcto');
    }else{
        header('Location: ../view/formRegRol.php?mensaje=incorrecto');
    }
    }




}