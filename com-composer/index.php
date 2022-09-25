<?php

use App\Dados\Usuario;
use App\Dados\Modulo;

require_once 'vendor/autoload.php';

$u = new Usuario();
$u->cadastrar('Ana Flavia G. Pinheiro ', 2200011 , 'ana@unisuam.com ' );

$g = new Modulo();
$g-> GradeCurricular('Bangu ', 'Noite', 'ADS' ,'Gerência de Projetos de Software');

echo("\r\n");
echo $u->imprimir();
echo("\r\n");
echo("\r\n");
echo $g->imprimir();