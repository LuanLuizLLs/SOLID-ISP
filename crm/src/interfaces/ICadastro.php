<?php

namespace NoISP\interfaces;

use NoISP\components\Log;
use NoISP\components\Notificacao;

interface ICadastro {
  
  public function salvar();

  public function registrarLog(Log $log);

  public function enviarNotificacao(Notificacao $notificacao);

}