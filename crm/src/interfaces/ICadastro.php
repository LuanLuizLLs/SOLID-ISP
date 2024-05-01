<?php

namespace Crm\interfaces;

use Crm\components\Log;
use Crm\components\Notificacao;

interface ICadastro {
  
  public function salvar();

  public function registrarLog(Log $log);

  public function enviarNotificacao(Notificacao $notificacao);

}