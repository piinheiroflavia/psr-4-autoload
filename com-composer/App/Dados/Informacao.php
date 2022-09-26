<?php

namespace App\Dados;

class Informacao
{
    public $cr, $ac, $preConclusao;

    public function infoConhecimento($cr, $ac, $preConclusao )
    {
        $this-> cr= $cr;
        $this->ac = $ac;
        $this-> preConclusao = $preConclusao;
    }

    public function imprimir()
    {
        $info = "<table>";
        $info.= "</tr><td><strong>Coeficiente de rendimento: </strong></td>";
        $info.= "<td>" . $this->cr . "</td>";

        $info.= "</tr><td><strong>Atividades complementares: : </strong></td>";
        $info.= "<td>" . $this->ac . "</td><tr>";

        $info.= "</tr><td><strong>Previsão de Conclusão: </strong></td>";
        $info.= "<td>" . $this->preConclusao . "</td>";

        return $info;
    }
}