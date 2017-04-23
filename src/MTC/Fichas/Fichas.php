<?php

namespace MTC\Fichas;

use MTC\Fichas\Interfaces\IFichas;
use MTC\CpfService;

class Fichas implements IFichas
{
    private $cpf;
    private $nome;
    private $renavam;

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setRenavam($renavam)
    {
        $this->renavam = $renavam;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getRenavam()
    {
        return $this->renavam;
    }

    public function isValid()
    {
        if (!CpfService::isValid($this->getCpf())) {
            return false;
        }
        return true;
    }
}