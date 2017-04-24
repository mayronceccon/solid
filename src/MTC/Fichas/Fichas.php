<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IFichas;
use MTC\Fichas\Interfaces\IExportarFichas;

abstract class Fichas
{
    public abstract function inserir(IFichas $ficha);

    public abstract function finalizar(IFichas $ficha);

    public function consultar(IFichas $ficha)
    {
        return $ficha->getDados();
    }

    public function exportar(IFichas $ficha, IExportarFichas $tipo)
    {
        echo $tipo->exportar($ficha);
    }
}