<?php

namespace MTC\Fichas;
use MTC\Fichas\FichasGeral;
use MTC\Interfaces\IFichas;

class FichasMotoristas extends FichasGeral
{
    public function inserir(IFichas $ficha)
    {
        if ($ficha->isValid()) {
            //echo "INSERIR FICHA MOTORISTA<br/><br/>";
        } else {
            //echo "NÃO PODE INSERIR FICHA<br/><br/>";
        }
    }
}