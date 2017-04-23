<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IExportarFichas;
use MTC\Fichas\Fichas;

class ExportarFichasJSON implements IExportarFichas
{
    public function exportar(Fichas $ficha)
    {
        header("Content-type:application/json");
        
        $ficha = array('ficha' => array(
            'cpf' => $ficha->getCpf(),
            'nome' => $ficha->getNome()
        ));

        echo json_encode($ficha);
    }
}