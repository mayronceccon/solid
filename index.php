<?php

require_once 'vendor/autoload.php';

use MTC\Fichas\Fichas;
use MTC\Fichas\FichasMotoristas;
use MTC\Fichas\ExportarFichasTXT;
use MTC\Fichas\ExportarFichasXML;
use MTC\Fichas\ExportarFichasJSON;

$fichas = new Fichas();
$fichas->setNome('Mayron');
$fichas->setCpf('362.284.337-33');

$fichasMotoristas = new FichasMotoristas();
$fichasMotoristas->inserir($fichas);

$exportar = new ExportarFichasJSON;
$exportar->exportar($fichas);