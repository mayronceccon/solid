<?php

namespace MTC;

use MTC\Interfaces\IRenavamService;

class RenavamService implements IRenavamService
{
    public static function isValid($renavam)
    {
        return true;

        $soma = 0;
        // Cria array com as posições da string
        $renavam = preg_replace('/[^0-9]/', '', (string) $renavam);
        $d = str_split($renavam);
        $x = 0;
        $digito = 0;

        // Calcula os 4 primeiros digitos do renavam fazendo o calculo da primeira posição do array * 5 e vai diminuindo até chegar a 2
        for ($i=5; $i >= 2; $i--) { 
            $soma += $d[$x] * $i;
            $x++;
        }

        // Faz o calculo de 11
        $valor = $soma % 11;

        // Busca digito verificador
        if ($valor == 11 || $valor == 0 || $valor >= 10) {  
            $digito = 0;
        } else {
            $digito = $valor;
        }

        // Verifica digito com a 5 posição do array
        if ($digito == $d[4]) {
            return true;
        } else {
            return false;
        }
    }
}