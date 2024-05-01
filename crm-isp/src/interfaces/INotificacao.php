<?php

namespace YesISP\interfaces;

use YesISP\components\Notificacao;

interface INotificacao {
  
  public function enviarNotificacao(Notificacao $notificacao);

}