<?php

namespace App\models;

use App\BD;
use App\components\Log;
use App\components\Notificacao;
use App\interfaces\ICadastro;

class UsuarioModel extends BD implements ICadastro {

  public function salvar() {}

  public function registrarLog(Log $log) {}

  public function enviarNotificacao(Notificacao $notificacao) {}
  
}