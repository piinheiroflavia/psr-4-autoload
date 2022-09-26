<?php

use App\Dados\Usuario;
use App\Dados\Modulo;
use App\Dados\Informacao;

require_once 'vendor/autoload.php';

$user = new Usuario();
$user->cadastrar('Ana Flavia G Pinheiro ', 2200011 , 'ana@unisuam.com ', '9999-2222'  );

$grad = new Modulo();
$grad-> GradeCurricular('Bangu ', 'Noite', '18:30h-21:10h ' , 'Segunda | Terça | Quinta', 'ADS - Análise e desenvolvimento de Sistemas' ,'Gerência de Projetos de Software');

$if = new Informacao();
$if-> infoConhecimento("10.00", "300.0 / 000.0",  "2022-1 / 2024-1");

echo("\r\n");
echo $user->imprimir();
echo("\r\n");
echo("\r\n");
echo $grad->imprimir();
echo("\r\n");
echo("\r\n");
echo $if->imprimir();