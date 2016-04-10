<?php


class categoria {
   private $nombre;
   private $descricion;
   private $fecha_creacion;
   private $fecha_mod;
   
   function __construct(){
       
   }
   function getNombre() {
       return $this->nombre;
   }

   function getDescricion() {
       return $this->descricion;
   }

   function getFecha_creacion() {
       return $this->fecha_creacion;
   }

   function getFecha_mod() {
       return $this->fecha_mod;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setDescricion($descricion) {
       $this->descricion = $descricion;
   }

   function setFecha_creacion($fecha_creacion) {
       $this->fecha_creacion = $fecha_creacion;
   }

   function setFecha_mod($fecha_mod) {
       $this->fecha_mod = $fecha_mod;
   }



}
