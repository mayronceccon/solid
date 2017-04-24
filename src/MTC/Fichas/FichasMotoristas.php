<?php

namespace MTC\Fichas;

use MTC\CpfService;
use MTC\Fichas\Interfaces\IFichas;

class FichasMotoristas implements IFichas
{
    private $cpf;
    private $nome;

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }  

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }   

    public function isValid()
    {
        if (!CpfService::isValid($this->getCpf())) {
            return false;
        }
        return true;
    }

    public function getDados()
    {
        $ficha = array('ficha' => array(
            'cpf' => $this->getCpf(),
            'nome' => $this->getNome()
        ));
        return $ficha;
    }
}