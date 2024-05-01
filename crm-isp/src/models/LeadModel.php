<?php

namespace CrmIsp\models;

use CrmIsp\BD;
use CrmIsp\components\Notificacao;
use CrmIsp\interfaces\ICadastro;
use CrmIsp\interfaces\INotificacao;

class LeadModel extends BD implements ICadastro, INotificacao {

  public function salvar() {}

  public function  enviarNotificacao(Notificacao $notificacao) {}
  
}