<?php

class Modulo
{
    public $unidade, $turno, $horario, $dias, $curso, $modulo;

    public function GradeCurricular ($unidade, $turno, $horario, $dias,$curso, $modulo)
    {
        $this-> unidade = $unidade;
        $this-> turno = $turno;
        $this-> horario = $horario;
        $this-> dias = $dias;
        $this-> curso = $curso;
        $this-> modulo = $modulo;
       
    }

    public function imprimir()
    {
        $mod = "</tr><td><strong> Unidade: </strong></td>";
        $mod.= "<td>" . $this-> unidade . "</td>";

        $mod.= "<td><strong> Turno: </strong></td>";
        $mod.= "<td>" .  $this->turno . "</td><tr>";

        $mod.= "</tr><td><strong> Horario: </strong></td>";
        $mod.= "<td>" .  $this->horario . "</td>";

        $mod.= "<td><strong> Dias: </strong></td>";
        $mod.= "<td>" .  $this->dias . "</td><tr>";

        $mod.= "</tr><td><strong> Curso: </strong></td>";
        $mod.= "<td>" .  $this->curso . "</td><tr>";

        $mod.= "</tr><td><strong> Módulo:  </strong></td>";
        $mod.= "<td>" .  $this->modulo . "</td>";
        

        return   $mod;
    }
}