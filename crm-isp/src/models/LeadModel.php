<?php

namespace App\models;

use App\BD;
use App\components\Notificacao;
use App\interfaces\ICadastro;
use App\interfaces\INotificacao;

class LeadModel extends BD implements ICadastro, INotificacao {

  public function salvar() {}

  public function  enviarNotificacao(Notificacao $notificacao) {}
  
}