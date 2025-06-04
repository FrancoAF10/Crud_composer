<?php

require_once '../entities/Propietario.entidad.php';
require_once '../models/Propietario.php';

//Entidad=CONTENEDOR DATOS
$entidad= new PropietarioEntidad();
$entidad->__SET('apellidos','Flores');
$entidad->__SET('nombres','Juan');
//MODELO= ACCIÓN/LÓGICA BACKEND
$propietario=new Propietario();

$idgenerado=$propietario->create($entidad);
var_dump($idgenerado);