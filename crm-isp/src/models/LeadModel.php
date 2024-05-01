<?php

namespace YesISP\models;

use YesISP\BD;
use YesISP\components\Notificacao;
use YesISP\interfaces\ICadastro;
use YesISP\interfaces\INotificacao;

class LeadModel extends BD implements ICadastro, INotificacao {

  public function salvar() {}

  public function  enviarNotificacao(Notificacao $notificacao) {}
  
}