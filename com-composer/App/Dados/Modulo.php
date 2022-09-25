<?php

namespace App\Dados;

class modulo
{
    public $unidade, $turno, $curso, $modulo;

    public function GradeCurricular ($unidade, $turno,$curso, $modulo)
    {
        $this-> unidade = $unidade;
        $this-> turno = $turno;
        $this-> curso = $curso;
        $this-> modulo = $modulo;
    }

    public function imprimir()
    {
        $m = 'Unidade: ' . $this-> unidade . ' | ';
        $m.= 'Turno: ' . $this-> turno . ' | ';
        $m.= 'Curso: ' . $this-> curso . ' | ';
        $m.= 'Módulo: ' . $this-> modulo;

        return $m;
    }
}