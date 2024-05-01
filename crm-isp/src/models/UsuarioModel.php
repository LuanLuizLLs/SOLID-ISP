<?php

namespace YesISP\models;

use YesISP\BD;
use YesISP\components\Log;
use YesISP\components\Notificacao;
use YesISP\interfaces\ICadastro;
use YesISP\interfaces\ILog;
use YesISP\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao {

  public function salvar() {}

  public function registrarLog(Log $log) {}

  public function  enviarNotificacao(Notificacao $notificacao) {}
  
}