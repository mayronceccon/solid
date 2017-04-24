<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IExportarFichas;
use MTC\Fichas\Interfaces\IFichas;

class ExportarFichasJSON implements IExportarFichas
{
    public function exportar(IFichas $ficha)
    {
        header("Content-type:application/json");
        $dados = $ficha->getDados();
        echo json_encode($dados);
    }
}