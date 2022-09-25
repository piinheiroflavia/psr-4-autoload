<?php

namespace App\Dados;

class usuario
{
    public $nome, $idade, $email;

    public function cadastrar ($nome, $matricula, $email )
    {
        $this-> nome = $nome;
        $this->matricula = $matricula;
        $this-> email = $email;

    }

    public function imprimir()
    {
        $r = 'Nome: ' . $this->nome . ' | ';
        $r.= 'Matricula: ' . $this->matricula . ' | ';
        $r.= 'Email: ' . $this->email;

        return $r;
    }
}