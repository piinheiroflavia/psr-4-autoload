<?php

class Usuario
{
    public $nome, $idade, $email, $telefone;

    public function Cadastrar($nome, $matricula, $email, $telefone )
    {
        $this-> nome = $nome;
        $this->matricula = $matricula;
        $this-> email = $email;
        $this->telefone = $telefone;

    }

    public function imprimir()
    {
        $matricula = "<br>" ."<h2>Dados da Matrícula<h2>";

        $matricula.= "<table>";
        $matricula.= "<td><strong> Nome: </strong></td>";
        $matricula.= "<td>" . $this-> nome . "</td>";

        $matricula.= "<td><strong> Matrícula: </strong></td>";
        $matricula.= "<td>" . $this->matricula . "</td><tr>";

        $matricula.= "</tr><td><strong> Email: </strong></td>";
        $matricula.= "<td>" . $this->email . "</td>";

        $matricula.= "<td><strong> Telefone: </strong></td>";
        $matricula.= "<td>" . $this->telefone . "</td><tr>";



        return $matricula;
    }
}