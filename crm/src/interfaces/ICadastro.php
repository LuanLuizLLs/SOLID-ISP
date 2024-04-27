<?php

namespace App\interfaces;

use App\components\Log;
use App\components\Notificacao;

interface ICadastro {
  
  public function salvar();

  public function registrarLog(Log $log);

  public function enviarNotificacao(Notificacao $notificacao);

}