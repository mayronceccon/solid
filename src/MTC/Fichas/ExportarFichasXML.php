<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IExportarFichas;
use MTC\Fichas\Fichas;

class ExportarFichasXML implements IExportarFichas
{
    public function exportar(Fichas $ficha)
    {
        header("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='UTF-8'?>";
        echo "<FICHA>";
        echo "<CPF>" . $ficha->getCpf() . "</CPF>";
        echo "<NOME>" . $ficha->getNome() . "</NOME>";
        echo "</FICHA>";
    }
}