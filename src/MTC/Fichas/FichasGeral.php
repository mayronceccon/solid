<?php

namespace MTC\Fichas;

use MTC\Interfaces\IFichas;

abstract class FichasGeral
{
    public abstract function inserir(IFichas $ficha);

    public function finalizar(Fichas $ficha)
    {
        //echo "FINALIZAR<br/><br/>";
    }

    public function consultar(Fichas $ficha)
    {
        //echo "CONSULTAR<br/><br/>";
    }

    /*public function exportar(Fichas $ficha, IExportarFichas $tipo)
    {
        echo "EXPORTAR";
    }*/
}