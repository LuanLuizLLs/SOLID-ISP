<?php

namespace App\models;

use App\BD;
use App\components\Log;
use App\components\Notificacao;
use App\interfaces\ICadastro;
use App\interfaces\ILog;
use App\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao {

  public function salvar() {}

  public function registrarLog(Log $log) {}

  public function  enviarNotificacao(Notificacao $notificacao) {}
  
}