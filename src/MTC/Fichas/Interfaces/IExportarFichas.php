<?php

namespace MTC\Fichas\Interfaces;

use MTC\Fichas\Interfaces\IFichas;

interface IExportarFichas
{
    public function exportar(IFichas $ficha);
}