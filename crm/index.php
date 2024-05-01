<?php

require __DIR__.'/vendor/autoload.php';

use Crm\models\ContratoModel;
use Crm\models\UsuarioModel;
use Crm\models\LeadModel;

echo '<h2>Sem o Princípio da Segregação de Interface</h2>';

echo '<h3>CRM</h3>';

$contratoModel = new ContratoModel();
$usuarioModel = new UsuarioModel();
$leadModel = new LeadModel();

echo '<pre>';
var_dump($contratoModel);
echo '</pre>';

echo '<pre>';
var_dump($usuarioModel);
echo '</pre>';

echo '<pre>';
var_dump($leadModel);
echo '</pre>';
