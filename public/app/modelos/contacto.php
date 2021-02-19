<?php

class Contacto{
    private $nombre;
    private $email;
    private $mensaje;
    private $contError = 0;
    private $arregloMsje = array();
   

    public function __construct($nom='', $mail='', $msje=''){
        $this->nombre = $nom;
        $this->email = $mail;
        $this->mensaje = $msje;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nom){
        $this->nombre = $nom;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($mail){
        $this->email = $mail;
    }

    public function getMensaje(){
        return $this->mensaje;
    }

    public function setMensaje($msje){
        $this->mensaje = $msje;
    }

    public function getContError(){
        return $this->contError;
    }

    public function setContError($contE){
        $this->contError = $contE;
    }

    public function getArregloMsje(){
        $msje = "";
        for ($i=0; $i<$this->contError ; $i++){
           $msje .= $this->arregloMsje[$i]."<br><br>";
        }
        return $msje;
    }

    public function setArregloMsje($arrayMsje){
        $this->arregloMsje = $arrayMsje;
    }

    public function isNombre($minimo, $maximo){
        if ((strlen($this->nombre) <= $minimo) || (strlen($this->nombre) >= $maximo)){
            $this->arregloMsje[] = "El Nombre debe contener entre 1 y 50 caracteres.";
            $this->contError++;
        }
    }

    public function isEmail($minimo, $maximo){
        if ((strlen($this->email) <= $minimo) || (strlen($this->email) >= $maximo)){
            $this->arregloMsje[] = "El Email debe contener entre 1 y 254 caracteres.";
            $this->contError++;
        }
    }

    public function isMensaje($minimo, $maximo){
        if ((strlen($this->mensaje) <= $minimo) || (strlen($this->mensaje) >= $maximo)){
            $this->arregloMsje[] = "El Mensaje debe contener entre 1 y 1000 caracteres.";
            $this->contError++;
        }
    }

}
