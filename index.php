<?php

require_once 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

use MTC\Fichas\FichasMotoristas;
use MTC\Fichas\FichasVeiculos;
use MTC\Fichas\FichasMotoristasRepository;
use MTC\Fichas\FichasVeiculosRepository;
use MTC\Fichas\ExportarFichasTXT;
use MTC\Fichas\ExportarFichasXML;
use MTC\Fichas\ExportarFichasJSON;

$fichasMotoristas = new FichasMotoristas();
$fichasMotoristas->setNome('Mayron');
$fichasMotoristas->setCpf('362.284.337-33');
$fichasMotoristasRepository = new FichasMotoristasRepository();
$resultado = $fichasMotoristasRepository->inserir($fichasMotoristas);

if ($resultado) {
    //$fichasMotoristasRepository->exportar($fichasMotoristas, new ExportarFichasJSON);
    $ficha = $fichasMotoristasRepository->consultar($fichasMotoristas);
    echo "<pre>";
    var_dump($ficha);
}

$fichasVeiculos = new FichasVeiculos();
$fichasVeiculos->setPlaca('AIO-5596');
$fichasVeiculos->setRenavam('245179316');
$fichasVeiculosRepository = new FichasVeiculosRepository();
$resultado = $fichasVeiculosRepository->inserir($fichasVeiculos);

if ($resultado) {
    //$fichasVeiculosRepository->exportar($fichasVeiculos, new ExportarFichasJSON);
    $ficha = $fichasVeiculosRepository->consultar($fichasVeiculos);
    echo "<pre>";
    var_dump($ficha);
}
