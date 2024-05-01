<?php

namespace CrmIsp\models;

use CrmIsp\BD;
use CrmIsp\components\Log;
use CrmIsp\components\Notificacao;
use CrmIsp\interfaces\ICadastro;
use CrmIsp\interfaces\ILog;
use CrmIsp\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao {

  public function salvar() {}

  public function registrarLog(Log $log) {}

  public function  enviarNotificacao(Notificacao $notificacao) {}
  
}