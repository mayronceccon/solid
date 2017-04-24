<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IExportarFichas;
use MTC\Fichas\Interfaces\IFichas;

class ExportarFichasXML implements IExportarFichas
{
    public function exportar(IFichas $ficha)
    {
        header("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='UTF-8'?>";
        echo "<ficha>";
        $dados = $ficha->getDados();
        foreach ($dados['ficha'] as $chave => $dado) {
            echo "<{$chave}>" . $dado . "</{$chave}>";
        }        
        echo "</ficha>";
    }
}