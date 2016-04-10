<?php


 
class venta {
    private $idVenta;
    private $idUsuario;
    private $fecha;
    
    function __construct() {
        
    }
    function getIdVenta() {
        return $this->idVenta;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setIdVenta($idVenta) {
        $this->idVenta = $idVenta;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
