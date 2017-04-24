<?php

namespace MTC\Fichas;

use MTC\RenavamService;
use MTC\Fichas\Interfaces\IFichas;

class FichasVeiculos implements IFichas
{
    private $placa;
    private $renavam;

    public function setRenavam($renavam)
    {
        $this->renavam = $renavam;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function getPlaca()
    {
        return $this->placa;
    }   

    public function getRenavam()
    {
        return $this->renavam;
    }

    public function isValid()
    {
        if (!RenavamService::isValid($this->getRenavam())) {
            return false;
        }
        return true;
    }

    public function getDados()
    {
        $ficha = array('ficha' => array(
            'renavam' => $this->getRenavam(),
            'placa' => $this->getPlaca()
        ));
        return $ficha;
    }
}