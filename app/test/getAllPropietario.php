<?php

require_once __DIR__.'../models/Propietario.php';

$propietario=new Propietario();
var_dump($propietario->getAll());