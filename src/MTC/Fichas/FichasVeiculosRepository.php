<?php

namespace MTC\Fichas;

use MTC\Fichas\Fichas;
use MTC\Fichas\Interfaces\IFichas;

class FichasVeiculosRepository extends Fichas
{
    public function inserir(IFichas $ficha)
    {
        if (!$ficha->isValid()) {
            return false;
        }
        return true;
    }

    public function finalizar(IFichas $ficha)
    {
        
    }
}