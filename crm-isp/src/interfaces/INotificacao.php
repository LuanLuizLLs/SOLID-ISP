<?php

namespace CrmIsp\interfaces;

use CrmIsp\components\Notificacao;

interface INotificacao {
  
  public function enviarNotificacao(Notificacao $notificacao);

}