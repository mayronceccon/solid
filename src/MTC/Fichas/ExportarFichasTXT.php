<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IExportarFichas;
use MTC\Fichas\Fichas;

class ExportarFichasTXT implements IExportarFichas
{
    public function exportar(Fichas $ficha)
    {
        echo "CPF: " . $ficha->getCpf() . "<br/>";
        echo "NOME: " . $ficha->getNome() . "<br/>";
    }
}