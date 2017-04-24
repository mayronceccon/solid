<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IExportarFichas;
use MTC\Fichas\Interfaces\IFichas;

class ExportarFichasTXT implements IExportarFichas
{
    public function exportar(IFichas $ficha)
    {
        $dados = $ficha->getDados();
        foreach ($dados['ficha'] as $chave => $dado) {
            echo "{$chave}: " . $dado . "<br/>";
        }
    }
}