<?php

namespace Crm\models;

use Crm\BD;
use Crm\components\Log;
use Crm\components\Notificacao;
use Crm\interfaces\ICadastro;

class UsuarioModel extends BD implements ICadastro {

  public function salvar() {}

  public function registrarLog(Log $log) {}

  public function enviarNotificacao(Notificacao $notificacao) {}
  
}