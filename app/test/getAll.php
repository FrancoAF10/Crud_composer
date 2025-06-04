<?php

require_once __DIR__.'/../models/Mascota.php';

$mascota=new Mascota();
var_dump($mascota->getAll());