<?php

namespace NoISP\models;

use NoISP\BD;
use NoISP\components\Log;
use NoISP\components\Notificacao;
use NoISP\interfaces\ICadastro;

class ContratoModel extends BD implements ICadastro {

  public function salvar() {}

  public function registrarLog(Log $log) {}

  public function enviarNotificacao(Notificacao $notificacao) {}
  
}