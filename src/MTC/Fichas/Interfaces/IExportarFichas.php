<?php

namespace MTC\Fichas\Interfaces;

use MTC\Fichas\Fichas;

interface IExportarFichas
{
    public function exportar(Fichas $ficha);
}