<?php

require __DIR__.'/vendor/autoload.php';

use App\models\ContratoModel;
use App\models\UsuarioModel;
use App\models\LeadModel;

echo '<h2>Com o Princípio da Segregação de Interface</h2>';

echo '<h3>CRM</h3>';

$contratoModel = new ContratoModel();
$usuarioModel = new UsuarioModel();
$leadModel = new LeadModel();

echo '<pre>';
print_r($contratoModel);
echo '</pre>';

echo '<pre>';
print_r($usuarioModel);
echo '</pre>';

echo '<pre>';
print_r($leadModel);
echo '</pre>';
