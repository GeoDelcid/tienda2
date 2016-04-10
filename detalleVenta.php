<?php


class detalleVenta {
    private $idDetalleVenta;
    private $idVenta;
    private $idProducto;
    private $precio;
    private $cantidad;
    private $fecha;
    
    function __construct() {
        
    }
    function getIdDetalleVenta() {
        return $this->idDetalleVenta;
    }

    function getIdVenta() {
        return $this->idVenta;
    }

    function getIdProducto() {
        return $this->idProducto;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setIdDetalleVenta($idDetalleVenta) {
        $this->idDetalleVenta = $idDetalleVenta;
    }

    function setIdVenta($idVenta) {
        $this->idVenta = $idVenta;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
